<!DOCTYPE html> 
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Mayora | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<center>
            <h1><b>PT. Buana Sentosa Nusantara</b></h1>
            <h5>JL. H. Najamudin LR. Wijaya No. 138 Kel. SukaMaju Kec. Sako Kenten palembang  </h5>
          </center>

         </br>
</br> 

<div class="col-sm-6">
  <?php 

  function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>


<table  class="table table-borderless">
<tbody>
  <tr>
  <td></td>
</tr>
<tr>
  <td>Nama Karyawan</td>
  <td>:</td>
  <td><?php echo $detail->nama ?></td>
</tr>
<tr>
  <td>Jabatan </td>
  <td>:</td>
  <td><?php echo $detail->jabatan ?></td>
</tr>
<tr>
  <td>Gaji Pokok </td>
  <td>:</td>
  <td><?php echo rupiah($detail->gaji_pokok) ?></td>
</tr>
<tr>
  <td>Uang Makan</td>
  <td>:</td>
  <td><?php echo rupiah($detail->uang_makan)?></td>
</tr>
<tr>
  <td>Sewa Motor</td>
  <td>:</td>
  <td><?php echo rupiah($detail->sewa_kendaraan) ?></td>
</tr>
<tr>
  <td>Tunjangan Jabatan </td>
  <td>:</td>
  <td><?php echo rupiah($detail->tunjangan_jabatan) ?></td>
</tr>
<tr>
  <td>THR </td>
  <td>:</td>
  <td> <?php echo rupiah($detail->thr) ?></td>
</tr>
<tr>
  <td><b>Total Gaji</b></td>
  <td><b>:</b></td>
  <td><b><?php echo rupiah($detail->total_gaji) ?></b></td>
</tr>
<tr>
  <td></td>
</tr>

<tr>
  <th>Potongan-Potongan</th>
</tr>

<tr>
  <td>BPJS</td>
  <td>:</td>
  <td><?php echo rupiah($detail->bpjs) ?></td>
</tr>
<tr>
  <td>Keterlambatan </td>
  <td>:</td>
  <td>Rp. <?php echo $detail->potongan_terlambat ?></td>
</tr>
<tr>
  <td>Pinjaman Karyawan </td>
  <td>:</td>
  <td><?php echo rupiah($detail->pinjaman) ?></td>
</tr>
<tr>
  <td>Potongan Pajak Penghasilan</td>
  <td>:</td>
  <td><?php echo rupiah($detail->pajak) ?></td>
</tr>
<tr>
  <td><b>Total Potongan</b></td>
  <td><b>:</b></td>
  <td><b>Rp. <?php echo $detail->total_potongan ?></b></td>
</tr>
<tr>
  <td><b>Total Gaji yang Diterima Karyawan Sebesar</b></td>
  <td><b>:</b></td>
  <td><b><?php echo rupiah($detail->gaji_keseluruhan) ?></b></td>
</tr>
<tr>
  <td></td>
</tr>


<tr>
  <td>Palembang, <span id="tanggalwaktu"></span></td>
</tr>
<tr>
  <td>Diterima Oleh,</td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
  <td><?php echo $detail->nama ?></td>
</tr>





</tbody>
</table> 
</div>
    
    <script type="text/javascript">
      window.print();
    </script>   

     <script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

</body>
</html>
          
            

         

   