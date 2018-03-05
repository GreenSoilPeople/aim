<?php
namespace App\Http\Controllers;

use App\Sdd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use LaravelQRCode\Facades\QRCode as QRCode;


class SddsController extends Controller {

	public function createSdd(Request $request) {
		$sdd = Sdd::create($request->all());

		return response()->json($sdd);
	}
	
	public function updateSdd(Request $request, $id) {
		$sdd = Sdd::find($id);
		$sdd->sn = $request->input('sn');
		$sdd->in = $request->input('in');
		$sdd->out= $request->put('out');
		$sdd->save();

		return response()->json($sdd);
	}
  
	public function viewSdd($code) {
		$sdd = Sdd::find($code);

		return response()->json($sdd);
	}



	public function deletesdd($id){
		$sdd = Sdd::find($id);
		$sdd->delete();

		return response()->json('Removed.');
	}
	
	public function index() {
		$sdd = Sdd::all();

		return response()->json(['sdds' => $sdd]);
    }
    
    public function viewQR($id){
		$sdd = Sdd::find($id);

        // return response()->json('Removed.');
        return QRCode::text($sdd->sn)->png();
        
	}
}

?>