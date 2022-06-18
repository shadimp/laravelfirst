@extends('layout.tamrin1layout')

@section('content')

@foreach($Todo as $t)

<!-- <a href="/todo/{{$t->id}}/delete"> delete</a> -->
<a href="/todo/{{$t->id}}/delete"> delete</a>
<?php
echo $t->id.$t->name."<br>";
?>

@endforeach

@endsection
