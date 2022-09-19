<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: yellow}
        h1{text-align: center}
        h1{border: 2px solid}
    </style>
    <title>ChatRoom</title>
</head>
<body>
    <h1> Welcome to Chat Room</h1>
    @foreach ($FriendName as $item)
    {{$item->FriendName}}
    <form action="ChatWith" method="post">
        @csrf
        <input type="hidden" name="RecieverName" value="{{$item->FriendName}}">
        <button type="submit">Chat with {{$item->FriendName}}</button>
    </form>
<br>
@endforeach
</body>
</html>
