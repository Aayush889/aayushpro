<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header("Content-Type: application/json; charset=UTF-8");

    

    $rest_json = file_get_contents("php://input");

    $_POST = json_decode($rest_json, true);
    
    $conn = mysqli_connect("localhost","root","","sports_club");

    //'" . $_POST['email'] . "'

   $a= $_POST['sport']

    if($conn-> connect_error){
        die("Connection failed". $conn-> connect_error);
    }

    $sql = "SELECT * from coaches where sport=cricket ";

    $result=$conn-> query($sql);

    if($result-> num_rows > 0){

        $data = array();

        while($row = $result-> fetch_assoc()){

            $row = array("coachId"=>$row["Coach_id"], "name"=>$row["C_name"], "sport"=>$row["sport"], "address"=>$row["address"], "phoneNumber"=>$row["phone_no"], "experience"=>$row["experience"]);

            array_push($data, $row);

            // echo "<tr><td>". $row["Coach_id"]."</td><td>". $row["C_name"]."</td><td>". $row["sport"]."</td><td>". $row["address"]."</td><td>". $row["phone_no"]."</td><td>". $row["experience"]."</td></tr>";

        }
        print json_encode($data);
    }
    else{
        print "0 result";
    }

    $conn-> close();
?>