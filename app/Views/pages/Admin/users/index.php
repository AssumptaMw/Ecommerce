<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="container" style="margin-top: 8rem;">
        <div class="card bg-body rounded">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0">Users</h5>
                    </div>
                </div>
            </div>

            <div class="card-body py-0 border-top">
                <div class="d-flex justify-content-end">
                    <a href="/add_user" class="btn btn-success mb-2 mt-2" >Add User</a>
                </div>

                <div class="mt-3">
                    <table class="table table-bordered" id="users-list" >
                        <thead>
                        <tr>
                            <th>User Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($users): ?>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo $user['user_id']; ?></td>
                                    <td><?php echo $user['first_name']; ?></td>
                                    <td><?php echo $user['last_name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['gender']; ?></td>
                                    <td><?php echo $user['role']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('UserController/fetch_single_data/'.$user['user_id'].'/'.$user['first_name'].'/'.$user['last_name'].'/'.$user['email'].'/'.$user['gender'].'/'.$user['role']);?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('delete/'.$user['user_id']);?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#users-list').DataTable();
    } );
</script>
<?= $this->endSection();?>


