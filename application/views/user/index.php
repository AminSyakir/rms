<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/' . $user['image']) ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><?= $user['name']; ?></h3>

                    <div class="row">
                        <label for="name" class="col-sm-4">Email</label>
                        <div class="col-sm-8">
                            <p class="card-text"><?= $user['email']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-sm-4">Contact number</label>
                        <div class="col-sm-8">
                            <p class="card-text"><?= $user['contact_number']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->