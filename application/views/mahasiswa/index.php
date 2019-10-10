
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <a href="" class="btn btn-outline-primary btn-lg">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
               <?php foreach($mahasiswa as $mhs) : ?>
                <li class="list-group-item"><?=$mhs['nama']?></<li>
                <span class="badge badge-pill badge-info">Detail</span>
                <span class="badge badge-pill badge-success">Ubah</span>
                <span class="badge badge-pill badge-danger">Hapus</span>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

</div>