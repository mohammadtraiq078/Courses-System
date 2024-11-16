<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/register.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
    

<center><div id="reg_div">
        <h2 id="h_1">Registration Form</h3>
        <div id="form_reg">
            <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="uname_inp" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_inp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass_inp">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="conf_pass">
                    </div>
                    
            </form><br><br>
            <button type="submit" class="btn btn-primary" id="btn_1">Register</button>
            
        </div>
    </div></center>
<br><br><br><br>



    <script src="jquery-3.6.0.min.js"></script>
    <script>

    $(function(){

       $("#btn_1").click(function(){
            var uname = $("#uname_inp").val();
            var e_mail = $("#email_inp").val();
            var pass = $("#pass_inp").val();
            var conf_pass = $("#conf_pass").val();
            
            if(uname != "" && e_mail != "" && pass != "" && conf_pass != ""){
                if(pass == conf_pass){
                    if(pass.length > 7){
                       if(pass.indexOf('_') != -1){
                            $.post(
                                "ajax_files/login_ajx.php",
                                {username : uname , mail : e_mail , password : pass},
                                function(data){
                                    if(data == "success_reg"){
                                        alert("Registered Succefully");
                                        window.location = "login.php";
                                    }
                                    else if(data == "fail_reg"){
                                        alert("Register Fail!");
                                    }
                                }
                            );
                       }
                       else{
                        alert("your password must contain (_).")
                       }
                    }
                    else{
                        alert("your password is too short! please reenter a longer password.");
                    }
                }
                else{
                    alert("password does not match");
                }
            }
            else{
                alert("please fill all the fields!")
            }
       }); 
    });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>