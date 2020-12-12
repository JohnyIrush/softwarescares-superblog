
/**
 * Make the pages
 * responsive
*/
$.getScript('/js/Themes/application/responsive.js', function(){
    $(document).ready(function(){
        const Application = new Responsive('Application');
        Application.fitBrowserHeight();
    });
});

