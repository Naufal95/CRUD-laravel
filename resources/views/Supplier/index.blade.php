
@foreach ($supplier as $supplierlist)
<br />  {{$supplierlist->Supplier_id}}
  {{$supplierlist->Supplier_name}}
  {{$supplierlist->Supplier_addres}}
@endforeach
<br /><a href="{{url('Supplier/create')}}">klik disini</a>
