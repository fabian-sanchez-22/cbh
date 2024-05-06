var id;

function create (){
let data = `txtNombre=${document.getElementById('txtNombre').value}&txtAnydesk=${document.getElementById('txtAnydesk').value}
&txtIp=${document.getElementById('txtIp').value}&txtResponsable=${document.getElementById('txtResponsable').value}
&txtFechaMantenimiento=${document.getElementById('txtFechaMantenimiento').value}`

console.log(data);
const options = {
method: 'POST',
body: data,
headers: {
    "Content-Type": "application/x-www-form-urlencoded",
},
};
    fetch("../Controller/equiposComputo.create.php", options)
    .then(response => response.json())
    .then((data) => {
        read()
    })
    
    clear() 
    
}

read()

function read (){
    fetch("../Controller/equiposComputo.read.php")
    .then (response => response.json())
    .then ((data) => {
        console.log(data);

        let table = "";
    
        data.forEach((element, index) => {
            table += `<tr>`
            table += `<th scope="row">${index + 1}</th>`;
            table += `<td>${element.nombreEquipo}</td>`;
            table += `<td>${element.anydesk}</td>`;
            table += `<td>${element.ip}</td>`;
            table += `<td>${element.responsable}</td>`;
            table += `<td>${element.fechaMantenimiento}</td>`;
            table += `<td>
                        <a onclick="readUpdate(${element.id})" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#updateModal" ><i class="fa-solid fa-square-pen"></i></a>
                        <a onclick="readDelete(${element.id},'${element.nombreEquipo}')" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i></a>
                        <a onclick="abrirAnydesk(${element.anydesk})" class="btn btn-warning"><i class="fa-solid fa-house-laptop fa-xl" style="color: #fc493b;"></i></a>
                        </td>`;
            table += `</tr>`;
            console.log(element.anydesk);
        });
        document.getElementById("tableBody").innerHTML = table;
        new DataTable("#tablePc",{
        retrieve: true,
        language: {
        url: "./assets/json/es-ES.json",
        },
        dom: "Bfrtip",

        buttoans: [
            {
                extend: "colvis",
                text: '<i class="fa-solid fa-filter"></i>',
                tittleAttr: "Filtrar",
                className: "filtrar" ,
            }, 

            {
                extend: "excel" ,
                text: '<i class="fa-solid fa-file-excel"></i>',
                tittleAttr: "Excel",
                className: "excel" ,
                exportOptions:{
                    columns: [0, 1, 2, 3, 4, 5],
                },
            }, 

            {
                extend: "print",
                text: '<i class="fa-solid fa-print"></i>',
                tittleAttr: "Imprimir",
                className: "imprimir" ,
                exportOptions:{
                    columns: [0, 1, 2, 3, 4, 5],
                },
                
            }, 
            
            {
                extend: "copy",
                text: '<i class="fa-solid fa-copy"></i>',
                tittleAttr: "Copiar",
                className: "copiar" ,
                exportOptions:{
                    columns: [0, 1, 2, 3, 4, 5],
                },
                
            },
        {
            download: "open",
            extend: "pdf",
                text: '<i class="fa-solid fa-file-pdf"></i>',
                tittleAttr: "PDF",
                className: "pdf" ,
                exportOptions:{
                    columns: [0, 1, 2, 3, 4, 5],
                },
        },
        ],
        });
    });
}



function update(){
let data = `txtNombreMod=${document.getElementById('txtNombreMod').value}&txtAnydeskMod=${document.getElementById('txtAnydeskMod').value}
&txtIpMod=${document.getElementById('txtIpMod').value}&txtResponsableMod=${document.getElementById('txtResponsableMod').value}
&txtFechaMantenimientoMod=${document.getElementById('txtFechaMantenimientoMod').value}&id=${this.id}`
console.log(data);
const options = {
    method: "POST",
    body: data,
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
    },
    }
fetch("../controller/equiposComputo.update.php", options)
.then((response) => response.json())
.then((data) => {

read();
});
}


function deletes(){
    let data = `id=${id}`;
    const options = {
    method: "POST",
    body: data,
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
    },
    }
fetch("../controller/equiposComputo.delete.php", options)
.then((response) => response.json())
.then((data) => {
read();
});
}


function clear (){
    txtAnydesk.value = "";
    txtNombre.value = "";
    txtIp.value = "";
    txtResponsable.value = "";
    txtFechaMantenimiento.value = "";
}

function readUpdate(id){
    fetch (`../controller/equiposComputo.readupdate.php?id=${id}`)
        .then((response) => response.json())
        .then ((data) => {
            console.log(data);
            document.getElementById("txtNombreMod").value = data[0].nombreEquipo;
            document.getElementById("txtAnydeskMod").value = data[0].anydesk;
            document.getElementById("txtIpMod").value = data[0].ip;
            document.getElementById("txtResponsableMod").value = data[0].responsable;
            document.getElementById("txtFechaMantenimientoMod").value = data[0].fechaMantenimiento;

            this.id = data[0].id;
        });
}

function readDelete(id, nombreEquipo){
    this.id = id;
        labelDelete.innerHTML = `Esta seguro de eliminar el equipo ${nombreEquipo}  ?`;
    }

    function abrirAnydesk(codigoAnydesk) {
        var sesionAnydesk = "anydesk://" + codigoAnydesk;
        window.location.href = sesionAnydesk;
    }

