<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<?php
$edit_url = current_url(true);
//echo $edit_url . '<br/>';
$my_url = new \CodeIgniter\HTTP\URI($edit_url);
$segments = $my_url->getSegments();
$subcategory_id = $segments[3];
$subcategory_name = $segments[4];
$category = $segments[5];
$string_category = '';
if($category == 1){
    $string_category .= 'Men';
}elseif($category == 2){
    $string_category .= 'Women';
}elseif($category == 3){
    $string_category .= 'Children';
}else{
    $string_category .= 'Pets';
}
?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?= base_url("/SubCategoryController/edit_validation")?>">
            <h2 class="col-md-10" style="text-align: center">Edit Sub-category</h2>
            <div class="form-group col-md-6">
                <label for="inputSubcatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Sub-category Name*</label>
                <input type="text" name="subcategory_name" class="form-control" value="<?= $subcategory_obj['subcategory_name'];?>">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Category*</label>
                <select name="category" id="category" class="form-control">
                    <option selected hidden value="">Choose Category</option>
                    <option value="Men" <?= $string_category==='Men' ? "selected" : ''?>>Men</option>
                    <option value="Women" <?= $string_category==='Women' ? "selected" : ''?>>Women</option>
                    <option value="Children" <?= $string_category==='Children' ? "selected" : ''?>>Children</option>
                    <option value="Pets" <?= $string_category==='Pets' ? "selected" : ''?>>Pets</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" name="subcategory_id" value="'<?= $subcategory_obj['subcategory_id'];?>">
                <button type="submit" class="btn btn-primary btn-block">Update Changes</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection();?>