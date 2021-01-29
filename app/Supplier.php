<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    public $primaryKey = 'id';
    protected $fillable = ['supplier_name','contact_number','address','logo'];

    public function supplier_services(){
        return $this->hasMany('App\SupplierServices');
    }

    public function supplier_projects(){
        return $this->hasMany('App\SupplierProjects');
    }
}
