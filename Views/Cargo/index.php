<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
    <div>
            <h1><i class="fa fa-dashboard"></i> Cargos </h1>
    </div>
</div>
<button class="btn btn-primary mb-2" type="button" onclick="frmCargo()"><i class="fa fa-plus"></i></button>
<div class="row">
<div class="col-lg-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tblCargo">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="nuevoCargo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white" id="title">Registro Cargo</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmCargo">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cargo">Descripcion</label>
                                <input type="hidden" id="id" name="id">
                                <input id="cargo" class="form-control" type="text" name="cargo" required placeholder="Nombre de Cargo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" onclick="registrarCargo(event)" id="btnAccion">Registrar</button>
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Atras</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>