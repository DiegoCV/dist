<?php
						include_once substr(getcwd(), 0,26).'\entity\tipo_equipo.php';
						include_once substr(getcwd(), 0,26).'\mapper\tipo_equipoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class tipo_equipoController{

							/**
						     * Permite guardar un objeto tipo tipo_equipo.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$tipo_equipo       = new tipo_equipo($_POST['data']);
						        $tipo_equipoMapper = new tipo_equipoMapper();
						        var_dump($tipo_equipoMapper->creartipo_equipo($tipo_equipo));
							}
							public function listar(){;
								$tipo_equipoMapper = new tipo_equipoMapper();
								$tipo_equipo = $tipo_equipoMapper->listartipo_equipo();
								$render = new Render('listados/tipo_equipoList',$tipo_equipo);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $tipo_equipo = new tipo_equipo();

                                $tipo_equipo->setid_tipo_equipo($_POST['data']['id_tipo_equipo']);

                                $tipo_equipoMapper = new tipo_equipoMapper();
                                $tipo_equipoMapper->eliminar($tipo_equipo);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/tipo_equipoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/tipo_equipoform');
                            $render->mostrar();
                            }
						}