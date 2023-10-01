<html>
    <style>
            body{
                background-image : url('home-background.jpg')
            }
            .nav {
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                background-color: black;
                padding: 15px;
                margin: 0px;
            }


            .nav--txt {
                display: flex;
                column-gap: 25px;
                color: #f36e26;
                font-size: 12px;
                font-weight: 400;
            }
    </style>
        <body bgcolor="#ff6600">
        <div class="nav">
            <img src="logo.png" height=100px width=100px className="icon" />
            
            <div class="nav--txt">  
                <h2><a link href="home.html">HOME</a></h2>
                <h2>COACHES</h2>
                <h2><a href="getplayers.php">PLAYERS</a></h2>
                <h2><a href="getteams.php">TEAMS</a></h2>
                <h2><a href="gettournaments.php">TOURNAMENTS</a></h2>
                <h2><a href="getcourt.php">COURTS</a></h2>
                <h2><a href="getequipments.php">EQUIPMENTS</a></h2>
                
            </div> 
        </div>
<?php
    
    
    $conn = mysqli_connect("localhost","root","","sports_club");
    
    
    
    if(isset($_POST['Submit'])){

        if(! empty($_POST['PlayerID']) || !empty($_POST['EquipmentID']) /*|| !empty($_POST['date'])*/){
            
            //$playerid=$_POST['Player_id'];
            $PlayerID = $_POST['PlayerID'];
            $EQID= $_POST['EquipmentID'];
            $dateout = date("Y-m-d");
            $duedate = Date('y:m:d', strtotime('+15 days'));

            $query= "UPDATE equipments SET Player_id=$PlayerID, date_out='$dateout', due_date='$duedate' WHERE E_id=$EQID ";

            $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
           

            if($run){
                
               echo "<center><script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script><lottie-player src=\"https://assets6.lottiefiles.com/packages/lf20_ff5x2pjo.json\"  background=\"transparent\"  speed=\"1\"  style=\"width: 300px; height: 300px;\"  loop autoplay></lottie-player></center>";
               echo "<center><h1><font color='white'>UPDATED successfully</font></h1></center>";
               
            }
            else{
                echo "form not submitted";
            }
        }
    }   
    else{
        echo "all fields are required";
        die();
   }
?>

</body>
</html>
