<!-- Css Limpar -->
<?php
function tec_clear(){
?>
<div style="clear: both;display:block;overflow:hidden;visibility:hidden;width:0;height:0;"></div>
<?php
}
?>
<!-- Contador de Views Wordpress-->
<?php
// Mostra  quantidade de views 
function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0";
}
return $count.'';
}

// function to count views.
function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}

?>
<!-- Medidor de tela! -->
<?php 
function  tec_screenresult(){
?>
<script>
function alertSize() {
  var largura = 0, altura = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    largura = window.innerWidth;
    altura = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    largura = document.documentElement.clientWidth;
    altura = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    largura = document.body.clientWidth;
    altura = document.body.clientHeight;
  }
  
  return [ alert("Largura: "+largura+" px\nAlturar: "+altura+" px") ];
}
</script>

	<script>
	alertSize();
	</script>
<?php 
 }?>
