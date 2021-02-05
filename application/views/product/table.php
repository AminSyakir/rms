<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('product/addtable'); ?>" class="btn btn-primary mb-3">Add New Table</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Table Name</th>
                        <th scope="col">Table Capacity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($table as $tbl) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $tbl['table_name']; ?></td>
                            <td><?= $tbl['table_capacity']; ?></td>

                            <td>
                                <a href="<?= base_url('product/updatetable/') . $tbl['id']; ?>" class="badge badge-success">Update</a>
                                <a href="<?= base_url('product/deletetable/') . $tbl['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>
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