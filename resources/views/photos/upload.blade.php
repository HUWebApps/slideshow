@extends('layouts.app')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class='container'>
<form action="{{{route('photo.store')}}}" enctype="multipart/form-data" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Upload: <input type="file" name="file"><br/>
  <input type='submit' name='submit'>
</form>
</div>
@endsection
