<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/iconoarriba.png"/>
    <title>GRAMMER FACTURAS</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <!-- CSS -->
    <link rel="stylesheet" href="lib/sweetalert2.css">
    <!-- JavaScript -->
    <script src="lib/sweetalert2.all.min.js"></script>

    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
        }

        .image-container img {
            transition: all 0.3s ease;
            width: 100px;
            height: 100px;
        }

        .image-container img:hover {
            transform: translateY(-10px);
        }

        .image-container img.active {
            transform: scale(1.2);
        }

        .image-container img.inactive {
            transform: scale(0.8);
        }

        #divCurso {
            opacity: 0;
            transition: opacity 2s;
        }

        .image-zoom {
            transform: scale(1.1);
            transition: transform .2s; /* Animación */
        }
    </style>

</head>
<body class="vertical  light  ">
<div class="wrapper">

    <?php
            require_once('estaticos/navegador.php');
    ?>

    <main role="main" class="main-content">
        <center><img src="images/titulo.png" style="width: 50%"></center>
        <br><br>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Registro de factura</h2>
                    <div class="card shadow mb-4">
                        <form action="dao/subirMasArchivos.php" method="post" enctype="multipart/form-data">
                        <div class="card-header">
                            <strong class="card-title">Registro</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNomina" name="txtNomina" value="00001606">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="Hadbet Ayari">
                                            <label for="txtFolio">Folio 45000000</label>
                                            <input type="text" class="form-control"
                                                   id="txtFolio" name="txtFolio" value="">
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="archivos">Subir archivos:</label>
                                            <input type="file" class="form-control-file" id="archivosNuevos" name="archivos[]" multiple>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit"
                                    class="btn mb-2 btn-success float-right text-white">Registrar<span
                                    class="fe fe-chevron-right fe-16 ml-2"></span></button>
                        </div>

                        </form>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Mis facturas pendientes</h5>
                            <table id="tablaCursosPendientes" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Folio</th>
                                    <th>Documento</th>
                                    <th>Fecha Peticion</th>
                                    <th>Usuario Peticion</th>
                                    <th>Estatus</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Mis facturas generales</h5>
                            <table id="tablaGeneral" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Folio</th>
                                    <th>Documento</th>
                                    <th>Fecha Peticion</th>
                                    <th>Usuario Peticion</th>
                                    <th>Estatus</th>
                                    <th>Aprobo</th>
                                    <th>Comentarios</th>
                                    <th>Folio Were</th>
                                    <th>Fecha Aprobacion</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

    </main> <!-- main -->
