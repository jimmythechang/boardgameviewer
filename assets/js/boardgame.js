$(document).ready(function() {
    bindEditHovers();
});

function bindEditHovers() {
    // Show the Edit button for the game title if the user hovers
    // over the div.
    $('#gameNameContainer').hover(
        function()
        {
            $('#gameNameContainer .editButton').fadeIn('fast');
        },
        function()
        {
            $('#gameNameContainer .editButton').stop().fadeOut('fast');
        }
    );

    $('#gameDescriptionContainer').hover(
        function()
        {
            $('#gameDescriptionContainer .editButton').fadeIn('fast');
        },
        function()
        {
            $('#gameDescriptionContainer .editButton').stop().fadeOut('fast');
        }
    );
}