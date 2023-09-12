 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/databaru/css/jquery-ui.css">
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
                <h3 class="card-title">Gaji Karyawan </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="<?php echo base_url('admin/update_gaji');?>" method="post">
                <div class="card-body">

                   <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        <input type="text" name="tanggal"  class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        
                    </div>
                </div>


                

                  
                <div class="form-group">
                    <label>Nomor ID Gaji</label>
                    <input type="text" name="id_gaji" class="form-control" id="id_gaji" placeholder="Enter Nomor ID Gaji" >
                 </div>  

                      
                 <!--<div class="form-group">
                  <label for="exampleInputEmail1">Nama Karyawan</label>
                  <select name="id" class="form-control select2" style="width: 100%;">
                 
                  <?php foreach($karyawan as $row): ?>
                  <option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div> -->

                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Jabatan" >
                 </div>


                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Enter Jabatan" >
                 </div>


                 <div class="form-group">
                    <label for="exampleInputEmail1">Gaji Pokok</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="gaji_pokok" class="form-control" id="gaji_pokok"   placeholder="Enter Gaji Pokok" disabled>
                  </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Uang Makan</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="uang_makan" class="form-control" id="uang_makan"  placeholder="Enter Uang Makan" disabled>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sewa Kendaraan</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="sewa_kendaraan" class="form-control" id="sewa_kendaraan" placeholder="Enter Sewa Kendaraan" disabled>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tunjangan Jabatan </label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="tunjangan_jabatan" class="form-control" id="tunjangan_jabatan"  placeholder="Enter Tunjangan Jabatan" disabled>
                  </div>
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Insentif</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="insentif" class="form-control" id="insentif"  placeholder="Enter Insentif" disabled>
                  </div>
                  </div>

                  <div class="form-group">
                    <label>Lembur</label>
                    <input type="text" name="waktu_lembur" class="form-control" id="waktu_lembur" placeholder="Input Jam Lembur" >
                  </div>

                  <div class="form-group">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><b>Rp</b></span>
                      </div>
                      <input type="text" name="gaji_lembur" class="form-control" id="gaji_lembur" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">THR</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="text" name="thr" class="form-control" id="thr"  placeholder="Enter THR" disabled>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Gaji</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                    <input type="email" class="form-control" name="total_gaji" id="total_gaji" placeholder=" Total Gaji" disabled>
                  </div>
                  </div>

                   <br>

              <h5><b>Potongan-Potongan</b></h5>
              <br>

              <div class="form-group">
                <label for="exampleInputEmail1">BPJS</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="bpjs" id="bpjs"  placeholder="Enter BPJS">
                </div>
              </div>

              <div class="form-group">
                <label>Keterlambatan</label>
                <input type="text" name="waktu_terlambat" class="form-control" id="waktu_terlambat" placeholder="Input Keterlambatan" >
              </div>

              <div class="form-group">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" name="potongan_terlambat" class="form-control" id="potongan_terlambat"  >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Pinjaman</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="pinjaman" id="pinjaman" placeholder="Enter Pinjaman">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Potongan Pajak Penghasilan</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="pajak" id="pajak">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Total Potongan Gaji</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="total_potongan" id="total_potongan" placeholder="Total Potongan Gaji" >
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Total Bersih Gaji Yang Diterima </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><b>Rp</b></span>
                  </div>
                  <input type="text" class="form-control" name="gaji_keseluruhan" id="gaji_keseluruhan"  placeholder=" Total Gaji  yang diterima">
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

       </section>

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
 
            $('#nama').autocomplete({
                source: "<?php echo site_url('admin/autocomplatekaryawan');?>",
      
                select: function (event, ui) {
                    $('[name="nama"]').val(ui.item.lebel); 
                    $('[name="jabatan"]').val(ui.item.jabatan);
                    $('[name="gaji_pokok"]').val(ui.item.gaji_pokok);
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
    </script>


<script type="text/javascript">
        $(document).ready(function(){

          $('#waktu_lembur').autocomplete({
            source: "<?php echo site_url('admin/autocomplatelembur');?>",

            select: function (event, ui) {
              $('[name="waktu_lembur"]').val(ui.item.label); 
              $('[name="gaji_lembur"]').val(ui.item.gaji);


            }
          });

        });

      </script>


 <!-- Keterlambatan -->

      <script type="text/javascript">
        $(document).ready(function(){

          $('#waktu_terlambat').autocomplete({
            source: "<?php echo site_url('admin/keterlambatan');?>",

            select: function (event, ui) {
              $('[name="waktu_terlambat"]').val(ui.item.label); 
              $('[name="potongan_terlambat"]').val(ui.item.gaji);


            }
          });

        });

      </script>


      <!-- Potongan -->

        <script type="text/javascript">

          $("#bpjs").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#potongan_terlambat").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#pinjaman").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });

          $("#pajak").keyup(function(){
            var a = parseFloat($("#bpjs").val());
            var b = parseFloat($("#potongan_terlambat").val());
            var c = parseFloat($("#pinjaman").val());
            var d = parseFloat($("#pajak").val());
            var e = a+b+c+d;
            $("#total_potongan").val(e);
          });


        </script>

        <!-- Gaji Keseluruhan -->

        <script type="text/javascript">

          $("#total_gaji").keyup(function(){
            var a = parseFloat($("#total_gaji").val());
            var b = parseFloat($("#total_potongan").val());
            var c = a-b;
            $("#gaji_keseluruhan").val(c);
          });

          $("#total_potongan").keyup(function(){
            var a = parseFloat($("#total_gaji").val());
            var b = parseFloat($("#total_potongan").val());
            var c = a-b;
            $("#gaji_keseluruhan").val(c);
          });

          

        </script>

        <!-- lembur ++ -->

        <script type="text/javascript">

          $("#gaji_lembur").keyup(function(){
            var a = parseFloat($("#gaji_lembur").val());
            var b = parseFloat($("#total_gaji").val());
            var c = a+b;
            $("#total_gaji").val(c);
          });

           $("#total_gaji").keyup(function(){
            var a = parseFloat($("#gaji_lembur").val());
            var b = parseFloat($("#total_gaji").val());
            var c = a+b;
            $("#total_gaji").val(c);
          });

          

        </script>

  <!--<script>

        $("#nama").change(function(){

            // variabel dari nilai combo box kendaraan
            var nama = $("#nama").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>/admin/get_combobox",
                method : "POST",
                data : {nama:nama},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_jabatan+'>'+data[i]jabatan+'</option>';
                    }
                    $('#jabatan').html(html);

                }
            });
        });
        </script>-->
   


  

