<?php
						include_once substr(getcwd(), 0,26).'\entity\estados_solucion.php';
						include_once substr(getcwd(), 0,26).'\mapper\estados_solucionMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class estados_solucionController{

							/**
						     * Permite guardar un objeto tipo estados_solucion.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$estados_solucion       = new estados_solucion($_POST['data']);
						        $estados_solucionMapper = new estados_solucionMapper();
						        var_dump($estados_solucionMapper->crearestados_solucion($estados_solucion));
							}
							public function listar(){;
								$estados_solucionMapper = new estados_solucionMapper();
								$estados_solucion = $estados_solucionMapper->listarestados_solucion();
								$render = new Render('listados/estados_solucionList',$estados_solucion);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $estados_solucion = new estados_solucion();

                                $estados_solucion->setid($_POST['data']['id']);

                                $estados_solucionMapper = new estados_solucionMapper();
                                $estados_solucionMapper->eliminar($estados_solucion);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/estados_solucionEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/estados_solucionform');
                            $render->mostrar();
                            }
						}