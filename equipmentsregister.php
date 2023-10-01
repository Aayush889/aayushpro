<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    
  	<div class="container">
        <form action="insertequipments.php" method="post" autocomplete="on">
        
    		<div class="box">
          <label for="ID" class="fl fontLabel"> Player ID: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    			        <input type="text" name="PlayerID" placeholder="Player ID"
                        class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
        <div class="box">
                <label for="address" class="fl fontLabel"> Date out: </label>
                      <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                      <div class="fr">
                        <input id="date" name="date"> 
                            <script type="text/javascript"> 
 	                            document.getElementById('date').value = new Date().toJSON().slice(0,10).replace(/-/g,'/'); 
                            </script>	
                      </div>
                      <div class="clr"></div>
                  </div>
    		
    		<div class="box">
                <label for="Sport" class="fl fontLabel"> Equipment ID: </label>
                      <div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
                      <div class="eqiup">

                       <select name="EquipmentID" class="textbox">
                          <option value="">Select E_id</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","sports_club");
                            if($conn-> connect_error){
                                die("Connection failed". $conn-> connect_error);
                            }
                            $sql = "SELECT E_id from equipments where Player_id is null";
                            $result=$conn-> query($sql);
                            if($result->num_rows> 0){
                              while($optionData=$result->fetch_assoc()){
                              $option =$optionData['E_id'];
                          ?>
                           <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                         <?php
                          }
                        }
                          ?><?php
                            $conn-> close();
                         ?>
                         </select>
                      </div>
                      <div class="clr"></div>
                  </div>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    	
      </form>
  </div>
  
  </body>
</html>