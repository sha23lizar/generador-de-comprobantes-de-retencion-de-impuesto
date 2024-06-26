
export class FormularioComprobantes {
    constructor(contentForm, modo, datatable) {

        this.modo = modo
        this.idComprobante = null
        this.datatable = datatable
        this.urls = {
            guardar: "./includes/guardar_comprobante.php",
            buscarUltimo: "./includes/buscarUltimoComprobante.php",
            editar: "./includes/editarComprobante.php"
        }

        this.contentForm = document.querySelector(contentForm)
        this.form = this.contentForm.querySelector("form")

        this.buscarUltimoComprobante()
        this.ultimoNumeroComprobante = 0

        this.btnsTogles = document.querySelectorAll(`a[href='${contentForm}']`)
        this.btnClose = this.contentForm.querySelector("[data-dismiss]");
0

        this.inputNroComprobante = this.form.querySelector(".nroComprobante")
        this.inputProveedor = this.form.querySelector(".proveedor")
        this.inputRif = this.form.querySelector(".rifProveedor")
        this.inputDireccion = this.form.querySelector(".dirreccionProveedor")
        this.inputFFactura = this.form.querySelector(".fFactura")
        this.inputPFAño = this.form.querySelector(".periodoFiscalAño")
        this.inputPFMes = this.form.querySelector(".periodoFiscalMes")
        this.inputFEmision = this.form.querySelector(".fEmision")
        this.inputFEntrega = this.form.querySelector(".fEntrega")
        this.inputNroFactura = this.form.querySelector(".nroFactura")
        this.inputNroControl = this.form.querySelector(".nroControl")
        this.inputTotalFactura = this.form.querySelector(".total-facturado")
        this.inputBaseImponible = this.form.querySelector(".base-imponible")
        this.impuestoIva = this.form.querySelector(".impuesto-iva")
        this.ivaRetenido = this.form.querySelector(".iva-retenido")


        this.inputFFactura.addEventListener('input', (e) => {
            this.setPeriodoFiscal()
        })


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
            // if (this.inputBaseImponible.value > this.inputTotalFactura.value) {
            //     this.inputBaseImponible.value = this.inputTotalFactura.value
            //     this.cambiarValoresIvas()
            // }
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
            if (this.modo == "nuevo") { 
                btn.addEventListener("click", (e) => {
                    this.resetProveedor()
                    this.reset()
                    this.buscarUltimoComprobante()
                })
            }
            // btn.click()
        })

        this.form.addEventListener('submit', (e) => {
            e.preventDefault()
            if (this.validacion()) {
                if (this.modo == "nuevo") {
                    this.closeModal()
                    let data = this.obtenerData()
                    // this.resetAll()
                    // datatable.add(data)
                    this.enviarComprobante(data)
                } else if (this.modo == "registar" && this.idComprobante != null ) {
                    this.closeModal()
                    let data = this.obtenerData()
                    data.id = this.idComprobante
                    this.enviarComprobante(data)
                }

            }
        })

    }

    cambiarValoresIvas() {
        let valorBaseImponible = this.inputBaseImponible.value
        if ((valorBaseImponible * 10) > (this.inputTotalFactura.value * 10)) {
            this.inputBaseImponible.value = this.inputTotalFactura.value
        }
        this.impuestoIva.value = (this.inputBaseImponible.value * 0.16).toFixed(2)
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
            option.setAttribute("data-rif", e.rifProveedor);
            option.setAttribute("data-razonsocial", e.nombreProveedor);
            option.setAttribute("data-direccion", e.direccionProveedor);
            option.href = "#";
            option.textContent = e.seudonimo;

            // Agregar evento al click para insertar datos 
            option.addEventListener("click", (e) => {
                this.inputProveedor.value = e.target.getAttribute("data-razonsocial");
                this.inputRif.form.querySelector(".rifProveedor").value = e.target.getAttribute("data-rif");
                this.inputDireccion.form.querySelector(".dirreccionProveedor").value = e.target.getAttribute("data-direccion");

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
        data.nroFactura = this.inputNroFactura.value
        data.totalFacturado = this.inputTotalFactura.value
        data.baseImponible = this.inputBaseImponible.value
        data.impuestoIva = this.impuestoIva.value
        data.ivaRetenido = this.ivaRetenido.value
        return data
    }

    setPeriodoFiscal() {

        if (this.inputFFactura.value == "") {

            this.inputPFAño.value = "aaaa"
            this.inputPFMes.value = "mm"
            let nroComprobante = this.inputNroComprobante.value
            this.inputNroComprobante.value = `${this.inputPFAño.value}${this.inputPFMes.value}${nroComprobante.substring(6, 14)}`
            return
        }
        this.inputPFAño.value = this.inputFFactura.value.split("-")[0]
        this.inputPFMes.value = this.inputFFactura.value.split("-")[1]
        let nroComprobante = this.inputNroComprobante.value
        this.inputNroComprobante.value = `${this.inputPFAño.value}${this.inputPFMes.value}${nroComprobante.substring(6, 14)}`

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

    resetProveedor() {
        this.inputProveedor.value = "";
        this.inputRif.form.querySelector(".rifProveedor").value = "";
        this.inputDireccion.form.querySelector(".dirreccionProveedor").value = "";

        this.inputProveedor.disabled = false
        this.inputRif.disabled = false
        this.inputDireccion.disabled = false

        this.form.querySelector(".resetProveedor").style.display = "none"
        this.form.querySelector(".dropdown-toggle").style.display = "block"
    }
    reset() {
        this.form.reset()
        // this.resetProveedor()
        // this.inputNroComprobante.value = ""
        // this.inputTotalFactura.value = 0
        // this.inputBaseImponible.value = 0
        // this.impuestoIva.value = 0
        // this.ivaRetenido.value = 0
        // this.inputNroControl.value = ""
        // this.inputFEmision.value = ""
        // this.inputFEntrega.value = ""
        // this.inputFFactura.value = ""
    }

    closeModal() {
        this.btnClose.click()
    }
    showModal() {
        this.btnsTogles[0].click()
    }

    enviarComprobante(data) {
        if(this.modo == "nuevo"){
            $.ajax({
                data: data,
                url: this.urls.guardar,
                type: "POST",
                beforeSend: () => {
                    $("#mostrar_mensaje").html("por enviar")
                },
                success: (mensaje) => {
                    $("#mostrar_mensaje").html(mensaje)
                    this.datatable.reload()
                }
            })
            this.reset();

        } else if(this.modo == "registar"){
            $.ajax({
                data: data,
                url: this.urls.editar,
                type: "POST",
                beforeSend: () => {
                    $("#mostrar_mensaje").html("por enviar")
                },
                success: (mensaje) => {
                    $("#mostrar_mensaje").html(mensaje)
                    this.datatable.reload()
                }
            })
            this.reset();
        }
    }

    buscarUltimoComprobante() {
        $.ajax({
            url: this.urls.buscarUltimo,
            type: "GET",
            success: (data) => {
                
                if (JSON.parse(data) == "no hay comprobantes") {
                    this.ultimoNumeroComprobante = "00000000000001"
                    this.inputNroComprobante.value = this.ultimoNumeroComprobante
                    this.setPeriodoFiscal()
                    return
                }
                let ultimoComprobante = JSON.parse(data)[0].nroComprobante;
                if (ultimoComprobante) {
                    this.ultimoNumeroComprobante = Number(ultimoComprobante) + 1
                } else {
                    this.ultimoNumeroComprobante = "00000000000001"
                }
                this.inputNroComprobante.value = this.ultimoNumeroComprobante
                this.setPeriodoFiscal()
            }
        })
    }

    editar(comprobante) {
        this.idComprobante = comprobante.id

        this.inputNroComprobante.value = comprobante.nroComprobante
        this.inputNroControl.value = comprobante.nroControl
        this.inputNroFactura.value = comprobante.nroFactura
        this.inputTotalFactura.value = comprobante.totalFacturado
        this.inputBaseImponible.value = comprobante.baseImponible
        this.ivaRetenido.value = comprobante.ivaRetenido
        this.impuestoIva.value = comprobante.impuestoIva
        this.inputFEmision.value = comprobante.fEmision
        this.inputFEntrega.value = comprobante.fEntrega
        this.inputFFactura.value = comprobante.fFactura
        this.inputProveedor.value = comprobante.proveedor
        this.inputRif.value = comprobante.rifProveedor
        this.inputDireccion.value = comprobante.direccionProveedor
        this.inputFEmision.disabled = false
        this.inputFEntrega.disabled = false
        this.inputFFactura.disabled = false
        this.setPeriodoFiscal()
        this.showModal()
    }

}