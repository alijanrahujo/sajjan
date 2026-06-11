<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>About us</h1>
    <h4>{{$abc}}</h4>


    <form action="{{route('contact')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            <div>{{$message}}</div>
        @enderror
        <textarea name="message" id="" cols="30" rows="10">{{old('message')}}</textarea><br>
        @error('message')
            <div>{{$message}}</div>
        @enderror

        <button>Submit</button>
    </form>


    @for($a=1; $a<=5; $a++)
        <h1>{{$a}}</h1>
    @endfor

    <?php
        for($a=1; $a<=5; $a++)
        {
            echo '<h1>'.$a.'</h1>';
        }
    ?>


    @php
        $a = 50;
    @endphp

    Value of A is : {{$a}}

</body>
</html>
