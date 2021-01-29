<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Supplier;
use App\SupplierProjects;
use App\SupplierServices;
use DB;
class ClientController extends Controller
{
 
    public function getServices(){
        // $data = SupplierServices::select('id','service_name')->get()->toArray();
        $data = DB::table('supplier_services')
        ->get();
        // dd($data);
        return $data;
    }

}
