var id;

function create() {
  let data = `txtRol=${document.getElementById("txtRol").value}`;

  const options = {
    method: "POST",
    body: data,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  };

  fetch("../controller/roles.create.php", options)
    .then((response) => response.json())
    .then((data) => {
      alertify.success(data);
      read();
    });
}

function update() {
  let data = `txtRolMod=${txtRolMod.value}&id=${this.id}`;
  const options = {
    method: "POST",
    body: data,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  };
  fetch("../controller/rol.update.php", options)
    .then((response) => response.json())
    .then((data) => {
      alertify.success(data);
      read();
    });
}

function deletes() {
  let data = `id=${id}`;
  const options = {
    method: "POST",
    body: data,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  };

  fetch("../controller/rol.delete.php", options)
    .then((response) => response.json())
    .then((data) => {
      alertify.success(data);
      read();
    });
}

function read() {
  fetch("../controller/rol.read.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      let table = "";
      data.forEach((element, index) => {
        table += `<tr>`;
        table += `<th scope="row">${index + 1}</th>`;
        table += `<td>${element.nombreRol}</td>`;
        table += `<td>
                      <div class="form-check form-switch">
                      <input onclick="updateEstado(${element.id},'${
          element.estado
        }')" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label onclick="updateEstado(${
                        element.id
                      })" class="form-check-label" for="flexSwitchCheckDefault">${
          element.estado == "A" ? "Activo" : "Inactivo"
        }</label>
                      </div>
                 </td>`;
        table += `<td>
                      <a onclick="readUpdate(${element.id})" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#updateModal"> Modificar <i class="fa-solid fa-pen-ruler fa-beat"></i></a>
                      <a onclick="readDelete(${element.id},'${element.nombreRol}')" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar <i class="fa-solid fa-trash-can fa-beat"></i></a>
                  </td>`;
        table += `</tr>`;
      });
      document.getElementById("tableBodyRol").innerHTML = table;
      new DataTable("#tableRol", {
        language: {
          url: "./assets/json/es.json",
        },
        dom: "Bfrtip",
        buttons: ["pdf", "excel", "print", "copy", "colvis"],
      });
      readEstado();
    });
}

function readEstado() {
  let estado = document.getElementsByClassName("form-check-input");
  let labelEstado = document.getElementsByClassName("form-check-label");
  for (let i = 0; i < estado.length; i++) {
    if (labelEstado[i].innerHTML == "Activo") {
      estado[i].setAttribute("checked", "");
    }
  }
}

function updateEstado(id, estado) {
  const options = {
    method: "POST",
    body: `id=${id}&estado=${estado}`,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  };

  fetch("../controller/rol.updateEstado.php", options)
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      read();
    });
}

function readUpdate(id) {
  fetch(`../controller/rol.readupdate.php?id=${id}`)
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      document.getElementById("txtRolMod").value = data[0].nombreRol;
      // txtRolMod.value =data[0].nombreRol hace lo mismo que arriba
      this.id = data[0].id;
    });
}

function readDelete(id, nombreRol) {
  this.id = id;
  labelDelete.innerHTML = `Esta seguro de eliminar el rol ${nombreRol} ?`;
}

read();
