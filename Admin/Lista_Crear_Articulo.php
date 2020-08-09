<?php  include("../ConexionDB/conexion.php"); ?>
<?php  include("index.html"); ?>
<div class="aside">
        <div class="Titulo">
            <h4>Articulos</h4>
            <p><i class="fas fa-caret-right"></i> Crea los articulos que deses mostrar en la pagina.</p>
        </div>
        
        <div class="form">
            <h4>Escribe el Articulo</h4>
            <br>
            <form action="../Admin/Crear_Articulos.php" method="POST" enctype="multipart/form-data">
              
                <div class="form-group col-md-11">
                    <label class=" text-danger text-center h6">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control col-md-12" placeholder="Titulo"
                        autofocus>
                </div>

                <div class="form-group col-md-11">
                    <input type="text" name="slug" id="slug" class="form-control col-md-12" placeholder="Titulo"
                        autofocus>
                </div>

                <div class="form-group mg-3 col-md-6">
                    <label class=" text-danger h6 ">Imagen</label>
                    <input  id="file" type="file" name="imagen" size="20"/>
                 </div>
                  
                 <div class="img-carga" id="preview"></div>

                 
                <div class="form-group col-md-5">
                    <label class=" text-danger h6 ">Fecha</label>
                    <input type="date" name="fecha" class="form-control col-md-12"autofocus>
                </div>
                <div class="form-group col-md-5">
                        <label class=" text-danger h6 ">Autor</label>
                        <input type="text" name="autor" class="form-control col-md-12" placeholder="Nombre del Autor" autofocus>
                 </div>
                    
               
                <div class="form-group col-md-11">
                        <label class=" text-danger h6">Contenido</label>
                        <textarea  name="contenido" id="textarea"  class="form-control"></textarea>
                </div>
                
                <div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                </div>
                
            </form>

        </div>

       
    </div>
    <script src="./Js/main.js"></script>