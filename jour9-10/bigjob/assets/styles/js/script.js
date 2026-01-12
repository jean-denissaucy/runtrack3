//  stockage local
class StorageManager {
    static USERS_KEY = 'laplateforme_users';
    static REQUESTS_KEY = 'laplateforme_requests';
    static CURRENT_USER_KEY = 'laplateforme_current_user';

    static getUsers() {
        const users = localStorage.getItem(this.USERS_KEY);
        return users ? JSON.parse(users) : [];
    }

    static saveUsers(users) {
        localStorage.setItem(this.USERS_KEY, JSON.stringify(users));
    }

    static getRequests() {
        const requests = localStorage.getItem(this.REQUESTS_KEY);
        return requests ? JSON.parse(requests) : [];
    }

    static saveRequests(requests) {
        localStorage.setItem(this.REQUESTS_KEY, JSON.stringify(requests));
    }

    static getCurrentUser() {
        const user = localStorage.getItem(this.CURRENT_USER_KEY);
        return user ? JSON.parse(user) : null;
    }

    static setCurrentUser(user) {
        localStorage.setItem(this.CURRENT_USER_KEY, JSON.stringify(user));
    }

    static logout() {
        localStorage.removeItem(this.CURRENT_USER_KEY);
    }

    static addUser(user) {
        const users = this.getUsers();
        users.push(user);
        this.saveUsers(users);
    }

    static updateUser(email, updates) {
        const users = this.getUsers();
        const index = users.findIndex(u => u.email === email);
        if (index !== -1) {
            users[index] = { ...users[index], ...updates };
            this.saveUsers(users);
            return users[index];
        }
        return null;
    }

    static addRequest(request) {
        const requests = this.getRequests();
        request.id = Date.now();
        requests.push(request);
        this.saveRequests(requests);
        return request;
    }

    static updateRequest(id, updates) {
        const requests = this.getRequests();
        const index = requests.findIndex(r => r.id === id);
        if (index !== -1) {
            requests[index] = { ...requests[index], ...updates };
            this.saveRequests(requests);
            return requests[index];
        }
        return null;
    }

    static deleteRequest(id) {
        const requests = this.getRequests();
        const filtered = requests.filter(r => r.id !== id);
        this.saveRequests(filtered);
    }

    static initializeDemo() {
        // Créer un utilisateur et admin
        const users = this.getUsers();
        if (users.length === 0) {
            this.addUser({
                email: 'admin@laplateforme.io',
                password: 'Admin123',
                firstName: 'Admin',
                lastName: 'Plateforme',
                role: 'moderator',
                createdAt: new Date().toISOString()
            });
            this.addUser({
                email: 'user@laplateforme.io',
                password: 'User123',
                firstName: 'Jean',
                lastName: 'Dupont',
                role: 'user',
                createdAt: new Date().toISOString()
            });
        }
    }
}


