<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile photos</title>
</head>
<body>

    @foreach ($pfPhotos as $photo)

    <p>{{session()->get('user')}}</p>
    <img src="{{asset('/uploads/students/'.$photo->photoname)}}" width="200">

    <br>
    <form action="showPhoto/{{$photo->photoname}}" method="post">
        @csrf
        <button type="submit">Show Photo</button>
    </form>
    @endforeach
</body>
</html>
