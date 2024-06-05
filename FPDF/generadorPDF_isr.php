<?php


require('fpdf.php');

include('../includes/conexion.php');
include("../includes/funciones.php");

$conn->set_charset("utf8");



// $id = $_POST['id'];
$id = $_GET['id'];
$Datos = "SELECT * FROM comprobante_isr WHERE id = $id ";
// if (!mysqli_set_charset($conn,"utf8")){
//     echo "error de codificacion";
//     return true;


$ResultDatos = mysqli_query($conn, $Datos);
$ResultDatos1 = mysqli_query($conn, $Datos);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

}

function Footer(){

}

}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

    // Logo
    $pdf->Image('./Logo.jpg',10,8,20);
    // Arial bold 15
    $pdf->SetFont('Arial','',6);

    // INICIO - TITULO   
    $pdf->Cell(80);
    $pdf->Cell(30,5,'UNIDAD EDUCATIVA "SION"',0,0,'C');
    $pdf->Ln(3);

    $pdf->Cell(80);
    $pdf->Cell(30,5,'LO MEJOR EN EDUCACI'.utf8_decode("Ó").'N.',0,0,'C');
    $pdf->Ln(3);

    $pdf->Cell(80);
    $pdf->Cell(30,5,'"Mejor es adquirir sabiduria que oro preciado y adquirir',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'inteligencia vale mas que la plata." Prov.16:16.',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'RIF J-09513933-6',0,0,'C');
    $pdf->Ln(5);
    // FINAL - TITULO

    // INICIO - COMPROBANTE
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'COMPROBANTE DE RETENCI'.utf8_decode("Ó").'N',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'IMPUESTO SOBRE LA RENTA (I.S.L.R)',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(30,5,'DECRETRO 1.808 DEL 23/04/1997 G.O 36.203 12/05/97. DECRETO VIGENTE DESDE EL 12/05/97',0,0,'C');
    $pdf->Ln(10);
    // FINAL - COMPROBANTE

// $ProveedorSeleccionado = isset($_POST['proveedor_isr_id']) ? $_POST['proveedor_isr_id'] : null;
    while($Filas = $ResultDatos->fetch_assoc()){
        if (true) {
            // if ($Filas['id'] === $ProveedorSeleccionado) {
    
// INICIO - DATOS DE LA INSTITUCION

    $pdf->SetFont('Arial', 'B', 6);
    $pdf->Cell(63,15,"NOMBRE O RAZON SOCIAL DEL AGENTE DE RETENCION", 1, 0,'C', 0);
    $pdf->Cell(63,15,"RIF. DEL AGENTE DE RETENCION", 1, 0,'C', 0);
    $pdf->Cell(63,15, 'N'.utf8_decode("º").' DE COMPROBANTE',1, 0,'C', 0);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial','',5);
    $pdf->Cell(63,10,"ASOCIACION CIVIL UNIDAD EDUCATIVA COLEGIO SION", 0, 0,'C', 0);
    $pdf->Cell(63,10,"J-09513933-6", 0, 0,'C', 0);
    $pdf->Cell(63,10,$Filas['nroComprobante'], 0, 0,'C', 0);
    $pdf->Ln(10);
    
    // FINAL - DATOS DE LA INSTITUCION
    
    // INICIO - DATOS DEL AGENTE DE RETENCION
    
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->Cell(100,15,"DIRECCION FISCAL DEL AGENTE DE RETENCION", 1, 0,'C', 0);
    $pdf->SetFont('Arial', 'B', 5.5);
    $pdf->Cell(44.5,15,"F. EMISION", 1, 0,'C', 0);
    $pdf->Cell(44.5,15, 'F. ENTREGA',1, 0,'C', 0);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', '', 5);
    $pdf->Cell(100,10,"Calle San Felix s/n La Sabanita, telefono: (0285) 6515986, Ciudad Bolivar - Estado Bolivar.", 0, 0,'C', 0);
    $pdf->Cell(44.5,10,revertirFecha($Filas['fEmision']), 0, 0,'C', 0);
    $pdf->Cell(44.5,10,revertirFecha($Filas['fEntrega']),0, 0,'C', 0);
    $pdf->Ln(10);
    
    //  FINAL - DATOS DEL AGENTE DE RETENCION
    
    $pdf->SetFont('Arial', 'B', 6);
    $pdf->Cell(63,15,"NOMBRE O RAZON SOCIAL DEL SUJETO RETENIDO", 1, 0,'C', 0);
    $pdf->Cell(63,15,"RIF. DEL SUJETO DE RETENCION", 1, 0,'C', 0);
    $pdf->Cell(63,15,"PERIODO FISCAL",1, 0,'C', 0);
    $pdf->Ln(5);
    
    $pdf->SetFont('Arial', '', 5);
    $pdf->Cell(63,10,$Filas['proveedor_isr'], 0, 0,'C', 0);
    $pdf->Cell(63,10,$Filas['rifProveedor'], 0, 0,'C', 0);
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->Cell(31,10,"A".utf8_decode("Ñ")."O: ".substr($Filas['nroComprobante'],0,4),0, 0,'C', 0);
    $pdf->Cell(31,10,"MES: ".substr($Filas['nroComprobante'],4,2),0, 0,'C', 0);
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial', 'B', 4.5);
    $pdf->Cell(13,5,"OPERACION N".utf8_decode("º"), 1, 0,'C', 0);
    $pdf->Cell(15,5,"FECHA FACTURA", 1, 0,'C', 0);
    $pdf->Cell(30,5,'N'.utf8_decode("º").' FACTURA',1, 0,'C', 0);
    $pdf->Cell(33,5,'N'.utf8_decode("º").' CONTROL FACTURA y/ Maquina Fiscal',1, 0,'C', 0);
    $pdf->Cell(31,5,'TOTAL FACTURADO INCLUYENDO IVA',1, 0,'C', 0);
    $pdf->Cell(21,5,"BASE IMPONIBLE", 1, 0,'C', 0);
    $pdf->Cell(22,5,"% ALICUOTA RETENIDO", 1, 0,'C', 0);
    $pdf->Cell(24,5,"IMPUESTO RETENIDO",1, 0,'C', 0);
    $pdf->Ln(5);
    
    // PROVEEDOR
    $pdf->SetFont('Arial', '', 4.5);
    $pdf->Cell(13,5, "01", 1, 0,'C', 0);
    $pdf->Cell(15,5, revertirFecha($Filas['fFactura']), 1, 0,'C', 0);
    $pdf->Cell(30,5, $Filas['nroFactura'], 1, 0,'C', 0);
    $pdf->Cell(33,5, $Filas['nroControl'], 1, 0,'C', 0);
    $pdf->Cell(31,5, $Filas['totalFacturado'], 1, 0,'C', 0);
    $pdf->Cell(21,5, $Filas['baseImponible'], 1, 0,'C', 0);
    $pdf->Cell(22,5, $Filas['impuestoIva'] . '%', 1, 0,'C', 0);
    $pdf->Cell(24,5, $Filas['ivaRetenido'], 1, 0,'C', 0);
    $pdf->Ln(5);
    }
}

