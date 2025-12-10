$(document).ready(function () {
    let draggedElement = null;

    // Mélanger
    function melange() {
        const $images = $('#cartes img');
        const images = $images.toArray();

        for (let i = images.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [images[i], images[j]] = [images[j], images[i]];
        }

        $('#cartes').empty();
        $('.drop-zone').empty();

        images.forEach(img => {
            img.draggable = true;
            $(img).css('opacity', '1');
            $('#cartes').append(img);
        });

        $('#message').text('').removeClass('gagne perdu');
    }

    // Début du drag
    $(document).on('dragstart', 'img', function (e) {
        draggedElement = this;
        $(this).css('opacity', '0.5');
        if (e.originalEvent && e.originalEvent.dataTransfer) {
            e.originalEvent.dataTransfer.effectAllowed = 'move';
        }
    });

    // Fin du drag
    $(document).on('dragend', 'img', function () {
        $(this).css('opacity', '1');
    });

    // Survol des zones
    $(document).on('dragover', '.drop-zone', function (e) {
        e.preventDefault();
        $(this).addClass('over');
    });

    $(document).on('dragleave', '.drop-zone', function () {
        $(this).removeClass('over');
    });

    // Dépôt dans les zones
    $(document).on('drop', '.drop-zone', function (e) {
        e.preventDefault();
        const $zone = $(this);
        $zone.removeClass('over');

        if (!draggedElement) return;

        const $existing = $zone.find('img');
        if ($existing.length > 0) {
            $existing.detach();
            $('#cartes').append($existing);
        }

        const $img = $(draggedElement).detach();
        $zone.append($img);
        draggedElement = null;

        verifierOrdre();
    });

    // Survol de #cartes
    $(document).on('dragover', '#cartes', function (e) {
        e.preventDefault();
    });

    // Retour dans #cartes
    $(document).on('drop', '#cartes', function (e) {
        e.preventDefault();

        if (!draggedElement) return;

        if ($(draggedElement).parent().hasClass('drop-zone')) {
            const $img = $(draggedElement).detach();
            $('#cartes').append($img);
            draggedElement = null;
            verifierOrdre();
        }
    });

    // Vérification
    function verifierOrdre() {
        const $zones = $('.drop-zone');
        let allFilled = true;
        let correct = true;

        $zones.each(function () {
            const $img = $(this).find('img');

            if ($img.length === 0) {
                allFilled = false;
                return false;
            }

            const position = parseInt($(this).attr('data-position'));
            const order = parseInt($img.attr('data-order'));

            if (position !== order) {
                correct = false;
            }
        });

        if (!allFilled) {
            $('#message').text('').removeClass('gagne perdu');
            return;
        }

        if (correct) {
            $('#message').text('Vous avez gagné').removeClass('perdu').addClass('gagne');
        } else {
            $('#message').text('Vous avez perdu').removeClass('gagne').addClass('perdu');
        }
    }

    $('#melanger').on('click', melange);
    melange();
});
