<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kaik tau nama tabel
protected $table = 'customer';
protected $primaryKey = 'customer_id';
public $timestamps = false;
//yang kedua attributnya
protected $fillable = [
  'customer_id',
  'name',
  'addres'
];
}
