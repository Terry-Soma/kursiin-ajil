jQuery(document).ready(function() {

    jQuery('.form-wizard-wrapper').find('.form-wizard-link').click(function(){
        jQuery('.form-wizard-link').removeClass('active');
        var innerWidth = jQuery(this).innerWidth();
        jQuery(this).addClass('active');
        var position = jQuery(this).position();
        jQuery('.form-wizardmove-button').css({"left": position.left, "width": innerWidth});
        var attr = jQuery(this).attr('data-attr');
        parentFieldset.find('.wizard-required').each(function() {
            var thisValue = jQuery(this).val();

            if (thisValue == "") {
                jQuery(this).siblings(".wizard-form-error").slideDown();
                nextWizardStep = false;
            } else {
                jQuery(this).siblings(".wizard-form-error").slideUp();
            }
        });
        jQuery('.form-wizard-content').each(function(){
            if (jQuery(this).attr('data-tab-content') == attr) {
                jQuery(this).addClass('show');
            }else{
                jQuery(this).removeClass('show');
            }
        });
    });
    //copied info2 js next button
    // jQuery('.form-wizard-next-btn').click(function() {
    //     var parentFieldset = jQuery(this).parents('.wizard-fieldset');
    //     var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    //     var next = jQuery(this);
    //     var nextWizardStep = true;
    //     parentFieldset.find('.wizard-required').each(function() {
    //         var thisValue = jQuery(this).val();

    //         if (thisValue == "") {
    //             jQuery(this).siblings(".wizard-form-error").slideDown();
    //             nextWizardStep = false;
    //         } else {
    //             jQuery(this).siblings(".wizard-form-error").slideUp();
    //         }
    //     });
    //     if (nextWizardStep) {
    //         next.parents('.wizard-fieldset').removeClass("show", "400");
    //         currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', "400");
    //         next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
    //         jQuery(document).find('.wizard-fieldset').each(function() {
    //             if (jQuery(this).hasClass('show')) {
    //                 var formAtrr = jQuery(this).attr('data-tab-content');
    //                 jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function() {
    //                     if (jQuery(this).attr('data-attr') == formAtrr) {
    //                         jQuery(this).addClass('active');
    //                         var innerWidth = jQuery(this).innerWidth();
    //                         var position = jQuery(this).position();
    //                         jQuery(document).find('.form-wizard-step-move').css({ "left": position.left, "width": innerWidth });
    //                     } else {
    //                         jQuery(this).removeClass('active');
    //                     }
    //                 });
    //             }
    //         });
    //     }
    // });
    jQuery('.form-wizard-next-btn').click(function() {
        var next = jQuery(this);
        next.parents('.form-wizard-content').removeClass('show');
        next.parents('.form-wizard-content').next('.form-wizard-content').addClass('show');
        jQuery(document).find('.form-wizard-content').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-wrapper li a').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizardmove-button').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    jQuery('.form-wizard-previous-btn').click(function() {
        var prev =jQuery(this);
        prev.parents('.form-wizard-content').removeClass('show');
        prev.parents('.form-wizard-content').prev('.form-wizard-content').addClass('show');
        jQuery(document).find('.form-wizard-content').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-wrapper li a').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizardmove-button').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
});