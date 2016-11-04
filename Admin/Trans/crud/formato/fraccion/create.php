<script type="text/javascript">
  $("[name='fkley']").on("change",function(){
    var valor = $(this).val();
    $("#ley1").append(valor);
  })


</script>
<?php
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
    $datosley = $objLey->consult(1);
    $objFrac = new fracciones;
    $datos = $objFrac->read(1);
    $variablephp = "<script> document.write(singleValues) </script>";
    /*$objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathformato']?>fraccion/agregar.php">
                        <div class="input-field col s12 l12 m12">

                          <select name="fkley" id="fkley">
                             <option value="" disabled selected>Elige la Ley</option>
                             <?php 
                                 foreach ($datosley as $row => $datoley) {                                        
                              ?> 
                              <option value="<?=$datoley['id_leyes']?>" required ><?=$datoley['tipo']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Ley</label>
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                                 <p id="ley1"></p>
                          <select name="fkArt" id="fkArt">
                             <option value="" disabled selected>Elige el Articulo</option>
                             <?php 
                             
    $objArt = new articulos;
    $datosart = $objArt->read(1);
    $consultaart = $objArt->readwhere();

                                 foreach ($consultaart as $row => $datoart) {                                        
                              ?> 
                              <option value="<?=$datoart['id_art']?>" required><?=$datoart['num_art']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Articulo</label>
                        </div>
                        <div>
                          <p id="prueba"></p>
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                                 
                          <select name="fkfrac">
                             <option value="" disabled selected>Elige la Fraccion</option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_frac']?>" required><?=$dato['num_frac']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Fraccion</label>
                        </div>

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomfor"  type="text" class="validate" required >
                          <label for="Nomfor">Titulo de Formato</label>
                        </div>  

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomcor" id="" type="text" class="validate" >
                          <label for="Nomcor">Nombre Corto de Formato</label>
                        </div>

                         <div class="input-field col s12 l12 m12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="Descform" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Formato</label>
                        </div> 
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>
<script type="text/javascript">
  $(document).on('ready',function(){
       function displayVals(aux) {
        $( "#prueba" ).html( "<b>Single:"+aux+"</b> " + singleValues);

} 
  $( "#fkley").change(function(){
    var aux = $("#fkley option:selected").val();
    console.log(aux);
    displayVals(aux);
    });
  });

  var json = JSON.stringify({ descripcion: descripcion, idperfil: idperfil });
    console.log(json);
    var methodUrl = "../Index/NuevaFilaModificar";
  $.ajax({
        url: this,
        type: 'POST',
        dataType: 'json',
        data: json,
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
            console.log(response);
            $("#modalLoader").closeModal();
            if (response.status == "error") {
                Materialize.toast("" + response.message, 5000);
            }
            else {
                var chtml = $("#updateFilas tbody").html();
                chtml += '<tr data-id="'+response.idfila+'">'+
                            '<td>'+response.descripcion+'</td><td class="right"><a id="delupFila" href="#" data-id="'+response.idfila+'" class="btn-floating red" style="margin-left:.5em;margin-right:.5em;"><i class="material-icons">delete</i></a></td>'+
                        '</tr>';
                $("#updateFilas tbody").html(chtml);
                $("#AddupFilatxt").val("");
                Materialize.toast("Agregado correctamente.",5000);
            }
        },
        error: function (response) {
            if (true) {
                $("#modalLoader").closeModal();
                Materialize.toast("Ocurrio un error al conectarse con el servidor.", 5000);
                return false;
            }
        }
    });


</script>