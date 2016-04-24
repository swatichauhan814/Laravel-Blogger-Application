

<form method="post" action="{{ url('posttome') }}">
  {!! csrf_field() !!}
  <input type="file" name="input">
  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
