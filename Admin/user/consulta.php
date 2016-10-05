			<?php  
				require_once($CONFIG['pathinclude']."config/cx.php");
				require_once($CONFIG['pathinclude']."cls/usuario.php");
				$objUser = new datos;
				$datos = $objUser->Consultar_datos(1);
				//echo "<pre>".print_r($dato,1)."</pre>";
				//$delete = $objUser->Borrar_datos()
			 ?>
			 <script type="text/javascript">
			 	function editar(id_usr){
			 		
			 		frmEditUser.elements['id_usr'].value = id_usr;					
					frmEditUser.submit();
			 	}

			 	function borrar(){

			 	}
			 </script>
			 <div class="table-responsive" >
			  <table class="table table-striped table-bordered table-hover table-condensed">
			    <thead>
			      <tr style="background: #737677;">
			        <th>ID</th>
			        <th>USUARIO</th>
			        <th>NOMBRE</th>
			        <th>APELLIDO</th>
			        <th>PERFIL</th>
			        <th>DEPARTAMENTO</th>			        
			        <th></th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      <?php 
			      	foreach ($datos as $row => $dato) {
			      		
			      		?> 
			      			
			      			<?php 
			      				//foreach ($row as $dato) {
			      			?>
			      			<!--<td><?=$dato?></td>-->

			      			<td><?=$dato['ID']?></td>
							<td><?=$dato['USUARIO']?></td>
				      		<td><?=$dato['NOMBRE']?></td>
				      		<td><?=$dato['APELLIDO']?></td>
				      		<td><?=$dato['PERFIL']?></td>
				      		<td><?=$dato['DEPARTAMENTO']?></td>
				      		
			      			<?php		
			      			//	}
			      			 ?>
			      			<td style="text-align: center;" >
			      				
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:editar('<?=$dato["ID"]?>');">
			      							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      			</td>
			      			<td style="text-align: center;" >
			      				<div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                        <a href="#" onclick="javascript:borrar();">
			      							<i class="fa fa-trash fa-2x" aria-hidden="true"></i>
			      						</a>
                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                </div>
			      				
							</td>
			      		</tr>
			      	<?php 
			      	}
			      ?>
			        
			      </tr>
			    </tbody>
			  </table>
			  </div>
			  <form  name="frmEditUser" action="paneladm.php?p=usuarios&j=modificar" method="post" > 
			  <input type="hidden" name="id_usr">
			  </form>
			  <form name="frmDeleUsr" ></form>