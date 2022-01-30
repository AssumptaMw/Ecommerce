<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/ProductController/store'); ?>">
            <h2 style="text-align: center">Add a New User</h2>
            <div class="form-group col-md-6">
                <label for="inputProdname" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label class="form-label" for="sub_category_id">Category</label>
                <select name="subcategory_id" id="subcategory_id" class="form-control">
                    <option selected hidden value="">Choose a category </option>
                    <?php foreach($products as $product): ?>
                    <optgroup label="<?= $category->name ?>">
                        <?php foreach($category->subCategories as $subCategory): ?>
                            <?php $selected = isset($product) && $product->subcategory_id == $subCategory->id ? 'selected' : '' ?>
                            <option <?= $selected ?>
                                value="<?= $subCategory->id ?>"><?= $subCategory->name ?></option>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
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
                <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp">
            </div>

            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                    required: "Please choose a category",
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

