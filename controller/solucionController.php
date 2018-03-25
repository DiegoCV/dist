<?php
						include_once substr(getcwd(), 0,26).'\entity\solucion.php';
						include_once substr(getcwd(), 0,26).'\mapper\solucionMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class solucionController{

							/**
						     * Permite guardar un objeto tipo solucion.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$solucion       = new solucion($_POST['data']);
						        $solucionMapper = new solucionMapper();
						        var_dump($solucionMapper->crearsolucion($solucion));
							}
							public function listar(){;
								$solucionMapper = new solucionMapper();
								$solucion = $solucionMapper->listarsolucion();
								$render = new Render('listados/solucionList',$solucion);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $solucion = new solucion();

                                $solucion->setid($_POST['data']['id']);

                                $solucionMapper = new solucionMapper();
                                $solucionMapper->eliminar($solucion);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/solucionEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/solucionform');
                            $render->mostrar();
                            }
						}