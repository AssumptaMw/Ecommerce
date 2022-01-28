<?= $this->extend('Layouts/master') ?>
<?= $this->section('content'); ?>

    <div class="card mb-3">
        <div class="card-body py-0 border-top">
        <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
        <div class="d-flex align-items-center justify-content-end my-3">
        <div id="bulk-select-replace-element">
            <a href="<?= route_to('admin.user.create') ?>" class="btn btn-falcon-success btn-sm"
               type="button">
                <i class="fas fa-plus"></i><span class="ms-1">New</span>
            </a>
        </div>
    </div>

<?= $this->endSection(); ?>