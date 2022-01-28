<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 CRUD - Edit User Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <form method="post" id="update_user" name="update_user"
          action="<?= site_url('/update') ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select class="input-group" name="gender">
                <option selected hidden value="">Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="email">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="admin" selected>Administrator</option>
                <option value="customer">Client</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block">Save Data</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#update_user").length > 0) {
        $("#update_user").validate({
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
</body>

</html>
