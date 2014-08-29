<?php
	require_once('fpdf/fpdf.php');
	mysql_connect('localhost','root','');
	mysql_select_db('security2');
	$sql=mysql_query("SELECT * FROM `backupt` ORDER by date desc");
	$data = array();
	while($row=mysql_fetch_array($sql))
	{
		$name=$row['name'];
		$reg=$row['reg'];
		$from=$row['from'];
		$to=$row['to'];
		$hours=$row['hours'];
		$place=$row['place'];
		$purpose=$row['purpose'];
		$leaveid=$row['leaveid'];
		$date=$row['date'];
		$out=$row['out'];
		$in=$row['in'];
		$total=$row['total'];
		$newrow = array($name, $reg, $from, $to, $place, $purpose, $date, $out, $in);
		array_push($data, $newrow);
	}
	class PDF extends FPDF
	{
		function table($header, $data)
		{
		    // Header
		    foreach($header as $col)
		        $this->Cell(22,4,$col,1);
		    $this->Ln();
		    // Data
		    foreach($data as $row)
		    {
		        foreach($row as $col)
		            $this->Cell(22,6,$col,1);
		        $this->Ln();
		    }
		}

	}
	$pdf = new PDF();
	$header = array('Name', 'Rno', 'From', 'To', 'Place', 'Purpose', 'Date', 'Out', 'In');
	$pdf->SetFont('Arial','',7);
	$pdf->AddPage();
	$pdf->table($header,$data);
	$pdf->Output();
?>	