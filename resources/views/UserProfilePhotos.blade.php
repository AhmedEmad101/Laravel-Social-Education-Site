<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    body{background-color: brown}
    h1{text-align: center}
    h1{background-color: yellow}
    </style>
    <title>User Profile Photost</title>
</head>
<body>
    <h1>{{session()->get('user')}} Posts</h1>
@foreach ($UPosts as $item)
{{$item->AuthorName}}
<img src="{{url('/Posts/'.$item->PostImg)}}" width="400">
<br>
{{$item->PostCaption}}
<br>
@endforeach
</body>
</html>
