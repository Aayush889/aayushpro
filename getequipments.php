<!DOCTYPE html>
<html>
    <head>
        <title>
            demo
        </title>
        <style> 
            .back{
                background-image: url('home-background.jpg');
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
            $color: #0cf;

                .button {
                display: inline-block;
                padding: .75rem 1.25rem;
                border-radius: 10rem;
                color: #fff;
                text-transform: uppercase;
                font-size: 1rem;
                letter-spacing: .15rem;
                transition: all .3s;
                position: relative;
                overflow: hidden;
                z-index: 1;
                &:after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: $color;
                    border-radius: 10rem;
                    z-index: -2;
                }
                &:before {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0%;
                    height: 100%;
                    background-color: darken($color, 15%);
                    transition: all .3s;
                    border-radius: 10rem;
                    z-index: -1;
                }
                &:hover {
                    color: #fff;
                    &:before {
                    width: 100%;
                    }
                }
                }
                * {
                font-family: Arial;
                text-decoration: none;
                font-size: 20px;
                }
                .container {
                padding-top: 50px;
                margin: 0 auto;
                width: 100%;
                text-align: center;
                }
                .button{
                    color : yellow;
                    
                }
                .cont{
                    padding-top: 20px;
                }
                .but{
                    color : yellow;
                    padding-top : 10px;
                }
            

            
            
        </style>
    </head>
    <body>
       
    <div class="nav">
            <img src="logo.png" height=100px width=100px className="icon" />
            
            <div class="nav--txt">  
                <h2><a link href="home.html">HOME</a></h2>
                <h2><a href="getcoaches.php">COACHES</a></h2>
                <h2><a href="getplayers.php">PLAYERS</a></h2>
                <h2><a href="getteams.php">TEAMS</a></h2>
                <h2><a href="gettournaments.php">TOURNAMENTS</a></h2>
                <h2><a href="getcourt.php">COURTS</a></h2>
                <h2>EQUIPMENTS</h2>
                
            </div> 
        </div>
        <div class ="back">
        
        
    <body>
    <div class="container">
        <a href="equipmentsregister.php" class="button">BORROW</a>
    </div><br><br>
    <div class="cont">
        <center><a href="returnequiregister.php" class="but">RETURN</a></center>
    </div> 
        <table>
            <tr>
                <th>Equipment</th>
                <th>Equi_id</th>
                <th>Player_id</th>
                <th>Date out</th>
                <th>Due date</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost","root","","sports_club");
                if($conn-> connect_error){
                    die("Connection failed". $conn-> connect_error);
                }
                $sql = "SELECT * from equipments";
                $result=$conn-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["E_type"]."</td><td>". $row["E_id"]."</td><td>". $row["Player_id"]."</td><td>". $row["date_out"]."</td><td>". $row["due_date"]."</td></tr>";

                    }
                    echo "</table>";
                }
                else{
                    echo "0 result";
                }
                $conn-> close();
            ?>
        </table>
            </div>
    </body>
</html>