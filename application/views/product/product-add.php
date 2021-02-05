<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('product'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">


            <div class="card-body">

                <form method="POST" action="">

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input name="product_name" type="text" class="form-control" id="product_name">
                        <?= form_error('product_name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input name="product_price" type="text" class="form-control" id="product_price">
                        <?= form_error('product_price', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="product_category">Product Category</label>
                        <select class="form-control" id="product_category" name="product_category">
                            <?php foreach ($category as $c) : ?>
                                <?php if ($c == $product['product_category']) : ?>
                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                <?php else : ?>
                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Add
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->