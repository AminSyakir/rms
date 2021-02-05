<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Table Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($order as $or) : ?>
                        <tr>
                            <td><?= $or['id']; ?></td>
                            <td><?= $or['table_name']; ?></td>
                            <td>
                                <?php if ($or['status'] == "Complete") : ?>
                                    <button type="" class="btn btn-success btn-user btn-block">Complete</button>
                                <?php else : ?>
                                    <button type="" class="btn btn-warning btn-user btn-block">In Process</button>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="<?= base_url('cashier/updateorderstatus/') . $or['id']; ?>" class="badge badge-primary">Update Status</a>
                            </td>
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