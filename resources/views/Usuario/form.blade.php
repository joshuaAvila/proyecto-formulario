   
<fieldset class="datos_empresa row">

      <!-- DATOS DE LA EMPRESA-->


    <legend><b><h2>Datos de la Empresa</h2></b></legend>
    
        <div class="col-md-6 form_grupo" id="div_ruc">
            <strong> <label for="ruc" class="form_label" >RUC</label></strong>
             <div class="input-group">
                 <input type="text" class="form-control" name="ruc" id="ruc" placeholder="Ingrese su número de RUC..."  >
                 <i class="validacion_estado fas fa-times-circle"></i>  
             </div>
             <p class="formulario_input-error">El campo RUC debe contener solo 13 números sin caracteres, y terminar con los digitos 001</p>
         </div>
  
  
        <div class="col-md-6 form_grupo " id="div_empresa" >
            <strong><label class="form_label" for="empresa">Empresa</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Ingrese el nombre de la empresa.."  name="empresa" id="empresa"/>
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">La empresa tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>
        
  
        <div class="col-md-6 form_grupo" id="div_nombre">
            <strong><label for="nombre" class="form_label" >Nombre</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Ingrese su nombre..."  name="nombre" id="nombre">
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El Nombre solo puede contener letras hasta 40 caracteres.</p>
        </div>
  
  
        <div class="col-md-6 form_grupo" id="div_apellido">
            <strong><label for="apellido" class="form_label" >Apellido</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingrese su apellido..." name="apellido" id="apellido">
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El Apellido solo puede contener letras hasta 40 caracteres.</p>
        </div>
  
        <div class="col-md-4 form_grupo" id="div_correo">
            <strong> <label for="correo" class="form_label" >Correo</label> </strong>
             <div class="input-group">
                 <input type="email" class="form-control" name="correo"  id="correo" placeholder="Ingrese su correo"  >
                 <i class="validacion_estado fas fa-times-circle"></i>
             </div>
             <p class="formulario_input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo. ejemplo@hotmail.com</p>
         </div>
  
        <div class="col-md-4 form_grupo" id="div_telefono1">
           <strong> <label for="telefono1" class="form_label" >Teléfono #1</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono1"  id="telefono1" placeholder="Ingrese su número móvil" >
                <i class="validacion_estado fas fa-times-circle"></i>
             </div>
             <p class="formulario_input-error">El Telefono solo debe contener al menos 8 números maximo 14.</p>
        </div>
  
        <div class="col-md-4 form_grupo" id="div_telefono2">
           <strong> <label for="telefono2" class="form_label" >Teléfono #2</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono2"  id="telefono2" placeholder="Ingrese su número móvil" >
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El Telefono solo debe contener al menos 8 números maximo 14.</p>
        </div>
  
  

    <!-- DATOS DE LA DIRECCION-->
        <legend><b><h2>Datos de la Dirección</h2></b> </legend>
        <div class="col-md-12 form_grupo" id="div_direccion">
             <strong><label for="direccion" class="form_label" >Dirección de Inspección</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="direccion"    id="direccion"  placeholder="Ingrese la dirección de realización de inspección">
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">La dirección puede contener letras, números y los simbolos - _</p>
        </div>
  

            <!-- Boton para abrir ventana Modal-->
            <div class="boton">
                <input type="button" value="Agregar Ubicación" id="btn_modal" class="boton_modal">
            </div>
           
                    
  

  <!-- DATOS DE LOS CONTENEDORES-->
    <legend><b><h2>Datos de los Contenedores</h2></b> </legend>
    
        <div class="col-md-2 form_grupo" id="div_contenedores">
           <strong> <label for="contenedores" class="form_label" >Contendores</label></strong>
            <div class="form-group">
                <input type="number"  class="form-control" name="contenedores"  id="contenedores" min="1" >
                <i class="validacion_estado  validar  fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">Indique el número de contenedores.</p>
        </div>
  
        
  
        <div class="col-md-10 form_grupo" id="div_requerimiento">
           <strong> <label for="requerimiento" class="form_label" >Requerimiento</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="requerimiento"  id="requerimiento" placeholder="Ingrese su asunto..."  >
                <i class="validacion_estado   fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El requerimiento puede contener letras y números.</p>
        </div>
  
  
        <div class="col-md-8 form_grupo" id="div_detalle">
            <strong><label for="detalle" class="form_label" >Detalle su Requerimiento</label></strong>
              <div class="form-group">
                 <textarea id="detalle" class="form-control" name="detalle"  placeholder="Detalle su asunto" style="resize:none;"  rows="5"></textarea>
                 <i class="validacion_estado  validar  fas fa-times-circle"></i>
             </div>
             <p class="formulario_input-error">Llene los detalles correctamente con letras y numeros .</p>
        </div>
        <br>    

      <div class="form-group  col-md-5 form_grupo" id="div_identificador">
      <strong  class="ml-4 form_label" >Identificador de Contenedores</strong><br>
        <div class="field_wrapper ml-4" >
            <div  class="agregar_campos my-2">
                <input type="text" name="field_name[]" class="form-control" value="" min="1"/>
                <i class="validacion_estado validar fas fa-times-circle"></i>
                <a href="javascript:void(0);" class="add_button btn btn-primary ml-3" title="Add field"><i class="fas fa-plus-circle"></i></a>
               
            </div>
        </div>
        <p class="formulario_input-error ml-4">Indique el codigo con letras o nümeros.</p>
      </div>
  
  </fieldset>
  
   
        <div class="formulario_mensaje" id="formulario_mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>
            
        <div class="form_grupo grupo-btn-enviar">
            <button type="submit" id="enviar" class="btn btn-success my-3">Enviar </button> 
            <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">Formulario enviado exitosamente!</p>  
        </div>
  
  
        
    <!--VENTANA MODAL CON MAPA -->
        <div class="modal" tabindex="-1" id="ventana_modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Mapa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12" >
                        <strong> <label for="ubicacion" >Ubicación</label></strong>
                            <div  id="map" style="height: 300px; width: 100%"> </div>  
                                <!--<input class="col" name="latitud" id="latitud"><br>-->
                                <!--<input  class="col" name="longitud" id="longitud"><br>-->       
                    </div>  
                    <div class="col-md-12 form_grupo" id="div_referencia">
                        <strong> <label for="referencia" class="form_label" >Referencias</label></strong>
                        <div class="input-group">
                            <input type="text" class="form-control" name="referencia"   id="referencia"  placeholder="Ingrese las referencias de la dirección">
                            <i class="validacion_estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario_input-error">La referencia puede contener letras, números y los simbolos - _<</p>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>