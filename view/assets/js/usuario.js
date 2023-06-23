function create() {
  let data = `tipoDoc=${selTipoDoc.value}&identificacion=${txtIdentificacion.value}&nombre=${txtNombre.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtPassword.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRol.value}`;

  axios
    .post("../controller/usuario.create.php", data)
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
}

function read() {
  axios
    .get("../controller/usuario.read.php")
    .then(function (response) {
      console.log(response);
      let table = "";
      response.data.forEach((element, index) => {
        table += `<tr>`;
        table += `<th scope='row'>${index + 1}</th>`;
        table += `<td>${element.tipoDoc}</td>`;
        table += `<td>${element.identificacion}</td>`;
        table += `<td>${element.nombre} ${element.apellido}</td>`;
        table += `<td>${element.correo}</td>`;
        table += `<td>${element.idRol}</td>`;
        table += `<td>
                    <a class='btn btn-warning'data-bs-toggle="modal"data-bs-target="#updateModal">Modificar</a> 
                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar</a>
                  </td>`;
        table += `</tr>`;
      });
      tableBodyUsuario.innerHTML = table;
    })
    .catch(function (error) {
      console.log(error);
    });
}

function update() {}

function deletes() {}

function selectRol() {
  axios
    .get("../controller/rol.read.php")
    .then(function (response) {
      let roles = "";
      response.data.forEach((element) => {
        roles += `<option value="${element.id}">${element.nombreRol}</option>`;
      });
      selRol.innerHTML = roles;
    })
    .catch(function (error) {
      console.log(error);
    });
}

selectRol();
read();
