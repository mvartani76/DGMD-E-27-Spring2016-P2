jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(event) {
        jQuery(this).toggleClass('active-toggle');
        jQuery('.menu ul').toggleClass('active-toggle');
 
        event.preventDefault();
    });
});