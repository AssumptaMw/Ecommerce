<?= $this->extend('Layouts/guest') ?>
<?= $this->section('content');?>

<div class="container">
		<form action="<?=route_to('register')?>" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Create Account</p>
			<div class="input-group">
				<input type="text" placeholder="First Name" name="fname" id="fname"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Last Name" name="lname" id="lname" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="username"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" id="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password"  required>
            </div>
			<div>

				<select class="input-group" name="gender" required>
					<option selected hidden value="">Choose Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
            <!-- <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword"  required>
			</div> -->
			<div class="input-group">
				<button name="submit" class="btn" value="submit">Register</button>
			</div>
			<p class="login-register-text">Already have an account? <a href="<?=route_to('login')?>">Login Here</a>.</p>
		</form>
	</div>

<?= $this->endSection();?>