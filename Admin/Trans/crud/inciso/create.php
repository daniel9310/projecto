<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objFrac = new fracciones;
    $datos = $objFrac->read(1);
    /*$objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
 <script type="text/javascript">
   $(document).ready(function() {
                                    $.ajax({
                                            type: "POST",
                                            url: "Trans/relacion/getLey.php",
                                            success: function(response)
                                            {
                                                $('#divselec select').html(response).fadeIn();
                                            }
                                    });

                                });

    $(document).ready(function() {
                                  $("#divselec select").change(function() {
                                      var form_data = {
                                              is_ajax: 1,
                                              ley: +$("#divselec select").val()
                                      };
                                      $.ajax({
                                              type: "POST",
                                              url: "Trans/relacion/getArticulo.php",
                                              data: form_data,
                                              success: function(response)
                                              {
                                                  $('.Artdiv select').html(response).fadeIn();
                                              }
                                      });
                                  });

                              });

   $(document).ready(function() {
                                  $(".Artdiv select").change(function() {
                                      var form_data = {
                                              is_ajax: 1,
                                              articulo: +$(".Artdiv select").val()
                                      };
                                      $.ajax({
                                              type: "POST",
                                              url: "Trans/relacion/getFraccion.php",
                                              data: form_data,
                                              success: function(response)
                                              {
                                                  $('.FracSel select').html(response).fadeIn();
                                              }
                                      });
                                  });

                              });
 </script>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Incagregar.php">

                        
                         <div class="input-field col s12 l12 m12">                              
                            <div id="divselec">
                              <label>Tipo de Ley</label>
                              <select name="fkley" required="">                          
                              </select>
                            </div>
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                          <div class="Artdiv">
                            <label>Numero de Articulo</label>
                            <select name="fkArt" required="" class="validate">
                                                    
                            </select>
                          </div>          
                        </div>
                        <div class="input-field col s12 l12 m12">                              
                          <div class="FracSel">
                             <label>Numero de Fraccion</label>
                             <select name="fkfrac" required="">                                                   
                             </select>
                          </div>
                         <script type="text/javascript">
                              
                          </script> 
                          
                        </div>

                        <div class="input-field col s12">
                          <input name="Numinc"  type="text" class="validate" required >
                          <label for="Numinc">Numero de Inciso</label>
                        </div>  

                         <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="incdesc" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Inciso</label>
                        </div> 

                        <div class="input-field col s12">
                          <input name="actiInc" id="actiFracc" type="number" max="1" min="0" class="validate" >
                          <label for="actiInc">Activo</label>
                        </div>
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>
