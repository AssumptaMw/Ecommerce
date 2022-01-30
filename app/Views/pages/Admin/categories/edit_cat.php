<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?= base_url("/CategoryController/edit_validation")?>">
            <h2 class="col-md-10" style="text-align: center">Edit Category</h2>
            <div class="form-group col-md-6">
                <label for="inputCatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Category Name</label>
                <input type="text" name="catname" class="form-control" value="<?= $category_obj['category_name']; ?>">
            </div>

            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" name="category_id" value="<?= $category_obj['category_id'];?>">
                <button type="submit" class="btn btn-primary btn-block">Update Changes</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection();?>