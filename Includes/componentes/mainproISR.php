

<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">

                                    <div class="ml-2">

                                        <?php
                                        $idu = $_SESSION['idu'];
                                        require 'includes/bd.inc.php';
                                        $sql = "SELECT * from usuarios where idu='$idu'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            ¡Hola <strong><?php echo $mostrar['usuario'];
                                                        } ?></strong>!
                                            <div class="h6">
                                                Bienvenido al <strong class="text-black">Sistema</strong>
                                            </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Proveedores ISR</h2>
                        <div class="row">

                            <div class="container fondo">
                                <div class="row">
                                    <div class="botones offset-10">

                                        <div class="py-3 align-item-center justify-content-between">
                                            <a data-toggle="modal" id="buttom" href="#modalProveedor" class="btn-shadow btn btn-primary">
                                                <i class="pe-7s-plus"></i>
                                                Nuevo Proveedor ISR
                                            </a>
                                        </div>
                                        Listado
                                        <div class="py-3 align-item-center justify-content-between" style="visibility: hidden;">
                                            <!-- <a href="pdf.php" class="btn-shadow btn btn-danger">
                                                <i class="fa fa-file-pdf"></i>
                                                Generar PDF
                                            </a> -->
                                            <a href="includes/excel.php?export=true" class="btn-shadow btn btn-success">
                                                <i class="fa fa-file-excel"></i>
                                                Generar EXCEL
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <table id="datos-isr" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Seudonimo</th>
                                                <th>Razon social</th>
                                                <th>Rif</th>
                                                <th>Direccion</th>
                                                <th>editar</th>
                                                <th>borrar</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>

                            </div>
                            <div class="app-wrapper-footer">

                            </div>
                        </div>
                    </div>
                </div>








                <!-- JQuery (Tiene que estar antes que datatables por que esta la necesita) -->
                <script src="./CRUD-con-PHP-PDO-Ajax-Datatable-main/js/jquery-3.7.1.min.js"></script>
                <!-- datatables -->
                <script src="./CRUD-con-PHP-PDO-Ajax-Datatable-main/DataTables/datatables.js"></script>
                <!-- Bootstrap JS -->
                <script src="./CRUD-con-PHP-PDO-Ajax-Datatable-main/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- <script src="./CRUD-con-PHP-PDO-Ajax-Datatable-main/almacenacientoJSON.js"></script> -->

                <!-- Script -->

                <script type="text/javascript">
                    $(document).ready(function() {
                        var dataTable = $("#datos-isr").DataTable({
                            "processing": true,
                            "serverSide": true,
                            "order": [],
                            "ajax": {
                                url: "./CRUD-con-PHP-PDO-Ajax-Datatable-main-isr/obtener_registros.php",
                                type: "POST"
                            },
                            "columnsDefs": [{
                                "targets": [0, 3, 4],
                                "orderable": false,
                            }, ],
                            "language": {
                                "decimal": "",
                                "emptyTable": "No hay datos disponibles en la tabla",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Entradas",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscar:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }

                            }
                        });


                        /*
                        $(document).on("submit", "#form-empresa", function(e) {
                          e.preventDefault();
                          var Rif = $("#Rif").val();
                          var Razonsocial = $("#Razonsocial").val();
                          var Direccion = $("#Direccion").val();
                          var Seudonimo = $("#Seudonimo").val();
                          var extencion = $("#image-empresa").val().split('.').pop().toLowerCase();
                          if (extencion != "") {
                            if ($.inArray(extencion, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                              alert('El archivo seleccionado no es una imagen');
                              $("#image-empresa").val("");
                              return false;
                            }
                            if (Rif != '' && Razonsocial != '' && Direccion != '' && Seudonimo != '') {
                              $.ajax({
                                url: "crear.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                  alert(data);
                                  $("#form-empresa")[0].reset();
                                  $("#modalEmpresa").modal('hide');
                                  dataTable.ajax.reload();
                                }
                              });
                            } else {
                              alert('Todos los campos son requeridos');
                            }
                          }
                        })
                        */

                        var idModalProveedor = "#modalProveedor";
                        var idForm = "#form-proveedor-isr";
                        $(document).on("submit", idForm, function(e) {
                            e.preventDefault();
                            var nombreProveedor = $("#nombreProveedor").val();
                            var rifProveedor = $("#rifProveedor").val();
                            var direccionProveedor = $("#direccionProveedor").val();
                            var seudonimo = $("#seudonimo").val();

                            if (nombreProveedor != '' && rifProveedor != '' && direccionProveedor != '' && seudonimo != '') {
                                $.ajax({
                                    url: "./CRUD-con-PHP-PDO-Ajax-Datatable-main-isr/crear.php",
                                    method: "POST",
                                    data: {
                                        nombreProveedor: nombreProveedor,
                                        rifProveedor: rifProveedor,
                                        direccionProveedor: direccionProveedor,
                                        seudonimo: seudonimo,
                                        operacion: $("#operacion").val(),
                                        id_proveedor: $("#id_proveedor").val()
                                    },
                                    success: function(data) {
                                        alert(data);
                                        $("#form-proveedor-isr")[0].reset();
                                        $(idModalProveedor).modal('hide');
                                        dataTable.ajax.reload();
                                    }
                                });
                            } else {
                                alert('Todos los campos son requeridos');
                            }
                        });

                        // Funcionalidad nuevo
                        $(document).on("click", `a[href="${idModalProveedor}"]`, function(e) {
                            $(idForm)[0].reset();
                            $("#action").val("crear");
                            $("#operacion").val("crear");
                            console.log($(idModalProveedor + "> h5"));
                            document.querySelector(idModalProveedor + " h5").innerText = "Nuevo proveedor";
                            
                        })

                        // Funcionalidad editar
                        $(document).on("click", ".editar", function(e) {
                            var id_proveedor = e.target.id;
                            $.ajax({
                                url: "./CRUD-con-PHP-PDO-Ajax-Datatable-main-isr/obtener_registro.php",
                                method: "POST",
                                data: {
                                    id_proveedor: id_proveedor
                                },
                                dataType: "json",
                                success: function(data) {
                                    $(idModalProveedor).modal("show");
                                    $("#nombreProveedor").val(data.nombreProveedor);
                                    $("#rifProveedor").val(data.rifProveedor);
                                    $("#direccionProveedor").val(data.direccionProveedor);
                                    $("#seudonimo").val(data.seudonimo);
                                    $("#id_proveedor").val(id_proveedor); // Asegúrate de que el ID se esté enviando
                                    $("#action").val("editar");
                                    $("#operacion").val("editar");
                                    document.querySelector(idModalProveedor + " h5").innerText = "Editar proveedor";
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.log(textStatus, errorThrown);
                                }
                            })
                        })


                        // Funcionalidad Borrar
                        $(document).on("click", ".borrar", function(e) {
                            var id_proveedor = e.target.id;
                            if (confirm("¿Desea borrar el registro nro: " + id_proveedor + "?")) {
                                $.ajax({
                                    url: "./CRUD-con-PHP-PDO-Ajax-Datatable-main-isr/borrar.php",
                                    method: "POST",
                                    data: {
                                        id_proveedor: id_proveedor
                                    },
                                    success: function(data) {
                                        alert(data);
                                        dataTable.ajax.reload();
                                    }
                                })
                            }
                        })


                        // Final scritp
                    })
                </script>

            </div>



            <!-- Nuevo Paciente -->

            <div class="modal fade" id="modalProveedor" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title tituloFormProveedor" id="exampleModalLongTitle">Nuevo Proveedor</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>

                        <form class="needs-validation" id="form-proveedor-isr" action="CRUD-con-PHP-PDO-Ajax-Datatable-main-isr/codigodeconexion.php" method="post" novalidate>

                            <div class="modal-body">


                                <div class="form-row">
                                    <!-- Nombre del Proveedor -->
                                    <div class="col-md-12 mb-3">

                                        <label for="estado">Seudonimo</label>

                                        <input type="text" class="form-control" id="seudonimo" name='seudonimo' placeholder="seudonimo" required>
                                        <div class="invalid-feedback">
                                            Debe llenar este campo.
                                        </div>

                                        <div class="valid-feedback">
                                            Listo.
                                        </div>

                                    </div>

                                </div>

                                <div class="form-row">

                                    <!-- Nombre del Proveedor -->
                                    <div class="col-md-12 mb-3">

                                        <label for="estado">Nombre o razon social</label>

                                        <input type="text" class="form-control" id="nombreProveedor" name='nombreProveedor' placeholder="nombre del proveedor" required>
                                        <div class="invalid-feedback">
                                            Debe llenar este campo.
                                        </div>

                                        <div class="valid-feedback">
                                            Listo.
                                        </div>

                                    </div>

                                </div>
                                <div class="form-row">
                                    <!-- Rif Proveedor -->
                                    <div class="col-md-12 mb-3">

                                        <label for="paciente">Rif Proveedor</label>

                                        <input type="text" class="form-control" id="rifProveedor" name='rifProveedor' placeholder="ejemplo j-298400870" required>

                                        <div class="invalid-feedback">
                                            Debe rellenar este campo.
                                        </div>

                                        <div class="valid-feedback">
                                            Listo.
                                        </div>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <!-- Direccion del Proveedor -->
                                    <div class="col-md-12 mb-3">

                                        <label for="paciente">Direccion del Proveedor</label>

                                        <input type="text" class="form-control" id="direccionProveedor" name='direccionProveedor' placeholder="Ejemplo Andres Eloy Blanco, Calle el Palmar, Ciudad Bolívar, Venezuela" required>

                                        <div class="invalid-feedback">
                                            Debe rellenar este campo.
                                        </div>

                                        <div class="valid-feedback">
                                            Listo.
                                        </div>

                                    </div>

                                </div>


                            </div>

                            <div class="modal-footer">
                                <input type="hidden" name="id_proveedor" id="id_proveedor">
                                <input type="hidden" name="operacion" id="operacion" value="crear">
                                <input type="submit" name="action" id="action" class="btn btn-success" value="crear">
                            </div>


                        </form>

                        <script type="text/javascript" src="./assets/scripts/validarformularios.js"></script>
                    </div>
                </div>

            </div>

        <?php
    