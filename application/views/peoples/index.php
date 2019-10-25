<div class="container">
    <h3 class="mt-3">List of Peoples</h3>

    <div class="row-">
        <div class="col-md-5">
            <form action="<?= base_url('peoples');?>" method="post">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autocomplete="off" autofocus>
                <div class="input-group-apped">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row-">
        <div class="col-md">
        <h5>Result : <?= $total_rows; ?></h5>
        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        <tbody>
            <?php if (empty($peoples)) : ?>
            <tr>
                <td colspan="4">
                    <div class="alert alert-danger">Data tidak ditemukan !
                    </div>
                </td>
            </tr>
                    <?php endif;   ?>
                    <?php foreach($peoples as $ppl) : ?>
            <tr>
                <td><?= ++$start; ?></td>
                <td><?= ++$ppl['name']; ?></td>
                <td><?= ++$ppl['email']; ?></td>
                <td>
                    <a href="" class="badge badge-info">Detail</a>
                    <a href="" class="badge badge-success">Detail</a>
                    <a href="" class="badge badge-danger">Detail</a>
                </td>
            </tr>
                    <?php endforeach;?>
        </tbody>
        </thead>
        </table>

            <?= $this->pagination->create_links(); ?>
        </div>
    </div>


</div>