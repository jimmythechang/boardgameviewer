$(document).ready(function() {
    bindEditHovers();
    bindEditClicks();
});

// Displays an Edit button when an editable div is hovered over.

function bindEditHovers() {
    $('.editable').hover(
        function()
        {
            if ($(this).hasClass('editing')) {
                return;
            }
            
            $('.editButton', this).fadeIn('fast');
            $('.editButton', this).removeClass('hidden');
        },
        function()
        {
            $('.editButton', this).stop().fadeOut('fast');
            $('.editButton', this).addClass('hidden');
        }
    );
}

function bindEditClicks() {
    $('.editButton').click(
        function()
        {
            var editable = $(this).parent();
            var text = $('.text', editable).text();

            // Indicate that we're currently editing the div,
            // so that the Edit button isn't displayed
            // again on hover.
            $(editable).addClass('editing');

            $(this).hide().addClass('hidden');
            $('.text', editable).hide();

            $('.editSection', editable).removeClass('hidden');
            $('.editText', editable).val(text);
        }
    );
}

function bindSaveClicks() {
    $('.saveButton').click(
        function()
        {
            
        }
    );
}