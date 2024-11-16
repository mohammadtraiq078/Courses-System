<?php

include("connect.php");


if(isset($_POST['crs_name'])){
    $c1 = $_POST['crs_name'];
    

    $ins = "INSERT INTO courses (course_name) VALUES ('$c1')";
    $res = mysqli_query($connect , $ins);

    if($res){
        echo "SUCCESS_COURSE";
    }
    else{
        echo "FAIL_COURSE";
    }
}

if(isset($_POST['crs_id'])){
    $insert = "INSERT INTO asigned_courses (user_id , course_id) values ('".$_POST['usr_id']."' , '".$_POST['crs_id']."')";
    $result = mysqli_query($connect , $insert);

    if($result){
        echo "insert_crs_success";
    }
}

if(isset($_POST['u_i'])){
    $MRK = $_POST['mar'];
    $uid = $_POST['u_i'];
    $cid = $_POST['c_i'];
    $upd = "UPDATE asigned_courses SET mark = '$MRK' WHERE user_id = '$uid' AND course_id = '$cid'";
    $ures = mysqli_query($connect , $upd);

    if($ures){
        echo "SUCESS";
    }
    else{
        echo "FAIL";
    }
}