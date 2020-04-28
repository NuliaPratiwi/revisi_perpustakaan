<!-- content -->

<div class="wrapper">
    <div class="container">
        <!-- add buku -->
        <div class="d-flex justify-content-end t-scale">
            <a href="#popup">
                <button class="btn btn-primary mb-3 shadow-lg">Tambah Jurusan &nbsp;<i class="fas fa-plus"></i></button>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Jurusan </h6>
            </div>
            <div class="card-body">
                <table class="tabel" cellpadding="7" cellspacing="7">
                    <tr>
                        <th>No </th>
                        <th>Jurusan</th>
                        <th>Kode</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Agama</td>
                        <td>001</td>
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
            <h5 class="modal-title" id="judul">Tambah Data Jurusan</h5>
            <a href="#closed" class="close">&times;</a>
        </div>
        <form action="" method="POST" class="popup-form">
            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="jurusan">Nama Jurusan</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="jurusan" id="jurusan" placeholder="Nama Jurusan" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kode">Kode Jurusan</label>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="kode" id="kode" placeholder="Kode Jurusan" class="form-control">
                </div>
            </div>
            <!-- end input -->

            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Tambah Jurusan <i class="fas fa-plus"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- end conten -->