<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Friend extends Model
{

public function isMyFriend($id)
{
	$con1 = Friend::where('idUser1' , Auth::user()->id)->where('idUser2' , $id)
				  ->orWhere('idUser2' , Auth::user()->id)->where('idUser1' , $id)->count();
	if($count>0)
		return true;
	else  
		return false;
}

}
