<?php
						include_once substr(getcwd(), 0,26).'\entity\tipo_pantalla.php';
						include_once substr(getcwd(), 0,26).'\mapper\tipo_pantallaMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class tipo_pantallaController{

							/**
						     * Permite guardar un objeto tipo tipo_pantalla.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$tipo_pantalla       = new tipo_pantalla($_POST['data']);
						        $tipo_pantallaMapper = new tipo_pantallaMapper();
						        var_dump($tipo_pantallaMapper->creartipo_pantalla($tipo_pantalla));
							}
							public function listar(){;
								$tipo_pantallaMapper = new tipo_pantallaMapper();
								$tipo_pantalla = $tipo_pantallaMapper->listartipo_pantalla();
								$render = new Render('listados/tipo_pantallaList',$tipo_pantalla);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $tipo_pantalla = new tipo_pantalla();

                                $tipo_pantalla->setid($_POST['data']['id']);

                                $tipo_pantallaMapper = new tipo_pantallaMapper();
                                $tipo_pantallaMapper->eliminar($tipo_pantalla);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/tipo_pantallaEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/tipo_pantallaform');
                            $render->mostrar();
                            }
						}