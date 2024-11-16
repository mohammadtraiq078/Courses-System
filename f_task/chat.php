<?php
include("ajax_files/connect.php");

$reveiv_name = "";

if(isset($_GET["receiver_id"])){
    
    $receiver = $_GET["receiver_id"];
    $receiver_nm = $_GET["rec_name"];
    $reveiv_name = $receiver_nm;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/chat.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>chat</title>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="chat.php">chat</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link ">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- nav end -->

    <?php if (isset($_GET["sender_id"])) { ?>
        <input type="text" value="<?php echo $_GET["sender_id"]; ?>" id="sender_inp" hidden>
    <?php } 

    if(isset($_GET["receiver_id"])){?>
    
         <input type="text" value="<?php echo $_GET["receiver_id"]; ?>" id="receiver_inp" hidden>
         <?php } ?>

    <div id="usrs_ftch" class="card">
     
     
    </div>

      <center>  
        <div id="msg-header" class="card"><h4 id="h_4"> <?php echo $reveiv_name; ?></h4></div>
        <div id="msg-body" class="card">

        </div>

        <div id="insert-message" class="card">
            <textarea name="" id="txt_erea" cols="30" rows="2"></textarea><br>
            <button id="send_btn" class="btn btn-primary">send</button>
        </div>
    </center>




    <script src="jquery-3.6.0.min.js"></script>
    <script>
        $(function() {

           

            var sender = $("#sender_inp").val();
            var receiver = $("#receiver_inp").val();

                if(sender != ""){

                    $.post(
                        "ajax_files/chat_back.php", 

                        {send: sender},
                    
                        function(data, two, three) {
                            console.log(data);
                            console.log(two);
                            console.log(three);
                            $("#usrs_ftch").html(data);
                        }

                    );
                }

            $("#send_btn").click(function(){

                var message = $("#txt_erea").val();
                
                    if(message != ""){
                        $.post(
                            "ajax_files/chat_back.php",
                            {sender : sender , receive : receiver , msg : message},
                            function(){
                            $("#txt_erea").val("");


                                    if(sender != "" && receiver != ""){
                                        $.post(
                                            "ajax_files/chat_back.php",
                                            {senderid : sender , receiverid : receiver},
                                            function(data , two , three){
                                                console.log(data);
                                                    console.log(two);
                                                    console.log(three);
                                                    $("#msg-body").html(data);
                                            }
                                        );
                                    }
                        }
                            );
                    }
            });


            if(sender != "" && receiver != ""){
            
            // setInterval(function(){
                
                $.post(
                    "ajax_files/chat_back.php",
                    {senderid : sender , receiverid : receiver},
                    function(data , two , three){
                        console.log(data);
                            console.log(two);
                            console.log(three);
                            $("#msg-body").html(data);

                            $.post(
                            "ajax_files/chat_back.php",
                            {senderid : sender , receiverid : receiver},
                            function(data , two , three){
                                console.log(data);
                                console.log(two);
                                console.log(three);
                                $("#msg-body").html(data);
                    },
                    
                );
                    },
                    
                );
            
            // }, 700);
          }

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>

</html>