<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');

class Pdf
{
    function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='landscape'){
       // $dompdf = new Dompdf\DOMPDF();
       $dompdf = new Dompdf\Dompdf();
        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);
        $dompdf->render();
        //for view
        // if($download)
        //     $dompdf->stream($filename.'.pdf', array('Attachment' => 1));
        // else
        //     $dompdf->stream($filename.'.pdf', array('Attachment' => 0));
        //for download
        $output = $dompdf->output();
            file_put_contents('upload/invoice/'.$filename.'.pdf', $output);
       
    }
}
?>