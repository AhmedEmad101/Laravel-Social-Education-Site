<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CurrentPhoto</title>
</head>
<body>

    @foreach ($currentphoto as $item)
    <img src="{{asset('/uploads/students/'.$item->photoname)}}" width="400">
    {{session()->put('photoname',$item->photoname)}}
    <form action="{{url('Like')}}" method="post">
        @csrf

        <button type="submit" >Like</button>
    </form>
    @endforeach

</body>
</html>
