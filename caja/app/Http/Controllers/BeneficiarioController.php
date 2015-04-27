<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\models\Beneficiario;

class BeneficiarioController extends Controller {

	public function Registrar(Request $request){

		$rs=Beneficiario::create(array(
			 'nombre'=>$request->input('nombre'),
			 'identificacion'=>$request->input('identificacion'),
			 'direccion'=>$request->input('direccion'),
			 'telefono'=>$request->input('telefono')
		));

		return $rs['id'] > 0 ? 'Success' : 'Error';

	}

}
