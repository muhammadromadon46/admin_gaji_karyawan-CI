 
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
              <form action="<?php echo base_url('admin/tambah_karyawan');?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Karyawan</label>
                    <input type="text" class="form-control" name="id" id="nomor"  placeholder="Enter Nomor ID">
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

                <div class="form-group">
                    <label for="exampleInputEmail1">ID Gaji</label>
                    <input type="text" class="form-control" name="id_gaji" id="id_gaji" placeholder="Enter Nomor ID Gaji" readonly>
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


       <script type="text/javascript">

          $("#nomor").keyup(function(){
            var a = parseFloat($("#nomor").val());
            var b = parseFloat(1);
            var c = a*b;
            $("#id_gaji").val(c);
          });

          

        </script>

       <script type="text/javascript">
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
      </script>