$pdf->SetFont('Arial','',10);
$pdf->Ln(6);
$pdf->Cell(80);
$pdf->Cell(30,10,'________________________',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->SetFont('Arial','',5);
$pdf->Cell(30,10,'FIRMA Y SELLO DEL AGENTE DE RETENCI'.utf8_decode("Ó").'N',0,0,'C');
$pdf->SetFont('Arial','',3);
$pdf->Ln(3);
$pdf->Cell(80);
$pdf->Cell(30,10,'ESTE COMPROBANTE SE EMITE EN FUNCI'.utf8_decode("Ó").'N A LO ESTABLECIDO EN EL ATICULO 10 DE LA PROVIDENCIA ADMINISTRATIVA N'.utf8_decode("º").' SNAT/2015/0049 DE FECHA 10/08/2.015',0,1,'C');

    $pdf->Ln(10);
    // Logo
    $pdf->Image('./Logo.jpg',10,130,20);
    // Arial bold 15
    $pdf->SetFont('Arial','',6);

    // INICIO - TITULO   
    $pdf->Cell(80);
    $pdf->Cell(30,5,'UNIDAD EDUCATIVA "SION"',0,0,'C');
    $pdf->Ln(3);

    $pdf->Cell(80);
    $pdf->Cell(30,5,'LO MEJOR EN EDUCACI'.utf8_decode("Ó").'N.',0,0,'C');
    $pdf->Ln(3);

    $pdf->Cell(80);
    $pdf->Cell(30,5,'"Mejor es adquirir sabiduria que oro preciado y adquirir',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'inteligencia vale mas que la plata." Prov.16:16.',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'RIF J-09513933-6',0,0,'C');
    $pdf->Ln(5);
    // FINAL - TITULO

    // INICIO - COMPROBANTE
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'COMPROBANTE DE RETENCI'.utf8_decode("Ó").'N',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->Cell(30,5,'IMPUESTO SOBRE LA RENTA (I.S.L.R)',0,0,'C');
    $pdf->Ln(3);
    $pdf->Cell(80);
    $pdf->SetFont('Arial','',7);
    $pdf->Cell(30,5,'DECRETRO 1.808 DEL 23/04/1997 G.O 36.203 12/05/97. DECRETO VIGENTE DESDE EL 12/05/97',0,0,'C');
    $pdf->Ln(7);
    // FINAL - COMPROBANTE

// $ProveedorSeleccionado = isset($_POST['proveedor_isr_id']) ? $_POST['proveedor_isr_id'] : null;
while($Filas = $ResultDatos1->fetch_assoc()){
    if (true) {
        // if ($Filas['id'] === $ProveedorSeleccionado) {

// INICIO - DATOS DE LA INSTITUCION
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(63,15,"NOMBRE O RAZON SOCIAL DEL AGENTE DE RETENCION", 1, 0,'C', 0);
$pdf->Cell(63,15,"RIF. DEL AGENTE DE RETENCION", 1, 0,'C', 0);
$pdf->Cell(63,15, 'N'.utf8_decode("º").' DE COMPROBANTE',1, 0,'C', 0);
$pdf->Ln(5);

$pdf->SetFont('Arial','',5);
$pdf->Cell(63,10,"ASOCIACION CIVIL UNIDAD EDUCATIVA COLEGIO SION", 0, 0,'C', 0);
$pdf->Cell(63,10,"J-09513933-6", 0, 0,'C', 0);
$pdf->Cell(63,10,$Filas['nroComprobante'], 0, 0,'C', 0);
$pdf->Ln(10);

// FINAL - DATOS DE LA INSTITUCION

// INICIO - DATOS DEL AGENTE DE RETENCION

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(100,15,"DIRECCION FISCAL DEL AGENTE DE RETENCION", 1, 0,'C', 0);
$pdf->SetFont('Arial', 'B', 5.5);
$pdf->Cell(44.5,15,"F. EMISION", 1, 0,'C', 0);
$pdf->Cell(44.5,15, 'F. ENTREGA',1, 0,'C', 0);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(100,10,"Calle San Felix s/n La Sabanita, telefono: (0285) 6515986, Ciudad Bolivar - Estado Bolivar.", 0, 0,'C', 0);
$pdf->Cell(44.5,10,revertirFecha($Filas['fEmision']), 0, 0,'C', 0);
$pdf->Cell(44.5,10,revertirFecha($Filas['fEntrega']),0, 0,'C', 0);
$pdf->Ln(10);

//  FINAL - DATOS DEL AGENTE DE RETENCION

$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(63,15,"NOMBRE O RAZON SOCIAL DEL SUJETO RETENIDO", 1, 0,'C', 0);
$pdf->Cell(63,15,"RIF. DEL SUJETO DE RETENCION", 1, 0,'C', 0);
$pdf->Cell(63,15,"PERIODO FISCAL",1, 0,'C', 0);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(63,10,$Filas['proveedor_isr'], 0, 0,'C', 0);
$pdf->Cell(63,10,$Filas['rifProveedor'], 0, 0,'C', 0);
$pdf->SetFont('Arial', 'B', 5);
$pdf->Cell(31,10,"A".utf8_decode("Ñ")."O: ".substr($Filas['nroComprobante'],0,4),0, 0,'C', 0);
$pdf->Cell(31,10,"MES: ".substr($Filas['nroComprobante'],4,2),0, 0,'C', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 4.5);
$pdf->Cell(13,5,"OPERACION N".utf8_decode("º"), 1, 0,'C', 0);
$pdf->Cell(15,5,"FECHA FACTURA", 1, 0,'C', 0);
$pdf->Cell(30,5,'N'.utf8_decode("º").' FACTURA',1, 0,'C', 0);
$pdf->Cell(33,5,'N'.utf8_decode("º").' CONTROL FACTURA y/ Maquina Fiscal',1, 0,'C', 0);
$pdf->Cell(31,5,'TOTAL FACTURADO INCLUYENDO IVA',1, 0,'C', 0);
$pdf->Cell(21,5,"BASE IMPONIBLE", 1, 0,'C', 0);
$pdf->Cell(22,5,"% ALICUOTA RETENIDO", 1, 0,'C', 0);
$pdf->Cell(24,5,"IMPUESTO RETENIDO",1, 0,'C', 0);
$pdf->Ln(5);

// PROVEEDOR
$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(13,5, "01", 1, 0,'C', 0);
$pdf->Cell(15,5, revertirFecha($Filas['fFactura']), 1, 0,'C', 0);
$pdf->Cell(30,5, $Filas['nroFactura'], 1, 0,'C', 0);
$pdf->Cell(33,5, $Filas['nroControl'], 1, 0,'C', 0);
$pdf->Cell(31,5, $Filas['totalFacturado'], 1, 0,'C', 0);
$pdf->Cell(21,5, $Filas['baseImponible'], 1, 0,'C', 0);
$pdf->Cell(22,5, $Filas['impuestoIva'] . '%', 1, 0,'C', 0);
$pdf->Cell(24,5, $Filas['ivaRetenido'], 1, 0,'C', 0);
$pdf->Ln(5);
}
}
$pdf->SetFont('Arial','',10);
$pdf->Ln(6);
$pdf->Cell(80);
$pdf->Cell(30,10,'________________________',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->SetFont('Arial','',5);
$pdf->Cell(30,10,'FIRMA Y SELLO DEL AGENTE DE RETENCI'.utf8_decode("Ó").'N',0,0,'C');
$pdf->SetFont('Arial','',3);
$pdf->Ln(3);
$pdf->Cell(80);
$pdf->Cell(30,10,'ESTE COMPROBANTE SE EMITE EN FUNCI'.utf8_decode("Ó").'N A LO ESTABLECIDO EN EL ATICULO 10 DE LA PROVIDENCIA ADMINISTRATIVA N'.utf8_decode("º").' SNAT/2015/0049 DE FECHA 10/08/2.015',0,1,'C');
$pdf->Output('PDF.pdf', 'I');

?>


