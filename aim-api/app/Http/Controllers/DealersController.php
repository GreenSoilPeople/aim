<?php
namespace App\Http\Controllers;

use App\Dealer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DealersController extends Controller {

	public function createDealer(Request $request) {
		$dealer = Dealer::create($request->all());

		return response()->json($dealer);
	}
	
	public function updateDealer(Request $request, $id) {
		$dealer = Dealer::find($id);
		$dealer->code = $request->input('code');
		$dealer->name = $request->input('name');
		$dealer->address = $request->input('address');
		$dealer->save();

		return response()->json($dealer);
	}
  
	public function viewDealer($code) {
		$dealer = Dealer::find($code);

		return response()->json($dealer);
	}



	public function deleteDealer($id){
		$dealer = Dealer::find($id);
		$dealer->delete();

		return response()->json('Removed.');
	}
	
	public function index() {
		$dealer = Dealer::all();

		return response()->json(['dealers' => $dealer]);
	}
}

?>