<?php
						include_once substr(getcwd(), 0,26).'\entity\caracteriscas_red.php';
						include_once substr(getcwd(), 0,26).'\mapper\caracteriscas_redMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class caracteriscas_redController{

							/**
						     * Permite guardar un objeto tipo caracteriscas_red.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$caracteriscas_red       = new caracteriscas_red($_POST['data']);
						        $caracteriscas_redMapper = new caracteriscas_redMapper();
						        var_dump($caracteriscas_redMapper->crearcaracteriscas_red($caracteriscas_red));
							}
							public function listar(){;
								$caracteriscas_redMapper = new caracteriscas_redMapper();
								$caracteriscas_red = $caracteriscas_redMapper->listarcaracteriscas_red();
								$render = new Render('listados/caracteriscas_redList',$caracteriscas_red);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $caracteriscas_red = new caracteriscas_red();

                                $caracteriscas_red->setid($_POST['data']['id']);

                                $caracteriscas_redMapper = new caracteriscas_redMapper();
                                $caracteriscas_redMapper->eliminar($caracteriscas_red);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/caracteriscas_redEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/caracteriscas_redform');
                            $render->mostrar();
                            }
						}