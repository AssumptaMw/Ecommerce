<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>
<?php

$edit_url = current_url(true);
//echo $edit_url . '<br/>';
$my_url = new \CodeIgniter\HTTP\URI($edit_url);
$segments = $my_url->getSegments();
$user_id = $segments[3];
$fname = $segments[4];
$lname = $segments[5];
$email = $segments[6];
$gender = $segments[7];
$role = $segments[8];
$string_role = '';
if($role == 1){
    $string_role .= 'Administrator';
}else{
    $string_role .= 'Client';
}
//else{
//    $string_role .= 'API';
//}
//print($user_id);
//print_r($segments);
?>
<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/UserController/update'); ?>">
            <h2 style="text-align: center">Edit User</h2>
            <div class="form-group col-md-6">
                <label for="inputFname" class="form-label"><i class="icon-prepend fa fa-user"></i>&nbsp;First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $fname;?>">
            </div>

            <div class="form-group col-md-6">
                <label for="inputLname" class="form-label"><i class="icon-prepend fa fa-user"></i>&nbsp;Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $lname;?>">
            </div>

            <div class="form-group col-md-8">
                <label for="inputEmail" class="form-label"><i class="icon-prepend fa fa-envelope"></i>&nbsp;Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
            </div>

            <div class="form-group col-md-6">
                <label>Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option selected hidden value="">Choose Gender</option>
                    <option value="Male" <?=$gender==='Male' ? "selected" : ''?>>Male</option>
                    <option value="Female" <?=$gender==='Female' ? "selected" : ''?>>Female</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option selected hidden value="">Choose Role</option>
                    <option value="admin" <?=$string_role==='Administrator' ? "selected" : ''?>>Administrator</option>
                    <option value="customer" <?=$string_role==='Client' ? "selected" : ''?>>Client</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Changes</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection();?>
