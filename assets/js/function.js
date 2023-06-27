jQuery(function () {
    jQuery(".l-toggle-btn").click(function () {
        jQuery("body").toggleClass("open");
    });
    jQuery("#mask").click(function () {
        jQuery("body").toggleClass("open");
    });
});