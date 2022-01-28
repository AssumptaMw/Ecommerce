<?php //include ("../../Layout/header.php"); ?>

<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="">
            <h2 style="text-align: center">Add Category</h2>
            <div class="form-group col-md-6">
                <label for="inputCatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Category Name</label>
                <input type="text" name="Catname" class="form-control">
            </div>

            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection();?>