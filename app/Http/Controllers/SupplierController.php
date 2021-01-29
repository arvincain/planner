<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

use App\Supplier;
use App\SupplierProjects;
use App\SupplierServices;
class SupplierController extends Controller
{
    public function serviceList(){
        return view('supplier.supplier');
    }
}
