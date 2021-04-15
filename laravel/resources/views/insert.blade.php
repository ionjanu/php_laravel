@extends('layout')

@section('title')
   Insert to DB
@endsection


@section('main_content')
<form method="post" action='insert'>
  @csrf
  <div class="control">
      <input class="input is-normal" type="text" name="name" id="name" placeholder="Name product" autocomplete="off">
  </div>
  <div class="control">
      <label class="radio">
          <input type="checkbox" name="color" class="color" id="color1" value="0">
          white
      </label>
      <label class="radio">
          <input type="checkbox" name="color" class="color" id="color2" value="0">
          red
      </label>
      <label class="radio">
          <input type="checkbox" name="color" class="color" id="color3" value="0">
          green
      </label>
      <label class="radio">
          <input type="checkbox" name="color" class="color" id="color4" value="0">
          blue
      </label>
  </div>
  <button type="submit" id="send" class="button is-primary is-light">Submit</button>
</form>

@endsection

