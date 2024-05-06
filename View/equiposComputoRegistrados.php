<?php include_once "./header.php"; ?>


<div class="row mt-5 justify-content-center ">
        <h1 class="text-center mb-4">EQUIPOS DE COMPUTO REGISTRADOS</h1>
        <div class="col-11">
            <table class="table" id="tablePc">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Anydesk</th>
                        <th scope="col">Ip</th>
                        <th scope="col">Responsable</th>
                        <th scope="col">Fecha de mantenimiento</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>
    </div>
</div>



<div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning bg-gradient">
                    <h1 class="modal-title fs-5 col-10 text-center ms-4" id="updateModalLabel">Modificar información del equipo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Nombre del equipo</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="text" id="txtNombreMod" class="form-control" placeholder="anydesk">
            <label for="txtNombreMod">Nombre del equipo</label>
        </div>
    </div>

    <div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Anydesk del equipo</span>
    </div>

    <div class="col-3">
        <div class="form-floating mb-3">
            <input type="text" id="txtAnydeskMod" class="form-control" placeholder="anydesk">
            <label for="txtAnydeskMod">Anydesk del equipo</label>
        </div>
    </div>

</div>


<div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Ip del equipo</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="text" id="txtIpMod" class="form-control" placeholder="anydesk">
            <label for="txtIpMod">Ip del equipo</label>
        </div>
    </div>

    <div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Responsable</span>
    </div>

    <div class="col-3">
        <div class="form-floating mb-3">
            <input type="text" id="txtResponsableMod" class="form-control" placeholder="anydesk">
            <label for="txtResponsableMod">Responsable</label>
        </div>
    </div>

</div>


<div class="row">

<div class="col-2 d-flex justify-content-center align-items-center">
        <span class="fw-bolder mb-3">Fecha de mantenimiento</span>
    </div>

    <div class="col-4 pe-2">
        <div class="form-floating mb-3">
            <input type="date" id="txtFechaMantenimientoMod" class="form-control" placeholder="anydesk">
            <label for="txtFechaMantenimientoMod">Fecha de mantenimiento</label>
        </div>
    </div>

</div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerar</button>
                    <button onclick="update()" type="button" class="btn btn-warning " data-bs-dismiss="modal">Modificar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dander bg-gradient">
                <h1 class="modal-title fs-5 col-11 text-center ms-4" id="deleteModalLabel">Eliminar equipo</h1>
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

<script src="./assets/js/equiposComputo.js"></script>
