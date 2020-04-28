<!-- content -->
                      <div class="wrapper">
                        <div class="container">
                          <!-- add Peminjaman -->
        <div class="d-flex justify-content-end t-scale">
            <a href="#popup">
                <button class="btn btn-primary mb-3 shadow-lg">Pinjam Buku &nbsp;<i class="fas fa-plus"></i></button>
            </a>
        </div>
                          <div class="card">
                            <div class="card-header">
                              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> &nbsp;Daftar Peminjaman </h6>
                            </div>
                            <div class="card-body">
                              <table class="tabel" cellpadding="7" cellspacing="7">
                                <tr>
                                  <th>No </th>
                                  <th>Nama</th>
                                  <th>Buku</th>
                                  <th>Tanggan Pinjam</th>
                                  <th>Tanggal Kembali</th>
                                  <th>Aksi</th>
                                  
                                </tr>   
                                <tr>
                                  <td>1</td>
                                  <td>jeni andini</td>
                                  <td>Moon Lovers</td>
                                  <td>2020-04-15</td>
                                  <td>2020-04-17</td>
                                  
                                  <td>
                                    <a href="" type="submit" name="" class="btn btn-primary"><i class="fas fa-edit"></i> &nbsp; Edit </a>
                                    <a href="" type="submit" name="delete" class="btn btn-success"> <i class="fas fa-check"></i> &nbsp;Kembali</a>
                                    <a href="" class="btn btn-secondary "><i class="fas fa-list"></i> &nbsp;Detail</a>
                                  </td>
                                </tr>     
                              </table>
                            </div>
                            </div>
    
                        </div>
                      </div>
                      <!-- end conten -->
<div class="popup-wrapper" id="popup">
    <div class="popup-container">
        <div class="modal-header">
            <h5 class="modal-title" id="judul">Pinjam Buku</h5>
            <a href="#closed" class="close">&times;</a>
        </div>
        <form action="" method="POST" class="popup-form">
            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="nama">Nama Peminjam</label>
                </div>
                <select name="kategori" id="kategori" class="form-control-select">
                        <option value="">Pilih Peminjam</option>
                </select>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="pengarang">Buku</label>
                </div>
                <select name="kategori" id="kategori" class="form-control-select">
                        <option value="">Pilih Buku</option>
                </select>
            </div>
            <!-- end input -->

            <div class="input-group row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 label">
                    <label for="kategori">Pinjam Berapa Hari</label>
                </div>
                
                <select name="kategori" id="kategori" class="form-control-select">
                        <option value="">Pilih Berapa Hari</option>
                </select>
               
            </div>
            <!-- end input -->

            <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Pinjam Buku <i class="fas fa-plus"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- end conten -->