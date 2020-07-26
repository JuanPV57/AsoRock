<?php  include("../ConexionDB/conexion.php"); ?>

<form action="../Admin/Crear_Articulos.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group col-md-12">
                                        <label class=" text-info h4 ">Titulo</label>
                                        <input type="text" name="titulo" id="titulo" class="form-control col-md-12" placeholder="Titulo"
                                            autofocus>
                                    </div>
                                   
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class=" text-info h6 ">Autor</label>
                                            <input type="text" name="autor" class="form-control col-md-12"
                                                placeholder="Nombre del Autor" autofocus>
                                        </div>
                                      
                                        <div class="form-group col-md-8">
                                            <label class=" text-info h6 ">Imagen</label>
                                            <input  type="file" name="imagen" size="20"/>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class=" text-info h6">Contenido</label>
                                            <textarea name="contenido" " class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <div>
                                            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                                        </div>
                                    </div>
                        </form>
