//utilisateurs depuis l'API
async function fetchUsers() {
    try {
        const response = await fetch('users.php');
        if (!response.ok) {
            throw new Error('Erreur lors de la récupération des données');
        }
        const users = await response.json();
        return users;
    } catch (error) {
        console.error('Erreur:', error);
        return [];
    }
}

//affiche les utilisateurs
function displayUsers(users) {
    const tbody = document.getElementById('usersTableBody');
    tbody.innerHTML = ''; // Vider le tableau

    users.forEach(user => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${user.id}</td>
            <td>${user.nom}</td>
            <td>${user.prenom}</td>
            <td>${user.email}</td>
        `;
        tbody.appendChild(row);
    });
}

//mettre à jour
async function updateTable() {
    const users = await fetchUsers();
    displayUsers(users);
}

//bouton Update
document.addEventListener('DOMContentLoaded', () => {
    const updateButton = document.getElementById('updateButton');
    updateButton.addEventListener('click', updateTable);
});
