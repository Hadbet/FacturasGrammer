<?php

include_once('db/db_Facturas.php');

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();



    $datos = mysqli_query($conex, "SELECT `IdFactura`, `Folio`, CONCAT('<a class=\"btn btn-primary\" href=\"documentacion/', `Documento`, '.pdf\">', 'Ver documento', '</a>') AS `DocumentoLink`, `FechaRegistro`, `Usuario`,  `Estatus`, `FechaAprobacion`, CONCAT('<button  class=\"btn btn-success\">Aceptar</button>') AS `Aceptar`, CONCAT('<button  class=\"btn btn-danger\">Rechazar</button>') AS `Rechazar`
FROM `Facturas` 
WHERE `Estatus` = 0;");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>