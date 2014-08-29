<?php
	require_once('fpdf/fpdf.php');
	mysql_connect('localhost','root','');
	mysql_select_db('security2');
	$sql=mysql_query("SELECT * FROM `leave` WHERE status=3");
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
		$newrow = array($name, $reg, $from, $to, $hours, $place, $purpose, $leaveid, $leaveid, $date, $out, $in, $total);
		array_push($data, $newrow);
	}
	class PDF extends FPDF
	{
		function table($header, $data)
		{
		    // Header
		    foreach($header as $col)
		        $this->Cell(15,7,$col,1);
		    $this->Ln();
		    // Data
		    foreach($data as $row)
		    {
		        foreach($row as $col)
		            $this->Cell(15,6,$col,1);
		        $this->Ln();
		    }
		}

	}
	$pdf = new PDF();
	$header = array('Name', 'Rno', 'from', 'to', 'hours', 'place', 'purpose', 'leaveid', 'date', 'status', 'in', 'out', 'total');
	$pdf->SetFont('Arial','',7);
	$pdf->AddPage();
	$pdf->table($header,$data);
	$pdf->Output();
?>	