// UTILITAIRES//
function showMessage(elementId, message, type = 'success') {
    const element = document.getElementById(elementId);
    if (element) {
        element.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                <i class="bi bi-${type === 'success' ? 'check-circle' : 'exclamation-triangle'}-fill"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
    }
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function formatDateTime(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('fr-FR', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

function getStatusBadge(status) {
    const badges = {
        'pending': '<span class="badge bg-warning"><i class="bi bi-clock"></i> En attente</span>',
        'approved': '<span class="badge bg-success"><i class="bi bi-check-circle"></i> Approuvée</span>',
        'rejected': '<span class="badge bg-danger"><i class="bi bi-x-circle"></i> Refusée</span>'
    };
    return badges[status] || '';
}

function validateEmail(email) {
    return email.endsWith('@laplateforme.io');
}

function validatePassword(password) {
    //8 caractères, 1 majuscule, 1 minuscule, 1 chiffre
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    return regex.test(password);
}

function checkAuth() {
    const currentUser = StorageManager.getCurrentUser();
    if (!currentUser) {
        window.location.href = 'login.html';
        return null;
    }
    return currentUser;
}

function checkModeratorAuth() {
    const currentUser = checkAuth();
    if (currentUser && currentUser.role !== 'moderator') {
        window.location.href = 'calendar.html';
        return null;
    }
    return currentUser;
}


// LOGIN/REGISTER//

if (window.location.pathname.includes('login.html') || window.location.pathname.includes('register.html')) {
    // Si déjà connecté, rediriger
    const currentUser = StorageManager.getCurrentUser();
    if (currentUser) {
        window.location.href = 'calendar.html';
    }

    // Initialiser les données
    StorageManager.initializeDemo();

    // Gestion du formulaire de connexion
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const email = document.getElementById('loginEmail').value.trim();
            const password = document.getElementById('loginPassword').value;

            const users = StorageManager.getUsers();
            const user = users.find(u => u.email === email && u.password === password);

            if (user) {
                StorageManager.setCurrentUser(user);
                showMessage('loginMessage', 'Connexion réussie ! Redirection...', 'success');
                setTimeout(() => {
                    window.location.href = 'calendar.html';
                }, 1000);
            } else {
                showMessage('loginMessage', 'Email ou mot de passe incorrect', 'danger');
            }
        });
    }

    // Gestion du formulaire d'inscription
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const firstName = document.getElementById('registerFirstName').value.trim();
            const lastName = document.getElementById('registerLastName').value.trim();
            const email = document.getElementById('registerEmail').value.trim();
            const password = document.getElementById('registerPassword').value;
            const passwordConfirm = document.getElementById('registerPasswordConfirm')?.value;

            // Validation de l'email
            if (!validateEmail(email)) {
                showMessage('registerMessage', 'Seuls les emails @laplateforme.io sont autorisés', 'danger');
                return;
            }

            // Validation du mot de passe
            if (!validatePassword(password)) {
                showMessage('registerMessage', 'Le mot de passe doit contenir au moins 8 caractères, 1 majuscule, 1 minuscule et 1 chiffre', 'danger');
                return;
            }

            // Confirmation du mot de passe
            if (passwordConfirm && password !== passwordConfirm) {
                showMessage('registerMessage', 'Les mots de passe ne correspondent pas', 'danger');
                return;
            }

            // Vérifier si l'email existe déjà
            const users = StorageManager.getUsers();
            if (users.find(u => u.email === email)) {
                showMessage('registerMessage', 'Cet email est déjà utilisé', 'danger');
                return;
            }

            // Créer le nouvel utilisateur
            const newUser = {
                email,
                password,
                firstName,
                lastName,
                role: 'user',
                createdAt: new Date().toISOString()
            };

            StorageManager.addUser(newUser);
            StorageManager.setCurrentUser(newUser);

            showMessage('registerMessage', 'Inscription réussie ! Redirection...', 'success');
            setTimeout(() => {
                window.location.href = 'calendar.html';
            }, 1000);
        });
    }
}


// PAGE CALENDAR//

