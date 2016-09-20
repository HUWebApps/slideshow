@extends('layouts.app')
@section('content')
<div class='container'>
<form action="{{{route('photo.store')}}}" enctype="multipart/form-data" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Upload: <input type="file" name="file"><br/>
  <input type='submit' name='submit'>
</form>
</div>
@endsection
