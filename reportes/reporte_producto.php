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

$pdf->SetFillColor(150,170,254);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(35,10,'empresa',1,0,'C',1);
	$pdf->Cell(30,10,'Nombre',1,0,'C',1);
	$pdf->Cell(35,10,'Descripcion',1,0,'C',1);
	$pdf->Cell(30,10,'Costo com',1,0,'C',1);
	$pdf->Cell(25,10,'Costo ven',1,0,'C',1);
	$pdf->Cell(25,10,'Stock',1,1,'C',1);


	$query = "SELECT pv.empresa,pd.nombreproducto,pd.descripcion,pd.costocompra,pd.costoventa,pd.stock
	FROM producto pd
	INNER JOIN proveedor pv ON pd.id_proveedor = pv.id_proveedor;";
	$resultado = $conexion->query($query);
	

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(35,6,utf8_decode($row['empresa']),1,0,'C');	
		$pdf->Cell(30,6,utf8_decode($row['nombreproducto']),1,0,'C');	
		$pdf->Cell(35,6,utf8_decode($row['descripcion']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['costocompra']),1,0,'C');	
		$pdf->Cell(25,6,utf8_decode($row['costoventa']),1,0,'C');	
		$pdf->Cell(25,6,utf8_decode($row['stock']),1,1,'C');
	}
	$pdf->Output();
?>







	 
