/* -------------------------------------------------------------------
 * Plugin Name           : Conformy - PHP Ajax Modern Contact Form
 * Author Name           : Yucel Yilmaz
 * Author URI            : https://codecanyon.net/user/aip_theme3434
 * Created Date          : 28 January 2020
 * Last Update           : 07 March 2020
 * Version               : 1.0.3
 * File Name             : main.js
------------------------------------------------------------------- */

/* -------------------------------------------------------------------
 [Table of contents]
 * 01.Copyright
 * 02.Contact Form
*/
(function($) {
    "use strict";

    // Call all ready functions
    conformy_copyright(),
    conformy_contactForm();

})(window.jQuery);


/* ------------------------------------------------------------------- */
/* 01.Copyright
/* ------------------------------------------------------------------- */
function conformy_copyright() {
    "use-strict";

    // Variables
    var fullYearCopyright = $('#fullYearCopyright'),
        getFullYearDate = new Date().getFullYear();

    fullYearCopyright.text(getFullYearDate);
}
/* ------------------------------------------------------------------- */
/* 02.Contact Form
/* ------------------------------------------------------------------- */
 function conformy_contactForm() {
    "use-strict";

    //  Validate Input Variables
    var contactEmail    = $("#contactEmail"),
        contactPhone    = $("#contactPhone");

    // Email Validation
    contactEmail.on("keyup", function() {
        var emailInputValue  = $(this).val().trim();


        if (emailInputValue.length > 0) {
            let validate = $(this).conformyEmailValidate();

            if (!validate === true) {
                $(this).parent().find("span").removeClass("success").addClass("error");
            } else {
                $(this).parent().find("span").removeClass("error").addClass("success");
            }
        }else{
            $(this).parent().find("span").removeAttr("class");  
        }
    });

    // Phone Validation
    contactPhone.on("keyup", function() {
        var phoneInputValue  = $(this).val().trim();


        if (phoneInputValue.length > 0) {
            let validate = $(this).conformyPhoneValidate();

            if (!validate === true) {
                $(this).parent().find("span").removeClass("success").addClass("error");
            } else {
                $(this).parent().find("span").removeClass("error").addClass("success");
            }
        }else{
            $(this).parent().find("span").removeAttr("class");
            $(this).parent().find("span").addClass("error");  
        }
    });

    // Form Control Validate
    $(".form-control:not('#contactEmail,#contactPhone')").on("keyup", function() {
        var formInputValue  = $(this).val().trim();

        if (formInputValue.length > 0) {
            $(this).parent().find("span").removeClass("error").addClass("success");
        }else {
            $(this).parent().find("span").removeAttr("class");
            $(this).parent().find("span").addClass("error");
        }
    });

    // Terms Popup Varaibles
    var termsToggle         = $('#termsToggle'),
        termsClose          = $('#termsClose'),
        termsAgree          = $('#termsAgree');
        termsPopup          = $('#termsPopup');

    // Terms Popup Open 
    termsToggle.on("click",function(event){
        termsPopup.addClass("active");
        event.preventDefault();
    });

    // Terms Popup Close
    termsClose.on("click",function(event){
        termsPopup.removeClass("active");
        event.preventDefault();
    });

    // Terms Agree
    termsAgree.on("click",function(event){
        termsPopup.removeClass("active");
        event.preventDefault();
        $("#termsCheckBox").prop("checked",true);
    });

    // Succes, Danger Popup Variables
    var successToggle        = $('#successToggleBtn'),
        dangerToggle         = $('#dangerToggleBtn'),
        dangerPopup          = $('#dangerPopup'),
        successPopup         = $('#successPopup');

    // Succes Popup Toggle 
    successToggle.on("click",function(event){
        successPopup.toggleClass("active");
        event.preventDefault();
    });

    // Danger Popup Toggle 
    dangerToggle.on("click",function(event){
        dangerPopup.toggleClass("active");
        event.preventDefault();
    });

    // Custom Select Box
    var customSelectWrapper   = $('.custom-select-wrapper'),
        customSelectBox       = customSelectWrapper.find('select');
        customSelectBoxOption = customSelectBox.find("option:selected").html(),
        customSelectItems     = $('.select-items'),
        customSelectOptions   = customSelectBox.find("option");

    customSelectWrapper.append('<div class="select-selected"></div>');

    // Append Custom Select Items
    customSelectWrapper.append('<div class="select-items select-hide"></div>');

    customSelectOptions.each(function(i){
        // Variables
        var optionText  = customSelectBox.find("option").eq(i).text();
        
        $(".select-items").append('<div></div>');
        $(".select-items div").eq(i).text(optionText);
    });    

    // Variables 
    var selectedItem         = $('.select-selected'),
        selectItemsDiv       = $(".select-items div"),
        activeSelectIndex    = customSelectBox.prop('selectedIndex');

    // Active Select Value Add Class (same-as-selected)
    selectItemsDiv.eq(activeSelectIndex).addClass("same-as-selected");

    selectedItem.text(customSelectBoxOption);

    // Selected click
    selectedItem.on("click",function(){

        $(this).next().toggleClass("select-hide");
        $(this).toggleClass("select-arrow-active");
    
    });

    // Select Items Click
    selectItemsDiv.on("click",function(){
        // Variables
        var $this               = $(this),
            selectText          = $this.html(),
            selectIndex         = $this.index();

        // Toggle Class
        $this.parent().toggleClass("select-hide");

        selectedItem.toggleClass("select-arrow-active");

        selectedItem.html(selectText);

        selectItemsDiv.removeClass("same-as-selected");

        $this.addClass("same-as-selected");

        customSelectBox.prop('selectedIndex', selectIndex);

    });

    // Contact Form Submit
    $("#contactForm").on("submit", function(event) {
        var $this = $(this),
            $formActionURL = $this.attr("action");

        //  Contact Form Input Value 
        var name          = $("#contactName").val().trim(),
            email         = $("#contactEmail").val().trim(),
            phone         = $("#contactPhone").val().trim(),
            subject       = $("#contactSubject").val().trim(),
            message       = $("#contactMessage").val().trim(),
            termsCheckBox = $("#termsCheckBox").prop("checked");
            validateEmail = $("#contactEmail").conformyEmailValidate(),
            validatePhone = $("#contactPhone").conformyPhoneValidate();

        if (name =='' || email =='' || phone == '' || subject == '' || message == '') {
            $(this).parent().find("span").addClass("error");
            if($('.empty-form').css("display") == "none"){
                $('.empty-form').stop().slideDown().delay(3000).slideUp();
            }else {
                return false;
            }
        } else if (termsCheckBox == false) {
            if($('.terms-alert').css("display") == "none"){
                $('.terms-alert').stop().slideDown().delay(3000).slideUp();
            }else {
                return false;
            }
        } else if (!validatePhone === true) {
            $("#contactPhone").parent().find("span").removeClass("success").addClass("error");
            if($('.phone-invalid').css("display") == "none"){
                $('.phone-invalid').stop().slideDown().delay(3000).slideUp();
            }else {
                return false;
            }
        } else if (!validateEmail === true) {
            $("#contactEmail").parent().find("span").removeClass("success").addClass("error");
            if($('.email-invalid').css("display") == "none"){
                $('.email-invalid').stop().slideDown().delay(3000).slideUp();
            }else {
                return false;
            }
        } else {
            $this.find(':submit').append('<span class="fas fa-spinner fa-pulse ml-3"></span>');
            $this.find(':submit').attr('disabled','true');
            jQuery.ajax({
                url: $formActionURL,
                data: {
                    contact_name: name,
                    contact_email: email,
                    contact_phone: phone,
                    contact_subject: subject,
                    contact_message: message
                },
                type: "POST",
                success: function(response) {
                    $(".form-control").parent().find("span").removeAttr("class");
                    $("#contactForm")[0].reset();
                    if (response == true) {
                        $(".success-form-popup").addClass("active");
                        $("#contactForm").find(':submit').removeAttr('disabled');
                        $this.find(':submit').find("span").fadeOut();
                    } else {
                        $(".danger-form-popup").addClass("active");
                        $("#contactForm").find(':submit').removeAttr('disabled');
                        $this.find(':submit').find("span").fadeOut();
                        $("#error_message").html(response);
                    }
                }
            });
        }
        event.preventDefault();
    });
}