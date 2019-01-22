<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";
public $timestamps = false;
    protected $fillable=[
      'Supplier_id',
      'Supplier_name',
      'Supplier_addres'
    ];
}
