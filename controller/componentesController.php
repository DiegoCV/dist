<?php
						include_once substr(getcwd(), 0,26).'\entity\componentes.php';
						include_once substr(getcwd(), 0,26).'\mapper\componentesMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class componentesController{

							/**
						     * Permite guardar un objeto tipo componentes.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$componentes       = new componentes($_POST['data']);
						        $componentesMapper = new componentesMapper();
						        var_dump($componentesMapper->crearcomponentes($componentes));
							}
							public function listar(){;
								$componentesMapper = new componentesMapper();
								$componentes = $componentesMapper->listarcomponentes();
								$render = new Render('listados/componentesList',$componentes);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $componentes = new componentes();

                                $componentes->setid($_POST['data']['id']);
$componentes->setserial($_POST['data']['serial']);

                                $componentesMapper = new componentesMapper();
                                $componentesMapper->eliminar($componentes);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/componentesEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/componentesform');
                            $render->mostrar();
                            }
						}