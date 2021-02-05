<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('employee'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/' . $employee['image']) ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Name : <?= $employee['name']; ?></h5>
                    <p class="card-text">Email : <?= $employee['email']; ?></p>
                    <p class="card-text">Contact number : <?= $employee['contact_number']; ?></p>
                    <?php if ($employee['role_id'] == 1) : ?>
                        <p class="card-text">Role : Administrator</p>
                    <?php endif; ?>
                    <?php if ($employee['role_id'] == 2) : ?>
                        <p class="card-text">Role : Cashier</p>
                    <?php endif; ?>
                    <?php if ($employee['role_id'] == 12) : ?>
                        <p class="card-text">Role : Waiter</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->