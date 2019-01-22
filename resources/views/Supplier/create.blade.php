VIEW
<form  action="{{route('Supplier.store')}}" method="post">{{csrf_field()}}
<br > <h1>id</h1>  <input type="text" name="t_id" id="t_id"/><br />
<br ><h1>nama</h1>  <input type="text" name="t_name" id="t_name"/><br />
 <br > <h1>alamat</h1> <input type="text" name="t_address" id="t_address"/>

<br ><input type="submit" name="s_save" id="s_save" value="save"/>
</form>
