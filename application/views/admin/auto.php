 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Update Gaji Karyawan  </h1>
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="<?php echo base_url('admin/auto');?>" method="post">
                <div class="card-body">


                   

                  <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select name="id_jabatan" class="form-control select2" style="width: 100%;">
                 
                  <<?php foreach($jabatan as $row): ?>
                  <option value="<?php echo $row->id_jabatan; ?>"><?php echo $row->jabatan; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>


                  


                  <div class="form-group">
                    <label for="exampleInputEmail1">Gaji Pokok</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="email" name="gaji_pokok" class="form-control"  placeholder="Enter Gaji Pokok">
                  </div>
                  </div>

                  


                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <button type="submit" class="btn btn-primary" name="added" value="tambah">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url(); ?>assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script type="text/javascript">
        $(document).ready(function(){
 
            $('#title').autocomplete({
                source: "<?php echo site_url('blog/get_autocomplete');?>",
      
                select: function (event, ui) {
                    $('[name="title"]').val(ui.item.label); 
                    $('[name="description"]').val(ui.item.description); 
                }
            });
 
        });
    </script>
    
<script type="text/javascript">
    $('#reservationdate').datetimepicker({
        format: 'L'
    });


</script>

    </section>


