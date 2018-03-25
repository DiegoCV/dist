<?php
						include_once substr(getcwd(), 0,26).'\entity\tipodisco.php';
						include_once substr(getcwd(), 0,26).'\mapper\tipodiscoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class tipodiscoController{

							/**
						     * Permite guardar un objeto tipo tipodisco.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$tipodisco       = new tipodisco($_POST['data']);
						        $tipodiscoMapper = new tipodiscoMapper();
						        var_dump($tipodiscoMapper->creartipodisco($tipodisco));
							}
							public function listar(){;
								$tipodiscoMapper = new tipodiscoMapper();
								$tipodisco = $tipodiscoMapper->listartipodisco();
								$render = new Render('listados/tipodiscoList',$tipodisco);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $tipodisco = new tipodisco();

                                $tipodisco->setid($_POST['data']['id']);

                                $tipodiscoMapper = new tipodiscoMapper();
                                $tipodiscoMapper->eliminar($tipodisco);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/tipodiscoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/tipodiscoform');
                            $render->mostrar();
                            }
						}