@extends('layout')

@section('title')
   View All Blocks
@endsection

@section('main_content')
<div class="grid-layout">
@foreach($select as $data)

<?php
$class='';
$min=1;
  $max=10;
  $num=rand($min,$max);

  if ($num==4) {
  $class='block1';
}
if ($num==1) {
  $class='block2';
}
if ($num==2) {
  $class='block3';
}
if ($num==3) {
  $class='block4';
}
?>
<div class="grid-item grid-item-1 {!! $class !!}"> {{ $data->name}} ** {!! $data->color !!}</div>    
@endforeach
</div>
@endsection