if (window.location.pathname.includes('calendar.html')) {
    const currentUser = checkAuth();
    {

        // nom de l'utilisateur
        const userNameEl = document.getElementById('userName');
        if (userNameEl) {
            userNameEl.textContent = `${currentUser.firstName} ${currentUser.lastName}`;
        }

        //lien backoffice si modérateur
        if (currentUser.role === 'moderator') {
            const moderatorLink = document.getElementById('moderatorLink');
            if (moderatorLink) {
                moderatorLink.style.display = 'block';
            }
        }

        // déconnexion
        const logoutBtn = document.getElementById('logoutBtn');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', () => {
                StorageManager.logout();
                window.location.href = 'login.html';
            });
        }

        //calendrier
        let currentDate = new Date();
        let selectedFilter = '';

        // statistiques
        function updateStats() {
            const requests = StorageManager.getRequests();
            const userRequests = requests.filter(r => r.userId === currentUser.email);

            const pending = userRequests.filter(r => r.status === 'pending').length;
            const approved = userRequests.filter(r => r.status === 'approved').length;
            const rejected = userRequests.filter(r => r.status === 'rejected').length;
            const total = userRequests.length;

            document.getElementById('pendingCount').textContent = pending;
            document.getElementById('approvedCount').textContent = approved;
            document.getElementById('rejectedCount').textContent = rejected;
            document.getElementById('totalCount').textContent = total;
        }

        //générer le calendrier
        function generateCalendar() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();

            //mois et l'année
            const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
                'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;

            // jours du mois
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startDayOfWeek = firstDay.getDay();

            // Récupérer les demandes du mois
            const requests = StorageManager.getRequests();
            const userRequests = requests.filter(r => r.userId === currentUser.email);

            // tableau du calendrier
            let html = '<table class="table table-bordered table-sm">';
            html += '<thead><tr>';
            const dayNames = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
            dayNames.forEach(day => {
                html += `<th class="text-center">${day}</th>`;
            });
            html += '</tr></thead><tbody><tr>';

            // Jours vides avant le début du mois
            for (let i = 0; i < startDayOfWeek; i++) {
                html += '<td></td>';
            }

            // Jours du mois
            for (let day = 1; day <= daysInMonth; day++) {
                const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                const dayRequests = userRequests.filter(r => r.date === dateStr);

                let cellClass = '';
                let cellContent = day;

                if (dayRequests.length > 0) {
                    const request = dayRequests[0];
                    if (request.status === 'pending') {
                        cellClass = 'bg-warning bg-opacity-25';
                        cellContent += '<br><small class="badge bg-warning">•</small>';
                    } else if (request.status === 'approved') {
                        cellClass = 'bg-success bg-opacity-25';
                        cellContent += '<br><small class="badge bg-success">•</small>';
                    } else if (request.status === 'rejected') {
                        cellClass = 'bg-danger bg-opacity-25';
                        cellContent += '<br><small class="badge bg-danger">•</small>';
                    }
                }

                html += `<td class="${cellClass} text-center p-2">${cellContent}</td>`;

                // Nouvelle ligne chaque dimanche
                if ((startDayOfWeek + day) % 7 === 0) {
                    html += '</tr><tr>';
                }
            }

            html += '</tr></tbody></table>';
            document.getElementById('calendar').innerHTML = html;
        }

        // afficher les demandes
        function displayRequests() {
            const requests = StorageManager.getRequests();
            let userRequests = requests.filter(r => r.userId === currentUser.email);

            // Appliquer le filtre
            if (selectedFilter) {
                userRequests = userRequests.filter(r => r.status === selectedFilter);
            }

            // date décroissante
            userRequests.sort((a, b) => new Date(b.date) - new Date(a.date));

            const requestsList = document.getElementById('requestsList');
            if (userRequests.length === 0) {
                requestsList.innerHTML = `
                <div class="text-center text-muted py-4">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-3">Aucune demande pour le moment</p>
                </div>
            `;
                return;
            }

            let html = '<div class="list-group">';
            userRequests.forEach(request => {
                const isPast = new Date(request.date) < new Date();
                html += `
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="mb-1">
                                <i class="bi bi-calendar-event"></i> ${formatDate(request.date)}
                            </h6>
                            <p class="mb-1 small text-muted">
                                Demandée le ${formatDateTime(request.createdAt)}
                            </p>
                            ${request.reason ? `<p class="mb-1 small">${request.reason}</p>` : ''}
                            ${request.moderatorComment ? `
                                <div class="alert alert-info alert-sm mt-2 mb-0 p-2">
                                    <small><strong>Commentaire modérateur:</strong> ${request.moderatorComment}</small>
                                </div>
                            ` : ''}
                        </div>
                        <div class="text-end">
                            ${getStatusBadge(request.status)}
                            ${!isPast && request.status === 'pending' ? `
                                <div class="btn-group mt-2" role="group">
                                    <button class="btn btn-sm btn-outline-primary edit-request" data-id="${request.id}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger delete-request" data-id="${request.id}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `;
            });
            html += '</div>';
            requestsList.innerHTML = html;

            // événements sur les boutons
            document.querySelectorAll('.edit-request').forEach(btn => {
                btn.addEventListener('click', () => editRequest(parseInt(btn.dataset.id)));
            });

            document.querySelectorAll('.delete-request').forEach(btn => {
                btn.addEventListener('click', () => {
                    if (confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')) {
                        StorageManager.deleteRequest(parseInt(btn.dataset.id));
                        refreshData();
                    }
                });
            });
        }

        // rafraîchir les données
        function refreshData() {
            updateStats();
            generateCalendar();
            displayRequests();
        }

        // calendrier
        document.getElementById('prevMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar();
        });

        // Filtres
        document.querySelectorAll('input[name="filterStatus"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                selectedFilter = e.target.value;
                displayRequests();
            });
        });

        // Modal de création/édition de demande
        const requestModal = new bootstrap.Modal(document.getElementById('requestModal'));
        const requestForm = document.getElementById('requestForm');

        // Définir la date minimum
        const requestDateInput = document.getElementById('requestDate');
        requestDateInput.min = new Date().toISOString().split('T')[0];

        document.getElementById('createRequestBtn').addEventListener('click', () => {
            document.getElementById('requestModalTitle').innerHTML = '<i class="bi bi-plus-circle"></i> Nouvelle demande de présence';
            document.getElementById('requestId').value = '';
            document.getElementById('requestDate').value = '';
            document.getElementById('requestReason').value = '';
            requestModal.show();
        });

        function editRequest(id) {
            const requests = StorageManager.getRequests();
            const request = requests.find(r => r.id === id);
            if (request) {
                document.getElementById('requestModalTitle').innerHTML = '<i class="bi bi-pencil"></i> Modifier la demande';
                document.getElementById('requestId').value = request.id;
                document.getElementById('requestDate').value = request.date;
                document.getElementById('requestReason').value = request.reason || '';
                requestModal.show();
            }
        }

        document.getElementById('saveRequestBtn').addEventListener('click', () => {
            const id = document.getElementById('requestId').value;
            const date = document.getElementById('requestDate').value;
            const reason = document.getElementById('requestReason').value;

            if (!date) {
                alert('Veuillez sélectionner une date');
                return;
            }

            //  date n'est pas passée
            if (new Date(date) < new Date().setHours(0, 0, 0, 0)) {
                alert('Vous ne pouvez pas sélectionner une date passée');
                return;
            }

            if (id) {
                // Mise à jour
                StorageManager.updateRequest(parseInt(id), { date, reason });
            } else {
                // Création
                StorageManager.addRequest({
                    userId: currentUser.email,
                    userName: `${currentUser.firstName} ${currentUser.lastName}`,
                    date,
                    reason,
                    status: 'pending',
                    createdAt: new Date().toISOString()
                });
            }

            requestModal.hide();
            refreshData();
        });

        // Initialisation
        refreshData();
    }
}

