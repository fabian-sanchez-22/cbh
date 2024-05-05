<?php include_once "header.php" ?>


<div class="row my-5">
    <h1 class="text-center  ">HOJAS DE VIDA DE EQUIPOS DE COMPUTO</h1>
</div>

<div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Nombre del equipo</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="text" id="txtNombre" class="form-control" placeholder="anydesk">
            <label for="txtNombre">Nombre del equipo</label>
        </div>
    </div>

    <div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Anydesk del equipo</span>
    </div>

    <div class="col-3">
        <div class="form-floating mb-3">
            <input type="text" id="txtAnydesk" class="form-control" placeholder="anydesk">
            <label for="txtAnydesk">Anydesk del equipo</label>
        </div>
    </div>

</div>


<div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Ip del equipo</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="text" id="txtIp" class="form-control" placeholder="anydesk">
            <label for="txtIp">Ip del equipo</label>
        </div>
    </div>

    <div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Responsable</span>
    </div>

    <div class="col-3">
        <div class="form-floating mb-3">
            <input type="text" id="txtResponsable" class="form-control" placeholder="anydesk">
            <label for="txtResponsable">Responsable</label>
        </div>
    </div>

</div>


<div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Fecha de mantenimiento</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="date" id="txtFechaMantenimiento" class="form-control" placeholder="anydesk">
            <label for="txtFechaMantenimiento">Fecha de mantenimiento</label>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-4 d-flex align-items-center">
        <a onclick="create()" class="btn btn-primary mb-3"><i class="fa-brands fa-creative-commons-by me-1"></i>Crear</a>
    </div>
</div>

<script src="./assets/js/equiposComputo.js"></script>