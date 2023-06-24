<?php include_once "header.php" ?>

<div class="row my-5">
    <h1 class="text-center">Formulario Usuarios</h1>
</div>
<div class="row">
    <div class="col-2">
        <span class="fw-bolder">Tipo Doc:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <select name="selTipoDoc" id="selTipoDoc" class="form-control">
                <option value="0" selected disabled>Seleccionar</option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="NUIP">NUIP</option>
            </select>
            <label for="floatingInput">Tipo Doc:</label>
        </div>
    </div>
    <div class="col-2">
        <span class="fw-bolder">Identificación: </span>
    </div>
    <div class="col-4 form-floating">
        <div class="form-floating">
            <input type="number" name="txtIdentificacion" id="txtIdentificacion" class="form-control" placeholder=".">
            <label for="floatingInput">Identificacion:</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Nombre:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="txt" name="txtNombre" id="txtNombre" class="form-control" placeholder=".">
            <label for="floatingInput">Nombre:</label>
        </div>
    </div>
    <div class="col-2">
        <span class="fw-bolder">Apellidos:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="txt" name="txtApellido" id="txtApellido" class="form-control" placeholder=".">
            <label for="floatingInput">Apellidos:</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Correo:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" placeholder=".">
            <label for="floatingInput">Correo:</label>
        </div>
    </div>
    <div class="col-2">
        <span class="fw-bolder">Contraseña:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder=".">
            <label for="floatingInput">Contraseña:</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Direccion:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="txt" name="txtDireccion" id="txtDireccion" class="form-control" placeholder=".">
            <label for="floatingInput">Direccion:</label>
        </div>
    </div>
    <div class="col-2">
        <span class="fw-bolder">Telefono:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" placeholder=".">
            <label for="floatingInput">telefono:</label>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-2">
        <span class="fw-bolder">Genero:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <select name="selGenero" id="selGenero" class="form-control">
                <option value="0" selected disabled>Seleccionar</option>
                <option value="M">Hombre</option>
                <option value="F">Mujer</option>
            </select>
            <label for="floatingInput">Genero:</label>
        </div>
    </div>
    <div class="col-2">
        <span class="fw-bolder">Rol:</span>
    </div>
    <div class="col-4">
        <div class="form-floating">
            <select name="selRol" id="selRol" class="form-control">
                <option value="0" selected disabled>Seleccionar</option>
            </select>
            <label for="floatingInput">Rol:</label>
        </div>
    </div>
</div>
<div class="row my-3 justify-content-center">
    <div class="col-4 d-grid gap-2">
        <a onclick="create()" class="btn btn-primary">Crear</a>
    </div>
</div>

<div class="row mt-5 d-flex justify-content-center">
    <h1 class="bg-dark py-1 text-center text-white">Tabla de Usuarios</h1>
    <div class="col-10">
        <table class="table" id="tableUsuario">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo Doc</th>
                    <th scope="col">Ident.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody id="tableBodyUsuario">
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
<!-- modificar -->
<div>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient">
                    <h1 class="modal-title col-11 text-center ms-4" id="updateModalLabel">Modificar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2">
                            <span class="fw-bolder">Tipo Doc:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selTipoDocMod" id="selTipoDocMod" class="form-control">
                                    <option value="0" selected disabled>Seleccionar</option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="NUIP">NUIP</option>
                                </select>
                                <label for="floatingInput">Tipo Doc:</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <span class="fw-bolder">Identificación: </span>
                        </div>
                        <div class="col-4 form-floating">
                            <div class="form-floating">
                                <input type="number" name="txtIdentificacionMod" id="txtIdentificacionMod" class="form-control" placeholder=".">
                                <label for="floatingInput">Identificacion:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <span class="fw-bolder">Nombre:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="txt" name="txtNombreMod" id="txtNombreMod" class="form-control" placeholder=".">
                                <label for="floatingInput">Nombre:</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <span class="fw-bolder">Apellidos:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="txt" name="txtApellidoMod" id="txtApellidoMod" class="form-control" placeholder=".">
                                <label for="floatingInput">Apellidos:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <span class="fw-bolder">Correo:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="email" name="txtCorreoMod" id="txtCorreoMod" class="form-control" placeholder=".">
                                <label for="floatingInput">Correo:</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <span class="fw-bolder">Rol:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selRolMod" id="selRolMod" class="form-control">
                                    <option value="0" selected disabled>Seleccionar</option>
                                </select>
                                <label for="floatingInput">Rol:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <span class="fw-bolder">Genero:</span>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <select name="selGeneroMod" id="selGeneroMod" class="form-control">
                                    <option value="0" selected disabled>Seleccionar</option>
                                    <option value="M">Hombre</option>
                                    <option value="F">Mujer</option>
                                </select>
                                <label for="floatingInput">Genero:</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button onclick="update()" type="button" class="btn btn-warning " data-bs-dismiss="modal">Modificar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- eliminar -->
    <div>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header bg-danger bg-gradient">
                        <h1 class="modal-title col-11 text-center ms-4" id="deleteModalLabel">Eliminar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="./assets//js/usuario.js"></script>
<?php include_once "footer.php" ?>