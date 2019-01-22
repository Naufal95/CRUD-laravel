haaiiiiiiiiiiiiiiiiiiiii
@foreach ($customer as $customerlist)
<br /> {{$customerlist->customer_id}}
{{$customerlist->name}}
 {{$customerlist->addres}}
 <a href="/Customer/{{$customerlist->customer_id}}">show</a>
 <br />
 <!--http://localhost:8000/Customer/1-->
<a href="/Customer/{{$customerlist->customer_id}}/edit">edit</a><br/>

<form  action="/Customer/{{$customerlist->customer_id}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
<button>X</button>
</form>
@endforeach

<br /><a href="{{url('Customer/create')}}">klik disini</a>
