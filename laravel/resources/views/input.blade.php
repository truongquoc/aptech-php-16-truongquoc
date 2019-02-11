<h1>INPUT</h1>
<form action="{{route('match')}}"method="post">
    {{csrf_field()}}
  <input type="text"name="match">
  <button type="submit">submit</button>

</form>