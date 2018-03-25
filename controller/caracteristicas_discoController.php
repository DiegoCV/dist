<?php
						include_once substr(getcwd(), 0,26).'\entity\caracteristicas_disco.php';
						include_once substr(getcwd(), 0,26).'\mapper\caracteristicas_discoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class caracteristicas_discoController{

							/**
						     * Permite guardar un objeto tipo caracteristicas_disco.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$caracteristicas_disco       = new caracteristicas_disco($_POST['data']);
						        $caracteristicas_discoMapper = new caracteristicas_discoMapper();
						        var_dump($caracteristicas_discoMapper->crearcaracteristicas_disco($caracteristicas_disco));
							}
							public function listar(){;
								$caracteristicas_discoMapper = new caracteristicas_discoMapper();
								$caracteristicas_disco = $caracteristicas_discoMapper->listarcaracteristicas_disco();
								$render = new Render('listados/caracteristicas_discoList',$caracteristicas_disco);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $caracteristicas_disco = new caracteristicas_disco();

                                $caracteristicas_disco->setid($_POST['data']['id']);

                                $caracteristicas_discoMapper = new caracteristicas_discoMapper();
                                $caracteristicas_discoMapper->eliminar($caracteristicas_disco);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/caracteristicas_discoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/caracteristicas_discoform');
                            $render->mostrar();
                            }
						}