<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php
    echo __('messages.greeting');
    ?>

    <!-- ['todo'=>$todo] add as parameter -->
    <form method="post" action={{route('update',['todo'=>$todo])}}>
        @csrf
        شماره:<input type="text" name="id" value="{{$todo->id}}"><br>
        نام: <input type="text" name="name" value="{{$todo->name}}"><br>
        سن:<input type="text" name="age" value="{{$todo->age}}"><br>
        توانایی ها:<input type="text" name="abilities" value="{{$todo->abilities}}"><br>
        <input type="submit" value="update">

    </form>
</body>

</html>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif