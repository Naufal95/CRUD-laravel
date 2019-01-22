HALAMAN EDIT
@foreach ($customer as $customerlist)
<form action="{{route('Customer.update',$customerlist->customer_id)}}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}


 <br />
<input type="text" name="t_id" value="{{$customerlist->customer_id}}"/>
<br />  <input type="text" name="t_name" value="{{$customerlist->name}}"/>
<br /> <input type="text" name="t_address" value="{{$customerlist->addres}}"/>
 <br />


@endforeach
 <br />
 <button type="submit">submit</button>
<br /><a href="{{url('Customer')}}">klik disini</a>
