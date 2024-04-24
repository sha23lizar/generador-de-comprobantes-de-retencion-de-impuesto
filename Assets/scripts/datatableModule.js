export class DataTableModule {
    constructor(contentTable, server) {
        this.contentTable
        this.server = server
        //  inicializar datatables
        this.server.get().then(reponde => {
            console.log(reponde)
            let data = reponde
            this.dataTable = $("#tabla").DataTable({
                "data": data,
                "columns":[
                    {data: "nroComprobante"},
                    {data: "proveedor"},
                    {data: "rifProveedor"},
                    {data: "direccionProveedor"},
                    {data: "fEmision"},
                    {data: "fEntrega"},
                    {data: "fFactura"},
                    {data: "nroControl"},
                    {data: "totalFacturado"},
                    {data: "baseImponible"},
                    {data: "impuestoIva"},
                    {data: "ivaRetenido"}
                ],
                
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
        })

        
    }
    // recargar datatables
    add(data){
        this.dataTable.row.add(data).draw()
    }
}