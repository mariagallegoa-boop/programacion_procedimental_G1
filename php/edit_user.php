<?php
session_start();
require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Edit User Profile</title>
</head>

<body>


    <div class="container">
        <h1 class="title is-4 has-text-centered">EDITAR PERFIL DE USUARIO</h1>
        <hr />
        <form action="" method="POST">
            <?php
            $numero_documento = $_SESSION['numero_documento'];
            $sql = "SELECT * FROM usuarios WHERE numero_documento ='$numero_documento' ";
            $ejecutar = $conn->query($sql);
            while ($datos = mysqli_fetch_array($ejecutar)) {
            ?>
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="text" placeholder="Nombres" id="nombres" value="<?php echo $datos['nombre']; ?>" />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="text" placeholder="Apellidos:" id="apellidos" value="<?php echo $datos['apellido']; ?>" />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <p class="control has-icons-left">
                        <span class="select is-info">
                            <select id="tipo_documento" name="tipo_documento" readonly>
                                <option selected>Tipo de Documento</option>
                                <option value="tarjeta_tdentidad">Tarjeta de Identidad</option>
                                <option value="cedula_cuidadania">Cedula de Cuidadania</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="permiso_especial">Permiso Especial</option>
                            </select>
                        </span>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>


                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="text" placeholder="Documento de Identidad:" id="documento_identidad" readonly
                            required />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>


                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="text" placeholder="Telefono:" id="telefono" required />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>


                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="text" placeholder="Correo Electronico:" id="email" required readonly />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>


                <div class="field is-horizontal">
                    <div class="field-label">
                        <label class="label has-text-link">Genero</label>
                    </div>
                    <div class="field-body">
                        <div class="field is-narrow">
                            <div class="radios">
                                <label class="radio">
                                    <input type="radio" name="genero" value="femenino">
                                    Femenino
                                </label>
                                <label class="radio">
                                    <input type="radio" name="genero" value="masculino">
                                    Masculino
                                </label>
                                <label class="radio">
                                    <input type="radio" name="genero" value="otro">
                                    Otro
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="field">
                    <p class="control has-icons-left">
                        <span class="select is-info">
                            <select id="cargo">
                                <option selected>Cargo</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Operario">Operario</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Supervisor">Supervisor</option>
                            </select>
                        </span>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="date" placeholder="Fecha de nacimiento:" id="fecha_nacimiento"
                            required />
                        <span class="icon is-small is-left">
                            <i class="fa-regular fa-calendar-days"></i>
                        </span>
                    </p>
                </div>



                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input is-info" type="password" placeholder="Contraseña" id="contrasena" required />
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>

                <hr>
                <div class="buttons is-flex is-justify-content-center">
                    <a type="type" class="button is-danger" href="../index.html"> Home </a>
                    <button class="button is-info is-dark" id="btnGuardar">Guardar</button>
                </div>
            <?php } ?>
        </form>
    </div>

</body>

</html>