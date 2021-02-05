<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('product/table'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">


            <div class="card-body">

                <form method="POST" action="">

                    <div class="form-group">
                        <label for="table_name">Table Name</label>
                        <input name="table_name" type="text" class="form-control" id="table_name">
                        <?= form_error('table_name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="table_capacity">Table Capacity</label>
                        <select class="form-control" id="table_capacity" name="table_capacity">
                            <?php foreach ($capacity as $c) : ?>
                                <?php if ($c == $product['table_capacity']) : ?>
                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                <?php else : ?>
                                    <option value="<?= $c; ?>"><?= $c; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Add Table
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->