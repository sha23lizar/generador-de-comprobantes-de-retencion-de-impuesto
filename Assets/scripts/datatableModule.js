export class DataTableModule {
    constructor(contentTable) {
        this.contentTable
        this.dataTable = $(contentTable).DataTable({
            "ajax": {
                url: "./includes/obtener_comprobantesJSON.php",
                type: "POST"
            },

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
        })


    }
    // recargar datatables
    reload() {
        this.dataTable.ajax.reload();
    }
}