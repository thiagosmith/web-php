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

function containsStr($str, $subStr){
    return strpos($str, $subStr) !== false;
}

if(isset($_GET['page'])){
    if(!containsStr($_GET['page'], '../..') && containsStr($_GET['page'], '/var/www/html/webphp')){
        include $_GET['page'];
    }else{
        echo 'You are not allowed to go outside /var/www/html/webphp/ directory!';
    }
}else{
    include 'menu.php';
}
?>
</div>
<?php
include 'templates/footer.php';
?>
