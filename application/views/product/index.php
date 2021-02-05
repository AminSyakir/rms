<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('product/productadd'); ?>" class="btn btn-primary mb-3">Add New Product</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($product as $pro) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pro['product_name']; ?></td>
                            <td>RM <?= $pro['product_price']; ?></td>
                            <td><?= $pro['product_category']; ?></td>

                            <td>
                                <a href="<?= base_url('product/productupdate/') . $pro['id']; ?>" class="badge badge-success">Update</a>
                                <a href="<?= base_url('product/productdelete/') . $pro['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>
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