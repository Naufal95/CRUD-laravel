<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    function index(){
      // echo 'hai';
      $customer = Customer::get(['customer_id','name','addres']);
      // var_dump($customer);
      // return view('Customer.index',compact('customer'));
            return view('Customer.index',compact('customer'));
    }
    function create(){
      // echo "telo";
      return view('customer.create');
    }
    function store(Request $request){
      // echo"cobak";
      // $txtName = $request->input('t_name');
      // echo $txtName;

         $txtId = $request->input('t_id');
           $txtName = $request->input('t_name');
          $txtAddres = $request->input('t_address');
           echo $txtId."<br />  ".$txtName."<br /> ".$txtAddres;

           customer::create([
             'customer_id'=> $txtId,
             'name'=> $txtName,
             'addres'=> $txtAddres
           ]);
return redirect('/Customer');


    }

public function show($id){
//   echo"hallo";
//   echo"$id";
// //select * from Customer where customer_id=$id;
//   $customer = Customer::where('customer_id'.$id);

  // var_dump($customer);
  // return view('Customer/show',
  // ['customer'=>Customer::where('customer_id',$id)]);
  // //
  $customer = Customer::where('customer_id', $id)->get();
  return view('Customer.show',compact('customer'));
}
public function edit($id){
    $customer = Customer::where('customer_id', $id)->get();
  return view('Customer/edit',compact('customer'));
}
public function update(Request $request, $id){
  $txtId = $request->input('t_id');
$txtName = $request->input('t_name');
$txtAddres = $request->input('t_address');

Customer::where('customer_id',$id)->update([
"name" => $txtName,
"addres"=>$txtAddres
]);
  return redirect ('/Customer');
}
public function destroy($id){
  $customer = Customer::where('customer_id',$id)->first();
  $customer-> delete();
  return redirect ('/Customer');
}
}
