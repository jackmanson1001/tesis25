<?php include "Views/Templates/header.php"; ?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Servicio</h1>
    </div>
</div>
<button class="btn btn-primary mb-2" type="button" onclick="frmServicio()"><i class="fa fa-plus"></i></button>
<div class="row">
    <div class="col-lg-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tblServicio">
                        <thead class="thead-dark">
                            <tr>
                                <th>IDservicio</th>
                                <th>DescripcionServicio</th>
                                <th>PrecioBase</th>
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
<div id="nuevoServicio" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white" id="title">Registro Servicio</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmServicio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="servicio">Servicio</label>
                                <input type="hidden" id="id" name="id">
                                <input id="servicio" class="form-control" type="text" name="servicio" required placeholder="Nombre de Servicio">
                                <label for="preciobase">Precio Base</label>
                                <input id="preciobase" class="form-control" type="text" name="preciobase" required placeholder="Precio Base">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" onclick="registrarServicio(event)" id="btnAccion">Registrar</button>
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