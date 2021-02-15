<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WILAYAH INDONESIA</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
  <style>
    body {
      height: 100vh;
    }
    footer {
      position : absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 40px;
      line-height: 40px;
      font-weight: bold;
      
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">WILAYAH INDONESIA 2021</h1>
    <div id="h"></div>
      <form action="" class="form">
    <div class="form-group">
  <select name="wilayah_provinsi" id="prov" class="form-control">  
        <option>
          --- PROVINSI ---
        </option>
        <?php foreach ($prov as $rProv) : ?>
        <option value="<?= $rProv['id']?>">
          <?= $rProv['nama'] ?>
        </option>
        <?php endforeach; ?>
    </select>
    </div>
    <div class="form-group">
       <select id="kab" class="form-control">
        <option>
          --- KABUPATEN ---
        </option>
    </select>
    </div>
    <div class="form-group">
       <select id="kec" class="form-control">
        <option>
          --- KECAMATAN ---
        </option>
    </select>
    </div>
    <div class="form-group">
      <select id="desa" class="form-control">
        <option>
          --- DESA ---
        </option>
    </select>
    </div>
  </form>
  <footer>
    <marquee>MENAMPILKAN ALAMAT/WILAYAH INDONESIA DENGAN SELECT OPTION SECARA DINAMIS MENGGUNAKAN FRAMEWORK CODEIGNAITER V3 - MUHAMMAD ALHIQNY</marquee>
  </footer>
  </div>
  

  <!-- BOOTSTRAP -->
  <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <!-- JQUERY AJAX -->
  <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
  
  <script>
   $(document).ready(function(){
     
     // ketika provinsi ada yang dipilih
      $('#prov').change(function(){
        var id = $(this).val();
        $.ajax({
          type : "POST", 
          url : "<?= base_url('wilayah/getKab')?>",
          data : {id:id}, 
          dataType : "JSON", 
          success : function(hasil)
          {
            $('#kab').html(hasil);
          }
        });
      });
      
      // ketika kabupaten ada yang dipilih
        $('#kab').change(function(){
        var id = $(this).val();
        $.ajax({
          type : "POST", 
          url : "<?= base_url('wilayah/getKec')?>",
          data : {id:id}, 
          dataType : "JSON", 
          success : function(hasil)
          {
            $('#kec').html(hasil);
          }
        });
      });
      
      // ketika kecamatan ada yang dipilih
       $('#kec').change(function(){
        var id = $(this).val();
        $.ajax({
          type : "POST", 
          url : "<?= base_url('wilayah/getDesa')?>",
          data : {id:id}, 
          dataType : "JSON", 
          success : function(hasil)
          {
            $('#desa').html(hasil);
          }
        });
      });
      
    }); 
  </script>
  
</body>
</html>