<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  function index(){

    $employee = Employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);

          return view('Employee.index',compact('employee'));
  }
  function create(){

    return view('employee.create');
  }
  function store(Request $request){

       $txtId = $request->input('t_id');
         $txtName = $request->input('t_name');
        $txtAddress = $request->input('t_address');
        $txtPhone = $request->input('t_Phone');
         echo $txtId."<br />  ".$txtName."<br /> ".$txtAddress."<br />".$txtPhone;

        employee::create([
           'employee_id'=> $txtId,
           'employee_name'=> $txtName,
           'employee_address'=> $txtAddress,
           'employee_phone_number'=>$txtPhone
         ]);
return redirect('/Employee');
}
public function show($id){

  $employee = Employee::where('employee_id', $id)->get();
  return view('Employee.show',compact('employee'));
}
public function edit($id){
    $employee = Employee::where('employee_id', $id)->get();
  return view('Employee/edit',compact('employee'));
}
public function update(Request $request, $id){
  $txtId = $request->input('t_id');
$txtName = $request->input('t_name');
$txtAddress = $request->input('t_address');
$txtPhone = $request->input('t_Phone');

Employee::where('employee_id',$id)->update([
"employee_name" => $txtName,
"employee_address"=>$txtAddress,
"employee_phone_number"=>$txtPhone
]);
  return redirect ('/Employee');
}
public function destroy($id){
  $employee = Employee::where('employee_id',$id)->first();
  $employee-> delete();
  return redirect ('/Employee');
}
}
