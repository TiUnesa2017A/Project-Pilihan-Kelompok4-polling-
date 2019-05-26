<?php
$this->load->view('dashboard/template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('dashboard/template/topbar');
$this->load->view('dashboard/template/sidebar');
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->


<script>
$(document).ready(function(){
  $("#ketua1").click(function(){
    $("#input_ketua1").toggle();
  })
  $("#ketua2").click(function(){
    $("#input_ketua2").toggle();
  })
  $("#ketua3").click(function(){
    $("#input_ketua3").toggle();
  })

  $("#wakil1").click(function(){
    $("#input_wakil1").toggle();
  })
  $("#wakil2").click(function(){
    $("#input_wakil2").toggle();
  })
  $("#wakil3").click(function(){
    $("#input_wakil3").toggle();
  })

})
</script>
<section class="content">

  <div class="box-body pad table-responsive">
                <p>Disarankan menggunakan gambar 1080px 1080px</p>
                <table class="table table-bordered text-center">
                  <tr>
                    <th colspan="6">Perubahan data ketua</th>
                  </tr>
                  <tr>
                    <td>
                      <button id="ketua1" type="button" class="btn btn-block btn-danger btn-flat">Ketua 1</button>
                    </td>
                    <td>
                      <button id="ketua2" type="button" class="btn btn-block btn-danger btn-flat">Ketua 2</button>
                    </td>
                    <td>
                      <button id="ketua3"type="button" class="btn btn-block btn-danger btn-flat">Ketua 3</button>
                    </td>
                    <td>
                    </td>
                  </tr>
                </table>
                </div>

                <div class="box-body pad table-responsive">
                              <table class="table table-bordered text-center">
                                <tr>
                                  <th colspan="6">Perubahan Data wakil</th>
                                </tr>
                                <tr>
                                  <td>
                                    <button id="wakil1" type="button" class="btn btn-block btn-danger btn-flat">Wakil 1</button>
                                  </td>
                                  <td>
                                    <button id="wakil2" type="button" class="btn btn-block btn-danger btn-flat">Wakil 2</button>
                                  </td>
                                  <td>
                                    <button id="wakil3"type="button" class="btn btn-block btn-danger btn-flat">Wakil 3</button>
                                  </td>
                                  <td>
                                  </td>
                                </tr>
                              </table>
                              </div>






<div class="row">

  <div class="col-md-6">
            <!-- general form elements -->
            <form action="<?php echo base_url('dashboard/ubah_profilcalonketua/ketua1') ?>" method="post" enctype="multipart/form-data">
            <div class="box box-primary" style="display:none;" id="input_ketua1">
              <div class="box-header with-border">
                <h3 class="box-title">Calon ketua nomor urut 1</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama calon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_ketua" required="true" maxlength="60" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi calon</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_ketua" required="true" maxlength="60">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="foto_ketua" required="true">

                    <p class="help-block">Upload foto peserta </p>
                  </div>

                </div>
              </form>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" name="submit_ketua1" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">reset</button>
                </div>
              </form>
            </div>
          </div>
            <!-- /.box -->

            <div class="col-md-6">
                      <!-- general form elements -->
                      <form action="<?php echo base_url('dashboard/ubah_profilcalonketua/ketua2') ?>" method="post" enctype="multipart/form-data">
                      <div class="box box-primary" style="display:none;" id="input_ketua2">
                        <div class="box-header with-border">
                          <h3 class="box-title">Calon ketua nomor urut 2</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama calon</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_ketua" required="true" maxlength="60">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Deskripsi calon</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_ketua" required="true" maxlength="60">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile" name="foto_ketua">

                              <p class="help-block">Upload foto peserta </p>
                            </div>

                          </div>
                          <!-- /.box-body -->

                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">reset</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </form>
                    <div class="col-md-6">
                              <!-- general form elements -->
                              <form action="<?php echo base_url('dashboard/ubah_profilcalonketua/ketua3') ?>" method="post" enctype="multipart/form-data">
                              <div class="box box-primary" style="display:none;" id="input_ketua3">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Calon ketua nomor urut 3</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                  <div class="box-body">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Nama calon</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_ketua" required="true" maxlength="60">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Deskripsi calon</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_ketua" required="true" maxlength="60">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" id="exampleInputFile" name="foto_ketua">

                                      <p class="help-block">Upload foto peserta </p>
                                    </div>

                                  </div>
                                  <!-- /.box-body -->

                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-primary">reset</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </form>

                                <!-- /.box -->

                                <div class="col-md-6">
                                          <!-- general form elements -->
                                          <form action="<?php echo base_url('dashboard/ubah_profilcalonwakil/wakil1') ?>" method="post" enctype="multipart/form-data">
                                          <div class="box box-primary" style="display:none;" id="input_wakil1">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Calon wakil nomor urut 1</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <!-- form start -->
                                            <form role="form">
                                              <div class="box-body">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Nama calon</label>
                                                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_wakil" required="true" maxlength="60">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Deskripsi calon</label>
                                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_wakil" required="true" maxlength="60">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputFile">File input</label>
                                                  <input type="file" id="exampleInputFile" name="foto_wakil">

                                                  <p class="help-block">Upload foto peserta </p>
                                                </div>

                                              </div>
                                              <!-- /.box-body -->

                                              <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-primary">reset</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>

                                      </form>

                                          <!-- /.box -->

                                          <div class="col-md-6">
                                                    <!-- general form elements -->
                                                    <form action="<?php echo base_url('dashboard/ubah_profilcalonwakil/wakil2') ?>" method="post" enctype="multipart/form-data">
                                                    <div class="box box-primary" style="display:none;" id="input_wakil2">
                                                      <div class="box-header with-border">
                                                        <h3 class="box-title">Calon wakil nomor urut 2</h3>
                                                      </div>
                                                      <!-- /.box-header -->
                                                      <!-- form start -->
                                                      <form role="form">
                                                        <div class="box-body">
                                                          <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama calon</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_wakil" required="true" maxlength="60">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputPassword1">Deskripsi calon</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_wakil" required="true" maxlength="60">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputFile">File input</label>
                                                            <input type="file" id="exampleInputFile" name="foto_wakil">

                                                            <p class="help-block">Upload foto peserta </p>
                                                          </div>

                                                        </div>
                                                        <!-- /.box-body -->

                                                        <div class="box-footer">
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                          <button type="reset" class="btn btn-primary">reset</button>
                                                        </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </form>
                                                    <!-- /.box -->

                                                    <div class="col-md-6">
                                                              <!-- general form elements -->
                                                              <form action="<?php echo base_url('dashboard/ubah_profilcalonwakil/wakil3') ?>" method="post" enctype="multipart/form-data">
                                                              <div class="box box-primary" style="display:none;" id="input_wakil3">
                                                                <div class="box-header with-border">
                                                                  <h3 class="box-title">Calon wakil nomor urut 3</h3>
                                                                </div>
                                                                <!-- /.box-header -->
                                                                <!-- form start -->
                                                                <form role="form">
                                                                  <div class="box-body">
                                                                    <div class="form-group">
                                                                      <label for="exampleInputEmail1">Nama calon</label>
                                                                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama calon" name="nama_wakil" required="true" maxlength="60">
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="exampleInputPassword1">Deskripsi calon</label>
                                                                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan deskripsi calon" name="deskripsi_wakil" required="true" maxlength="60">
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="exampleInputFile">File input</label>
                                                                      <input type="file" id="exampleInputFile" name="foto_wakil">

                                                                      <p class="help-block">Upload foto peserta </p>
                                                                    </div>

                                                                  </div>
                                                                  <!-- /.box-body -->

                                                                  <div class="box-footer">
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                    <button type="reset" class="btn btn-primary">reset</button>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                            </div>
                                                          </form>

                                                              <!-- /.box -->



</div>



          <!-- /.box -->
</section><!-- /.content -->



<?php
$this->load->view('dashboard/template/js');
?>

<!--tambahkan custom js disini-->
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/chartjs/Chart.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard2.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('dashboard/template/foot');
?>
