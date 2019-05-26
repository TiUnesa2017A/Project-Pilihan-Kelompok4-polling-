<style>
.custom0{
  width: 100%;
  margin-left: 12%;
  margin-top: 2%;
}
.custom{
  width: 20%;
  height: 30%;
  margin-right: 7rem;
  float: left;
}
.page-wrap2{
  text-align:center;
}
.page-wrap{
  text-align:left;
  width:300px;
  height:100%;
  margin:0 auto;
}
@media screen and (max-device-width: 1080px) {
    .custom0{
      margin: 0;
      height: auto;
      width: auto;
    }
    .custom{
      width: 100%;
      margin: 0;
      float: none;
    }
    .page-wrap2{
      margin-bottom: 10px;
    }
}
</style>

<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo right"><img style="height:60px;" src="<?php echo base_url('assets/img/logovote.png'); ?>" ></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <?php foreach ($get_info as $val): ?>
        <ul class="left hide-on-med-and-down">
          <li><a href="#">NIM : <?php andro($val->nis); ?></a></li>
          <li><a href="#">NAMA : <?php andro($val->nama_lengkap); ?></a></li>
          <li><a href="#">PRODI : <?php andro($val->kelas); ?></a></li>
          <li><a href="#">JURUSAN : <?php andro($val->jurusan); ?></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#">NIM : <?php andro($val->nis); ?></a></li>
          <li><a href="#">NAMA : <?php andro($val->nama_lengkap); ?></a></li>
          <li><a href="#">PRODI : <?php andro($val->kelas); ?></a></li>
          <li><a href="#">JURUSAN : <?php andro($val->jurusan); ?></a></li>
      </ul>

  <?php endforeach; ?>

  </div>
  </nav>

  <h4 id="title_ketua" style="text-align:center;">KETUA</h4>


<div class="custom0" id="ketua">
  <div class="custom">
    <div class="card">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="<?php echo $img_calon['ketua1']; ?>">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['ketua1']; ?><i class="material-icons right">more_vert</i></span>
       <p><input class="with-gap" name="ketua" type="radio" id="ketua1" value="ketua1"  />
       <label for="ketua1">Pilih</label></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['ketua1']; ?><i class="material-icons right">close</i></span>
       <p><?php echo $info_calon['ketua1']; ?></p>
     </div>
   </div>
    </div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo $img_calon['ketua2']; ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['ketua2']; ?><i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="ketua" type="radio" id="ketua2" value="ketua2"  />
     <label for="ketua2">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['ketua2']; ?><i class="material-icons right">close</i></span>
     <p><?php echo $info_calon['ketua2']; ?></p>
   </div>
 </div>
</div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo $img_calon['ketua3']; ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['ketua3']; ?><i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="ketua" type="radio" id="ketua3" value="ketua3"  />
     <label for="ketua3">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['ketua3']; ?><i class="material-icons right">close</i></span>
     <p><?php echo $info_calon['ketua3']; ?></p>
   </div>
  </div>
  </div>
</div>

<h4 id="title_wakil" style="text-align:center;display:none;" >Wakil osis</h4>

<div class="custom0" id="wakil" style="display:none;">
  <div class="custom">
    <div class="card">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="<?php echo $img_calon['wakil1']; ?>">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['wakil1']; ?><i class="material-icons right">more_vert</i></span>
       <p><input class="with-gap" name="wakil" type="radio" id="wakil1" value="wakil1"  />
       <label for="wakil1">Pilih</label></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['wakil1']; ?><i class="material-icons right">close</i></span>
       <p><?php echo $info_calon['wakil1']; ?></p>
     </div>
   </div>
    </div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo $img_calon['wakil2']; ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['wakil2']; ?><i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="wakil" type="radio" id="wakil2"  value="wakil2" />
     <label for="wakil2">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['wakil2']; ?><i class="material-icons right">close</i></span>
     <p><?php echo $info_calon['wakil3']; ?></p>
   </div>
 </div>
</div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo $img_calon['wakil3']; ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4"><?php echo $nama_calon['wakil3']; ?><i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="wakil" type="radio" id="wakil3"  value="wakil3" />
     <label for="wakil3">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4"><?php echo $nama_calon['wakil3']; ?><i class="material-icons right">close</i></span>
     <p><?php echo $info_calon['wakil3']; ?></p>
   </div>
  </div>
  </div>
</div>
<div class="page-wrap">
  <div class="page-wrap2">
<a id="pilih_ketua" class="waves-effect waves-light btn" style="position:center;"><i class="material-icons right">check</i>pilih ketua</a>
<a id="pilih_wakil" class="waves-effect waves-light btn" style="display:none;"><i class="material-icons right">check</i>pilih wakil</a>
</div>
</div>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
  $("#pilih_ketua").click(function(){
    if (!$('input[name=ketua]:checked').val() ) {
      swal("Anda belum memilih", "", "warning");
}else{
    swal({
  title: 'Anda yakin ?',
  text: "",
  type: 'question',
  showCancelButton: true,
  allowOutsideClick: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Iya'
}).then(function () {
    $("#wakil").show( "fade", 2500 );
    $("#title_wakil").show( "fade", 2500 );
    $("#pilih_wakil").show( "fade", 2500 );
    $("#ketua").hide();
    $("#title_ketua").hide();
    $("#pilih_ketua").hide();
})
}
  });

  $("#pilih_wakil").click(function(){
    if (!$('input[name=wakil]:checked').val() ) {
      swal("Anda belum memilih", "", "warning");
}else{
    var ccs = $("input:radio[name=ketua]:checked").val();
    var ssc = $("input:radio[name=wakil]:checked").val();

    $.ajax({
    url :'<?php echo site_url('vote/vote_now'); ?>',
    type:'post',
    data:{
      ketua : ccs,
      wakil : ssc,
    },
    beforeSend:function(){

    },
    success:function(rs){
      swal({
    title: 'Terimakasih',
    text: "",
    type: 'success',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Keluar'
    }).then(function () {
      window.location.href='<?php echo site_url('logout/logout'); ?>';
    })
      console.log(ccs);
      console.log(ssc);
    }
});
}
  })

});
</script>
