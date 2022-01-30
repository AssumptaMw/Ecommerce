<?= $this->extend('/dashboard/dashboardStart');?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="container mt-4">
        <div class="card bg-body rounded">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0">Products</h5>
                    </div>
                </div>
            </div>

            <div class="card-body py-0 border-top">
                <div class="d-flex justify-content-end">
                    <a href="/add_prod" class="btn btn-success mb-2 mt-2" >Add Product</a>
                </div>

                <div class="mt-3">
                    <table class="table table-bordered" id="users-list" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Created by</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($product): ?>
                        <?php foreach($product as $product): ?>
                        <tr>
                            <td><?php echo $product['product_id']; ?></td>
                            <td><?php echo $product['product_name']; ?></td>
                            <td><?php echo $product['category_name']; ?></td>
                            <td><?php echo $product['created_by']; ?></td>
                            <td><?php echo $product['unit_price']; ?></td>
                            <td><?php echo $product['available_quantity']; ?></td>
                            <td>
                                <a href="<?= route_to('admin.products.edit', $product->id) ?>" class="btn btn-sm btn-primary rounded-circle shadow"><i class="fas fa-pen"></i></a>
                                <a href="<?php echo base_url('delete/'.$product['product_id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
<?= $this->extend('/dashboard/dashboardEnd');?>


