<?php

	include_once("includes/bd.inc.php");

	$reporte = "SELECT * FROM solicitudes";
	$reporte = mysqli_query($conn, $reporte);
	while($user = mysqli_fetch_assoc($reporte)){

$mihtml = '

<img src="../architectui-html-free/img/membrete.jpg">

<P ALIGN=CENTER STYLE="margin-bottom: 0.14in">
<FONT SIZE=2>
<U>
<B>
PLANILLA DE INSCRIPCIÓN AL SERVICIO COMUNITARIO
</B>
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>Titulo del Proyecto:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['tituloproyecto'];

$mihtml .= '
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>PNF:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['pnf'];

$mihtml .= '______________
</U>
</FONT>

<FONT SIZE=2>
<B>Sección:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['seccion'];
        
$mihtml .= '___________________
</U>
</FONT>

<FONT SIZE=2>
<B>Turno:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['turno'];
    
$mihtml .= '___________________
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>Trayecto:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['trayecto'];
        
$mihtml .= '___________________
</U>
</FONT>
<FONT SIZE=2>
<B>Periodo Académico:</B>
</FONT>
<FONT SIZE=2>
<U>

'.$user['periodoacademico'];
        
$mihtml .= '___________________
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0.14in">
<FONT SIZE=2>
<U>
<B>DATOS COMUNIDAD</B>
</U>
</FONT>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Municipio:
</B>
<U>

'.$user['municipio'];
        
$mihtml .= '______________
</U>
<B>
Parroquia:
</B>
<U>

'.$user['parroquia'];
        
$mihtml .= '__________
</U>
<B>
Sector:
</B>
<U>

'.$user['sector'];
        
$mihtml .= '______________
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Contacto Comunal:
</B>
<U>

'.$user['contactocomunal'];
        
$mihtml .= '__________
</U>
<B>
Teléfono de la comunidad:
</B>
<U>

'.$user['telefonocomunal'];
        
$mihtml .= '______
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<U>
<B>
DATOS COLECTIVO ESTUDIANTIL
</B>
</U>
</FONT>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>';
        
$mihtml .= '<TABLE WIDTH=100 CELLPADDING=0 CELLSPACING=0>

	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            N°
            </P>
		</TD>
        
		<TD WIDTH=135 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            <SPAN STYLE="background: #c0c0c0">
            Apellidos y	Nombres
            </SPAN>
            </B>
            </P>
		</TD>
        
		<TD WIDTH=56 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            C.I
            </B>
            </P>
		</TD>
        
		<TD WIDTH=86 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            Teléfono
            </B>
            </P>
		</TD>
        
		<TD WIDTH=111 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            Correo
            </B>
            </P>
		</TD>
        
		<TD WIDTH=59 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            Firma
            </B>
            </P>
		</TD>
	</TR>
    
	<TR VALIGN=TOP>
		<TD WIDTH=14 BGCOLOR="#bfbfbf" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            <B>
            1
            </B>
            </P>
		</TD>
        
		<TD WIDTH=135 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            
            '.$user['estudiante'];

        $mihtml .= '</P>
		</TD>
		<TD WIDTH=56 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            
            '.$user['cedula'];
        
	    $mihtml .= '</P>
		</TD>
		<TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            
            '.$user['telefonoestudiante'];
        
		$mihtml .= '</P>
		</TD>
		<TD WIDTH=111 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
            
            '.$user['correo'];
        
        $mihtml .= '</P>
       
		</TD>
		<TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
			<P ALIGN=CENTER>
                  </P>
		</TD>
	</TR>
    </TABLE>
    
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<U>
<B>
BREVE DESCRIPCIÓN DEL TRABAJO A DESARROLLAR
</B>
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Objetivo que se persigue:
</B>
<U>

'.$user['objquepersigue'];
        
$mihtml .= '
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Impacto a la comunidad:
</B>
<U>

'.$user['impactocomuna'];
        
$mihtml .= '
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Población beneficiada:
</B>
<U>

'.$user['poblacionbene'];
        
$mihtml .= '
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Relación con el Plan Patria 2019 – 2025 (Identifique el objetivo que tiene pertinente su trabajo comunitario:
</B>
<U>
'.$user['relacionpatria'];
    
    }
        
$mihtml .= '
</U>
</FONT>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<U>
<B>
SOLO PARA USO DEL DPTO. DE SERVICIO COMUNITARIO
</B>
</U>
</FONT>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>

<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 100%">
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<FONT SIZE=2>
<B>
Firma del Profesor Asesor:___________________
Firma  del  Responsable Servicio Comunitario______________________
</B>
</FONT>
</P>



<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>

<P STYLE="margin-bottom: 0in; line-height: 100%">
<A NAME="_GoBack">
</A>
<FONT SIZE=2>
<B>
Recibido por: _____________________________
Firma:_________________________
</B>
</FONT>
</P>';

	//referencia
	use Dompdf\Dompdf;
	use Dompdf\Options;

	// incluye autoloader
	require_once("dompdf/autoload.inc.php");

	//Creando instancia para generar PDF
    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
	
	// Cargar el HTML
	$dompdf->load_html(''. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Planilla_ServicioComunitario", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>