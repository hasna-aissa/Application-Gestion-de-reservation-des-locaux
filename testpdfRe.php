<?php include('connexion.php'); 
require('fpdf.php');
if (isset($_POST['pdf'])) {
/*ob_start();
   
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello World!');
    $pdf->Output();
    ob_end_flush();*/
    class myPDF extends FPDF{
      function header()
      {
        $this->Image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Liste des locaux',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Ln(20);
        $this->Ln(20);
      }
      function footer()
      {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNo().'{nb}',0,0,'C');
      }
      function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'IdLocal',1,0,'C');
        $this->Cell(40,10,'NomLocal',1,0,'C');
        $this->Cell(40,10,'TypeLocal',1,0,'C');
        $this->Cell(40,10,'Effectif',1,0,'C');
        $this->Cell(40,10,'Etage',1,0,'C');
        $this->Ln();
      }
      function viewTable($conn)
      {
        $this->SetFont('Times','',12);
        $stmt=$conn->query('SELECT * from local');
        while ($data=$stmt->fetch(PDO::FETCH_OBJ)) {
          # code...
          $this->Cell(20,10,$data->IdLocal,1,0,'C');
        $this->Cell(40,10,$data->NomLocal,1,0,'C');
        $this->Cell(40,10,$data->TypeLocal,1,0,'C');
        $this->Cell(40,10,$data->Effectif ,1,0,'C');
        $this->Cell(40,10,$data->Etage ,1,0,'C');
        $this->Ln();
        }
      }
    }
    $pdf= new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headerTable();
    $pdf->viewTable($conn);
    $pdf->Output();
}?>

<button type="submit" target="_blank" class="btn btn-default pull-right" name="pdf" ><i class="fa fa-print"></i> PDF</buttton>