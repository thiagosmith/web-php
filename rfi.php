<?php
include 'templates/header.php';
?>
<div class="container mt-4">
<?php
ini_set('display_errors', false);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);
ini_set('allow_url_include', 'on');

if(isset($_GET['page'])){
    if(preg_match("/(data|http|https|ftp):\/\/([a-zA-Z0-9-_]+).([a-zA-Z0-9-_]+)/", $_GET['page'])){
        echo "Your URL is not allowed";
    }else{
        include $_GET['page'];
    }
}else{
    include 'menu.php';
}
?>
</div>
<?php
include 'templates/footer.php';
?>
