<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    function index(){
      $supplier = Supplier::get(['Supplier_id','Supplier_name','Supplier_addres']);
  
      return view('Supplier.index',compact('supplier'));
    }
    function create(){

      return view('supplier.create');
    }
    function store(Request $request){
      $txtId = $request->input('t_id');
        $txtName = $request->input('t_name');
       $txtAddress = $request->input('t_address');
        echo $txtId."<br />  ".$txtName."<br /> ".$txtAddress;

        supplier::create([
          'Supplier_id'=> $txtId,
        'Supplier_name'=> $txtName,
          'Supplier_addres'=> $txtAddress

        ]);
return redirect('/Supplier');
    }
}
