
function cargarDatos() {

    fetch("Controller/traerClasesController.php")
        .then(response => response.json())
        .then(data => {
            const tablaDatos = document.getElementById("tablaDatos");
            tablaDatos.innerHTML = "";
            data.forEach(row => {
                const tr = document.createElement("tr");
                tr.innerHTML = `
            <td>${row.id}</td>
            <td>${row.nombre}</td>
            <td>${row.descripcion}</td>
            <button class="btn btn-small btn-success"> Editar </button>
            <button class="btn btn-small btn-danger" onclick="eliminarClase(${row.id})"> Eliminar </button>
            `;
                tablaDatos.appendChild(tr);

            });
        })
}

function eliminarClase(id) {
    fetch("Controller/eliminarClaseController.php?id=" + id)
        .then(response => response.text())
        .then(data => {
            console.log(data)
        })

}


function agregarClase() {
    const id = document.getElementById("id").value;
    const nombre = document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    fetch(
        `./Controller/agregarClaseController.php?id=${id}&nombre=${nombre}&descripcion=${descripcion} `
    )
        .then((response) => {
            cargarDatos();
            return response.text();
        })
        .then((data) => {
            console.log(data);
            document.getElementById("id").value = "";
            document.getElementById("nombre").value = "";
            document.getElementById("descripcion").value = "";
        });
}

  

cargarDatos();
