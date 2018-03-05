<?php
namespace App\Http\Controllers;

use App\Movement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class MovementsController extends Controller {

	public function createMovement(Request $request) {
		$movement = Movement::create($request->all());

		return response()->json($movement);
	}
	
	public function updateMovement(Request $request, $id) {
		$movement = Movement::find($id);
		$movement->dealer_id = $request->input('dealer_id');
		$movement->sdd_id = $request->input('sdd_id');
        $movement->in_out = $request->input('in_out');
        $movement->note = $request->input('note');
        $movement->movement_date = $request->input('movement_date');
        
		$movement->save();

		return response()->json($movement);
	}
  
	public function viewMovement($code) {
		$movement = Movement::find($code);

		return response()->json($movement);
	}



	public function deletemovement($id){
		$movement = Movement::find($id);
		$movement->delete();

		return response()->json('Removed.');
	}
	
	public function index() {
		$movement = Movement::all();

		return response()->json(['movements' => $movement]);
	}
}

?>