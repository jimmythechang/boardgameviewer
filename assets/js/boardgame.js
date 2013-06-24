$(document).ready(function() 
{
    bindEditHovers();
    bindEditClicks();
    bindSaveClicks();
});

// Displays an Edit button when an editable div is hovered over.

function bindEditHovers()
{
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

// Displays the editable sections when the Edit button is clicked.

function bindEditClicks()
{
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

function bindSaveClicks()
{
    $('.saveButton').click(
        function()
        {
            var id = $('#boardgameId').val();
            var field = $(this).siblings('.field').val();
            var text = $(this).siblings('.editText').val();

            var that = $(this);

            // Asynchronously save the new information for the
            // edited field.
            
            $.ajax({
                    url: "/boardgame/save/" + id,
                    type: "POST",
                    data: {
                            field: field,
                            text: text
                          }
                   }
            ).done( function()
                    {
                        // Hide the input area, and show the original
                        // text sections with updated values.
                        
                        var editable = $(that).parents('.editable');
                        $('.text', editable).text(text).show();
                        $('.editSection', editable).addClass('hidden');

                        $(editable).removeClass('editing');
                    }
            ).fail( function(data)
                    {
                        console.log(data);
                        alert("Unable to update boardgame!");
                    }
            );
        }
    );
}