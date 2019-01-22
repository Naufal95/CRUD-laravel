<h1>Tampilan Awal</h1>

@foreach ($employee as $employeelist)
<br /> {{$employeelist->employee_id}}
{{$employeelist->employee_name}}
 {{$employeelist->employee_address}}
  {{$employeelist->employee_phone_number}}
  <br />
  <a href="/Employee/{{$employeelist->employee_id}}">show</a>
 <a href="/Employee/{{$employeelist->employee_id}}/edit">edit</a><br/>
  <form action="/Employee/{{$employeelist->employee_id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
  <button>X</button>

</form>





@endforeach

<br /><a href="{{url('Employee/create')}}">CREATE</a>
