<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierServices extends Model
{
    protected $table = 'supplier_services';
    protected $guarded = ['supplier_id'];
    protected $fillable = ['service_name','supplier_id'];
    public function suppliers(){
        return $this->belongsTo('App\Supplier','supplier_id');
    }
}
