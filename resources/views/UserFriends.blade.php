<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: darkorange}
    </style>
    <title>User friends</title>
</head>
<body>
    <h1>My Friends({{{$FriendsNumber}}})</h1>

<b>
@foreach ($FriendName as $item)

    {{$item->FriendName}}
<br>
@endforeach

</b>
</body>
</html>
