<script>
$(document).ready(function(){
  /*
  swal("Terimakasih", "Anda sudah memilih", "success");
  */
  swal({
title: 'Anda yakin ?',
text: "",
type: 'success',
showCancelButton: false,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then(function () {
  window.location.href='<?php echo site_url('logout/logout'); ?>';
})
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
});
</script>
<meta http-equiv="refresh" content="4;url=<?php echo site_url('logout'); ?>">
