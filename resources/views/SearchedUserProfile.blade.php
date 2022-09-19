<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SearchedUserProfile</title>
</head>
<body>
@foreach ($SearchedUser as $user)
{{$user->Email}}
@endforeach
@foreach ($SearchedUserPhotos as $userphotos)
<img src="{{asset('/uploads/students/'.$userphotos->photoname)}}" width="200">
@endforeach
</body>
</html>
