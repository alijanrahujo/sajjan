<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Task</h1>


    <form action="{{route('task.store')}}" method="post">
        @csrf

        <label for="">Title</label><br>
        <input type="text" name="title"><br>
        @error('title')
            <div>{{$message}}</div>
        @enderror
        <br>

        <label for="">Description</label><br>
        <textarea name="description" cols="30" rows="10"></textarea><br>
        @error('description')
            <div>{{$message}}</div>
        @enderror
        <br>

        <button>Create Task</button>
    </form>
</body>
</html>
