<?php

	include_once("includes/bd.inc.php");

	$reporte = "SELECT * FROM solicitudes";
	$reporte = mysqli_query($conn, $reporte);
	while($user = mysqli_fetch_assoc($reporte)){

$mihtml = '

<p align=center style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;line-height:150%;">
<strong>
<span style="font-family:"Arial",sans-serif;color:black;">
SOLICITUD PARA POSTULACION DE PROYECTO SOCIO TECNOL&Oacute;GICO
</span>
</strong>
</p>

<p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:36.0pt;line-height:150%;"><span style="font-family:"Arial",sans-serif;color:black;">
&nbsp;
</span>
</p>

<p align=center style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;margin-left:36.0pt;line-height:150%;">
<strong>
<span style="font-family:"Arial",sans-serif;">
FECHA DE SOLICITUD: 
<u>
'.$user['fecha'];
        
        $mihtml .= '
</u>
</span>
</strong>
</p><br>

<table style="width: 4.5e+2pt;border: none;margin-left:2.75pt;border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width: 36.5pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                N&deg;
                </span>
                </strong>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                INTEGRANTES DEL PROYECTO
                </span>
                </strong>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border: 1pt solid black;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                CEDULA DE IDENTIDAD
                </span>
                </strong>
                </p>
                
            </td>
        </tr>
        
        <tr>
            <td style="width: 36.5pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                1
                </span>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['n1'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['c1'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td style="width: 36.5pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                2
                </span>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['n2'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['c2'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
        
            <td style="width: 36.5pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                3
                </span>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['n3'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['c3'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        <tr>
            <td style="width: 36.5pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                4
                </span>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['n4'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['c4'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
        
            <td style="width: 36.5pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                5
                </span>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 258.05pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['n5'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
            <td style="width: 159.8pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['c5'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="4" style="width: 454.35pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                TITULO DE PROYECTO
                </span>
                </strong>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="4" style="width: 454.35pt;border-top: none;border-left: 1pt solid black;border-bottom: none;border-right: 1pt solid black;padding: 2.75pt;height: 73.2pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['titulopst'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
        </tr>
        
        <tr>
            <td colspan="4" style="width: 454.35pt;border: 1pt solid black;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                NOMBRE DE LA INSTITUCI&Oacute;N O EMPRESA
                </span>
                </strong>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="4" style="width: 454.35pt;border-top: none;border-left: 1pt solid black;border-bottom: none;border-right: 1pt solid black;padding: 2.75pt;height: 73.2pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['nombreinstitucion'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        <tr>
            <td colspan="2" style="width: 220.9pt;border-top: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                TUTOR INSTITUCIONAL
                </span>
                </strong>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 233.45pt;border: 1pt solid black;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['tutorinstitucional'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="2" style="width: 220.9pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                TUTOR ACAD&Eacute;MICO
                </span>
                </strong>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 233.45pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                '.$user['tutoracademico'];
        
        $mihtml .= '
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="2" rowspan="2" style="width: 220.9pt;border-top: none;border-left: 1pt solid black;border-bottom: 1pt solid black;border-right: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <strong>
                <span style="font-family:"Arial",sans-serif;">
                OBSERVACIONES
                </span>
                </strong>
                </p>
                
            </td>
            
            <td colspan="2" style="width: 233.45pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td colspan="2" style="width: 233.45pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 2.75pt;vertical-align: top;">
            
                <p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;">
                <span style="font-family:"Arial",sans-serif;">
                
                </span>
                </p>
                
            </td>
            
        </tr>
        
        <tr>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
        </tr>
        
    </tbody>
</table>

<p style="margin:0cm;font-size:16px;font-family:"Times New Roman",serif;line-height:150%;"><br></p>

';}

	//referencia
	use Dompdf\Dompdf;
	use Dompdf\Options;

	// incluye autoloader
	require_once("dompdf/autoload.inc.php");

	//Creando instancia para generar PDF
    $options = new Options();
    $options->set("isRemoteEnabled", true);
    $dompdf = new Dompdf($options);
	
	// Cargar el HTML
	$dompdf->load_html("". $mihtml ."
		");

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Cartadepostulacion_PST", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>