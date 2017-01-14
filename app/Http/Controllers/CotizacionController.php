<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PHPExcel;
use PHPExcel_IOFactory;


class CotizacionController extends Controller
{
    public function cotizacion()
    {
        $objPHPExcel = new PHPExcel();
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel = $objReader->load("excel/lab_final.xlsx");
        $objPHPExcel->getActiveSheet()->SetCellValue('A19', 'Hola mundo');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save("Archivo_salida.xlsx");
    }
}
