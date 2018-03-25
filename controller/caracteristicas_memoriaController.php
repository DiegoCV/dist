<?php
						include_once substr(getcwd(), 0,26).'\entity\caracteristicas_memoria.php';
						include_once substr(getcwd(), 0,26).'\mapper\caracteristicas_memoriaMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class caracteristicas_memoriaController{

							/**
						     * Permite guardar un objeto tipo caracteristicas_memoria.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$caracteristicas_memoria       = new caracteristicas_memoria($_POST['data']);
						        $caracteristicas_memoriaMapper = new caracteristicas_memoriaMapper();
						        var_dump($caracteristicas_memoriaMapper->crearcaracteristicas_memoria($caracteristicas_memoria));
							}
							public function listar(){;
								$caracteristicas_memoriaMapper = new caracteristicas_memoriaMapper();
								$caracteristicas_memoria = $caracteristicas_memoriaMapper->listarcaracteristicas_memoria();
								$render = new Render('listados/caracteristicas_memoriaList',$caracteristicas_memoria);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $caracteristicas_memoria = new caracteristicas_memoria();

                                $caracteristicas_memoria->setid($_POST['data']['id']);

                                $caracteristicas_memoriaMapper = new caracteristicas_memoriaMapper();
                                $caracteristicas_memoriaMapper->eliminar($caracteristicas_memoria);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/caracteristicas_memoriaEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/caracteristicas_memoriaform');
                            $render->mostrar();
                            }
						}