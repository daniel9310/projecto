			<?php  
				
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
					<th class="table-header-options line-left"><a href="">Options</a></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($datos as $key => $dato) {
			      		?> 
			      		<td><?=$dato['id_usr']?></td>
						<td><?=$dato['usr_username']?></td>
			      		<td><?=$dato['usr_nombre']?></td>
			      		<td><?=$dato['usr_apellido']?></td>
			      		<td><?=$dato['usr_perfil']?></td>
			      		<td><?=$dato['tusr_nombre']?></td>
			      	<?php 
			      	}
			      ?>
			        
			      </tr>
			    </tbody>
			  </table>
			  </div>