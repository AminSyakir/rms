<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('admin/role'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>


            <div class="card-body">

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input name="role" type="text" class="form-control" id="role">
                        <small class="form-text text-danger"><?= form_error('role'); ?></small>
                    </div>

                    <button type="submit" name="add" class="btn btn-primary float-right">Add</button>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->