<?php 

include("connect.php");

if(isset($_POST['usr_mrk_id'])){
    $select ="SELECT * FROM asigned_courses WHERE user_id = '".$_POST['usr_mrk_id']."'";
    $ressult = mysqli_query($connect , $select);

    if(mysqli_num_rows($ressult) > 0){
       echo '<select name="" id="sel03">';

         foreach($ressult as $row1){
            $sel2 = "SELECT * FROM courses WHERE id = '".$row1['course_id']."'";
            $res2 = mysqli_query($connect , $sel2);

             foreach($res2 as $row2){
                echo '<option value="'.$row2['id'].'">'.$row2['course_name'].'</option>';
                 }

        

            }
         echo '</select>';
         echo '<br><input type="text" name="" id="add_crs_mr101">';
    }
    else{
        echo "<p>no courses for this user</p>";
    }

}


?>




    
       
    


