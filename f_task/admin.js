



    $(function(){

// ******************************asign mark strt***********************************************

        $("#selct_div_mark").load("ajax_files/user_usrs_mrk.php #usrs-sel2" , function(){
            $("#f_crs").click(function(){
            var usr_id_mrk = $("#sel02").children("option:selected").val();
            console.log(usr_id_mrk);
            $.post(
                "ajax_files/user_crs_mrk.php",
                {usr_mrk_id : usr_id_mrk},
                function(one , two , three){
                    console.log(one);
                    console.log(two);
                    console.log(three);
                    $("#selct_div_mark_crs").html(one);

                    
                }
            ); 

            });

           
        });
        $("#btn_ad_mrk").click(function(){
            var q = $("#sel02").children("option:selected").val();
            var w = $("#sel03").children("option:selected").val();
            var v = $("#add_crs_mr101").val();
            if(q != "" && w != "" && v != ""){
                console.log(q + "llllllll");
                 console.log(w + "llllllll");
                console.log(v + "1111111111");

                $.post(
                    "ajax_files/course.php",
                    {u_i : q , c_i : w , mar : v},
                    function(data){
                        if(data == "SUCESS"){
                            alert("mark was added successfully");
                        }
                    }
                );
            }
        });
       
// *******************************asign mark end************************************************

// ***************************asign course to user strt************************************

$("#selct_div").load("ajax_files/course_as.php #selec_crs" , function(){
            
    $("#crs_usr_btn").click(function(){ 
            
            var crs_id = $("#sel1").children("option:selected").val(); 
            
            var uid = $("#sel2").children("option:selected").val(); 
            
            
            if(crs_id != "" && uid != ""){
                $.post(
                    "ajax_files/course.php",
                    {crs_id : crs_id , usr_id : uid },
                    function(data){
                        if(data == "insert_crs_success"){
                            alert("submitted successfully");
                            $("#mrk_v").val("");
                        }
                    }
                );
            }
        });




});
// *******************************asign course to user end*******************************

        // ****************************add users strt***************************
        $("#btn_2").click(function(){
             var uname2 = $("#uname_inp2").val();
             var e_mail2 = $("#email_inp2").val();
             var pass2 = $("#pass_inp2").val();
             var conf_pass2 = $("#conf_pass2").val();
             
             if(uname2 != "" && e_mail2 != "" && pass2 != "" && conf_pass2 != ""){
                 if(pass2 == conf_pass2){
                     if(pass2.length > 7){
                        if(pass2.indexOf('_') != -1){
                             $.post(
                                 "ajax_files/login_ajx.php",
                                 {username2 : uname2 , mail2 : e_mail2 , password2 : pass2 , acti : 1},
                                 function(data){
                                     if(data == "success_reg_ad"){
                                         alert("Registered Succefully and user is activated.");
                                         $("#fe_users").load("ajax_files/fetch_ajx.php #table_div");
                                     }
                                     else if(data == "fail_reg_ad"){
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
// ****************************add users end***************************


// **********************asign corse strt*************************


$("#btn_ad_crs").click(function(){

    var crs_nm = $("#crs_nm").val();
    

    if(crs_nm != ""){
        $.post(
            "ajax_files/course.php",
            {crs_name : crs_nm },
            function(data , status){
                console.log(data);
                console.log(status);
                if(data == "SUCCESS_COURSE"){
                    alert("course was added successfully");
                    $("#crs_nm").val("");
                    
                }
                else if(data == "FAIL_COURSE"){
                    alert("something went wrong ")
                }

                $("#selct_div").load("ajax_files/course_as.php #selec_crs");
            }
        );
    }
    else{
        alert("please fill all the fields.");
    }
});
// **********************asign corse end***************************










//**********************************delete user strt******************************* */

        $("#fe_users").load("ajax_files/fetch_ajx.php #table_div" , function(){
            $("input").click(function(){
                


                if($(this).attr("value") == "Delete"){

                    var usr_id = $(this).attr("id");
                    var text = "are you sure you want to delete this user?";
                        if(confirm(text) == true){
                            
                            $.post(
                                "ajax_files/de&updt.php",
                                {userid : usr_id},
                                function(data){
                                    if(data == "delet_success"){
                                        alert("user with id " + usr_id + " was deleted!");
                                        $("#fe_users").load("ajax_files/fetch_ajx.php #table_div");
                                    }
                                    else if(data == "delete_fail"){
                                        alert("something went wrong ! user was not deleted.");
                                    }
                            });
                        }
                }

                // ************************************delete user end*******************************************************
            //    ******************************update strt**************************

                else if($(this).attr("value") == "Update"){

                    var usr_id = $(this).attr("id");

                    $("#btn_012").click(function(){

                        var u_name = $("#uname_inp3").val();
                        var u_email = $("#email_inp3").val();
                        var u_pass = $("#pass_inp3").val();

                        if(u_name != "" && u_email != "" && u_pass != ""){

                                if(u_pass.length > 7){
                                    if(u_pass.indexOf('_') != -1){
                                        $.post(
                                            "ajax_files/update.php",
                                            {user_nm : u_name , user_emil : u_email , user_pss : u_pass , user_id : usr_id},

                                            function(data , two){
                                                console.log(data);
                                                console.log(two);
                                               if(data == "updt_sucess"){
                                                alert("user with id  " + usr_id + "was updated");
                                                $("#uname_inp3").val("");
                                                $("#email_inp3").val("");
                                                $("#pass_inp3").val("");

                                                $("#fe_users").load("ajax_files/fetch_ajx.php #table_div");
                                               }
                                               else if(data == "updt_fail"){
                                                alert("something went wrong , user with id  " + usr_id + "was not updated");
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
                            alert("please fill all the fields");
                        }
                    });
// *************************************update************************
// ****************************activate**********************
                    $("#acti_btn").click(function(){
                        $.post(
                            "ajax_files/de&updt.php",
                            {u_id : usr_id},
                            function(data){
                                if(data == "activate_success"){
                                    alert("user with id " +  usr_id +" was activated!");
                                }
                                else if(data == "activate_fail"){
                                    alert("something went wrong ! user with id " + usr_id + "  was not activated.");
                                }
                            }
                        );
                    });
                }
                
//**********************************delete user end******************************* */  

// ****************************************add course strs******************************************
 
// // ****************************************add course end******************************************

                    });
            });


         

              
           

        });
       



