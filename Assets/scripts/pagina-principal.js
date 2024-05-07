import { FormularioComprobantes } from "./formulario-comprobantes.js"
import { ConcexionServidor } from "./conexionServidor.js"
import { DataTableModule } from "./datatableModule.js"

console.log("Hola Mundo")
document.addEventListener('DOMContentLoaded', async () => {
  const servidorPorveedores = new ConcexionServidor('http://localhost:3000/proveedores')
  const servidorComprobantes = new ConcexionServidor('http://localhost:3000/comprobantes')
  const dataTable = new DataTableModule('#tabla', servidorComprobantes)
  const formularioAgregarComprobante = new FormularioComprobantes('#nuevoregistro', "nuevo", dataTable)
  const formularioEditarComprobante = new FormularioComprobantes('#editarRegistro', "registar", dataTable)
  $.ajax({
    url: './includes/buscarProveedoresJSON.php',
    success: (data) => {
      formularioAgregarComprobante.cargarProveedores(JSON.parse(data))
      formularioEditarComprobante.cargarProveedores(JSON.parse(data))
    }
  })

  $(document).on("click", ".editar", function (e) {
    var id = e.target.id;
    $.ajax({
      url: "./includes/obtener_comprobante.php",
      method: "POST",
      data: {
        id: id
      },
      dataType: "json",
      success: function (data) {
        let comprobante = data[0];
        formularioEditarComprobante.editar(comprobante)
        // $("#nombre").val(data.nombre);
        // $("#cargo").val(data.cargo);
        // $("#iglesia").val(data.iglesia);
        // $("#edad").val(data.edad);
        // $("#genero").val(data.genero);
        // $("#cedula").val(data.cedula);
        // $("#id_personal").val(id_personal);
        // $("#action").val("editar");
        // $("#operacion").val("editar");
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    })
  })

  $(document).on("click", ".borrar", function (e) {
    var id_personal = e.target.id;
    if (confirm("¿Desea borrar el registro nro: " + id_personal + "?")) {
    $.ajax({
      url: "./includes/eliminarComprobante.php",
      method: "POST",
      data: {
        id_personal: id_personal
      },
      success: (data) => {
          alert(data);
          dataTable.reload();
        }
      })
    }
  })
  function abirPDF(id) {
    const currentUrl = window.location.href;
    const pathArray = currentUrl.split('/');
    if (pathArray[pathArray.length - 1].includes('.php')) {
      pathArray.pop(); // Elimina el último elemento (nombre del archivo)
      pathArray[pathArray.length - 1] += '/';
    }
    pathArray.join('/');

    const baseUrl = pathArray.join('/')

    const relativePath = 'FPDF/generadorPDF.php';

    // Construye la URL completa
    const fullUrl = `${baseUrl}${relativePath}?id=${id}`;

    window.open(fullUrl, '_blank').focus();
  }
  $(document).on("click", ".generadorPDF", function (e) {
    var id = e.target.id;
    abirPDF(id);
  })

}
)