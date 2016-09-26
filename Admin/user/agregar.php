
 	<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $genderErr = $websiteErr = "";
		$name = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
		    $nameErr = "Name is required";
		  } else {
		    $name = test_input($_POST["name"]);
		  }
		  
		  if (empty($_POST["email"])) {
		    $emailErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		  }
		    
		  if (empty($_POST["website"])) {
		    $website = "";
		  } else {
		    $website = test_input($_POST["website"]);
		  }

		  if (empty($_POST["comment"])) {
		    $comment = "";
		  } else {
		    $comment = test_input($_POST["comment"]);
		  }

		  if (empty($_POST["gender"])) {
		    $genderErr = "Gender is required";
		  } else {
		    $gender = test_input($_POST["gender"]);
		  }
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>
 	 <h2>Agregar Usuarios</h2>
		<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		  <input type="hidden" name="p" value="usuarios">
		  <input type="hidden" name="j" value="agregar">
		  Nombre: <input type="text" name="name">
		  <span class="error">* <?php echo $nameErr;?></span>
		  <br><br>
		  Apellido: <input type="text" name="email">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		  Nombre de Usuario: <input type="text" name="email">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		  Contraseña: <input type="text" name="email">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		 
		  Tipo de Usuario: <input type="number" name="email" min="1" max="5">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		  Perfil de Usuario: <input type="text" name="email">
		  <span class="error">* <?php echo $emailErr;?></span>
		  <br><br>
		  Sexo:
		  <input type="radio" name="gender" value="female">Femenino
		  <input type="radio" name="gender" value="male">Masculino
		  <span class="error">* <?php echo $genderErr;?></span>
		  <br><br>
		  <input type="submit" name="submit" value="Submit">  
		</form>


		<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $website;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
		?>

		 <!-- <?php
			/* $servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('John', 'Doe', 'john@example.com')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();*/
		?> --> 

