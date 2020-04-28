<!-- content -->

<div class="wrapper">
    <div class="container">
        <!-- add buku -->
        <div class="d-flex justify-content-end t-scale">
            <a href="#popup">
                <button class="btn btn-primary mb-3 shadow-lg">Tambah Kategori &nbsp;<i class="fas fa-plus"></i></button>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Kategori </h6>
            </div>
            <div class="card-body">
                <table class="tabel" cellpadding="7" cellspacing="7">
                    <tr>
                        <th>No </th>
                        <th>Kategori</th>
                        <th>Kode</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                      <?php $i=1; ?>
                      <?php foreach ($data['kategori'] as $kategori): ?>
                          <tr>
                             <td><?= $i++ ?></td>
                             <td><?=$kategori['kategori'] ?></td>
                             <td><?= $kategori['kode'] ?></td>
                             <td width="30%">
                                  <a href="<?= BASEURL?>/buku/edit_kategori/<?= $kategori['id_kategori'] ?>" class="btn btn-primary btn-ubah "><i class="fas fa-edit"></i> &nbsp;Edit</a>
                                   <a href="<?= BASEURL?>/Proses/hapus_kategori/<?= $kategori['id_kategori'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> &nbsp;Hapus </a>
                             </td>
                          </tr>
                        <?php endforeach ?>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>

<div class="popup-wrapper" id="popup">
    <div class="popup-container">
        <div class="modal-header">
            <h5 class="modal-title" id="judul">Tambah Data Kategori</h5>
            <a href="#closed" class="close">&times;</a>
        </div>
        <form action="" method="POST" class="popup-form">
            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kategori">Nama Kategori</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="kategori" id="kategori" placeholder="Nama Kategori" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kode">Kode Kategori</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="kode" id="kode" placeholder="Kode Kategori" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Tambah Kategori <i class="fas fa-plus"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- end conten -->
