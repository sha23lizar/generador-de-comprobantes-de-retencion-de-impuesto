import { FormularioComprobantes } from "./formulario-comprobantes.js"
import { ConcexionServidor } from "./conexionServidor.js"
console.log("Hola Mundo")
document.addEventListener('DOMContentLoaded', async () => {
   const servidorPorveedores = new ConcexionServidor('http://localhost:3000/proveedores')
   const servidorComprobantes = new ConcexionServidor('http://localhost:3000/comprobantes')
   const formularioAgregarComprobante = new FormularioComprobantes('#nuevoregistro', servidorComprobantes)
   const dataProveedores = await servidorPorveedores.get()
   formularioAgregarComprobante.cargarProveedores(dataProveedores)
    // formularioAgregarComprobante.toglle()
//    const btnAgregarComprobante = document.querySelector("#btnAddComprobante")
//    btnAgregarComprobante.click()

}
)