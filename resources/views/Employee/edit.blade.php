<h1>HALAMAN EDIT</h1>

@foreach ($employee as $employeelist)
<form action="{{route('Employee.update',$employeelist->employee_id)}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}



<input type="text" name="t_id" value="{{$employeelist->employee_id}}"/>
<br />  <input type="text" name="t_name" value="{{$employeelist->employee_name}}"/>
<br /> <input type="text" name="t_address" value="{{$employeelist->employee_address}}"/>
<br /> <input type="text" name="t_Phone" value="{{$employeelist->employee_phone_number}}"/>
 <br />


@endforeach
 <br />
 <button type="submit">Save</button>
<br /><a href="{{url('Employee')}}">Kembali</a>
