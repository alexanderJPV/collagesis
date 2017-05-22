<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	protected $_ERROR = false;

	/**
	 * [save_file description]
	 * @param  Request $request laravel object
	 * @param  String $folder   the folder save file
	 * @param  String $type    image or audio, foto etc
	 * @return If error return false, if is ok return string
	 */
	function save_file($request,$folder,$type){
		try {
			
			$destinationPath = 'uploads/'.$folder;
			$extension       = $request->file($type)->getClientOriginalExtension();
			$fileName        = rand(11111,99999).'.'.$extension;
			$request->file($type)->move($destinationPath, $fileName);
			return $destinationPath."/".$fileName;
		}catch (\Exception $e){
			\Session::flash('error',$e->getMessage());
			return $this->_ERROR;
		}
	}
}
