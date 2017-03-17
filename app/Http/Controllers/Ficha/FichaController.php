<?php

namespace App\Http\Controllers\Ficha;

use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use App\Models\Postulante;
use Illuminate\Http\Request;
use PDF;
class FichaController extends Controller
{
    public function index()
    {
    	return view('ficha.index');
    }
     public function pdf()
    {
    	$evaluacion = Evaluacion::Activo()->first();
    	$postulante = Postulante::Usuario()->first();
    	PDF::SetTitle('FICHA DE INSCRIPCION');
        PDF::AddPage('U','A4');
        PDF::SetAutoPageBreak(false);
        PDF::Rect(15,15, 180,170);
        #FONDO
        PDF::Image(asset('assets/pages/img/ficha.jpg'),0,0,210,297,'', '', '', false, 300, '', false, false, 0);
        #CCOLOR DEL TEXTO
        PDF::SetTextColor(0);
        #NUMERO DE INSCRIPCION
        PDF::SetXY(18,110);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Número de Inscripción :',0,0,'R');
        PDF::SetXY(78,110);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->codigo,0,0,'L');

        #NUMERO DE DNI
        PDF::SetXY(18,115);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Número de DNI :',0,0,'R');
        PDF::SetXY(78,115);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->dni,0,0,'L');
        #NOMBRES Y APELLIDOS
        PDF::SetXY(18,120);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Nombres y Apellidos :',0,0,'R');
        PDF::SetXY(78,120);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->nombre_completo,0,0,'L');
        #TELEFONOS
        PDF::SetXY(18,125);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Telefono :',0,0,'R');
        PDF::SetXY(78,125);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->telefono,0,0,'L');
        #CORREO
        PDF::SetXY(18,130);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Correo :',0,0,'R');
        PDF::SetXY(78,130);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->email,0,0,'L');
        #FECHA NACIMIENTO
        PDF::SetXY(18,135);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Fecha de Nacimiento :',0,0,'R');
        PDF::SetXY(78,135);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->fecha_nacimiento,0,0,'L');
        #GENERO
        PDF::SetXY(18,140);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(60,5,'Genero :',0,0,'R');
        PDF::SetXY(78,140);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,$postulante->sexo,0,0,'L');

        #DECLARACION JURADA
        PDF::SetXY(18,165);
        PDF::SetFont('helvetica','',20);
        PDF::Cell(170,5,'DECLARACION JURADA',0,0,'C');
        #
        PDF::SetXY(18,185);
        PDF::SetFont('helvetica','',11);
        PDF::MultiCell(170,5,'Declaro bajo juramento que toda la información registrada es auténtica, que me encuentro cursando el ultimo año de educacion secundaria basica regular o educacion basica alternativa y que la imágen subida al sistema es mi foto actual; y en caso de faltar a la verdad perderé mis derechos de postulante y me someto a las sanciones de Ley que correspondan. Asimismo, declaro no tener antecedentes policiales Autorizo a la Oficina Central de Admisión el uso de mis datos personales que libremente proporciono, para los fines que involucran las actividades propias del '.$evaluacion->nombre.', y la publicación de los resultados de las pruebas rendidas y en la publicación de los resultados finales en todo medio de comunicación',1,'J',false);
        #
        PDF::SetXY(18,250);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(70,5,'Firma del apoderado','T',0,'C');
        #
        PDF::SetXY(18,255);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(70,5,'DNI del apoderado:','B',0,'L');
        #FOTO
        PDF::Image(asset('/storage/'.$postulante->foto),169,45,35);

    	PDF::Output(public_path('storage/tmp/').'ficha.pdf','FI');
    }
}
