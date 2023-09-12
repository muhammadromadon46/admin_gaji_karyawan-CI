 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/databaru/css/jquery-ui.css">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Karyawan  </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php if($this->session->flashdata('added')): ?>
  <div class="col-md-3">
            <div class="card bg-success">
              <div class="card-header">
                <h3 class="card-title">Data Berhasil Disimpan</h3>

                
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <?php echo $this->session->flashdata('added'); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<?php endif; ?>

<?php if(validation_errors()): ?>
<div class="col-md-3">
            <div class="card bg-danger">
              <div class="card-header">
                <h3 class="card-title">Eror</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <?php echo validation_errors(); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


<?php endif; ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Karyawan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/detail/'.$karyawan->id); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Karyawan</label>
                    <input type="text" class="form-control" name="id" id="id"  placeholder="Enter Nomor ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Karyawan </label>
                    <input type="text" class="form-control" name="nama"  placeholder="Enter Nama Karyawan ">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select name="id_jabatan" class="form-control select2" style="width: 100%;">
                 <option>--Pilih Jabatan--</option>
                  <?php foreach($jabatan as $row): ?>
                    
                  <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->jabatan; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>

                


                  
                  </div>
                  
                  <!---<div class="form-group">
                    <label for="exampleInputFile">Foto Karyawan </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>-->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="added" value="tambah">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

 <script src="<?php echo base_url(); ?>assets/databaru/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/databaru/js/jquery-ui.js"></script>
      <script src="<?php echo base_url(); ?>assets/databaru/js/bootstrap.js"></script>

      <!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>


<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

      <script type="text/javascript">
        
        //Date picker
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
      </script>
      <script type="text/javascript">
         //Date range picker
    $('#reservation').daterangepicker()
      </script>


<!--<script type="text/javascript">
        $(document).ready(function(){
 
            $('#jabatan').autocomplete({
                source: "<?php echo site_url('admin/autocomplate');?>",
      
                select: function (event, ui) {
                    $('[name="jabatan"]').val(ui.item.label); 
                    $('[name="gaji_pokok"]').val(ui.item.gaji);
                     $('[name="uang_makan"]').val(ui.item.uang_makan);
                     $('[name="tunjangan_jabatan"]').val(ui.item.tunjangan_jabatan);
                     $('[name="insentif"]').val(ui.item.insentif); 
                     $('[name="thr"]').val(ui.item.thr);
                     $('[name="sewa_kendaraan"]').val(ui.item.sewa_kendaraan);
                     $('[name="total_gaji"]').val(ui.item.total_gaji);
                     $('[name="bpjs"]').val(ui.item.bpjs);
                     $('[name="pajak"]').val(ui.item.pajak);

                }
            });
 
        });
    </script> -->


 <script type="text/javascript">
        $(document).ready(function(){
 
            $('#id').autocomplete({
                source: "<?php echo site_url('admin/autocomplateid');?>",
      
                select: function (event, ui) {
                    $('[name="id"]').val(ui.item.lebel); 
                    $('[name="nama"]').val(ui.item.nama);
                    
                    

                }
            });
 
        });
    </script>
