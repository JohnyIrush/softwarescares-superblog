
/**
 * Make the pages
 * responsive
*/
$.getScript('/superblog/js/Themes/Library/responsive.js', function(){
    $(document).ready(function(){
        const CMS  = new Responsive('CMS');
        CMS.fitBrowserHeight();
    });
});

