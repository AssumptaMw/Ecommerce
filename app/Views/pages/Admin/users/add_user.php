<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/UserController/store'); ?>">
            <h2 class="col-md-10" style="text-align: center">Add a New User</h2>
            <div class="form-group col-md-6">
                <label for="inputFname" class="form-label"><i class="icon-prepend fa fa-user"></i>&nbsp;First Name</label>
                <input type="text" name="fname" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="inputLname" class="form-label"><i class="icon-prepend fa fa-user"></i>&nbsp;Last Name</label>
                <input type="text" name="lname" class="form-control">
            </div>

            <div class="form-group col-md-8">
                <label for="inputEmail" class="form-label"><i class="icon-prepend fa fa-envelope"></i>&nbsp;Email</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label>Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option selected hidden value="">Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option selected hidden value="">Choose Role</option>
                    <option value="admin">Administrator</option>
                    <option value="client">Client</option>
                </select>
            </div>

            <div class="form-group">
                <!--                <label>Password</label>-->
                <input type="password" name="password" class="form-control" value="123456" hidden>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Add User</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#add_create").length > 0) {
        $("#add_create").validate({
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
                },
                role: {
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
                },
                role: {
                    required: "Please choose a role"
                }
            },
        })
    }
</script>
<?= $this->endSection();?>
