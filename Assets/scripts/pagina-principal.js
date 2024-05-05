import { FormularioComprobantes } from "./formulario-comprobantes.js"
import { ConcexionServidor } from "./conexionServidor.js"
import { DataTableModule } from "./datatableModule.js"

console.log("Hola Mundo")
document.addEventListener('DOMContentLoaded', async () => {
    const servidorPorveedores = new ConcexionServidor('http://localhost:3000/proveedores')
    const servidorComprobantes = new ConcexionServidor('http://localhost:3000/comprobantes')
    const datatable = new DataTableModule('#tabla', servidorComprobantes)
    const formularioAgregarComprobante = new FormularioComprobantes('#nuevoregistro', servidorComprobantes, datatable)
    $.ajax({
        url: './includes/buscarProveedoresJSON.php',
        success: (data) => {
            formularioAgregarComprobante.cargarProveedores(JSON.parse(data))
        }
    })
    // formularioAgregarComprobante.toglle()
    //    const btnAgregarComprobante = document.querySelector("#btnAddComprobante")
    //    btnAgregarComprobante.click()

}
)