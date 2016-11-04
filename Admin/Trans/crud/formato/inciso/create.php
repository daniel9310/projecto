<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objInc = new incisos;
    $datos = $objInc->read(1);
    /*$objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Incagregar.php">

                        
                        <div class="input-field col s12 l12 m12">                              
                            <div class="divselec">
                              <label>Tipo de Ley</label>
                              <select name="fkley">                          
                              </select>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $.ajax({
                                            type: "POST",
                                            url: "Trans/crud/formato/getLey.php",
                                            success: function(response)
                                            {
                                                $('.divselec select').html(response).fadeIn();
                                            }
                                    });

                                });
                            </script>   
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                          <div class="Artdiv">
                            <label>Numero de Articulo</label>
                            <select name="fkArt">
                                                    
                            </select>
                          </div>     
                          <script type="text/javascript">
                              $(document).ready(function() {
                                  $(".divselec select").change(function() {
                                      var form_data = {
                                              is_ajax: 1,
                                              ley: +$(".divselec select").val()
                                      };
                                      $.ajax({
                                              type: "POST",
                                              url: "Trans/crud/formato/getArticulo.php",
                                              data: form_data,
                                              success: function(response)
                                              {
                                                  $('.Artdiv select').html(response).fadeIn();
                                              }
                                      });
                                  });

                              });
                          </script> 
                          
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                          <div class="FracSel">
                             <label>Numero de Fraccion</label>
                             <select name="fkfrac">                                                   
                             </select>
                          </div>
                         <script type="text/javascript">
                              $(document).ready(function() {
                                  $(".Artdiv select").change(function() {
                                      var form_data = {
                                              is_ajax: 1,
                                              articulo: +$(".Artdiv select").val()
                                      };
                                      $.ajax({
                                              type: "POST",
                                              url: "Trans/crud/formato/getFraccion.php",
                                              data: form_data,
                                              success: function(response)
                                              {
                                                  $('.FracSel select').html(response).fadeIn();
                                              }
                                      });
                                  });

                              });
                          </script> 
                          
                        </div>
                        <div class="input-field col s12 l12 m12">                              
                          <div class="IncSel">
                             <label>Numero de Inciso</label>
                             <select name="fkinc">                                                   
                             </select>
                          </div>
                         <script type="text/javascript">
                              $(document).ready(function() {
                                  $(".FracSel select").change(function() {
                                      var form_data = {
                                              is_ajax: 1,
                                              fraccion: +$(".FracSel select").val()
                                      };
                                      $.ajax({
                                              type: "POST",
                                              url: "Trans/crud/formato/getInciso.php",
                                              data: form_data,
                                              success: function(response)
                                              {
                                                  $('.IncSel select').html(response).fadeIn();
                                              }
                                      });
                                  });

                              });
                          </script> 
                          
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
