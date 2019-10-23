/**
 * Created by Komy on 11/14/2016 AD.
 */
/**
 * Created by Komy on 11/14/2016 AD.
 */
/**
 * Created by Komy on 5/9/2016 AD.
 */
var FormValidation = function () {

    // validation using icons
    var handleValidation2 = function() {
        // for more info visit the official plugin documentation:
        // http://docs.jquery.com/Plugins/Validation

        var form2 = $('#stock_order_form');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);
        //
        jQuery.validator.addMethod("currency", function(value, element) {
            return this.optional(element) || /^\d{0,8}(\.\d{0,2})?$/i.test(value);
        }, "You must include two decimal places");

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input
            rules: {
                material_id: {
                    required: true
                },
                stock_id: {
                    required: true
                },
                movingWay_id: {
                    required: true
                },
                price: {
                    required: true,
                    currency: true,
                    number: true,
                    min: 0
                },
                count: {
                    required: true,
                    number: true,
                    integer: true,
                    min: 0
                },
                stock_from: {
                    required: true
                }
                // url: {
                //     required: true,
                //     url: true
                // },
                // number: {
                //     required: true,
                //     number: true
                // },
                // digits: {
                //     required: true,
                //     digits: true
                // },
                // creditcard: {
                //     required: true,
                //     creditcard: true
                // },
                // password: {
                //     minlength: 6,
                //     required: true
                // },
                // password_confirmation: {
                //     minlength: 6,
                //     required: true,
                //     equalTo: "#password"
                // }
                //password: "required",
                //password_confirmation: {
                //    equalTo: "#password"
                //}
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
                success2.hide();
                error2.show();
                App.scrollTo(error2, -200);
            },

            errorPlacement: function (error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight

            },

            success: function (label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },

            submitHandler: function (form) {
                success2.show();
                error2.hide();
                form[0].submit(); // submit the form
            }
        });

    }

    //// advance validation
    //var handleValidation3 = function() {
    //    // for more info visit the official plugin documentation:
    //    // http://docs.jquery.com/Plugins/Validation
    //
    //        var form3 = $('#form_sample_3');
    //        var error3 = $('.alert-danger', form3);
    //        var success3 = $('.alert-success', form3);
    //
    //        //IMPORTANT: update CKEDITOR textarea with actual content before submit
    //        form3.on('submit', function() {
    //            for(var instanceName in CKEDITOR.instances) {
    //                CKEDITOR.instances[instanceName].updateElement();
    //            }
    //        })
    //
    //        form3.validate({
    //            errorElement: 'span', //default input error message container
    //            errorClass: 'help-block help-block-error', // default input error message class
    //            focusInvalid: false, // do not focus the last invalid input
    //            ignore: "", // validate all fields including form hidden input
    //            rules: {
    //                name: {
    //                    minlength: 2,
    //                    required: true
    //                },
    //                email: {
    //                    required: true,
    //                    email: true
    //                },
    //                options1: {
    //                    required: true
    //                },
    //                options2: {
    //                    required: true
    //                },
    //                select2tags: {
    //                    required: true
    //                },
    //                datepicker: {
    //                    required: true
    //                },
    //                occupation: {
    //                    minlength: 5,
    //                },
    //                membership: {
    //                    required: true
    //                },
    //                service: {
    //                    required: true,
    //                    minlength: 2
    //                },
    //                markdown: {
    //                    required: true
    //                },
    //                editor1: {
    //                    required: true
    //                },
    //                editor2: {
    //                    required: true
    //                }
    //            },
    //
    //            messages: { // custom messages for radio buttons and checkboxes
    //                membership: {
    //                    required: "Please select a Membership type"
    //                },
    //                service: {
    //                    required: "Please select  at least 2 types of Service",
    //                    minlength: jQuery.validator.format("Please select  at least {0} types of Service")
    //                }
    //            },
    //
    //            errorPlacement: function (error, element) { // render error placement for each input type
    //                if (element.parent(".input-group").size() > 0) {
    //                    error.insertAfter(element.parent(".input-group"));
    //                } else if (element.attr("data-error-container")) {
    //                    error.appendTo(element.attr("data-error-container"));
    //                } else if (element.parents('.radio-list').size() > 0) {
    //                    error.appendTo(element.parents('.radio-list').attr("data-error-container"));
    //                } else if (element.parents('.radio-inline').size() > 0) {
    //                    error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
    //                } else if (element.parents('.checkbox-list').size() > 0) {
    //                    error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
    //                } else if (element.parents('.checkbox-inline').size() > 0) {
    //                    error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
    //                } else {
    //                    error.insertAfter(element); // for other inputs, just perform default behavior
    //                }
    //            },
    //
    //            invalidHandler: function (event, validator) { //display error alert on form submit
    //                success3.hide();
    //                error3.show();
    //                App.scrollTo(error3, -200);
    //            },
    //
    //            highlight: function (element) { // hightlight error inputs
    //               $(element)
    //                    .closest('.form-group').addClass('has-error'); // set error class to the control group
    //            },
    //
    //            unhighlight: function (element) { // revert the change done by hightlight
    //                $(element)
    //                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
    //            },
    //
    //            success: function (label) {
    //                label
    //                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
    //            },
    //
    //            submitHandler: function (form) {
    //                success3.show();
    //                error3.hide();
    //                form[0].submit(); // submit the form
    //            }
    //
    //        });
    //
    //         //apply validation on select2 dropdown value change, this only needed for chosen dropdown integration.
    //        $('.select2me', form3).change(function () {
    //            form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
    //        });
    //
    //        //initialize datepicker
    //        $('.date-picker').datepicker({
    //            rtl: App.isRTL(),
    //            autoclose: true
    //        });
    //        $('.date-picker .form-control').change(function() {
    //            form3.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
    //        })
    //}

    // var handleWysihtml5 = function() {
    //     if (!jQuery().wysihtml5) {
    //
    //         return;
    //     }
    //
    //     if ($('.wysihtml5').size() > 0) {
    //         $('.wysihtml5').wysihtml5({
    //             "stylesheets": ["../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
    //         });
    //     }
    // }

    return {
        //main function to initiate the module
        init: function () {

            // handleWysihtml5();
            // handleValidation1();
            handleValidation2();
            //handleValidation3();

        }

    };

}();

jQuery(document).ready(function() {
    FormValidation.init();
});


