<?php 
    $pic_name = $_FILES['pic']['name'];
    $name = $_POST['name'];
    mkdir("uploader/".$name);
    $array = explode("." , $pic_name); // like split in js => 1.png =>out => [1][png]
    $ext = end($array); // png
    $new_name = rand().".".$ext;
    $from = $_FILES['pic']['tmp_name'];
    $to = "uploader/".$name."/".$new_name;
    move_uploaded_file($from , $to);
    