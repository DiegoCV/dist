<?php
						include_once substr(getcwd(), 0,26).'\entity\tipo_componente.php';
						include_once substr(getcwd(), 0,26).'\mapper\tipo_componenteMapper.php';
                        include_once substr(getcwd(), 0,26).'\core\Render.php';

						class tipo_componenteController{

							/**
						     * Permite guardar un objeto tipo tipo_componente.
						     * La informacion llego por post asumiendo la estructura de las entidades .
						     *
						     */
							public function crear(){
								$tipo_componente       = new tipo_componente($_POST['data']);
						        $tipo_componenteMapper = new tipo_componenteMapper();
						        var_dump($tipo_componenteMapper->creartipo_componente($tipo_componente));
							}
							public function listar(){;
								$tipo_componenteMapper = new tipo_componenteMapper();
								$tipo_componente = $tipo_componenteMapper->listartipo_componente();
								$render = new Render('listados/tipo_componenteList',$tipo_componente);
                                $render->mostrar();
							}

							public function actualizar(){

							}

							 public function eliminar(){
                                $tipo_componente = new tipo_componente();

                                $tipo_componente->setid($_POST['data']['id']);

                                $tipo_componenteMapper = new tipo_componenteMapper();
                                $tipo_componenteMapper->eliminar($tipo_componente);
                            }

                            public function formeliminar() {
                            $render = new Render('formuEliminar/tipo_componenteEliminar');
                            $render->mostrar();
                            }

                            public function crearForm() {
                            $render = new Render('formulario/tipo_componenteform');
                            $render->mostrar();
                            }
						}