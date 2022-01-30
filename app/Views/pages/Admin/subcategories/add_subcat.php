<?= $this->extend('pages/Admin/dashboard/dashboardStart') ?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6" style="margin-top: 8rem;">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/SubCategoryController/store'); ?>">
            <h2 class="col-md-10" style="text-align: center">Add Sub-category</h2>
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

            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
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
                subcatname: {
                    required: true,
                    minlength: 3
                },
                category: {
                    required: true
                },
                description: {
                    required: true,
                    minlength: 3
                }
            },
            messages: {
                subcatname: {
                    required: "Please enter the subcategory name",
                    minlength: "Name should be at least 3 characters"
                },
                category: {
                    required: "Please choose a category"
                },
                description: {
                    required: "Please enter the subcategory description",
                    minlength: "Name should be at least 3 characters"
                },
            }
        })
    }
</script>
<?= $this->endSection();?>
