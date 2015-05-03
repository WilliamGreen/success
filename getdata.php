<?php

			$bname = $_REQUEST["bname"];
			$business = $_GET['bus'];

        	$link = mysqli_connect('eu-cdbr-azure-west-a.cloudapp.net', 'b915fe5d773cac', '8f8338f4'); 

			$servername = "eu-cdbr-azure-west-a.cloudapp.net";
			$username = "b915fe5d773cac";
			$password = "8f8338f4";
			$dbname = "success";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			// PHP for execution

			$sql = "SELECT id, bname, bicon, rafrica, rasia, roceania, reurope, rsouthamerica, rnorthamerica, traffic, revenue, profit FROM business WHERE id = ".$business;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
    			// output data of each row
    			while($row = $result->fetch_assoc()) {
        			$b3name = $row["bname"] ;
        			$b3icon = $row["bicon"] ;
        			$b3rafrica = $row["rafrica"] ;
        			$b3rasia = $row["rasia"] ;
        			$b3roceania = $row["roceania"] ;
        			$b3reurope = $row["reurope"] ;
        			$b3rsouthamerica = $row["rsouthamerica"] ;
        			$b3rnorthamerica = $row["rnorthamerica"] ;
        			$b3traffic = $row["traffic"] ;
        			$b3revenue = $row["revenue"] ;
        			$b3profit = $row["profit"] ;
    			}
			} else {
    			echo "0 results";
			}

			$output = array(
			    'name' => $b3name,
			    'icon' => $b3icon,
			    'rafrica' => $b3rafrica,
			    'rasia' => $b3rasia,
			    'roceania' => $b3roceania,
			    'reurope' => $b3reurope,
			    'rsouthamerica' => $b3rsouthamerica,
			    'rnorthamerica' => $b3rnorthamerica,
			    'traffic' => $b3traffic,
			    'revenue' => $b3revenue,
			    'profit' => $b3profit,
			);
			
			echo json_encode($output);

?>