<?php
						include_once substr(getcwd(), 0,26).'\entity\calidad.php';
						include_once substr(getcwd(), 0,26).'\mapper\calidadMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class calidadController{

							/**
						     * Permite guardar un objeto tipo calidad.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$calidad       = new calidad($_POST['data']);
						        $calidadMapper = new calidadMapper();
						        var_dump($calidadMapper->crearcalidad($calidad));
							}
							public function listar(){;
								$calidadMapper = new calidadMapper();
								$calidad = $calidadMapper->listarcalidad();
								$render = new Render('listados/calidadList',$calidad);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $calidad = new calidad();

                                $calidad->setidcalidad($_POST['data']['idcalidad']);

                                $calidadMapper = new calidadMapper();
                                $calidadMapper->eliminar($calidad);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/calidadEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/calidadform');
                            $render->mostrar();
                            }
						}