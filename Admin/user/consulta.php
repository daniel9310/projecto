			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/usuario.php");
				$objUser = new datos;
				$datos = $objUser->Consultar_datos(1);
			 ?>

			 <div class="table-responsive">
			  <table class="table">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>USUARIO</th>
			        <th>NOMBRE</th>
			        <th>APELLIDO</th>
			        <th>PERFIL</th>
			        <th>DEPARTAMENTO</th>

			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($datos as $row) {
			      		?> 
			      			
			      			<?php 
			      				foreach ($row as $dato) {
			      			?>
			      			<td><?=$dato?></td>
			      			<!--<td><?=$dato['id_usr']?></td>
							<td><?=$dato['usr_username']?></td>
				      		<td><?=$dato['usr_nombre']?></td>
				      		<td><?=$dato['usr_apellido']?></td>
				      		<td><?=$dato['usr_perfil']?></td>
				      		<td><?=$dato['tusr_nombre']?></td>
				      		-->
			      			<?php		
			      				}
			      			 ?>
			      			<td >Editar</td>
			      			<td >Eliminar</td>
			      		</tr>
			      	<?php 
			      	}
			      ?>
			        
			      </tr>
			    </tbody>
			  </table>
			  </div>