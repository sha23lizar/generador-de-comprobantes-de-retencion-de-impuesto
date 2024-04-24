<?php	

	include_once("includes/bd.inc.php");	

	$mihtml = '<table border=1>';	
	$mihtml .= '<thead>';
	$mihtml .= '<tr>';
	$mihtml .= '<th>Estudiante</th>';
	$mihtml .= '<th>Cedula</th>';
	$mihtml .= '<th>PNF</th>';
	$mihtml .= '<th>Seccion</th>';
	$mihtml .= '<th>Trayecto</th>';
	$mihtml .= '<th>Solicitud</th>';
	$mihtml .= '<th>Fecha</th>';
	$mihtml .= '<th>Estado</th>';
	$mihtml .= '</tr>';
	$mihtml .= '</thead>';
	$mihtml .= '<tbody>';

	
	$reporte2 = "SELECT * FROM solicitudes";
	$reporte2 = mysqli_query($conn, $reporte2);
	while($user = mysqli_fetch_assoc($reporte2)){
		$mihtml .= '<tr><td>'.$user['estudiante'] . "</td>";
		$mihtml .= '<td>'.$user['cedula'] . "</td>";
		$mihtml .= '<td>'.$user['pnf'] . "</td>";
		$mihtml .= '<td>'.$user['seccion'] . "</td>";
		$mihtml .= '<td>'.$user['trayecto'] . "</td>";
		$mihtml .= '<td>'.$user['solicitud'] . "</td>";
		$mihtml .= '<td>'.$user['fecha'] . "</td>";
		$mihtml .= '<td>'.$user['estado'] . "</td></tr>";		
	}
	
	$mihtml .= '</tbody>';
    $mihtml .= '</table>';

	//referencia
	use Dompdf\Dompdf;

	// incluye autoloader
	require_once("dompdf/autoload.inc.php");

	//Creando instancia para generar PDF
	$dompdf = new Dompdf();
	
	// Cargar el HTML
	$dompdf->load_html('<h1 style="text-align: center;">Lista de Solicitudes</h1>'. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"Lista_Solicitudes", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>