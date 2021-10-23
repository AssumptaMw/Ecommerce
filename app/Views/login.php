<?= $this->extend('Layouts/guest') ?>
<?= $this->section('content');?>

<div class="container">

    <form action="<?=route_to('login')?>" method="POST" class="login-email">
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

<?= $this->endSection();?>





