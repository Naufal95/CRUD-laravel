<h1>HALAMAN SHOW</h1>

@foreach ($employee as $employeelist)
 {{$employeelist->employee_id}}
{{$employeelist->employee_name}}
 {{$employeelist->employee_address}}
  {{$employeelist->employee_phone_number}}
 <br />

@endforeach

<br /><a href="{{url('Employee')}}">Kembali</a>
