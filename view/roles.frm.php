<?php include_once "header.php"; ?>

<div class="row my-5">
    <h1 class="text-center">Formulario Roles</h1>
</div>

<div class="row">
    <div class="col-3 d-flex justify-content-end align-items-center">
        <span class="fw-bolder">Nombre Rol:</span>
    </div>
    <div class="col-6">

        <div class="form-floating">
            <input type="text" class="form-control" id="txtRol" name="txtRol" placeholder="admin">
            <label for="txtRol">Nombre Rol</label>
        </div>
    </div>
    <div class="col-3 align-self-center">
        <a onclick="create()" class="btn btn-primary"> Crear <i class="fa-solid fa-user-plus fa-bounce"></i></a>
    </div>
</div>

<div class="row mt-5 justify-content-center ">
    <h1 class="text-white text-center bg-dark py-1">Tabla de Roles </h1>
    <div class="col-8 ">
        <table class="table" id="tableRol">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rol</th>
                    <th scope="col" width="25%">Estado</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody id="tableBodyRol">
            </tbody>
        </table>
    </div>
</div>
<div>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient">
                    <h1 class="modal-title fs-5 col-11 ms-4 text-center" id="updateModalLabel">Modificar Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <span class="fw-bolder">Nombre Rol:</span>
                        </div>
                        <div class="col-6">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="txtRolMod" name="txtRolMod" placeholder="admin">
                                <label for="txtRol">Nombre Rol</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button onclick="update()" type="button" class="btn btn-warning" data-bs-dismiss="modal">Modificar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger bg-gradient">
                    <h1 class="modal-title fs-5 col-11 text-center ms-4" id="deleteModalLabel ">Eliminar Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 id="labelDelete"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button onclick="deletes()" type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../view/assets/js/rol.js"></script>
<?php include_once "footer.php"; ?>