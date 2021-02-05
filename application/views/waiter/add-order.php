<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('waiter'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">


            <div class="card-body">

                <form method="POST" action="">

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <select class="form-control" id="product_name" name="product_name">
                            <?php foreach ($product as $p) : ?>
                                <option value="<?= $p['product_name']; ?>"><?= $p['product_name']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="order_quantity">Quantity</label>
                        <select class="form-control" id="order_quantity" name="order_quantity">
                            <?php foreach ($quantity as $q) : ?>
                                <?php if ($q == $order['order_quantity']) : ?>
                                    <option value="<?= $q; ?>"><?= $q; ?></option>
                                <?php else : ?>
                                    <option value="<?= $q; ?>"><?= $q; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="table_name">Table Name</label>
                        <select class="form-control" id="table_name" name="table_name">
                            <?php foreach ($table as $t) : ?>
                                <option value="<?= $t['table_name']; ?>"><?= $t['table_name']; ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Add Order
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->