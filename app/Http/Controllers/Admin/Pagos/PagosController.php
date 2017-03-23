<?php

namespace App\Http\Controllers\Admin\Pagos;

use App\Http\Controllers\Controller;
use App\Models\Catalogo;
use App\Models\Evaluacion;
use App\Models\Postulante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Storage;
use Styde\Html\Facades\Alert;

class PagosController extends Controller
{
	private $cuentaUNI;


	function __construct()
	{
		$this->cuentaUNI = '978853000001';
	}
    public function index()
    {
    	return view('admin.pagos.index');
    }
    public function store(Request $request)
    {

    }
    /**
     * Crea el archivo que se envia al banco
     * @return [type] [description]
     */
    public function create()
    {
    	$postulantes = Postulante::Pagantes()->get();
    	$param = $this->Parametros($postulantes);

    	$name = 'UNIADMIS.txt';
    	Storage::disk('carteras')->put($name,$param['header']);
    	foreach ($postulantes as $key => $postulante) {
    		$detalle = $this->ParametrosDetalle($postulante);
    		Storage::disk('carteras')->append($name, $detalle);
    	}
    	Storage::disk('carteras')->append($name, $param['footer']);

    	Alert::success('Cartera Creada con exito');
    	return back();
    }
    public function Parametros($postulantes)
    {
    	$servicio = Catalogo::table('SERVICIO')->first();
    	$evaluacion = Evaluacion::Activo()->first();
    	$conceptoServicio = $servicio->nombre;
    	$cabecera = collect([
    		$tipoCabecera = 'H',
	    	$Cuenta = pad($this->cuentaUNI,14,' '),
			$Concepto = $conceptoServicio,
			$TotalAlumnos = pad($postulantes->count(),7,'0','L'),
			$TotalSoles = pad(pad($servicio->valor*$postulantes->count(),15,'0','L'),17,'0'),
			$TotalDolares = pad(0,17,'0','L'),
			$RucEmpresa = '02016900400',
			$FechaEnvio = Carbon::now()->format('Ymd'),
			$FechaVigencia = str_replace('-', '', $evaluacion->fecha_fin),
			$FillerInicio = pad('0',3,'0','L'),
			$Diasmora = pad('0',3,'0','L'),
			$Tipomora = pad('0',2,'0','L'),
			$Moraflat = pad('0',9,'0','L'),
			$Porcentajemora = pad('0',8,'0','L'),
			$Montofijo = pad('0',9,'0','L'),
			$Tipodescuento = pad('0',2,'0','L'),
			$Montoadescontar = pad('0',9,'0','L'),
			$Porcentajedescuento = pad('0',8,'0','L'),
			$Diasdescuento = pad('0',3,'0','L'),
			$FillerFin = pad(' ',111,' ','L'),
			$Finderegistro = '*'
    	]);
		$pie = collect([
			$TipoPie = 'C',
			$Cuenta = pad($this->cuentaUNI,14,' '),
			$Concepto = $conceptoServicio,
			$CodigoConcepto = '01',
			$DescripcionConcepto = pad($evaluacion->nombre,30,' '),
			$AfectoPagoParcial = '0',
			$Cuenta = pad($this->cuentaUNI,14,' '),
			$FillerFinPie = pad(' ',188,' ','L'),
			$FinderegistroPie = '*'
	    ]);
    	return [
    		'header' => $cabecera->implode(''),
    		'footer' => $pie->implode('')
    	];
    }
    public function ParametrosDetalle($postulante)
    {
    	$servicio = Catalogo::table('SERVICIO')->first();
    	$evaluacion = Evaluacion::Activo()->first();
    	$detalle = collect([
	    	$TipoDetalle = 'D',
	    	$Cuenta = pad($this->cuentaUNI,14,' '),
	    	$Concepto = $servicio->nombre,
	    	$Codigo = pad($postulante->dni,15,' '),
			$NroRecibo = 'SIM'.pad($postulante->dni,12,'0','L'),
			$CodigoAgrupacion = pad('',11,' '),
			$Situacion = '0',
			$MonedaCobro = '0000',
			$Cliente = pad(str_clean(substr($postulante->nombre_completo,1,20)),20,' '),
			$DescripcionConcepto = pad($evaluacion->nombre,30,' '),
			$CodigoConcepto = '01',
			$ImporteConcepto = pad(pad($servicio->valor,4,'0'),9,'0','L'),
			$CodigoConcepto2 = pad('',2,' '),
			$ImporteConcepto2 = pad('0',9,'0'),
			$CodigoConcepto3 = pad('',2,' '),
			$ImporteConcepto3 = pad('0',9,'0'),
			$CodigoConcepto4 = pad('',2,' '),
			$ImporteConcepto4 = pad('0',9,'0'),
			$CodigoConcepto5 = pad('',2,' '),
			$ImporteConcepto5 = pad('0',9,'0'),
			$CodigoConcepto6 = pad('',2,' '),
			$ImporteConcepto6 = pad('0',9,'0'),
			$ImporteConcepto = pad(pad($servicio->valor,4,'0'),15,'0','L'),
			$ImporteConcepto = pad(pad($servicio->valor,4,'0'),15,'0','L'),
			$PorcentajeMinimo = pad('0',8,'0','L'),
			$OrdenCronologico = '1',
			$FechaEnvio = Carbon::now()->format('Ymd'),
			$FechaVigencia = str_replace('-', '', $evaluacion->fecha_fin),
			$DiasProrroga = '000',
			$FillerFinDetalle = pad(' ',15,' ','L'),
			$FinderegistroDetalle = '*'
		]);
		return $detalle->implode('');
    }
}

