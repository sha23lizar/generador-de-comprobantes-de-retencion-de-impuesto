<?php	

	include_once("bd.inc.php");	

	$mihtml = '<table border=1>';	
	$mihtml .= '<thead>';
	$mihtml .= '<tr>';
	$mihtml .= '<th>acompanante</th>';
	$mihtml .= '<th>cedula</th>';
	$mihtml .= '<th>edad</th>';
	$mihtml .= '<th>sexo</th>';
	$mihtml .= '<th>estado</th>';
	$mihtml .= '<th>municipio</th>';
	$mihtml .= '<th>parroquia</th>';
	$mihtml .= '<th>fechai</th>';
	$mihtml .= '<th>fechae</th>';
	$mihtml .= '</tr>';
	$mihtml .= '</thead>';
	$mihtml .= '<tbody>';

	
	$reporte2 = "SELECT * FROM acompanantes";
	$reporte2 = mysqli_query($conn, $reporte2);
	while($user = mysqli_fetch_assoc($reporte2)){
		$mihtml .= '<tr><td>'.$user['acompanante'] . "</td>";
		$mihtml .= '<td>'.$user['cedula'] . "</td>";
		$mihtml .= '<td>'.$user['edad'] . "</td>";
		$mihtml .= '<td>'.$user['sexo'] . "</td>";
		$mihtml .= '<td>'.$user['estado'] . "</td>";
		$mihtml .= '<td>'.$user['municipio'] . "</td>";
		$mihtml .= '<td>'.$user['parroquia'] . "</td>";
		$mihtml .= '<td>'.$user['fechai'] . "</td>";
		$mihtml .= '<td>'.$user['fechae'] . "</td></tr>";		
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
	$dompdf->load_html('<h1 style="text-align: center;">acompanantes</h1>'. $mihtml .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir nombre de archivo
	$dompdf->stream(
		"acompanantes", 
		array(
			"Attachment" => false //Para realizar la descarga
		)
	);
?>