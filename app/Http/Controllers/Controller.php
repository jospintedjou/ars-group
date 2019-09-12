<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload($request, $fileName){
        $file = $request->file($fileName);
        $file_name = str_random(30) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $file_name);

        return $file_name;
    }
}
