<?php 


$whitelist = array('127.0.0.1', "::1");

//jika sambungan internet
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    echo 'ini adalah internet';
}else{

echo 'ini tiada sambungan internet';
};

?>

