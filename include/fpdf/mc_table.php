<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{
var $widths;
var $aligns;
var $fill_color_r_1;
var $fill_color_g_2;
var $fill_color_b_1;
var $fill_color_r_2;
var $fill_color_g_1;
var $fill_color_b_2;
var $fill;
var $fill_flag;
function Header()
	{
    	//Logo
		$this->Image('3.jpg',10,8,33);
	    $this->Image('1.jpg',165,8,33);
	    //Arial bold 15
	    $this->SetFont('Arial','B',12);
	    //Movernos a la derecha
   	 	$this->Cell(80);
    	//Título
	    $this->Cell(30,0,'Secretaria de Educacion y Cultura',0,0,'C');
		$this->Ln(5);
		$this->Cell(190,0,'Direccion General y Planeacion',0,0,'C');
		$this->Ln(5);
		$this->Cell(190,0,'Direccion de Inversion y Seguimento',0,0,'C');
	    //Salto de línea
    	$this->Ln(20);
		$this->SetFont('Arial','B',8);
		$this->Cell(15,6,'Oalta',1,0,1);
		$this->Cell(45,6,'Ndoalta',1,0,1);
		$this->Cell(30,6,'Detalle',1,0,1);
		$this->Cell(45,6,'Nespesificacion',1,0,1);
		$this->Cell(15,6,'Anexos',1,0,1);
		$this->Cell(25,6,'Con_acomulada',1,0,1);
	}

	//Pie de página
	function Footer()
	{
		$this->Image('2.jpg',87.5,259,35);
	    //Posición: a 1,5 cm del final
	    $this->SetY(-15);
   		//Arial italic 8
   	 	$this->SetFont('Arial','I',8);
    	//Número de página
    	$this->Cell(0,15,'pagina '.$this->PageNo().'/{nb}',0,0,'C');
		$this->Cell( $fech = date("d-m-Y") );
		$this->Cell(-100,0,'Fecha de Impresion  '.$fech,0,0,'C');
	}
	

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function NoFill()
{
	$this->fill=false;
}

function FillColor1($r, $g, $b)
{
	$this->fill_color_r_1=$r;
	$this->fill_color_g_1=$g;
	$this->fill_color_b_1=$b;
	$this->SetFillColor($r,$g,$b);	
	$this->fill=true;
	$this->fill_flag=true;
}

function FillColor2($r, $g, $b)
{
	$this->fill_color_r_2=$r;
	$this->fill_color_g_2=$g;
	$this->fill_color_b_2=$b;
	$this->SetFillColor($r,$g,$b);
	$this->fill=true;
	$this->fill_flag=true;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	
	if($this->fill_flag)
	{
		$this->SetFillColor($this->fill_color_r_1, 	$this->fill_color_g_1, 	$this->fill_color_b_1);
		$this->fill_flag=false;
	}
	else
	{
		$this->SetFillColor($this->fill_color_r_2, 	$this->fill_color_g_2, 	$this->fill_color_b_2);	
		$this->fill_flag=true;		
	}

	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		
		if($this->fill)
		{
			$this->Rect($x,$y,$w,$h,'F');
		}
		
		//Draw the border
		$this->Rect($x,$y,$w,$h);
		
		
		
		//Print the text
		$this->MultiCell($w,5,$data[$i],0,$a);
		
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}
}
?>
