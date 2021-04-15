@extends('layout')

@section('title')
    Home Page | Menu
@endsection

@section('main_content')
<div class="wellcome_">
    <button class="button is-primary is-light"><a href="insert" target="_blank">Add Products to DB</a></button>
    <button  class="button is-link is-light"><a href="view" target="_blank">View 30 blocks randomly</a</button>
    <button class="button is-warning  is-light"><a href="view3" target="_blank">Extract products with a minimum of 3 colors</a></button>
    <button class="button is-danger is-light"><a href="view4" target="_blank">Extract the products with 3 common colors</a></button>
</div>
@endsection