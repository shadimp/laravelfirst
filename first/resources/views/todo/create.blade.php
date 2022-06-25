<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post" action={{route('add')}}>
            @csrf
            شماره:<input type="text" name="id"><br>
           نام: <input type="text" name="name"><br>
            سن:<input type="text" name="age"><br>
            توانایی ها:<input type="text" name="abilities"><br>
            <input type="submit" >

        </form>
    </body>
</html>