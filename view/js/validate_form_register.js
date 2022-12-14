//Các thuộc tính trong required lấy theo name, chỉ có function .validate() là lấy theo id của form

$(function(){
    $('#form_register').validate({
        rules:{
            fullname_register: "required",
            email_register: {required: true, email: true},
            phone_number_register: {required: true, number: true, minlength: 10, maxlength: 10},
            password_register: {required: true, minlength: 5},
            password_repeat_register: {required: true, minlength: 5, equalTo: "#password_register"}
        },
        messages:{
            fullname_register: "Bạn chưa nhập vào họ tên của bạn",
            email_register: "Hộp thư điện tử không hợp lệ",
            phone_number_register:{
                number: "Vui lòng nhập số điện thoại hợp lệ",
                required: "Bạn chưa nhập vào số điện thoại",
                minlength: "Số điện thoại không hợp lệ, phải có ít nhất 10 ký tự",
                maxlength: "Số điện thoại có tối đa 10 kí tự"
            },
            password_register:{
                required: "Bạn chưa nhập vào mật khẩu",
                minlength: "Mật khẩu phải có ít nhất 5 ký tự"
            },
            password_repeat_register:{
                required: "Bạn chưa nhập vào mật khẩu",
                minlength: "Mật khẩu phải có ít nhất 5 ký tự",
                equalTo: "Mật khẩu không trùng khớp với mật khẩu đã nhập"
            },
        },
        errorElement: "div",	
        errorPlacement: function(error, element){
            error.addClass("invalid-feedback");
            if(element.prop("type")==="checkbox"){
                error.insertAfter(element.siblings("label"));
            }else{
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass){
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass){
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    $('#form_info_customer_cart').validate({
        rules:{
            fullname_customer_cart: "required",
            email_customer_cart: {required: true, email: true},
            phone_number_customer_cart: {required: true, number: true, minlength:10, maxlength: 10},
            address_customer_cart: {required: true, minlength: 20}
        },
        messages:{
            fullname_customer_cart: "Bạn chưa nhập vào họ tên của bạn",
            email_customer_cart: "Hộp thư điện tử không hợp lệ",
            phone_number_customer_cart: {
                number: "Vui lòng nhập số điện thoại hợp lệ",
                required: "Bạn chưa nhập vào số điện thoại",
                minlength: "Số điện thoại không hợp lệ, phải có ít nhất 10 ký tự",
                maxlength: "Số điện thoại có tối đa 10 kí tự"
            },
            address_customer_cart: "Bạn chưa nhập đầy đủ địa chỉ đầy đủ",
        },
        errorElement: "div",	
        errorPlacement: function(error, element){
            error.addClass("invalid-feedback");
            if(element.prop("type")==="checkbox"){
                error.insertAfter(element.siblings("label"));
            }else{
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass){
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass){
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

    $('#form_change_password').validate({
        rules:{
            current_password_change_password: "required",
            new_password_change_password: {required: true, minlength: 5},
            repeat_password_change_password: {required: true, minlength: 5, equalTo: "#new_password_change_password"}
        },
        messages:{
            current_password_change_password: "Vui lòng nhập mật khẩu hiện tại",
            new_password_change_password:{
                required: "Bạn chưa nhập vào mật khẩu",
                minlength: "Mật khẩu phải có ít nhất 5 ký tự"
            },
            repeat_password_change_password:{
                required: "Bạn chưa nhập vào mật khẩu",
                minlength: "Mật khẩu phải có ít nhất 5 ký tự",
                equalTo: "Mật khẩu không trùng khớp với mật khẩu mới đã nhập"
            },
        },
        errorElement: "div",	
        errorPlacement: function(error, element){
            error.addClass("invalid-feedback");
            if(element.prop("type")==="checkbox"){
                error.insertAfter(element.siblings("label"));
            }else{
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass){
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass){
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
    
});

console.log("Hello");

