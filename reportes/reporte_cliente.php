<?php
	include 'fpdf.php';
	require '../bd/coneccion.php';
	
	class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	// Logo
	$this->Image('imagenes/logo.png',10,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// Título
	$this->Cell(80,15,'REPORTE CLIENTE',1,0,'C');
	// Salto de línea
	$this->Ln(30);
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->SetFillColor(98,170,254);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,10,'CI / NIT',1,0,'C',1);
	
	$pdf->Cell(100,10,'RAZON SOCIAL',1,1,'C',1);
	$query = "SELECT * FROM cliente;";
	$resultado = $conexion->query($query);
	

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(40,6,utf8_decode($row['nit_cli']),1,0,'C');	
		$pdf->Cell(100,6,utf8_decode($row['razonsocial']),1,1,'C');
	}
	$pdf->Output();
?>







	 
