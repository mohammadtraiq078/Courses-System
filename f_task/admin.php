<?php 
session_start();

$_SESSION["admin_id"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>admin</title>
</head>

<body>

    <!-- nav st -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                    <?php echo '<a class="nav-link" href="chat.php?sender_id='.$_SESSION["admin_id"].'">chat</a>'?>
                    <a class="nav-link" href="login.php">log out</a>
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    


        <!-- modal add course strt -->
       
        <center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#course-modal" id="btn_c">
           <h4> assign course</h4>
        </button></center>

            
        <div class="modal" tabindex="-1" id="course-modal">
                    
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <h3 id="">assign course</h1>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">



                            <div id="form_reg">
                                <form method="POST">
                                        <div class="mb-3">
                                            <label for="" class="form-label">course name</label>
                                            <input type="text" class="form-control" id="crs_nm" >
                                            
                                        </div>
                                        
                                        
                                </form><br><br>
                               
                                
                            </div>



                            </div>
                            <div class="modal-footer">
                                
                                <button class="btn btn-primary" id="btn_ad_crs">Add</button>
                            </div>
                        </div>
                    </div>
                
            </div>

        <!-- modal add course end -->

        <!-- modal sign courses to users strt -->
       
<br><br>
        <center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#course-as-modal" id="btn_as">
           <h4> assign course to user</h4>
        </button></center>

            
        <div class="modal" tabindex="-1" id="course-as-modal">
                    
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <h3 id="">assign course</h1>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="selct_div">


                            </div>
                            <div class="modal-footer">
                                
                            <input type="button" id="crs_usr_btn" value="assign" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                
            </div>

        <!-- modal sign courses to users end -->


        <!-- ****************************asign mark to user strt************************* -->
<br><br>
        <center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#course-as-mark" id="btn_mark">
           <h4> assign mark to user</h4>
        </button></center>

            
        <div class="modal" tabindex="-1" id="course-as-mark">
                    
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <h3 id="">assign mark</h1>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" >
                            <div id="selct_div_mark"></div>
                            <div id="selct_div_mark_crs"></div>
                            </div>
                            
                            <div class="modal-footer">
                            <input id="f_crs" type="button" value="find courses">
                                <button class="btn btn-primary" id="btn_ad_mrk">Add</button>
                            </div>
                        </div>
                    </div>
                
            </div>
        <!-- *************************************asign mark to user end************************************* -->
    <!-- modal add users st-->
  
        <center><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal" id="btn_m">
           <h4> click to add users</h4>
        </button></center>

        
            
               



                <div class="modal" tabindex="-1" id="reg-modal">
                    
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <h3 id="">add users</h1>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">



                                <div id="form_reg">
                                    <form method="POST">
                                            <div class="mb-3">
                                                <label for="" class="form-label">UserName</label>
                                                <input type="text" class="form-control" id="uname_inp2" aria-describedby="emailHelp">
                                                
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email_inp2">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="pass_inp2">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="conf_pass2">
                                            </div>
                                            
                                    </form><br><br>
                                   
                                    
                                </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" id="btn_2">Add</button>
                                </div>
                            </div>
                        </div>
                    
                </div>

    <!-- modal add user end -->
    <!-- modal update user strt -->
    
    <div class="modal" tabindex="-1" id="updt-modal">
                    
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <h3 id="">update users</h1>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">



                            <div id="form_reg">
                                <form method="POST">
                                        <div class="mb-3">
                                            <label for="" class="form-label">UserName</label>
                                            <input type="text" class="form-control" id="uname_inp3" aria-describedby="emailHelp">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email_inp3">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="pass_inp3">
                                        </div>
                                        <br><br>
                                        <div class="mb-3">

                                            <input type="button" class="btn btn-primary" id="acti_btn" value="activate">
                                        </div>
                                        
                                </form><br><br>
                               
                                
                            </div>



                            </div>
                            <div class="modal-footer">
                                
                            
                                <input type="button" class="btn btn-primary" id="btn_012" value="Add">
                            </div>
                        </div>
                    </div>
                
            </div>
    <!-- modal update user end -->
  <center>  <div id="fe_users"></div></center>



<script src="jquery-3.6.0.min.js"></script>
<script src="admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>

</html>