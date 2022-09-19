<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search result</title>
</head>
<body>

{{session()->get('FounderUser')}}
<form action="AddToFriends" method="POST">
    @csrf

    <button type="submit">Add Friend</button>

</form>
<form action="SearchedUserProfile/{{session()->get('FounderUser')}}" method="post">
    @csrf
    <button type="submit">View Profile Photos</button>
</form>
</body>
</html>
