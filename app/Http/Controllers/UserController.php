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
	private function ManipData($data, $action=true) {
		/*$action= true => insertion
				 = false => suppression
		*/	
		foreach(array_keys($data) as $key) {
			if($action) {
				DB::update('update sender 
							set '.$key.'="'.$data[$key].'"');
			} else {
				//fill input with values
			}
		}
	}
	
	private function SendMail($action){
		if($action){
			$senderInfo = DB::table('sender')->get()->toArray();
			$realSenderInfo = json_decode(json_encode($senderInfo), true);
			Mail::to('francois@revtelecom.net')->send(new SendFormInfo($realSenderInfo));
			echo "<div id='send_message'>mail envoyé</div>";
		}
	}
	
	private function securiteRudimentaire($data){
		foreach(array_keys($data) as $key){
			if($data[$key]===""){
				return false;
			}
		}
		return true;
	}
		
    public function Red() {
		if(isset($_POST["inp1Sub"])){
			$data = [
				'Code_postal' => $_POST['inp1CodP'],
				'Ville' => $_POST['inp1Ville'],
				'Rue' => $_POST['inp1Rue'],
				'Numero' => $_POST['inp1Num']
			];
			
			if(!self::securiteRudimentaire($data)){
				return view('step1');
			}
			
			self::ManipData($data);
			return view('step2');
			
		} else if(isset($_POST["inp2SubN"])||isset($_POST["inp2SubB"])){

			$data = [
				'Société' => $_POST['inp2Soc'],
				'Adresse' => $_POST['inp2Addr'],
				'Code_Postal_Société' => $_POST['inp2CodP'],
				'Ville_Société' => $_POST['inp2Ville']
			];
			
			if(!self::securiteRudimentaire($data) && isset($_POST["inp2SubN"])){
				return view('step2');
			}
			
			$whichSub = [
				true => 'step3',
				false => 'step1'
			];
		
			self::ManipData($data, isset($_POST["inp2SubN"])); 
			return view($whichSub[isset($_POST["inp2SubN"])]);
			
		} else if(isset($_POST["inp3SubFinal"])||isset($_POST["inp3SubB"])){
			$data = ['type_de_Connexion' => $_POST['inp3Co']];
			
			if(!self::securiteRudimentaire($data) && isset($_POST["inp3SubN"])){
				return view('step3');
			}
			
			$whichSub = [
				true => "send",
				false => "step2"
			];
			
			self::ManipData($data, isset($_POST["inp3SubFinal"]));
			self::SendMail(isset($_POST["inp3SubFinal"]));
			return view($whichSub[isset($_POST["inp3SubFinal"])]);
		}
	}
}
