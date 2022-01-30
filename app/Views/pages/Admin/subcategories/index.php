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
                    <a href="/add_subcat" class="btn btn-success mb-2 mt-2" >Add Subcategory</a>
                </div>

                <div class="mt-3">
                    <table class="table table-bordered" id="users-list" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Categories</th>
<!--                            <th>No. of Products</th>-->
<!--                            <th>Purchases</th>-->
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($subcategory): ?>
                        <?php foreach($subcategory as $subcategory): ?>
                        <tr>
                            <td><?php echo $subcategory['subcategory_id']; ?></td>
                            <td><?php echo $subcategory['subcategory_name']; ?></td>
                            <td><?php echo $subcategory['category']; ?></td>
                            <td>
                                <a href="<?php echo base_url('SubCategoryController/fetch_single_data/'.$subcategory['subcategory_id'].'/'.$subcategory['subcategory_name'].'/'.$subcategory['category']);?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="<?php echo base_url('delete/'.$subcategory['subcategory_id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
