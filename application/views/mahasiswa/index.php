
<div class="container">

        <?php if($this->session->flashdata('flash')): ?>

        <div class="row mt-3">
            <div class="col-md-6">  
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            </div>
        </div>

        <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
        <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-outline-primary btn-lg">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
            <?php foreach($mahasiswa as $mhs) : ?>
                <li class="list-group-item"><?=$mhs['nama']?></<li>
                <span class="badge badge-pill badge-info float-right ml-1">Detail</span>
                <span class="badge badge-pill badge-success float-right ml-1">Ubah</span>
                <span class="badge badge-pill badge-danger float-right ml-1">Hapus</span>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

</div>