// PAGE BACKOFFICE//

if (window.location.pathname.includes('backoffice.html')) {
    const currentUser = checkModeratorAuth();
    if (currentUser) {

        // Afficher le nom de l'utilisateur
        const userNameEl = document.getElementById('userName');
        if (userNameEl) {
            userNameEl.textContent = `${currentUser.firstName} ${currentUser.lastName}`;
        }

        // Gestion de la déconnexion
        const logoutBtn = document.getElementById('logoutBtn');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', () => {
                StorageManager.logout();
                window.location.href = 'login.html';
            });
        }

        let currentFilter = {
            status: 'pending',
            date: '',
            user: ''
        };

        // Fonction pour afficher les statistiques
        function updateStats() {
            const requests = StorageManager.getRequests();
            const today = new Date().toISOString().split('T')[0];

            const pending = requests.filter(r => r.status === 'pending').length;
            const approvedToday = requests.filter(r =>
                r.status === 'approved' &&
                r.updatedAt &&
                r.updatedAt.startsWith(today)
            ).length;
            const rejectedToday = requests.filter(r =>
                r.status === 'rejected' &&
                r.updatedAt &&
                r.updatedAt.startsWith(today)
            ).length;
            const total = requests.length;

            document.getElementById('pendingCount').textContent = pending;
            document.getElementById('approvedCount').textContent = approvedToday;
            document.getElementById('rejectedCount').textContent = rejectedToday;
            document.getElementById('totalCount').textContent = total;
        }

        // Fonction pour afficher les demandes
        function displayRequests() {
            let requests = StorageManager.getRequests();

            // Appliquer les filtres
            if (currentFilter.status) {
                requests = requests.filter(r => r.status === currentFilter.status);
            }
            if (currentFilter.date) {
                requests = requests.filter(r => r.date === currentFilter.date);
            }
            if (currentFilter.user) {
                const search = currentFilter.user.toLowerCase();
                requests = requests.filter(r =>
                    r.userName.toLowerCase().includes(search) ||
                    r.userId.toLowerCase().includes(search)
                );
            }

            // Trier par date de demande décroissante
            requests.sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));

            const tbody = document.getElementById('requestsTableBody');
            const noRequestsMsg = document.getElementById('noRequestsMessage');

            if (requests.length === 0) {
                tbody.innerHTML = '';
                noRequestsMsg.style.display = 'block';
                return;
            }

            noRequestsMsg.style.display = 'none';
            let html = '';
            requests.forEach(request => {
                html += `
                <tr>
                    <td>${request.id}</td>
                    <td>${request.userName}</td>
                    <td>${request.userId}</td>
                    <td><strong>${formatDate(request.date)}</strong></td>
                    <td><small>${formatDateTime(request.createdAt)}</small></td>
                    <td>${getStatusBadge(request.status)}</td>
                    <td>
                        ${request.status === 'pending' ? `
                            <button class="btn btn-sm btn-primary moderate-request" data-id="${request.id}">
                                <i class="bi bi-clipboard-check"></i> Modérer
                            </button>
                        ` : `
                            <button class="btn btn-sm btn-outline-secondary view-request" data-id="${request.id}">
                                <i class="bi bi-eye"></i> Voir
                            </button>
                        `}
                    </td>
                </tr>
            `;
            });
            tbody.innerHTML = html;

            // Ajouter les événements
            document.querySelectorAll('.moderate-request').forEach(btn => {
                btn.addEventListener('click', () => openModerateModal(parseInt(btn.dataset.id)));
            });

            document.querySelectorAll('.view-request').forEach(btn => {
                btn.addEventListener('click', () => viewRequest(parseInt(btn.dataset.id)));
            });
        }

        // Filtres
        document.getElementById('applyFilters').addEventListener('click', () => {
            currentFilter.status = document.getElementById('filterStatus').value;
            currentFilter.date = document.getElementById('filterDate').value;
            currentFilter.user = document.getElementById('filterUser').value;
            displayRequests();
        });

        document.getElementById('resetFilters').addEventListener('click', () => {
            document.getElementById('filterStatus').value = 'pending';
            document.getElementById('filterDate').value = '';
            document.getElementById('filterUser').value = '';
            currentFilter = { status: 'pending', date: '', user: '' };
            displayRequests();
        });

        document.getElementById('refreshBtn').addEventListener('click', () => {
            refreshData();
        });

        // Modal de modération
        const moderateModal = new bootstrap.Modal(document.getElementById('moderateModal'));

        function openModerateModal(id) {
            const requests = StorageManager.getRequests();
            const request = requests.find(r => r.id === id);
            if (!request) return;

            document.getElementById('moderationRequestId').value = request.id;
            document.getElementById('moderationComment').value = '';

            const infoDiv = document.getElementById('moderateRequestInfo');
            infoDiv.innerHTML = `
            <div class="card">
                <div class="card-body">
                    <h6><i class="bi bi-person"></i> ${request.userName}</h6>
                    <p class="mb-1"><small class="text-muted">${request.userId}</small></p>
                    <p class="mb-1"><strong>Date:</strong> ${formatDate(request.date)}</p>
                    ${request.reason ? `<p class="mb-0"><strong>Raison:</strong> ${request.reason}</p>` : ''}
                </div>
            </div>
        `;

            moderateModal.show();
        }

        document.getElementById('approveRequestBtn').addEventListener('click', () => {
            const id = parseInt(document.getElementById('moderationRequestId').value);
            const comment = document.getElementById('moderationComment').value;

            StorageManager.updateRequest(id, {
                status: 'approved',
                moderatorComment: comment,
                moderatedBy: currentUser.email,
                updatedAt: new Date().toISOString()
            });

            moderateModal.hide();
            refreshData();
        });

        document.getElementById('rejectRequestBtn').addEventListener('click', () => {
            const id = parseInt(document.getElementById('moderationRequestId').value);
            const comment = document.getElementById('moderationComment').value;

            if (!comment.trim()) {
                alert('Un commentaire est obligatoire pour refuser une demande');
                return;
            }

            StorageManager.updateRequest(id, {
                status: 'rejected',
                moderatorComment: comment,
                moderatedBy: currentUser.email,
                updatedAt: new Date().toISOString()
            });

            moderateModal.hide();
            refreshData();
        });

        // Modal de visualisation
        const viewRequestModal = new bootstrap.Modal(document.getElementById('viewRequestModal'));

        function viewRequest(id) {
            const requests = StorageManager.getRequests();
            const request = requests.find(r => r.id === id);
            if (!request) return;

            const contentDiv = document.getElementById('requestDetailsContent');
            contentDiv.innerHTML = `
            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong><i class="bi bi-person"></i> Utilisateur:</strong><br>
                    ${request.userName}<br>
                    <small class="text-muted">${request.userId}</small>
                </div>
                <div class="col-md-6 mb-3">
                    <strong><i class="bi bi-calendar-event"></i> Date de présence:</strong><br>
                    ${formatDate(request.date)}
                </div>
                <div class="col-12 mb-3">
                    <strong><i class="bi bi-clock"></i> Date de demande:</strong><br>
                    ${formatDateTime(request.createdAt)}
                </div>
                ${request.reason ? `
                    <div class="col-12 mb-3">
                        <strong><i class="bi bi-chat-left-text"></i> Raison:</strong><br>
                        ${request.reason}
                    </div>
                ` : ''}
                <div class="col-12 mb-3">
                    <strong><i class="bi bi-info-circle"></i> Statut:</strong><br>
                    ${getStatusBadge(request.status)}
                </div>
                ${request.moderatorComment ? `
                    <div class="col-12 mb-3">
                        <div class="alert alert-info">
                            <strong><i class="bi bi-chat-left-text"></i> Commentaire du modérateur:</strong><br>
                            ${request.moderatorComment}
                        </div>
                    </div>
                ` : ''}
                ${request.moderatedBy ? `
                    <div class="col-12">
                        <small class="text-muted">
                            <i class="bi bi-person-badge"></i> Modéré par: ${request.moderatedBy}<br>
                            ${request.updatedAt ? `Le ${formatDateTime(request.updatedAt)}` : ''}
                        </small>
                    </div>
                ` : ''}
            </div>
        `;

            viewRequestModal.show();
        }

        // Fonction pour rafraîchir les données
        function refreshData() {
            updateStats();
            displayRequests();
        }

        // Initialisation
        refreshData();
    }
}

// Initialisation globale
console.log('BigJob Application Ready!');
