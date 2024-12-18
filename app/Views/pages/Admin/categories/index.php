<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="container" style="margin-top: 8rem;">
        <div class="card bg-body rounded">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0">Categories</h5>
                    </div>
                </div>
            </div>

            <div class="card-body py-0 border-top">
                <div class="d-flex justify-content-end">
                    <a href="/add_cat" class="btn btn-success mb-2 mt-2" >Add Category</a>
                </div>

                <div class="mt-3">
                    <table class="table table-bordered" id="users-list" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
<!--                            <th>No. of Subcategories</th>-->
<!--                            <th>No. of Products</th>-->
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($category): ?>
                            <?php foreach($category as $category): ?>
                                <tr>
                                    <td><?php echo $category['category_id']; ?></td>
                                    <td><?php echo $category['category_name']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('CategoryController/fetch_single_data/'.$category['category_id'].'/'.$category['category_name']);?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="<?php echo base_url('delete/'.$category['category_id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
