<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/iconoarriba.png" />
    <title>Grammer RH</title>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="vertical  light  ">
<div class="wrapper">
    <?php
            require_once('estaticos/navegador.php');
    ?>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Registrarse a un curso</h2>
                    <p class="text-muted">Bienvenido aqui podras programar y registrarte para tus cursos.</p>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Registro</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="cbCurso">Curso</label>
                                        <select class="custom-select" id="cbCurso">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="txtFecha">Fecha</label>
                                    <input type="text" class="form-control" id="txtFecha" value="04/24/2020" aria-describedby="button-addon2">
                                </div>

                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="cbHorario">Horario</label>
                                        <select id="cbHorario" multiple="" class="form-control">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="txtObjetivo">Objetivo</label>
                                        <textarea class="form-control" id="txtObjetivo" placeholder="Required example textarea" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6" >
                                    <div class="form-group mb-3">
                                        <label for="cbInstructor">Instructor</label>
                                        <select class="custom-select" id="cbInstructor">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="cbInstructor">Tipo de intructor :</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="INTERNO">
                                            <label class="form-check-label" for="inlineRadio1">INTERNO</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="EXTERNO">
                                            <label class="form-check-label" for="inlineRadio2">EXTERNO</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="cbInstructor">Area/Empresa</label>
                                        <input type="text" class="form-control drgpicker" id="txtArea"
                                               value="" aria-describedby="button-addon2">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="txtCapacidad">Capacidad</label>
                                        <input type="number" class="form-control drgpicker" id="txtCapacidad"
                                               value="" aria-describedby="button-addon2">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="txtVigencia">Vigencia</label>
                                        <input type="date" class="form-control drgpicker" id="txtVigencia"
                                               value="" aria-describedby="button-addon2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="cbHorario">Temario</label>
                                        <br>
                                        <div class="col-md-11 float-left" style="padding-left: 0px !important;padding-right: 0px !important;">
                                        <input type="text" class="form-control float-left" id="txtTemario">
                                        </div>
                                        <div class="col-md-1 float-left">
                                            <button type="button" onclick="cargarSeleccionCursos();" class="btn mb-2 btn-info  ext-white">Agregar<span
                                                    class="fe fe-plus fe-16 ml-2"></span></button>
                                        </div>
                                        <br>
                                        <select id="cbTemario" multiple="" class="form-control">
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="registrarCursoNuevo();" class="btn mb-2 btn-success float-right text-white">Registrar<span
                                    class="fe fe-send fe-16 ml-2"></span></button>
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
                            <h5 class="card-title">Cursos actuales</h5>
                            <table id="tablaCursosD" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Curso</th>
                                    <th>Fecha</th>
                                    <th>Horario</th>
                                    <th>Capacidad</th>
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
                    <h2 class="page-title">Registros de cursos y horario</h2>
                    <p class="text-muted">Bienvenido aqui podras programar y registrarte para tus cursos.</p>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Registro</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group col-md-6">
                                    <label for="horarioInicioCursos">Inicio</label>
                                    <input type="time" class="form-control drgpicker" id="horarioInicioCursos" aria-describedby="button-addon2">
                                    <br>

                                    <label for="horarioTerminoCursos">Termino</label>
                                    <input type="time" class="form-control drgpicker" id="horarioTerminoCursos" aria-describedby="button-addon2">
                                    <br>
                                    <button type="button" onclick="registrarhorario()" class="btn mb-2 btn-success float-right text-white">Registrar<span
                                            class="fe fe-chevron-right fe-16 ml-2"></span></button>
                                </div>
                                </div>

                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group mb-6">
                                        <label for="txNombreCurso">Nombre Cursos</label>
                                        <input type="text" class="form-control drgpicker" id="txNombreCurso"
                                               value="" aria-describedby="button-addon2">
                                        <br>
                                        <button type="button" onclick="registrarNombre()" class="btn mb-2 btn-success float-right text-white">Registrar<span
                                                class="fe fe-chevron-right fe-16 ml-2"></span></button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->


        <div class="row">

            <div class="col-md-6 my-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Horarios</h5>
                        <table id="tablaHorarios" class="table table-bordered table-hover mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- Bordered table -->

            <!-- simple table -->
            <div class="col-md-6 my-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Cursos</h5>
                        <table id="tablaCursos" class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- simple table -->
            <!-- Bordered table -->

        </div> <!-- end section -->



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Registrar Instructor</h2>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <strong>Ingresa los datos de manera correcta</strong>
                                </div>
                                <div class="card-body">

                                    <form action="dao/subirArchivos.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-6">
                                                    <label for="txtNombreInstrictor">Nombre</label>
                                                    <input type="text" name="nombreInstructor" class="form-control drgpicker" id="txtNombreInstrictor"
                                                           value="" aria-describedby="button-addon2" oninput="verificarValor()">
                                                    <br>
                                                    <label for="txtAreaInstructor">Area</label>
                                                    <input type="text" name="areaInstructor" class="form-control drgpicker" id="txtAreaInstructor"
                                                           value="" aria-describedby="button-addon2">
                                                    <br>
                                                </div>
                                            </div>

                                            <!-- /.col -->
                                            <div class="col-md-6">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="cbInstructor">Tipo de intructor :</label>
                                                        <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="INTERNO">
                                                            <label class="form-check-label" for="inlineRadio1">INTERNO</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="EXTERNO">
                                                            <label class="form-check-label" for="inlineRadio2">EXTERNO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Input para subir archivos -->
                                        <div class="form-group">
                                            <label for="archivos">Subir archivos:</label>
                                            <input type="file" class="form-control-file" id="archivos" name="archivos[]" multiple>
                                        </div>
                                        <!-- Botón para enviar el formulario -->
                                        <button type="submit" id="btnEnviarInt" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                        <div class="col-md-6 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Instructores</h5>
                                    <table id="tablaInstructores" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Detalles</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->

                    </div> <!-- .row -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->



    </main> <!-- main -->
