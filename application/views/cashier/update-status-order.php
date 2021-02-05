<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h5 mb-4 text-gray-800"><a href="<?= base_url('cashier'); ?>">&larr; Back</a></h1>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">


            <div class="card-body">

                <form method="POST" action="">

                    <input type="hidden" name="id" value="<?= $order['id']; ?>">

                    <div class="form-group">
                        <label for="status">Order Status</label>
                        <select class="form-control" id="status" name="status">
                            <?php foreach ($status as $s) : ?>
                                <?php if ($s == $order['status']) : ?>
                                    <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                <?php else : ?>
                                    <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Update
                    </button>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->