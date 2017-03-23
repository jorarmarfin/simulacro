<?php

namespace App\Http\Controllers\Pago;

use App\Http\Controllers\Controller;
use App\Models\Postulante;
use Illuminate\Http\Request;
use PDF;
class PagoController extends Controller
{
    public function index()
    {
    	return view('pagos.index');
    }
    public function pdf()
    {
    	$postulante = Postulante::Usuario()->first();
        if(isset($postulante)){

        PDF::SetTitle('RECIBO DE PAGO');
        PDF::AddPage('L','A5');
        #MARCO
        PDF::Rect(15,15, 180,100 );
        #IMAGEN
        PDF::Image(asset('assets/pages/img/scotiabank_logo.jpg'),18,20,40);
        #TITULO
        PDF::SetXY(20,15);
        PDF::SetFont('helvetica','',22);
        PDF::Cell(170,15,"FORMATO DE PAGO",0,0,'C');
        #CCOLOR DEL TEXTO
        PDF::SetTextColor(0);
        #INSTITUCION
        PDF::SetXY(18,40);
        PDF::SetFont('helvetica','B',11);
        PDF::Cell(60,5,'Cuenta :',1,0,'R');
        PDF::SetXY(78,40);
        PDF::SetFont('helvetica','B',10);
        PDF::Cell(110,5,'ADMISION-UNI',1,0,'L');
        #CODIGO CNE
        PDF::SetXY(18,45);
        PDF::SetFont('helvetica','B',11);
        PDF::Cell(60,5,'DNI :',1,0,'R');
        PDF::SetXY(78,45);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(110,5,$postulante->dni,1,0,'L');
        #ETIQUETA NOMBRE DEL ALUMNO
        PDF::SetXY(18,50);
        PDF::SetFont('helvetica','B',11);
        PDF::Cell(60,5,'Nombre del alumno :',1,0,'R');
        PDF::SetXY(78,50);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(110,5,$postulante->nombre_completo,1,0,'L');
        #ETIQUETA IMPORTE
        PDF::SetXY(18,55);
        PDF::SetFont('helvetica','B',11);
        PDF::Cell(60,5,"Importe :",1,0,'R');
        PDF::SetXY(78,55);
        PDF::SetFont('helvetica','',11);
        PDF::Cell(110,5,"S/. 50.00 ",1,0,'L');
        #TITULO INSTRUCCIONES
        PDF::SetXY(18,60);
        PDF::SetFont('helvetica','',15);
        PDF::SetTextColor(255,0,0);
        PDF::Cell(123,5,"Instrucciones para el postulante",0,0,'L');
        #INSTRUCCIONES
        PDF::SetXY(18,68);
        PDF::SetFont('helvetica','',11);
        PDF::SetTextColor(0);
        PDF::Cell(123,0,"1. Verificar que los datos registrados en la parte superior sean los correctos.",0,0,'L');
        #
        PDF::SetXY(18,75);
        PDF::SetFont('helvetica','',11);
        PDF::SetTextColor(0);
        /*PDF::Cell(123,0,"2. Luego de transcurridas (24) horas de imprimir este formato, acercarse a cualquiera de las ",0,2,'L');
        PDF::Cell(123,0,"agencias Scotiabank y/o Cajeros Express (Curacao, Hiraoka, Topy Top, Maestro Home Center,",0,2,'L');
        PDF::Cell(123,0,"Cassinelli, Mavila, etc.",0,2,'L');
        PDF::Cell(123,0," RECUERDE QUE ES SÓLO PARA ALUMNOS QUE ESTÁN CURSANDO EL ÚLTIMO AÑO ",0,2,'L');
        PDF::Cell(123,0," DE EDUCACIÓN SECUNDARIA",0,2,'L');*/

        PDF::Output(public_path('storage/tmp/').'recibo.pdf','FI');
        }//fin if
    }
}
