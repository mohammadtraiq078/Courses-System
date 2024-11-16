<?php
include("connect.php");
session_start();

// *******************register strt*************************************
    if(isset($_POST["username"])){

        
        $insert = "INSERT INTO users(username , email , password) VALUES ('".$_POST["username"]."' , '".$_POST["mail"]."' , '".$_POST["password"]."')";
        $res = mysqli_query($connect , $insert);

        if($res){
            echo "success_reg";
        }
        else{
            echo "fail_reg";
        }
    }

// *******************register end*************************************

// ******************login strt********************************
    if(isset($_POST["email"])){

        $x1 = $_POST['email'];
        $x2 = $_POST['pass'];

        $sel = "SELECT * FROM users WHERE email = '$x1' AND password = '$x2'";
        $res2 = mysqli_query($connect , $sel);
        

        if(mysqli_num_rows($res2) == 1){

            $row = mysqli_fetch_assoc($res2);
           if($row["user_type"] == 0){
                if($row['activated'] == 1 ){
                    $_SESSION["user_id"] = $row['id'];

                    echo "sucess_user_login_activated";
                }
                else{
                    echo "fail_login_not_active";
                }
           }
           elseif($row["user_type"] == 1){
                $_SESSION["admin_id"] = $row['id'];
                echo "sucess_admin_login";
           }
            
        }
        else{
                echo "fail_login";
        }
      
    }
// ******************login end********************************

// ***************************reg by admin strt*********************
    if(isset($_POST["username2"])){

        
        $insert2 = "INSERT INTO users(username , email , password , activated) VALUES ('".$_POST["username2"]."' , '".$_POST["mail2"]."' , '".$_POST["username2"]."', '".$_POST["acti"]."')";
        $res_3 = mysqli_query($connect , $insert2);

        if($res_3){
            echo "success_reg_ad";
        }
        else{
            echo "fail_reg_ad";
        }
    }
// ***************************reg by admin end*********************