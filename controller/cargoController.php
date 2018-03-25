<?php
						include_once substr(getcwd(), 0,26).'\entity\cargo.php';
						include_once substr(getcwd(), 0,26).'\mapper\cargoMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';
                       
						class cargoController{

							/**
						     * Permite guardar un objeto tipo cargo.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$cargo       = new cargo($_POST['data']);
						        $cargoMapper = new cargoMapper();
						        var_dump($cargoMapper->crearcargo($cargo));
							}
							public function listar(){;
								$cargoMapper = new cargoMapper();
								$cargo = $cargoMapper->listarcargo();
								$render = new Render('listar/cargoList',$cargo);
                               $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $cargo = new cargo();

                                $cargo->setId($_POST['data']['Id']);

                                $cargoMapper = new cargoMapper();
                                $cargoMapper->eliminar($cargo);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/cargoEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/cargoform');
                            $render->mostrar();
                            }

                            public function algo(){
                            	echo __FILE__."<br>";
                            }
						}