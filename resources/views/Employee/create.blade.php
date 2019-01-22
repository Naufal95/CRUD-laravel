<h1>CREATE</h1>

<form  action="{{route('Employee.store')}}" method="post">{{csrf_field()}}
  <input type="text" name="t_id" id="t_id"/>
<br />  <input type="text" name="t_name" id="t_name"/>
  <br /> <input type="text" name="t_address" id="t_address"/>
  <br /> <input type="text" name="t_Phone" id="t_Phone"/>

<br />
<input type="submit" name="s_save" id="s_save" value="save"/>

</form>
<br /><a href="{{url('Employee')}}">Kembali</a>
