$(document).ready(function() {
    $("#link a").on('click', function(event) {
        event.preventDefault();
        var targetUrl = $(this).attr('href'),
        targetTitle = $(this).attr('title');1
        if ( $(this).attr('href') != '#' ) {
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
            $('#ajax-content').load($(this).attr('href'));
        }
    });    
});