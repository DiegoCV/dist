<?php
						include_once substr(getcwd(), 0,26).'\entity\equipo.php';
						include_once substr(getcwd(), 0,26).'\mapper\equipoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class equipoController{

							/**
						     * Permite guardar un objeto tipo equipo.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$equipo       = new equipo($_POST['data']);
						        $equipoMapper = new equipoMapper();
						        var_dump($equipoMapper->crearequipo($equipo));
							}
							public function listar(){;
								$equipoMapper = new equipoMapper();
								$equipo = $equipoMapper->listarequipo();
								$render = new Render('listados/equipoList',$equipo);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $equipo = new equipo();

                                $equipo->setidEquipo($_POST['data']['idEquipo']);

                                $equipoMapper = new equipoMapper();
                                $equipoMapper->eliminar($equipo);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/equipoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/equipoform');
                            $render->mostrar();
                            }
						}