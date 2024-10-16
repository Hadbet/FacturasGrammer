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
                        <div class="card-header">
                            <strong class="card-title">Registro</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="dao/subirMasArchivos.php" method="post" enctype="multipart/form-data">
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
                                </form>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="agregarAsistenciaCurso()"
                                    class="btn mb-2 btn-success float-right text-white">Registrar<span
                                    class="fe fe-chevron-right fe-16 ml-2"></span></button>
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
                            <h5 class="card-title">Mis facturas pendientes</h5>
                            <table id="tablaCursosPendientes" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nombre Curso</th>
                                    <th>Fecha</th>
                                    <th>Horario</th>
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

    var radios = document.getElementsByName('inlineRadioOptions');

    // Recorre todos los elementos
    for(var i = 0; i < radios.length; i++){
        radios[i].addEventListener('click', function(){
            if(this.value == "Administrativo"){
                var divApu = document.getElementById("divApu");
                divApu.style.display = 'none';
                divApu.classList.add('animate__animated', 'animate__bounceIn');

                var divSupervisor = document.getElementById("divSupervisor");
                divSupervisor.style.display = 'none';
                divSupervisor.classList.add('animate__animated', 'animate__bounceIn');

                var divShiftleader = document.getElementById("divShiftleader");
                divShiftleader.style.display = 'none';
                divShiftleader.classList.add('animate__animated', 'animate__bounceIn');

                var divSuper = document.getElementById("divEncargado");
                divSuper.style.display = 'block';
                divSuper.classList.add('animate__animated', 'animate__bounceIn');
            }else{

                var divApu = document.getElementById("divEncargado");
                divApu.style.display = 'none';
                divApu.classList.add('animate__animated', 'animate__bounceIn');

                var divSuper = document.getElementById("divApu");
                divSuper.style.display = 'block';
                divSuper.classList.add('animate__animated', 'animate__bounceIn');
            }
        });
    }

    $(document).ready(function () {
        $('#nextButton').click(function () {
            $('#modal1').modal('hide');
        });

        $('#modal1').on('hidden.bs.modal', function () {
            $('#modal2').modal('show');
        });
    });


    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');

    llenarAPU();

    function llenarAPU() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoApu.php', function (data) {
            var select = document.getElementById("cbApu");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].Nombre;
                createOption.value = data.data[i].Puesto;
                select.appendChild(createOption);
            }
        });
    }

    llenarEncargado();

    function llenarEncargado() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoEncargado.php', function (data) {
            var select = document.getElementById("cbEncargado");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].nombre;
                createOption.value = data.data[i].nombre;
                select.appendChild(createOption);
            }
        });
    }

    function llenarSuper() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoSupervisor.php?APU=' + document.getElementById("cbApu").value, function (data) {
            var selectS = document.getElementById("cbSupervisor");
            selectS.innerHTML = "";

            var selectA = document.getElementById("cbShiftleader");
            selectA.innerHTML = "";


            var createOptionDef = document.createElement("option");
            createOptionDef.text = "Seleccione";
            createOptionDef.value = "";
            selectS.appendChild(createOptionDef);

            for (var i = 0; i < data.data.length; i++) {
                var createOptionS = document.createElement("option");
                createOptionS.text = data.data[i].Supervisor;
                createOptionS.value = data.data[i].Supervisor;
                selectS.appendChild(createOptionS);
            }

            var divSuper = document.getElementById("divSupervisor");
            divSuper.style.display = 'block';
            divSuper.classList.add('animate__animated', 'animate__bounceIn');

        });
    }

    function llenarShift() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoShiftLeader.php?APU=' + document.getElementById("cbSupervisor").value, function (data) {
            var selectS = document.getElementById("cbShiftleader");
            selectS.innerHTML = "";

            var createOptionDefS = document.createElement("option");
            createOptionDefS.text = "Seleccione";
            createOptionDefS.value = "";
            selectS.appendChild(createOptionDefS);

            for (var i = 0; i < data.data.length; i++) {
                var createOptionS = document.createElement("option");
                createOptionS.text = data.data[i].ShiftLeader;
                createOptionS.value = data.data[i].ShiftLeader;
                selectS.appendChild(createOptionS);
            }

            var divShift = document.getElementById("divShiftleader");
            divShift.style.display = 'block';
            divShift.classList.add('animate__animated', 'animate__bounceIn');

        });
    }

    var cursos = [];

    function cargarCursosSelect() {

        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCursoCapacidad.php', function (data) {
            cursos = data.data;
            var select = document.getElementById("cbCurso");
            select.innerHTML = "";
            var nombresCursos = [];

            var createOption = document.createElement("option");
            createOption.text = "Seleccione curso";
            createOption.value = "Seleccione curso";
            select.appendChild(createOption);

            for (var i = 0; i < cursos.length; i++) {
                if (!nombresCursos.includes(cursos[i].NombreCurso)) {
                        nombresCursos.push(cursos[i].NombreCurso);
                        createOption = document.createElement("option");
                        createOption.text = cursos[i].NombreCurso;
                        createOption.value = cursos[i].NombreCurso;
                        select.appendChild(createOption);
                }
            }
            var divCurso = document.getElementById("divCurso");
            divCurso.style.display = 'block';
            divCurso.classList.add('animate__animated', 'animate__bounceIn');
        });
    }

    function cargarFechasHorarios() {
        var select = document.getElementById("cbFechaHora");
        select.innerHTML = ""; // Limpiar el select
        var cursoSeleccionado = document.getElementById("cbCurso").value;
        for (var i = 0; i < cursos.length; i++) {
            if (cursos[i].NombreCurso == cursoSeleccionado) {

                if (parseInt(cursos[i].CapacidadRestante) <= 0){

                }else{
                    var createOption = document.createElement("option");
                    createOption.text = cursos[i].Fecha + ", " + cursos[i].Horario + " (" + cursos[i].CapacidadRestante + " disponibles)";
                    createOption.value = cursos[i].Fecha + ", " + cursos[i].Horario;
                    select.appendChild(createOption);
                }

            }
        }
    }

    function cargarSeleccionCursos() {
        var select = document.getElementById("cbHorario");
        var nuevoValor = document.getElementById("cbCurso").value + ", " + document.getElementById("cbFechaHora").value;

        // Verificar si el valor ya existe en las opciones
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value == nuevoValor) {
                // El valor ya existe, así que salimos de la función
                return;
            }
        }

        // Si llegamos aquí, el valor no existe en las opciones, así que lo agregamos
        var createOption = document.createElement("option");
        createOption.text = nuevoValor;
        createOption.value = nuevoValor;
        select.appendChild(createOption);
    }

    function eliminarCurso() {
        var select = document.getElementById("cbHorario");
        var selectedIndex = select.selectedIndex;

        if (selectedIndex != -1) {
            select.remove(selectedIndex);
        }
    }

    async function agregarAsistenciaCurso() {
        var selectedOption = document.querySelector('input[name="inlineRadioOptions"]:checked').value;
        console.log(selectedOption);
        var nomina = document.getElementById("txtNominaCurso");
        var nombre = document.getElementById("txtNombrePersonaCurso");
        var apu = document.getElementById("cbApu");
        var supervisor = document.getElementById("cbSupervisor");
        var shiftLeader = document.getElementById("cbShiftleader");
        var cursos = document.getElementById("cbHorario");
        var encargado = document.getElementById("cbEncargado");

        var errorOcurrido = false;

        const dataRegistro = new FormData();

        dataRegistro.append('nomina', nomina.value.trim());
        dataRegistro.append('nombre', nombre.value.trim());


        if (selectedOption === "Administrativo"){
            dataRegistro.append('apu', "NA");
            dataRegistro.append('supervisor', encargado.value.trim());
            dataRegistro.append('shiftLeader', "NA");
        }else{
            dataRegistro.append('apu', apu.value.trim());
            dataRegistro.append('supervisor', supervisor.value.trim());
            dataRegistro.append('shiftLeader', shiftLeader.value.trim());
        }

        var fetchPromises = [];

        for (var i = 0; i < cursos.options.length; i++) {
            dataRegistro.append('horario', cursos.options[i].value.trim());

            var horarioNormal = cursos.options[i].value;
            var horarioParts = horarioNormal.split(", ");

            var Curso = horarioParts[0].trim();
            var Fecha = horarioParts[1].trim();
            var HorarioCurso = horarioParts[2].trim();

            await $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCapacidad.php?curso=' + Curso + '&fecha=' + Fecha + '&horario=' + HorarioCurso, function (data) {
                if (data.data[0].Contador < data.data[0].Capacidad) {
                    var fetchPromise = fetch('dao/guardarBitacoraCurso.php', {
                        method: 'POST',
                        body: dataRegistro
                    })
                        .then(function (response) {
                            if (!response.ok) {
                                throw "Error en la llamada Ajax";
                            }
                        })
                        .catch(function (err) {
                            console.log(err);
                        });

                    fetchPromises.push(fetchPromise);
                } else {
                    errorOcurrido = true;
                    Swal.fire({
                        icon: 'error',
                        title: 'Cupo lleno.', showConfirmButton: false, input: 'none',
                        text: 'No se acompleto el registro debido a la capacidad del curso.'
                    })
                }
            });

        }

        Promise.all(fetchPromises)
            .then(function () {
                if (!errorOcurrido) {
                    return Swal.fire({
                        icon: 'success',
                        title: 'Enviado.',
                        showConfirmButton: false,
                        input: 'none',
                        text: 'Ya esta inscrito en los o el curso.',
                        timer: 1800
                    });
                }
            })
            .then(function() {
                location.reload();
            })
            .catch(function (err) {
                console.log(err);
            });

    }

    cargarHorarios();

    function cargarHorarios() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCursoUsuario.php?nomina=' + document.getElementById("txtNominaCurso").value, function (data) {
            var table = $("#tablaCursosPendientes"); // selecciona la tabla
            var tableConcluidos = $("#tablaConcluidos"); // selecciona la tabla
            var tableCertificados = $("#tablaCertificados"); // selecciona la tabla
            var tablaCursosAsistidos = $("#tablaCursosAsistidos"); // selecciona la tabla
            let fechaActual = new Date();
            fechaActual.setHours(0, 0, 0, 0);

            for (var i = 0; i < data.data.length; i++) {

                let fechaData = new Date(data.data[i].Fecha);
                fechaData.setHours(0, 0, 0, 0);

                if (data.data[i].EstatusAsistencia == '0' && fechaData >= fechaActual) {
                    var newRow = $("<tr></tr>");
                    var nameCell = $("<td></td>").text(data.data[i].Curso); // asume que tienes un campo id en tus datos
                    var horarioCell = $("<td></td>").text(data.data[i].Horario); // asume que tienes un campo id en tus datos
                    var fechaCell = $("<td></td>").text(data.data[i].Fecha);

                    // agrega las celdas a la fila y la fila a la tabla
                    newRow.append(nameCell);
                    newRow.append(fechaCell);
                    newRow.append(horarioCell);
                    table.append(newRow);
                }
                if (data.data[i].EstatusAsistencia == '1' || data.data[i].EstatusAsistencia == '2' || data.data[i].EstatusAsistencia == '3') {
                    var newRow = $("<tr></tr>");
                    var nameCell = $("<td></td>").text(data.data[i].Curso); // asume que tienes un campo id en tus datos
                    var horarioCell = $("<td></td>").text(data.data[i].Horario); // asume que tienes un campo id en tus datos
                    var fechaCell = $("<td></td>").text(data.data[i].Fecha);

                    // agrega las celdas a la fila y la fila a la tabla
                    newRow.append(nameCell);
                    newRow.append(fechaCell);
                    newRow.append(horarioCell);
                    tablaCursosAsistidos.append(newRow);
                }
                if (data.data[i].EstatusAsistencia == '2') {

                    var newRowConcluido = $("<tr></tr>");
                    var idCell = $("<td></td>").text(data.data[i].IdBitacoraCurso);
                    var nameCursoCell = $("<td></td>").text(data.data[i].Curso); // asume que tienes un campo id en tus datos
                    var horarioCursoCell = $("<td></td>").text(data.data[i].Horario); // asume que tienes un campo id en tus datos
                    var fechaCursoCell = $("<td></td>").text(data.data[i].Fecha); // asume que tienes un campo id en tus datos
                    if (data.data[i].Evaluacion === '0') {
                        var evaluacionCell = $("<td></td>").html("<span class=\"badge badge-pill badge-warning text-white\">" + "Pendiente" + "</span>");
                    } else {
                        var evaluacionCell = $("<td></td>").text(data.data[i].Evaluacion);

                    }
                    var valorarCell = $("<td></td>").html(`<button type="button" class="btn mb-2 btn-secondary" onclick="llenarEvaluacion('${data.data[i].Curso}','${data.data[i].Horario}','${data.data[i].Fecha}','${data.data[i].IdBitacoraCurso}')" data-toggle="modal" data-target=".modal-full">Valorar</button>`);

                    // agrega las celdas a la fila y la fila a la tabla
                    newRowConcluido.append(idCell);
                    newRowConcluido.append(nameCursoCell);
                    newRowConcluido.append(horarioCursoCell);
                    newRowConcluido.append(fechaCursoCell);
                    newRowConcluido.append(evaluacionCell);
                    newRowConcluido.append(valorarCell);

                    tableConcluidos.append(newRowConcluido);
                }
                if (data.data[i].EstatusAsistencia == '3') {
                    var newRowCertificado = $("<tr></tr>");
                    var idCertificadoCell = $("<td></td>").text(data.data[i].IdBitacoraCurso);
                    var nameCertificadoCell = $("<td></td>").text(data.data[i].Curso); // asume que tienes un campo id en tus datos
                    var horarioCertificadoCell = $("<td></td>").text(data.data[i].Horario); // asume que tienes un campo id en tus datos
                    var fechaCertificadoCell = $("<td></td>").text(data.data[i].Fecha); // asume que tienes un campo id en tus datos
                    if (data.data[i].Evaluacion === '0') {
                        var evaluacionCertificadoCell = $("<td></td>").html("<span class=\"badge badge-pill badge-warning text-white\">" + "Pendiente" + "</span>");
                    } else {
                        var evaluacionCertificadoCell = $("<td></td>").text(data.data[i].Evaluacion);

                    }
                    var certificadoCell = $("<td></td>").html(`<button type="button" class="btn mb-2 btn-secondary" onclick="generarCertificado('${data.data[i].Curso}','${data.data[i].Horario}','${data.data[i].Fecha}','${data.data[i].IdBitacoraCurso}')" >Descargar Certificado</button>`);

                    newRowCertificado.append(idCertificadoCell);
                    newRowCertificado.append(nameCertificadoCell);
                    newRowCertificado.append(horarioCertificadoCell);
                    newRowCertificado.append(fechaCertificadoCell);
                    newRowCertificado.append(evaluacionCertificadoCell);
                    newRowCertificado.append(certificadoCell);
                    tableCertificados.append(newRowCertificado);
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