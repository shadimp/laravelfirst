@extends('layout.tamrin1layout')

@section('content')
<?php echo __('messages.greeting'); ?>
<br>
@foreach($Todo as $t)

<a href="/todo/{{$t->id}}/delete"> delete</a>
<?php
echo $t->id . $t->name . "<br>";
?>

@endforeach

@endsection