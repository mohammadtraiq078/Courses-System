
<?php 

include("connect.php");

if(isset($_POST['send'])){
    $x = $_POST['send'];
    $select = "SELECT * FROM users WHERE id != '$x'";
    $result = mysqli_query($connect , $select);
     if($result){
        while($row = mysqli_fetch_assoc($result)){
           echo '<a href="?sender_id='.$x.'&receiver_id='.$row['id'].'&rec_name='.$row['username'].'">'.$row['username'].'</a>';
            // echo '<button id = "'.$row['id'].'" class = "btn btn-primary">'.$row['username'].'</button> <br>';
        }
     }
}

if(isset($_POST['sender'])){

    $ins = "INSERT INTO messages(message , sender , receiver) VALUES ('".$_POST["msg"]."' , '".$_POST["sender"]."' , '".$_POST["receive"]."')";
    $res = mysqli_query($connect , $ins);
}


if(isset($_POST['senderid'] , $_POST['receiverid'])){

        $sender = $_POST['senderid'];
        $receiver = $_POST['receiverid'];

         $output = "";

        $chats = mysqli_query($connect, "SELECT * FROM messages WHERE (sender = '".$sender."' AND receiver = '".$receiver."') OR 
            (sender = '".$receiver."' AND receiver = '".$sender."') ");
             // or die("failed to query".mysqli_error());
              while($chat = mysqli_fetch_assoc($chats)){
                 if($chat['sender'] == $sender){
                   $output.= "<div style='text-align:right;'>
                    <p style='background-color:lightblue; word-wrap:break-word; display:inline-block; padding: 5px; border-radius: 10px; max width:70%;'>
                    ".$chat['message']."
                    </p>
                 </div>";
       }
                 else{
                    $output.= "<div style='text-align:left;'>
                    <p style='background-color:yellow; word-wrap:break-word; display:inline-block; padding: 5px; border-radius: 10px; max width:70%;'>
                     ".$chat['message']."
                     </p>
                    </div>";
    }
} 
echo $output;
}