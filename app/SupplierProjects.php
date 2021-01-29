<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierProjects extends Model
{
    protected $table = 'supplier_projects';
    protected $guarded = ['supplier_id'];
    protected $fillable = ['filename'];
    public function suppliers(){
        return $this->belongsTo('App\Supplier','supplier_id');
    }
}
