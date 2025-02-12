<?php
Class TipoReservaModel Extends Query
{
    public function __construct()
    {
        parent::__construct();

    }
public function getTiporeserva()
{
    $sql="SELECT IDTipoReserva,DescripcionTipoReserva,Estado FROM tiporeserva";
    $res=$this->selectAll($sql);
    return $res;
}

public function verificarPermisos($id_user, $permiso)
{
    $tiene = false;
    $sql = "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'";
    $existe = $this->select($sql);
    if ($existe != null || $existe != "") {
        $tiene = true;
    }
    return $tiene;
}

public function insertarTipoReserva($tiporeserva, $usuario)
{
    $verificar= "SELECT * FROM tiporeserva WHERE DescripcionTipoReserva = '$tiporeserva'";
    $existe = $this->select($verificar);
    if(empty($existe)){
        $query = "INSERT INTO tiporeserva(DescripcionTipoReserva,UsuarioCreacionReserva) VALUES (?,?)";
        $datos = array($tiporeserva,$usuario);
        $data = $this->save($query,$datos);
        if($data == 1){
            $res = "ok";
        }else{
            $res= "error";
        }
    } else {
        $res = "existe";
    }
    return $res;
}

public function editTipoReserva($id)
{
    $sql = "SELECT * FROM tiporeserva WHERE IDTipoReserva = $id";
    $res = $this->select($sql);
    return $res;
}
public function actualizarTipoReserva($tiporeserva,$usuario,$fechamodificacion,$id)
{
    $query = "UPDATE tiporeserva SET DescripcionTipoReserva = ? , UsuarioModificacionReserva= ? , FechaModificacionReserva = ?  WHERE IDTipoReserva = ?";
    $datos = array($tiporeserva, $usuario, $fechamodificacion ,$id);
    $data = $this->save($query, $datos);
    if($data == 1){
        $res = "modificado";
    }else {
        $res = "error";
    }
    return $res;
}

public function estadoTipoReserva($estado, $id)
{
    $query ="UPDATE tiporeserva SET estado = ? WHERE IDTipoReserva = ?";
    $datos = array($estado, $id);
    $data = $this->save($query, $datos);
    return $data;
}

}
?>