<?php
						include_once substr(getcwd(), 0,26).'\entity\software_has_equipo.php';
						include_once substr(getcwd(), 0,26).'\mapper\software_has_equipoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class software_has_equipoController{

							/**
						     * Permite guardar un objeto tipo software_has_equipo.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$software_has_equipo       = new software_has_equipo($_POST['data']);
						        $software_has_equipoMapper = new software_has_equipoMapper();
						        var_dump($software_has_equipoMapper->crearsoftware_has_equipo($software_has_equipo));
							}
							public function listar(){;
								$software_has_equipoMapper = new software_has_equipoMapper();
								$software_has_equipo = $software_has_equipoMapper->listarsoftware_has_equipo();
								$render = new Render('listados/software_has_equipoList',$software_has_equipo);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $software_has_equipo = new software_has_equipo();

                                $software_has_equipo->setsoftware_idSoftware($_POST['data']['software_idSoftware']);
$software_has_equipo->setequipo_idEquipo($_POST['data']['equipo_idEquipo']);

                                $software_has_equipoMapper = new software_has_equipoMapper();
                                $software_has_equipoMapper->eliminar($software_has_equipo);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/software_has_equipoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/software_has_equipoform');
                            $render->mostrar();
                            }
						}