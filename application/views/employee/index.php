<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('employee/addemployee'); ?>" class="btn btn-primary mb-3">Add New Employee</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($employee as $em) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $em['name']; ?></td>
                            <?php if ($em['role_id'] == 1) : ?>
                                <td>Administrator</td>
                            <?php endif; ?>
                            <?php if ($em['role_id'] == 2) : ?>
                                <td>Cashier</td>
                            <?php endif; ?>
                            <?php if ($em['role_id'] == 12) : ?>
                                <td>Waiter</td>
                            <?php endif; ?>

                            <td>
                                <a href="<?= base_url('employee/employeedetail/') . $em['id']; ?>" class="badge badge-primary">Detail</a>
                                <a href="<?= base_url('employee/delete/') . $em['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                        </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->