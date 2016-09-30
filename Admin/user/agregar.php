
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
		<!-- <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
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
		</form> -->
		<div  >
          <div class="col-md-6 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                                        <div class="form-main">
                                            <form class="form" action="<?=$CONFIG['sitio']?>Modificarlink.php" method="POST">
                                            	<input type="hidden" name="p" value="usuarios" class="feedback-input">
		  										<input type="hidden" name="j" value="agregar" class="feedback-input">
                                                
                                                <p>
                                                    <input name="idusr" type="number" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                                                </p>

                                                <p >
                                                    <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                                                </p>

                                                <p >
                                                    <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                                                </p>

                                                <p>
                                                    <input name="usrname" type="text" class="feedback-input" placeholder="NOMBRE DE USUARIO" id="usrname" />
                                                </p>

                                                <p >
                                                    <input name="password" type="password" class="feedback-input" placeholder="CONTRASEÑA" id="password" />
                                                </p>

                                                <p >
                                                    <input name="perfil" type="text" class="feedback-input" id="perfil" placeholder="PERFIL" />
                                                </p>

                                                <p >
                                                    <input name="tipo" type="number" max="6" maxlength="2" min="1" class="feedback-input" id="tipo" placeholder="TIPO DE USUARIO" />
                                                </p>

                                                <div class="submit">
                                                    <input type="submit" value="Submit" class="form-button" />

                                                </div>
                                            </form>
                                            <!-- <iframe src="<?=$CONFIG['sitio']?>Modificarlink.php " id="Modicar" name="Modifi" style="height: 0px; width: 0px;"></iframe> -->
                                        </div>

                                    </div>
                                </div>

	

		

