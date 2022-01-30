<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="">
            <h2 style="text-align: center">Edit Sub-category</h2>
            <div class="form-group col-md-6">
                <label for="inputSubcatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Sub-category Name*</label>
                <input type="text" name="subcatname" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Category*</label>
                <select name="category" id="category" class="form-control">
                    <option selected hidden value="">Choose Category</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Children">Children</option>
                    <option value="Pets">Pets</option>
                </select>
            </div>

            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Changes</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection();?>