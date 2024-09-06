<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendFormInfo;

class UserController extends Controller
{
	//fonctions 
		//ManipData(Array, boolean=true);
	private function ManipData($data) {
		foreach(array_keys($data) as $key) {
			DB::update('update sender 
						set '.$key.'="'.$data[$key].'"');
		}
	}
	
	private function SendMail(){
		$senderInfo = DB::table('sender')->get()->toArray();
		$realSenderInfo = json_decode(json_encode($senderInfo), true);
		Mail::to('alistair.vaisse@gmail.com')->send(new SendFormInfo($realSenderInfo));
	}
	
	private function securiteRudimentaire($data){
		foreach(array_keys($data) as $key){
			if($data[$key]===""){
				return false;
			}
		}
		return true;
	}
		
    public function sendGest() {
			$data = [
				'Code_postal' => $_POST['inp1CodP'],
				'Ville' => $_POST['inp1Ville'],
				'Rue' => $_POST['inp1Rue'],
				'Numero' => $_POST['inp1Num'],
				'Société' => $_POST['inp2Soc'],
				'Adresse' => $_POST['inp2Addr'],
				'Code_Postal_Société' => $_POST['inp2CodP'],
				'Ville_Société' => $_POST['inp2Ville'],
				'type_de_Connexion' => $_POST['inp3Co']
			];
			
			self::ManipData($data);
			self::SendMail();
			return view("send");
	}
}
