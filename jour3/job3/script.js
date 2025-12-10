$(document).ready(function () {
    console.log('=== SCRIPT CHARGÉ ===');
    console.log('jQuery version:', $.fn.jquery);

    let draggedElement = null;

    // Attendre un peu que le DOM soit complètement chargé
    setTimeout(function () {
        console.log('Nombre images dans #cartes:', $('#cartes img').length);
        console.log('Nombre de .drop-slot:', $('.drop-slot').length);

        // Forcer draggable sur toutes les images
        $('#cartes img').each(function () {
            this.draggable = true;
            console.log('Image data-order:', $(this).attr('data-order'));
        });
    }, 100);

    // Mélange des images
    function melange() {
        console.log('>>> MÉLANGE APPELÉ');

        const $images = $('#cartes img');
        console.log('Images trouvées:', $images.length);

        const images = $images.toArray();

        // Fisher-Yates shuffle
        for (let i = images.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [images[i], images[j]] = [images[j], images[i]];
        }

        $('#cartes').empty();
        $('.drop-slot').empty();

        images.forEach(img => {
            img.draggable = true;
            $(img).css('opacity', '1');
            $('#cartes').append(img);
        });

        $('#message').text('').removeClass('gagne perdu');
        console.log('>>> MÉLANGE TERMINÉ');
    }

    // Drag start - VERSION SIMPLIFIÉE
    $(document).on('dragstart', 'img', function (e) {
        console.log('>>> DRAGSTART');
        draggedElement = this;
        $(this).css('opacity', '0.4');

        if (e.originalEvent && e.originalEvent.dataTransfer) {
            e.originalEvent.dataTransfer.effectAllowed = 'move';
            e.originalEvent.dataTransfer.setData('text/html', '');
        }
    });

    // Drag end
    $(document).on('dragend', 'img', function () {
        console.log('>>> DRAGEND');
        $(this).css('opacity', '1');
    });

    // Drop sur slot
    $(document).on('dragover', '.drop-slot', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).css('background', '#f0f0f0');
    });

    $(document).on('dragleave', '.drop-slot', function (e) {
        $(this).css('background', '');
    });

    $(document).on('drop', '.drop-slot', function (e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('>>> DROP SUR SLOT');

        $(this).css('background', '');

        if (!draggedElement) {
            console.log('Pas de draggedElement');
            return;
        }

        const $slot = $(this);
        const $existing = $slot.find('img');

        // Retourner l'image existante
        if ($existing.length > 0) {
            console.log('Retour image existante dans #cartes');
            $existing.detach();
            $('#cartes').append($existing);
        }

        // Placer la nouvelle image
        const $dragged = $(draggedElement);
        $dragged.detach();
        $slot.append($dragged);
        console.log('Image placée dans slot');

        draggedElement = null;

        verifierOrdre();
    });

    // Drop sur cartes
    $(document).on('dragover', '#cartes', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $(document).on('drop', '#cartes', function (e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('>>> DROP SUR #CARTES');

        if (!draggedElement) return;

        if ($(draggedElement).parent().hasClass('drop-slot')) {
            console.log('Retour image dans #cartes depuis slot');
            const $img = $(draggedElement);
            $img.detach();
            $('#cartes').append($img);
            draggedElement = null;
            verifierOrdre();
        }
    });

    // Vérification
    function verifierOrdre() {
        console.log('>>> VÉRIFICATION');

        const $slots = $('.drop-slot');
        let allFilled = true;
        let correct = true;

        $slots.each(function () {
            const $img = $(this).find('img');

            if ($img.length === 0) {
                allFilled = false;
                return false;
            }

            const position = parseInt($(this).attr('data-position'));
            const order = parseInt($img.attr('data-order'));

            console.log('Slot position:', position, '/ Image order:', order);

            if (position !== order) {
                correct = false;
            }
        });

        if (!allFilled) {
            console.log('Pas tous remplis');
            $('#message').text('').removeClass('gagne perdu');
            return;
        }

        if (correct) {
            console.log('✓✓✓ GAGNÉ ✓✓✓');
            $('#message').text('Vous avez gagné').removeClass('perdu').addClass('gagne');
        } else {
            console.log('✗✗✗ PERDU ✗✗✗');
            $('#message').text('Vous avez perdu').removeClass('gagne').addClass('perdu');
        }
    }

    // Bouton mélanger
    $('#melanger').on('click', function () {
        console.log('BOUTON CLIQUÉ');
        melange();
    });

    // Initialisation
    melange();
});
