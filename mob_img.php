<?php
/*
    error_reporting(E_ALL);
    ini_set('display_errors','1');

    $url = $_GET['url'];
    $file_name = 'url_test.png';
*/
    function mob_image($msg_num, $proof_version){
    
    $url = 'http://ec2-54-229-74-229.eu-west-1.compute.amazonaws.com/proofhq/mob_body.php?message_num=' . $msg_num;
    $file_name = $msg_num . '_' . $proof_version . '.png';  
    
    //create image
    exec('phantomjs screen_grab.js ' . $url . ' /var/www/proofhq/mob_img/' . $file_name);

    //read from file
    $img = file_get_contents('/var/www/proofhq/mob_img/' .$file_name);
    //delete file

    //return image to browser


    return $file_name;


/*$file = $cache_job;
$type = 'image/png';
header('Content-Type:' . $type);
header('Content-Length: ' . filesize($file));
echo($file_name);*/
}
?>