function create() {
  let data = ` {
        tipoDoc= ${selTipoDoc.value}&
        identificacion=${txtIdentificacion.value} &
        nombre= ${txtNombre.value}&
        apellido=${txtApellido.value}&
        correo= ${txtCorreo.vaule}&
        password= ${txtPassword.value}&
        direccion= ${txtDireccion.value}&
        telefono= ${txtTelefono.value}&
        genero= ${selGenero.value}&
        rol= ${selRol.value}&
      }`;
  axios
    .post("../controller/usuario.create.php", data)
    .then(function (response) {
      console.log(response);
    })
    .catch(function (erro) {
      console.log(error);
    });
}

function read() {}

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
