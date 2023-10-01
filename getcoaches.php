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
            .search{
                display : flex;
                justify-content : center;
                padding-top : 25px;
            } 
            .nope{
                
            }
            </style>
    </head>
    <body>
       
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
        <div class="search">
            <form action="getcoachesbysport.php" method="post" autocomplete="on">
                <label for="Coachbysport" style="color : white;"><h2> Search Coach by sport:</h2> </label>
                <select name="Coachbysport" id="Coachbysport">
                    <option value="football">Football</option>
                    <option value="cricket">Cricket</option>
                    <option value="basketball">Basketball</option>
                    <option value="badminton">Badminton</option>
                </select>
                <input type="Submit" name="Search" class="nope" value="SEARCH">
            </form>
        </div>
        
    <body>
        <table>
            <tr>
                <th>Coach_id</th>
                <th>C_name</th>
                <th>sport</th>
                <th>address</th>
                <th>phone_no</th>
                <th>experience</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost","root","","sports_club");
                if($conn-> connect_error){
                    die("Connection failed". $conn-> connect_error);
                }
                $sql = "SELECT * from coaches";
                $result=$conn-> query($sql);
                if($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["Coach_id"]."</td><td>". $row["C_name"]."</td><td>". $row["sport"]."</td><td>". $row["address"]."</td><td>". $row["phone_no"]."</td><td>". $row["experience"]."</td></tr>";

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
