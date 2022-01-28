$().ready(function (){
    $("#loginForm").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            password:{
                required: true,
                minlength: 6
            },
            email:{
                required: true,
                email:true
            }
        },
        messages: {
            password: {
                required: "Please enter a password",
                minlength: "Password should be at least 6 characters"
            },
            email: {
                email: "Insert email in the format: abc@domain.tld"
            }

        }
    });
});