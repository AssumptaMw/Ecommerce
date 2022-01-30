<?= $this->extend('Layouts/master');?>
<?= $this->section('content');?>

<div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form class="booking row g-3 shadow-lg p-3 mb-5 bg-body rounded" method="post" id="add_create" name="add_create"
              action="<?php echo base_url('/CategoryController/store'); ?>">
            <h2 style="text-align: center">Add Category</h2>
            <div class="form-group col-md-6">
                <label for="inputCatname" class="form-label"><i class="icon-prepend fa fa-bars"></i>&nbsp;Category Name</label>
                <input type="text" name="catname" class="form-control">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                errorClass: "error fail-alert",
                validClass: "valid success-alert",
                rules: {
                    catname: {
                        required: true,
                        minlength: 3
                    },
                    description: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    catname: {
                        required: "Please enter the category name",
                        minlength: "Name should be at least 3 characters"
                    },
                    description: {
                        required: "Please enter the category description",
                        minlength: "Name should be at least 3 characters"
                    }
            });
        }
    </script>
<?= $this->endSection();?>