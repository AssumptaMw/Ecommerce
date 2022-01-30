<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<?php
$edit_url = current_url(true);
//echo $edit_url . '<br/>';
$my_url = new \CodeIgniter\HTTP\URI($edit_url);
$segments = $my_url->getSegments();
$product_id = $segments[3];
$product_name = $segments[4];
$subcategory = $segments[5];
$string_subcategory = '';
if($subcategory == 1){
    $string_subcategory .= 'Men-Formal';
}elseif($subcategory == 2){
    $string_subcategory .= 'Men-Casual';
}elseif($subcategory == 3){
    $string_subcategory .= 'Men-Sportswear';
}elseif($subcategory == 4){
    $string_subcategory .= 'Women-Formal';
}elseif($subcategory == 5){
    $string_subcategory .= 'Women-Casual';
}elseif($subcategory == 6){
    $string_subcategory .= 'Women-Sportswear';
}elseif($subcategory == 7){
    $string_subcategory .= 'Children-Formal';
}elseif($subcategory == 8){
    $string_subcategory .= 'Children-Casual';
}elseif($subcategory == 9){
    $string_subcategory .= 'Children-Sportswear';
}elseif($subcategory == 10){
    $string_subcategory .= 'Pets-Cats';
}elseif($subcategory == 11){
    $string_subcategory .= 'Pets-Dogs';
}else{
    $string_subcategory .= 'Pets-Other';
}

$price = $segments[6];
$stock = $segments[7];
$image = $segments[8];
?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/ProductController/edit_validation'); ?>">
            <h2 class="col-md-10" style="text-align: center">Add a New Product</h2>
            <div class="form-group col-md-6">
                <label for="inputProdname" class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" value="<?= $product_obj['product_name']; ?>">
            </div>

            <div class="form-group col-md-6">
                <label class="form-label" for="sub_category_id">Category</label>
                <select name="subcategory" id="subcategory" class="form-control">
                    <option selected hidden value="">Choose Category</option>
                    <option value="Men-Formal" <?=$string_subcategory==='Men-Formal' ? "selected" : ''?>>Men-Formal</option>
                    <option value="Men-Casual" <?=$string_subcategory==='Men-Casual' ? "selected" : ''?>>Men-Casual</option>
                    <option value="Men-Sportswear" <?=$string_subcategory==='Men-Sportswear' ? "selected" : ''?>>Men-Sportswear</option>
                    <option value="Women-Formal" <?=$string_subcategory==='Women-Formal' ? "selected" : ''?>>Women-Formal</option>
                    <option value="Women-Casual" <?=$string_subcategory==='Women-Casual' ? "selected" : ''?>>Women-Casual</option>
                    <option value="Women-Sportswear" <?=$string_subcategory==='Women-Sportswear' ? "selected" : ''?>>Women-Sportswear</option>
                    <option value="Children-Formal" <?=$string_subcategory==='Children-Formal' ? "selected" : ''?>>Children-Formal</option>
                    <option value="Children-Casual" <?=$string_subcategory==='Children-Casual' ? "selected" : ''?>>Children-Casual</option>
                    <option value="Children-Sportswear" <?=$string_subcategory==='Children-Sportswear' ? "selected" : ''?>>Children-Sportswear</option>
                    <option value="Pets-Cats" <?=$string_subcategory==='Pets-Cats' ? "selected" : ''?>>Pets-Cats</option>
                    <option value="Pets-Dogs" <?=$string_subcategory==='Pets-Dogs' ? "selected" : ''?>>Pets-Dogs</option>
                    <option value="Pets-Other" <?=$string_subcategory==='Pets-Other' ? "selected" : ''?>>Pets-Other</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputProdprice" class="form-label">Price</label>
                <input type="number" name="product_price" class="form-control" <?= $product_obj['product_price']; ?>>
            </div>

            <div class="form-group col-md-6">
                <label for="inputProdstock" class="form-label">Stock</label>
                <input type="number" name="product_stock" class="form-control" <?= $product_obj['product_stock']; ?>>
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp" <?= $product_obj['product_image']; ?>>
            </div>

            <div class="form-group col-md-10">
                <label for="description">Description</label>
                <textarea class="form-control" name="product_desc" id="exampleFormControlTextarea1" rows="3" <?= $product_obj['product_desc']; ?>></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Edit Product</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection();?>
