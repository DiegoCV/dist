<?php
						include_once substr(getcwd(), 0,26).'\entity\software.php';
						include_once substr(getcwd(), 0,26).'\mapper\softwareMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class softwareController{

							/**
						     * Permite guardar un objeto tipo software.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$software       = new software($_POST['data']);
						        $softwareMapper = new softwareMapper();
						        var_dump($softwareMapper->crearsoftware($software));
							}
							public function listar(){;
								$softwareMapper = new softwareMapper();
								$software = $softwareMapper->listarsoftware();
								$render = new Render('listados/softwareList',$software);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $software = new software();

                                $software->setidSoftware($_POST['data']['idSoftware']);

                                $softwareMapper = new softwareMapper();
                                $softwareMapper->eliminar($software);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/softwareEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/softwareform');
                            $render->mostrar();
                            }
						}