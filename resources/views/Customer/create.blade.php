ini looooo
<!-- <form  action="/Customer" method="POST">{{csrf_field()}}
  <input type="text" name="t_name" id="t_id"/>
  <input type="submit" name="s_save" id="s_save" value="save"/>
</form> -->
<form  action="{{route('Customer.store')}}" method="post">{{csrf_field()}}
  <input type="text" name="t_id" id="t_id"/>
<br />  <input type="text" name="t_name" id="t_name"/>
  <br /> <input type="text" name="t_address" id="t_address"/>

<input type="submit" name="s_save" id="s_save" value="save"/>
</form>
