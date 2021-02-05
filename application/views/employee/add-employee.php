<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('employee'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <!-- <?= $this->session->flashdata('message'); ?> -->


            <div class="card-body">

                <form class="" method="POST" action="">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control" placeholder="Select Role">
                            <option selected>Select Role...</option>
                            <option value="2">Cashier</option>
                            <option value="12">Waiter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Register Account
                    </button>
                </form>


                <!-- <form action="" method="POST">
                    <div class="form-group">

                        <div class="form-group row">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>

                        <div class="form-group row">
                            <label for="contact_no">Contact_no</label>
                            <input name="contact_no" type="text" class="form-control" id="contact_no">
                            <small class="form-text text-danger"><?= form_error('contact_no'); ?></small>
                        </div>

                        <div class="form-group row">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group row">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <?php foreach ($role as $r) : ?>
                                    <?php if ($r == $employee['name']) : ?>
                                        <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $r; ?>"><?= $r; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>

                    </div>

                    <button type="submit" name="add" class="btn btn-primary float-right">Add</button>
                </form> -->
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->