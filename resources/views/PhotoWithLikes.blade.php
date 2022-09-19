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
    <br>
{{$LikersCount}}
<br>
    @foreach ($Likers as $user)
        {{$user->LikerName}}<p>Likes This</p>
        <br>
    @endforeach
    {{session()->put('photoname',$item->photoname)}}
    <form action="{{url('Unlike')}}" method="post">
        @csrf

        <button type="submit" >UnLike</button>
    </form>
    @endforeach

</body>
</html>
