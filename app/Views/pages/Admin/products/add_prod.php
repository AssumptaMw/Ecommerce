<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/ProductController/store'); ?>">
            <h2 class="col-md-10" style="text-align: center">Add a New Product</h2>
            <div class="form-group col-md-6">
                <label for="inputProdname" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label class="form-label" for="sub_category_id">Category</label>
                <select name="subcategory_id" id="subcategory_id" class="form-control">
                    <option selected hidden value="">Choose Category</option>
                    <option value="Men-Formal">Men-Formal</option>
                    <option value="Men-Casual">Men-Casual</option>
                    <option value="Men-Sportswear">Men-Sportswear</option>
                    <option value="Women-Formal">Women-Formal</option>
                    <option value="Women-Casual">Women-Casual</option>
                    <option value="Women-Sportswear">Women-Sportswear</option>
                    <option value="Children-Formal">Children-Formal</option>
                    <option value="Children-Casual">Children-Casual</option>
                    <option value="Children-Sportswear">Children-Sportswear</option>
                    <option value="Pets-Cats">Pets-Cats</option>
                    <option value="Pets-Dogs">Pets-Dogs</option>
                    <option value="Pets-Other">Pets-Other</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputProdprice" class="form-label">Price</label>
                <input type="number" name="product_price" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="inputProdstock" class="form-label">Stock</label>
                <input type="number" name="product_stock" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="product_image" id="image" aria-describedby="emailHelp">
            </div>

            <div class="form-group col-md-10">
                <label for="description">Description</label>
                <textarea class="form-control" name="product_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Add Product</button>
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
                product_name: {
                    required: true,
                    minlength: 3
                },
                subcategory_id: {
                    required: true,
                    // minlength: 3
                },
                price: {
                    required: true,
                    minlength: 2
                },
                stock: {
                    required: true,
                    minlength: 2
                },
                image: {
                    required: true,
                    image: true
                },
                description: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {
                product_name: {
                    required: "Please enter the product name",
                    minlength: "Name should be at least 3 characters"
                },
                subcategory_id: {
                    required: "Please choose a subcategory",
                },
                price: {
                    required: "Please enter price ",
                    minlength: "Price should be at least 3 characters"
                },
                stock: {
                    required: "Please enter number of available stock",
                    minlength: "Stock should be at least 3 characters"
                },
                image: {
                    required: "Please choose an image"
                },
                description: {
                    required: "Please enter the category description",
                    minlength: "Name should be at least 3 characters"
                }
            },
        })
    }
</script>
<?= $this->endSection();?>


