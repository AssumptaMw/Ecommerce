<?= $this->extend('Layouts/guest') ?>
<?= $this->section('content');?>

<div class="container">

    <form action="<?=route_to('login')?>" method="POST" class="login-email" id="loginForm">
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>

        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" id="password" required>
        </div>
        <div class="input-group">
            <button type="submit" name="login_button" class="btn" value="submit" id="login">Login</button>
        </div>
        <p class="login-register-text">Don't have an account? <a href="<?=route_to('register')?>">Register Here</a>.</p>
    </form>
</div>


<script>
    $(function () {
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

            },
            submitHandler: function (form) {
                const data = {};
                console.log($(form).serializeArray())
                $(form).serializeArray().map(function(input) {
                    return data[input.name] = input.value;
                });
                console.log(data)

                $.ajax({
                    data: data,
                    url: '/login',
                    method: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if(response.status) {
                            window.history.pushState({}, '', '/');
                            $('body').html(response.view)
                        } else {
                            alert(response.message)
                        }
                    },
                    error: error => {
                        console.log(error)
                    },
                    complete: () => {

                    }
                })
            }
        });
    });
</script>
<?= $this->endSection();?>









