<?php
include 'templates/header.php';
?>
<div class="container mt-4">
<?php
ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', false);
ini_set('allow_url_include', false);
ini_set('allow_url_include', 'Off');

if(isset($_GET['page'])){
	include($_GET['page']);
}else{
   	include 'menu.php';
}
?>
</div>
<?php
include 'templates/footer.php';
?>
