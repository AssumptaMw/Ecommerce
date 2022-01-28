<?= $this->extend('Layouts/guest') ?>
<?= $this->section('content'); ?>

<div class="container">
    <form action="<?php echo base_url();?>/SignupController/store" method="POST" class="login-email" id="signupForm">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Create Account</p>
        <div class="input-group">
            <input type="text" placeholder="First Name" name="fname" id="fname">
        </div>
        <div class="input-group">
            <input type="text" placeholder="Last Name" name="lname" id="lname">
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" id="email">
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" id="password">
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
        </div>
        <div>

            <select class="input-group" name="gender">
                <option selected hidden value="">Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="input-group">
            <button name="submit" class="btn" value="submit">Register</button>
        </div>
        <p class="login-register-text">Already have an account? <a href="<?= route_to('login') ?>">Login Here</a>.</p>
    </form>
</div>

<script>
    $(function () {
        $("#signupForm").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                fname: {
                    required: true,
                    minlength: 3
                },
                lname: {
                    required: true,
                    minlength: 3
                },
                password: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                gender: {
                    required: true
                }
            },
            messages: {
                fname: {
                    required: "Please enter your first name",
                    minlength: "Name should be at least 3 characters"
                },
                lname: {
                    required: "Please enter your last name",
                    minlength: "Name should be at least 3 characters"
                },
                email: {
                    email: "Insert email in the format: abc@domain.tld"
                },
                password: {
                    required: "Please enter a password",
                    minlength: "Password should be at least 6 characters"
                },
                gender: {
                    required: "Please choose a gender"
                }
            }
            // submitHandler: function (form) {
            //     const data = {};
            //     // console.log($(form).serializeArray())
            //     $(form).serializeArray().map(function(input) {
            //         return data[input.name] = input.value;
            //     });
            //     // console.log(data)
            //
            //     $.ajax({
            //         data: data,
            //         url: '/register',
            //         method: 'POST',
            //         dataType: 'json',
            //         success: function(response) {
            //             if(response.status) {
            //                 window.history.pushState({}, '', '/login');
            //                 $('body').html(response.view)
            //             } else {
            //                 alert(response.message)
            //             }
            //         },
            //         error: error => {
            //             console.log(error)
            //         }
            //     })
            // }
        });
    });
</script>
<!--bymyz@mailinator.com-->
<?= $this->endSection(); ?>
