<!DOCTYPE html>
<html>
    <head>
        <title>
            demo
        </title>
        <style> 
            body{
                background-image : url('home-background.jpg');
                background-size: cover;
    background-color: red;
    height: 800px;

    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    
            }
            *{
                margin : 0px;
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
           
            table{
                border-collapse : collapse;
                width : 100%;
                color : #d96459;
                font-family : monospace;
                font-size : 25px;
                text-align : left;
                padding: 50px;
                margin-top:150px;
            }
            th{
                background-color : #d96459;
                color : white;
            }
            tr:nth-child(even){
                background-color: #f2f2f2;
            }
            a{
                color : white;
                text-decoration :none;
            } 
            
        </style>
    </head>
    <body>
    <div class="nav">
            <img src="logo.png" height=100px width=100px className="icon" />
            
            <div class="nav--txt">  
                <h2><a link href="home.html">HOME</a></h2>
                <h2><a link href="getcoaches.php">COACHES</a></h2>
                <h2>PLAYERS</h2>
                <h2><a href="getteams.php">TEAMS</a></h2>
                <h2><a href="gettournaments.php">TOURNAMENTS</a></h2>
                <h2><a href="getcourt.php">COURTS</a></h2>
                <h2><a href="getequipments.php">EQUIPMENTS</a></h2>
                
            </div> 
        </div>
    <body>
        <table>
            <tr>
                <th>Player_id</th>
                <th>P_name</th>
                <th>sport</th>
                <th>address</th>
                <th>phone_no</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost","root","","sports_club");
                if($conn-> connect_error){
                    die("Connection failed". $conn-> connect_error);
                }
                $sql = "SELECT Player_id,P_name,sport,address,phone from players WHERE sport='badminton'";
                $result=$conn-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["Player_id"]."</td><td>". $row["P_name"]."</td><td>". $row["sport"]."</td><td>". $row["address"]."</td><td>". $row["phone"]."</td></tr>";

                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conn-> close();
            ?>
        </table>
    </body>
</html>
