
export class FormularioComprobantes {
    constructor(contentForm, servidor, datatable) {
        this.servidor = servidor
        this.btnsTogles = document.querySelectorAll(`a[href='${contentForm}']`)

        this.contentForm = document.querySelector(contentForm)
        this.form = this.contentForm.querySelector("form")

        this.inputNroComprobante = this.form.querySelector("#nroComprobante")
        this.inputProveedor = this.form.querySelector("#proveedor")
        this.inputRif = this.form.querySelector("#rifProveedor")
        this.inputDireccion = this.form.querySelector("#dirreccionProveedor")
        this.inputFEmision = this.form.querySelector("#fEmision")
        this.inputFEntrega = this.form.querySelector("#fEntrega")
        this.inputFFactura = this.form.querySelector("#fFactura")
        this.inputNroControl = this.form.querySelector("#nroControl")
        this.inputTotalFactura = this.form.querySelector(".total-facturado")
        this.inputBaseImponible = this.form.querySelector(".base-imponible")
        this.impuestoIva = this.form.querySelector(".impuesto-iva")
        this.ivaRetenido = this.form.querySelector(".iva-retenido")

        let valorTotalFactura = this.inputTotalFactura.value
        if (valorTotalFactura > this.inputBaseImponible) {
            this.inputBaseImponible.max = valorTotalFactura
            this.inputBaseImponible.value = valorTotalFactura
            this.cambiarValoresIvas()
        }

        let valorBaseImponible = this.inputBaseImponible.value
        if (valorBaseImponible) {
            this.impuestoIva.value = (valorBaseImponible * 0.16).toFixed(2)
            this.ivaRetenido.value = (this.impuestoIva.value * 0.75).toFixed(2)
        }

        this.inputBaseImponible.addEventListener('input', (e) => {
            this.cambiarValoresIvas()
        })

        this.inputTotalFactura.addEventListener('input', (e) => {
            let valorTotalFactura = e.target.value
            if (valorTotalFactura < this.inputBaseImponible.value) {
                this.inputBaseImponible.max = valorTotalFactura
                this.inputBaseImponible.value = valorTotalFactura

                this.cambiarValoresIvas()
            }
        })
        this.form.querySelector(".resetProveedor").addEventListener('click', this.resetProveedor.bind(this))


        this.btnsTogles.forEach(btn => {
            btn.addEventListener("click", (e) => {

            })
            // btn.click()
        })

        this.form.addEventListener('submit', (e) => {
            e.preventDefault()
            if (this.validacion()) {
                this.closeModal()
                let data = this.obtenerData()
                this.resetAll()
                this.servidor.post(data)
                datatable.add(data)

            } 
        })
    }

    cambiarValoresIvas() {
        let valorBaseImponible = this.inputBaseImponible.value
        this.impuestoIva.value = (valorBaseImponible * 0.16).toFixed(2)
        this.ivaRetenido.value = (this.impuestoIva.value * 0.75).toFixed(2)
    }

    // Agregar proveedores
    cargarProveedores(data) {
        data.forEach(e => {
            // var option = `<a class="dropdown-item" data-rif="${e.rif}" data-razonsocial="${e.razonsocial}" data-direccion="${e.direccion}" href="#">${e.seudonimo}</a>`
            // this.form.querySelector(".dropdown-menu").innerHTML += option
            let option = document.createElement("button");
            option.classList.add("dropdown-item");
            option.setAttribute("type", "button");
            option.setAttribute("data-rif", e.rif);
            option.setAttribute("data-razonsocial", e.razonsocial);
            option.setAttribute("data-direccion", e.direccion);
            option.href = "#";
            option.textContent = e.seudonimo;

            // Agregar evento al click para insertar datos 
            option.addEventListener("click", (e) => {
                this.inputProveedor.value = e.target.getAttribute("data-razonsocial");
                this.inputRif.form.querySelector("#rifProveedor").value = e.target.getAttribute("data-rif");
                this.inputDireccion.form.querySelector("#dirreccionProveedor").value = e.target.getAttribute("data-direccion");

                this.inputProveedor.disabled = true
                this.inputRif.disabled = true
                this.inputDireccion.disabled = true
                this.form.querySelector(".dropdown-menu").classList.remove("show");

                // toggle botones resetear y seleccionar
                this.form.querySelector(".dropdown-toggle").style.display = "none"
                this.form.querySelector(".resetProveedor").style.display = "block"

            })
            this.form.querySelector(".dropdown-menu").appendChild(option);
        })
    }

    obtenerData() {
        const data = {}
        data.nroComprobante = this.inputNroComprobante.value
        data.proveedor = this.inputProveedor.value
        data.rifProveedor = this.inputRif.value
        data.direccionProveedor = this.inputDireccion.value
        data.fEmision = this.inputFEmision.value
        data.fEntrega = this.inputFEntrega.value
        data.fFactura = this.inputFFactura.value
        data.nroControl = this.inputNroControl.value
        data.totalFacturado = this.inputTotalFactura.value
        data.baseImponible = this.inputBaseImponible.value
        data.impuestoIva = this.impuestoIva.value
        data.ivaRetenido = this.ivaRetenido.value
        return data
    }

    validacion() {
        let validacion = true
        if (this.inputProveedor.value == "" || 
        this.inputDireccion.value == "" || 
        this.inputFEmision.value == "" || 
        this.inputFEntrega.value == "" || 
        this.inputFFactura.value == "" || 
        this.inputNroControl.value == "" || 
        this.inputTotalFactura.value == "") {
            validacion = false
        }
        return validacion
    }

    resetProveedor(){
        this.inputProveedor.value = "";
        this.inputRif.form.querySelector("#rifProveedor").value = "";
        this.inputDireccion.form.querySelector("#dirreccionProveedor").value = "";

        this.inputProveedor.disabled = false
        this.inputRif.disabled = false
        this.inputDireccion.disabled = false

        this.form.querySelector(".resetProveedor").style.display = "none"
        this.form.querySelector(".dropdown-toggle").style.display = "block"
    }
    resetAll(){
        this.resetProveedor()
        this.inputNroComprobante.value = ""
        this.inputTotalFactura.value = 0
        this.inputBaseImponible.value = 0        
        this.impuestoIva.value = 0
        this.ivaRetenido.value = 0
        this.inputNroControl.value = ""
        this.inputFEmision.value = ""
        this.inputFEntrega.value = ""
        this.inputFFactura.value = ""
    }

    closeModal() {
        this.contentForm.querySelector("[data-dismiss]").click()
    }
}