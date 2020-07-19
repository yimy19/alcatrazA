<?php 

session_start();

$bienvenidad = '<a class="iniciosesion" href="iniciosesion.php">
Iniciar Sesion
 </a>
';
	 $menu = '
<a href="index.php">
	Inicio
</a>
<a href="menu.php">
	Menu del dia
</a>
<a href="registrarse.php">
	Registrate
</a>
<a href="lugar.php">
	Ubicacion
</a>
';

	$info_plato ='informacion.php?id';

	 $formulario = '
<section formulario="">
	<center>
		<form action="nuevo_usuario.php" class="registro" method="POST">
			<legend>
				<h2>
					Registrate!
				</h2>
			</legend>
			<br>
				<br>
					<label>
						Tu Nombre:
					</label>
					<br>
						<input class="c" name="nombre" required="" type="text">
							<br>
								<br>
									<label>
										Tu Correo Electronico:
									</label>
									<br>
										<input class="c" name="correo" required="" type="email">
											<br>
												<br>
													<label>
														Tu Numero Telefonico:
													</label>
													<br>
														<input class="c" name="telefono" required="" type="number">
															<br>
																<br>
																	<label>
																		Contraseña:
																	</label>
																	<br>
																		<input class="c" name="contrasena" required="" type="password">
																			<br>
																				<br>
																					<label>
																						Tu Direccion:
																					</label>
																					<br>
																						<input class="c" name="direccion" required="" type="text">
																							<br>
																								<br>
																									<input class="b1" name="boton" type="submit" value="Listo">
																									</input>
																								</br>
																							</br>
																						</input>
																					</br>
																				</br>
																			</br>
																		</input>
																	</br>
																</br>
															</br>
														</input>
													</br>
												</br>
											</br>
										</input>
									</br>
								</br>
							</br>
						</input>
					</br>
				</br>
			</br>
		</form>
	</center>
</section>
';

if (isset($_SESSION['tipo'])) {

 switch ($_SESSION['tipo']) {
  case 1:
   $bienvenidad = 'Bienvenido,  Administrador  '.$_SESSION['nom'].'
					<a class="iniciosesion" href="salir.php">
						Cerrar Sesion
					</a>
';

 $menu = '
		<a href="index.php">
			Inicio
		</a>
		<a href="a.subirplato.php">
			Subir plato
		</a>
		<a href="registrarse.php">
			Registrar Empleado
		</a>
		<a href="menu.php">
			Ver El Menu
		</a>
		<a href="a.platos.php">
			Cambiar Platos
		</a>
';

$formulario ='
		<section formulario="">
			<center>
				<form action="nuevo_empleado.php" class="registro" method="POST">
					<legend>
						<h2>
							Registrar Empleado
						</h2>
					</legend>
					<br>
						<br>
							<label>
								Nombre Del Empleado:
							</label>
							<br>
								<input class="c" name="nombre" required="" type="text">
									<br>
										<br>
											<label>
												Correo Electronico Del Empleado:
											</label>
											<br>
												<input class="c" name="correo" required="" type="email">
													<br>
														<br>
															<label>
																Numero Telefonico Del Empleado:
															</label>
															<br>
																<input class="c" name="telefono" required="" type="number">
																	<br>
																		<br>
																			<label>
																				Contraseña Del Empleado:
																			</label>
																			<br>
																				<input class="c" name="contrasena" required="" type="password">
																					<br>
																						<br>
																							<label>
																								La Direccion Del Empleado:
																							</label>
																							<br>
																								<input class="c" name="direccion" required="" type="text">
																									<br>
																										<br>
																											<input class="b1" name="boton" type="submit" value="Listo">
																											</input>
																										</br>
																									</br>
																								</input>
																							</br>
																						</br>
																					</br>
																				</input>
																			</br>
																		</br>
																	</br>
																</input>
															</br>
														</br>
													</br>
												</input>
											</br>
										</br>
									</br>
								</input>
							</br>
						</br>
					</br>
				</form>
			</center>
		</section>
';
   break;

  case 3:
   $bienvenidad = 'Bienvenido, '.$_SESSION['nom'].'
				<a class="iniciosesion" href="salir.php">
					Cerrar Sesion
				</a>
';

   $menu = '
			<a href="index.php">
				Inicio
			</a>
			<a href="menu.php">
				Menu del dia
			</a>
			<a href="c.pedido.php">
				Ver Pedido
			</a>
			<a href="lugar.php">
				Ubicacion
			</a>
';

$info_plato ='informacion2.php?id';
   
 }
}

 ?>
