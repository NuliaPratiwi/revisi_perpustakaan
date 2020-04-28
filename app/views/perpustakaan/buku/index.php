<!-- content -->

<div class="wrapper">
    <div class="container">
        <!-- add buku -->
        <div class="d-flex justify-content-end t-scale">
            <a href="#popup">
                <button class="btn btn-primary mb-3 shadow-lg">Tambah Buku &nbsp;<i class="fas fa-plus"></i></button>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Buku </h6>
            </div>
            <div class="card-body">
                <table class="tabel" cellpadding="7" cellspacing="7">
                    <tr>
                        <th>No </th>
                        <th>Gambar</th>
                        <th>Nama Buku</th>
                        <th>Pengarang</th>
                        <th>Stok Buku</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rak Buku</td>
                        <td>XI RPL 1</td>
                        <td>Bagus</td>
                        <td>2</td>
                        <td>Di beli baru</td>
                        <td>
                            <a href="" type="submit" name="" class="btn btn-primary"><i class="fas fa-edit"></i> &nbsp; Edit </a>
                            <a href="" type="submit" name="delete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> &nbsp;Delete</a>
                            <a href="" type="submit" name="delete" class="btn btn-success"> <i class="fas fa-eye"></i> &nbsp;Detail</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
</div>

<div class="popup-wrapper" id="popup">
    <div class="popup-container">
        <div class="modal-header">
            <h5 class="modal-title" id="judul">Tambah Data Buku</h5>
            <a href="#closed" class="close">&times;</a>
        </div>
        <form action="" method="POST" class="popup-form">
            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="nama">Nama Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="nama" id="nama" placeholder="Nama Buku" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="pengarang">Pengarang Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang Buku" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kategori">Katergori Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <select name="kategori" id="kategori" class="form-control-select">
                        <option value="">Pilih</option>
                    </select>
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="jumlah">Jumlah Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah Buku" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="deskripsi">Deskripsi Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <textarea class="form-control-select" id="deskripsi" name="deskripsi"></textarea>
                </div>
            </div>
            <!-- end input -->

            <div class=" input-group row ">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="deskripsi">Gambar Buku</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9 custom-file">
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                </div>
            </div>
            <!-- end input -->

            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Tambah Buku <i class="fas fa-plus"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- end conten -->