</div> <!-- .wrapper -->

<div class="modal fade modal-right modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tipo :<span id="txtTipoL"></span></p>
                <p>Area :<span id="txtAreaL"></span></p>
                <br>
                <p>DOCUMENTACION</p>
                <table id="tablaArchivos" class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <form action="dao/subirMasArchivos.php" method="post" enctype="multipart/form-data">
                    <input style="display: none" type="text" name="nombreInstructor" class="form-control drgpicker" id="txtNombreInstrictorAux"
                           value="" aria-describedby="button-addon2">
                    <div class="form-group">
                        <label for="archivos">Subir archivos:</label>
                        <input type="file" class="form-control-file" id="archivosNuevos" name="archivos[]" multiple>
                    </div>
                    <!-- Botón para enviar el formulario -->
                    <button type="submit" id="btnEnviarNuevos" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>

    var datepicker = flatpickr("#txtFecha", {
        mode: "multiple",
        dateFormat: "Y-m-d",
        defaultDate: new Date()
    });

    cargarCursos();
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');

    function registrarNombre() {
        var nombre = document.getElementById("txNombreCurso").value;
        const data = new FormData();

        data.append('nombre', nombre.trim());

        fetch('dao/guardarNombreCurso.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviardo.'
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

    function cargarCursos() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaNombre.php', function (data) {
            var select = document.getElementById("cbCurso");
            var table = $("#tablaCursos"); // selecciona la tabla
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].NombreCurso;
                createOption.value = data.data[i].NombreCurso;
                select.appendChild(createOption);

                var newRow = $("<tr></tr>");
                var idCell = $("<td></td>").text(data.data[i].IdNombreCurso);
                var nameCell = $("<td></td>").text(data.data[i].NombreCurso);
                //var eliminarCell = $("<td></td>").text("<button onclick = 'eliminar'>"+data.data[i].NombreCurso+"</button>");

                // agrega las celdas a la fila y la fila a la tabla
                newRow.append(idCell);
                newRow.append(nameCell);
                table.append(newRow);
            }
        });
    }
    var listaCursos = [];
    var instructores = {};
    cargarInstructor();
    function cargarInstructor() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaInstructor.php', function (data) {
            var select = document.getElementById("cbInstructor");
            var table = $("#tablaInstructores"); // selecciona la tabla
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].Nombre;
                createOption.value = data.data[i].Nombre;
                select.appendChild(createOption);

                var newRow = $("<tr></tr>");
                var idCell = $("<td></td>").text(data.data[i].IdInstructor);
                var nameCell = $("<td></td>").text(data.data[i].Nombre);
                var detallesCell = $("<td></td>").html(`<button type="button" class="btn mb-2 btn-secondary" onclick="cargarDetalles('${data.data[i].Nombre}','${data.data[i].Tipo}','${data.data[i].Area}')" data-toggle="modal" data-target=".modal-right">Ver detalles</button>`);

                newRow.append(idCell);
                newRow.append(nameCell);
                newRow.append(nameCell);
                newRow.append(detallesCell);
                table.append(newRow);
                listaCursos.push(data.data[i].Nombre);

                instructores[data.data[i].Nombre] = {
                    id: data.data[i].IdInstructor,
                    tipo: data.data[i].Tipo,
                    area: data.data[i].Area
                };
            }
        });
    }

    $('#cbInstructor').change(function() {
        var nombreInstructor = $(this).val();
        var datosInstructor = instructores[nombreInstructor];

        // Aquí tienes los datos del instructor seleccionado
        var idInstructor = datosInstructor.id;
        var tipoInstructor = datosInstructor.tipo;
        var areaInstructor = datosInstructor.area;

        document.getElementById("txtArea").value = areaInstructor;
        var radios = document.getElementsByName('inlineRadioOptions');
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].value === tipoInstructor) {
                radios[i].checked = true;
            }
        }
    });

    function cargarDetalles(nombre,tipo,area) {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaDocumentos.php?nombre='+nombre, function (data) {
            document.getElementById("defaultModalLabel").innerHTML = nombre;
            document.getElementById("txtTipoL").innerHTML = " "+tipo;
            document.getElementById("txtAreaL").innerHTML = " "+area;
            document.getElementById("txtNombreInstrictorAux").value = nombre;
            var table = $("#tablaArchivos"); // selecciona la tabla
            table.empty();
            for (var i = 0; i < data.data.length; i++) {

                var newRow = $("<tr></tr>");
                var idCell = $("<td></td>").html("<a target='_blank' href='"+data.data[i].Ruta.replace('../', '')+"'>"+data.data[i].NombreArchivo+"</a>");
                newRow.append(idCell);
                table.append(newRow);
            }
        });
    }

    function verificarValor() {
        var nombreInstructor = document.getElementById('txtNombreInstrictor').value.toLowerCase();
        var boton = document.getElementById("btnEnviarInt");
        console.log(listaCursos[0]);

        var existe = listaCursos.map(function(curso) { return curso.toLowerCase(); }).includes(nombreInstructor);

        boton.disabled = existe;
    }

    function registrarhorario() {
        var inicio = document.getElementById("horarioInicioCursos").value;
        var fin = document.getElementById("horarioTerminoCursos").value;

        var completo = inicio + " - " + fin;
        const data = new FormData();

        data.append('horario', completo.trim());

        fetch('dao/guardarHorarioCurso.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviardo.'
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
    cargarHorarios();
    function cargarHorarios() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaHorario.php', function (data) {
            var select = document.getElementById("cbHorario");
            var table = $("#tablaHorarios"); // selecciona la tabla
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].HorarioCurso;
                createOption.value = data.data[i].HorarioCurso;
                select.appendChild(createOption);

                // crea una nueva fila y celdas para la tabla
                var newRow = $("<tr></tr>");
                var idCell = $("<td></td>").text(data.data[i].IdHorarioCurso); // asume que tienes un campo id en tus datos
                var nameCell = $("<td></td>").text(data.data[i].HorarioCurso);

                // agrega las celdas a la fila y la fila a la tabla
                newRow.append(idCell);
                newRow.append(nameCell);
                table.append(newRow);
            }
        });
    }

    var select = document.getElementById("cbHorario");

    select.addEventListener('dblclick', function() {
        // Aquí va el código que quieres que se ejecute cuando se haga doble click
        console.log('Doble click en el elemento select');
    });

    function registrarCursoNuevo() {
        var nombre = document.getElementById("cbCurso").value;
        var horario = document.getElementById("cbHorario").value;
        var fecha = document.getElementById("txtFecha").value;
        var capacidad = document.getElementById("txtCapacidad").value;
        var objetivo = document.getElementById("txtObjetivo").value;
        var instructor = document.getElementById("cbInstructor").value;
        var area = document.getElementById("txtArea").value;
        var fechaFinal = document.getElementById("txtVigencia").value;
        var selectedDates = datepicker.selectedDates;



        var select = document.getElementById("cbTemario");
        var options = Array.from(select.options); // Convierte HTMLCollection a Array
        var values = options.map(function(option) {
            return option.value;
        });
        var temario = values.join(" - ");

        var radios = document.getElementsByName('inlineRadioOptions');
        var tipo;
        for(var i = 0; i < radios.length; i++){
            if(radios[i].checked){
                tipo = radios[i].value;
                break;
            }
        }

        for (var i = 0; i < selectedDates.length; i++) {
            //var fechaFormateada = selectedDates[i].toLocaleDateString('es-ES');
            var fecha = selectedDates[i];
            var dia = String(fecha.getDate()).padStart(2, '0');
            var mes = String(fecha.getMonth() + 1).padStart(2, '0'); // Los meses en JavaScript empiezan en 0
            var ano = fecha.getFullYear();

            var fechaFormateada = ano + '-' + mes + '-' + dia;
            console.log(fechaFormateada);
        const data = new FormData();

        data.append('nombre', nombre.trim());
        data.append('horario', horario.trim());
        data.append('fecha', fechaFormateada);
        data.append('capacidad', capacidad.trim());
        data.append('objetivo', objetivo.trim());
        data.append('instructor', instructor.trim());
        data.append('temario', temario);
        data.append('tipo', tipo);
        data.append('area', area);
        data.append('fechaFinal', fechaFinal);


        fetch('dao/guardarCurso.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviardo.'
                    })
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
    }
    cargarCursosD();
    function cargarCursosD() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCurso.php', function (data) {
            var select = document.getElementById("cbHorario");
            var table = $("#tablaCursosD"); // selecciona la tabla
            for (var i = 0; i < data.data.length; i++) {
                var newRow = $("<tr></tr>");
                var idCell = $("<td></td>").text(data.data[i].IdCurso); // asume que tienes un campo id en tus datos
                var nameCell = $("<td></td>").text(data.data[i].NombreCurso);
                var horarioCell = $("<td></td>").text(data.data[i].Horario);
                var fechaCell = $("<td></td>").text(data.data[i].Fecha);
                var capacidadCell = $("<td></td>").text(data.data[i].Capacidad);
                if (data.data[i].Estatus === '0'){
                    var estatusCell = $("<td></td>").html("<span class=\"badge badge-pill badge-warning\">"+"Caducado"+"</span>");
                }else{
                    var estatusCell = $("<td></td>").html("<span class=\"badge badge-pill badge-success\">"+"Disponible"+"</span>");
                }
                // agrega las celdas a la fila y la fila a la tabla
                newRow.append(idCell);
                newRow.append(nameCell);
                newRow.append(horarioCell);
                newRow.append(fechaCell);
                newRow.append(capacidadCell);
                newRow.append(estatusCell);
                table.append(newRow);
            }
        });
    }

    function cargarSeleccionCursos (){
        var select = document.getElementById("cbTemario");
        var nuevoValor = document.getElementById("txtTemario").value;

        // Verificar si el valor ya existe en las opciones
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value === nuevoValor) {
                // El valor ya existe, así que salimos de la función
                document.getElementById("txtTemario").value = "";
                return;
            }
        }

        // Si llegamos aquí, el valor no existe en las opciones, así que lo agregamos
        var createOption = document.createElement("option");
        createOption.text = nuevoValor;
        createOption.value = nuevoValor;
        select.appendChild(createOption);

        document.getElementById("txtTemario").value = "";

    }

</script>
</body>
</html>