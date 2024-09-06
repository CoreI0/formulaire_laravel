<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function MailFormulated(){
		$nbAttributes = DB::count('select count(*) 
									from information_schema.columns
									where table_name = "sender"');
		$senderInfo = DB::sender::all()->toArray();
		
		echo "<p>"
		for($i=0; $i<$nbAttributes; $i++){

		}
	}
}
