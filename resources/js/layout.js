$(document).ready(function() {
    $('#js-navbar-toggle').click(function () {
        if($('#nav_b').hasClass('ativo')) {
            $('#nav_b').css('flex-direction', 'row');
            $('#nav_b').css('height', '120px');
            $('.nav-item').css('display', 'none');
            $('#nav_b').removeClass('ativo');
        } else {
            $('#nav_b').css('flex-direction', 'column');
            $('#nav_b').css('height', 'auto');
            $('.nav-item').css('display', 'block');
            $('#nav_b').addClass('ativo');
        }
    });
});