HALAMAN SHOW
@foreach ($customer as $customerlist)
<br /> {{$customerlist->customer_id}}
{{$customerlist->name}}
 {{$customerlist->addres}}
 
 <br />

@endforeach

<br /><a href="{{url('Customer')}}">klik disini</a>
