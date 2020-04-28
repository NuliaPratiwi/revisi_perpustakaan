<!-- content -->

<div class="wrapper">
    <div class="container">
        <!-- add buku -->
        <div class="d-flex justify-content-end t-scale">
            <a href="#popup">
                <button class="btn btn-primary mb-3 shadow-lg">Tambah User &nbsp;<i class="fas fa-plus"></i></button>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar User </h6>
            </div>
            <div class="card-body">
                <table class="tabel" cellpadding="8" cellspacing="8">
                    <tr>
                        <th>No </th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Kelas</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Sunwoo</td>
                        <td>27260</td>
                        <td>XI (Rekayasa Perangkat Lunak 1)</td>
                        <td>sunwoo</td>
                        <td>User</td>
                        <td>17 March 2020</td>
                        <td>
                            <a href="" type="submit" name="" class="btn btn-primary"><i class="fas fa-edit"></i> &nbsp; Edit </a>
                            <a href="" type="submit" name="delete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> &nbsp;Delete</a>
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
            <h5 class="modal-title" id="judul">Tambah User</h5>
            <a href="#closed" class="close">&times;</a>
        </div>
        <form action="" method="POST" class="popup-form">
            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="nama">Nama</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="nama" id="nama" placeholder="Nama" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="username">Username</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="password">Password</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="pengarang">Konfirmasi Password</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang Buku" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kategori">Level</label>
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
                    <label for="jumlah">Nis</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah Buku" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kategori">Kelas</label>
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
                    <label for="kategori">Jurusan</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <select name="kategori" id="kategori" class="form-control-select">
                        <option value="">Pilih</option>
                    </select>
                </div>
            </div>
            <!-- end input -->
            

            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Tambah User <i class="fas fa-plus"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- end conten -->