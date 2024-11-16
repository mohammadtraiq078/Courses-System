<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    

<center><div id="reg_div">
        <h2 id="h_1">Login Form</h3>
        <div id="form_reg">
            <form method="POST">
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_inp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass_inp">
                    </div>
                  
                    
            </form><br><br>
            <button type="submit" class="btn btn-primary" id="btn_1">Login</button>
            <p id="p_1">you dont have an accounte?</p><a href="register.php" >click here</a>
        </div>
    </div></center>
<br><br><br><br>


    <script src="jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            $("#btn_1").click(function(){
                var email = $("#email_inp").val();
                var pass = $("#pass_inp").val();

                if(email != "" && pass != ""){
                    $.post(
                    "ajax_files/login_ajx.php",
                    {email : email , pass : pass},
                    function(data , two , three){
                        console.log(data);
                        console.log(two);
                        console.log(three);
                        if(data == "sucess_user_login_activated"){
                            window.location = "user.php";
                        }
                        else if(data == "fail_login_not_active"){
                            alert("user is not activated");
                        }
                        else if(data == "sucess_admin_login"){
                            window.location = "admin.php";
                        }
                        else if(data == "fail_login"){
                            alert("log in fialed!.");
                        }
                    }
                );
                }
                else{
                    alert("please fill all the fields!");
                }
              
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>