</div> <!-- .wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src="js/apps.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    cargarHorarios();
    function cargarHorarios() {
        $.getJSON('https://grammermx.com/Trafico/Facturas/dao/consultaFacturasPendientes.php', function (data) {
            var table = $("#tablaCursosPendientes");
            var tablaGeneral = $("#tablaGeneral");

            for (var i = 0; i < data.data.length; i++) {

                if (data.data[i].Estatus === '0') {
                    var newRow = $("<tr></tr>");
                    var idCell = $("<td></td>").text(data.data[i].IdFactura);
                    var folioCell = $("<td></td>").text(data.data[i].Folio);
                    var documentoCell = $("<td></td>");
                    var button = $("<a></a>")
                        .text("Ver Documento")
                        .attr("href", "documentacion/"+ data.data[i].Documento + ".pdf")
                        .attr("target", "_blank")
                        .addClass("btn btn-primary");
                    documentoCell.append(button);
                    var fechaCell = $("<td></td>").text(data.data[i].FechaRegistro);
                    var usuarioCell = $("<td></td>").text(data.data[i].Usuario);
                    var estatusCell = $("<td></td>");
                    var span = $("<span></span>")
                        .text("Pendiente")
                        .addClass("badge")
                        .css({"background-color": "yellow", "color": "black"});
                    estatusCell.append(span);

                    // agrega las celdas a la fila y la fila a la tabla
                    newRow.append(idCell);
                    newRow.append(folioCell);
                    newRow.append(documentoCell);
                    newRow.append(fechaCell);
                    newRow.append(usuarioCell);
                    newRow.append(estatusCell);
                    table.append(newRow);
                }

                if (data.data[i].Estatus === '1' || data.data[i].Estatus === '2') {
                    var newRow = $("<tr></tr>");
                    var idCell = $("<td></td>").text(data.data[i].IdFactura);
                    var folioCell = $("<td></td>").text(data.data[i].Folio);
                    var documentoCell = $("<td></td>");
                    var button = $("<a></a>")
                        .text("Ver Documento")
                        .attr("href", "documentacion/"+ data.data[i].Documento + ".pdf")
                        .attr("target", "_blank")
                        .addClass("btn btn-primary");
                    documentoCell.append(button);
                    var fechaCell = $("<td></td>").text(data.data[i].FechaRegistro);
                    var usuarioCell = $("<td></td>").text(data.data[i].Usuario);
                    var estatusCell = $("<td></td>");

                    if (data.data[i].Estatus === '1'){
                        var textoEstatus = 'Confirmado';
                        var color = 'green';
                    }else {
                        var textoEstatus = 'Rechazado';
                        var color = 'red';
                    }
                    var span = $("<span></span>")
                        .text(textoEstatus)
                        .addClass("badge")
                        .css({"background-color": color, "color": "white"});
                    estatusCell.append(span);


                    var aprobacionCell = $("<td></td>").text(data.data[i].Aprobacion);
                    var comentariosCell = $("<td></td>").text(data.data[i].Comentarios);
                    var foliowereCell = $("<td></td>").text(data.data[i].FolioWere);
                    var fechaAprobacionCell = $("<td></td>").text(data.data[i].FechaAprobacion);

                    // agrega las celdas a la fila y la fila a la tabla
                    newRow.append(idCell);
                    newRow.append(folioCell);
                    newRow.append(documentoCell);
                    newRow.append(fechaCell);
                    newRow.append(usuarioCell);
                    newRow.append(estatusCell);
                    newRow.append(aprobacionCell);
                    newRow.append(comentariosCell);
                    newRow.append(foliowereCell);
                    newRow.append(fechaAprobacionCell);
                    tablaGeneral.append(newRow);
                }
            }
        });
    }

    function generarCertificado(curso, horario, fecha, id) {
        var doc = new jsPDF('landscape');

        var nombre = document.getElementById("txtNombrePersonaCurso");
        var logo = new Image();
        logo.src = 'assets/images/plantilla.png';
        doc.addImage(logo, 'PNG', 0, 0, 298, 210);
        doc.setFillColor(173, 216, 230); // Azul claro
        doc.text(curso, 182, 123);
        doc.text(nombre.value, 141, 107);
        doc.text(fecha, 188, 130);
        doc.text('ID: ' + id, 13, 11);

        // Guarda el PDF
        doc.save('certificado.pdf');
    }

    var cursoGlobal, horarioGlobal, fechaGlobal, calificacionGlobal, idGlobal;
    var resOne="",resTwo="",resThree="",resFour="",resFive="",resSix="",resSeven="",resEight="",resNine="";
    function handleClick(clickedImage,Respuesta) {
        // Solo selecciona las imágenes en el mismo contenedor que la imagen seleccionada
        var images = clickedImage.parentNode.querySelectorAll('img');
        images.forEach(function (image) {
            if (image === clickedImage) {
                image.classList.add('active');
                image.classList.remove('inactive');
                image.classList.add('image-zoom'); // Agrega la clase para el zoom
            } else {
                image.classList.add('inactive');
                image.classList.remove('active');
                image.classList.remove('image-zoom'); // Quita la clase para el zoom
            }
        });

        if (Respuesta.includes("1")){resOne=Respuesta}
        if (Respuesta.includes("2")){resTwo=Respuesta}
        if (Respuesta.includes("3")){resThree=Respuesta}
        if (Respuesta.includes("4")){resFour=Respuesta}
        if (Respuesta.includes("5")){resFive=Respuesta}
        if (Respuesta.includes("6")){resSix=Respuesta}
        if (Respuesta.includes("7")){resSeven=Respuesta}
        if (Respuesta.includes("8")){resEight=Respuesta}
        if (Respuesta.includes("9")){resNine=Respuesta}
    }

    $(document).ready(function () {
        $('.modal').on('hidden.bs.modal', function () {
            var images = document.querySelectorAll('.image-container img');
            images.forEach(function (image) {
                image.classList.remove('active');
                image.classList.remove('inactive');
            });
        });
    });


    function llenarEvaluacion(curso, horario, fecha, id) {
        cursoGlobal = curso;
        horarioGlobal = horario;
        fechaGlobal = fecha;
        idGlobal = id;
    }

    function guardarEvaluacion() {

        console.log(resOne + "" + resTwo + "" + resThree + "" + resFour + "" + resFive + "" + resSix
            + resSeven + "" + resEight + "" + resNine)

        var nomina = document.getElementById("txtNominaCurso");
        var nombre = document.getElementById("txtNombrePersonaCurso");
        var comentarios = document.getElementById("txtComentariosCurso");
        var comentariosInstru = document.getElementById("txtComentariosInstructor");

        if (resOne===""){mensaje("No haz contestado la pregunta 1");return;}
        if (resTwo===""){mensaje("No haz contestado la pregunta 2");return;}
        if (resThree===""){mensaje("No haz contestado la pregunta 3");return;}
        if (resFour===""){mensaje("No haz contestado la pregunta 4");return;}
        if (resFive===""){mensaje("No haz contestado la pregunta 5");return;}
        if (resSix===""){mensaje("No haz contestado la pregunta 6");return;}
        if (resSeven===""){mensaje("No haz contestado la pregunta 7");return;}
        if (resEight===""){mensaje("No haz contestado la pregunta 8");return;}
        if (resNine===""){mensaje("No haz contestado la pregunta 9");return;}
        if (comentarios.value===""){mensaje("Te falto ingresar tus comentarios sobre el curso");return;}
        if (comentariosInstru.value===""){mensaje("Te falto ingresar tus comentarios sobre el instructor");return;}

        const data = new FormData();

        data.append('curso', cursoGlobal);
        data.append('horario', horarioGlobal);
        data.append('fecha', fechaGlobal);
        data.append('comentarios', comentarios.value);
        data.append('calificacion', calificacionGlobal);
        data.append('nomina', nomina.value);
        data.append('nombre', nombre.value);
        data.append('id', idGlobal);
        data.append('resOne', resOne);
        data.append('resTwo', resTwo);
        data.append('resThree', resThree);
        data.append('resFour', resFour);
        data.append('resFive', resFive);
        data.append('resSix', resSeven);
        data.append('resSeven', resSeven);
        data.append('resEight', resEight);
        data.append('resNine', resNine);
        data.append('comentariosInstructor', comentariosInstru.value);

        fetch('dao/guardarEvaluacionCurso.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: true, input: 'none',
                        text: 'Registro enviado.',
                        timer: 2500
                    })
                    location.reload();
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });
    }

    function mensaje(contenido) {
        Swal.fire({
            icon: 'error',
            title: 'Campos vacios.', showConfirmButton: false, input: 'none',
            text: contenido
        })
    }
</script>
</body>
</html>