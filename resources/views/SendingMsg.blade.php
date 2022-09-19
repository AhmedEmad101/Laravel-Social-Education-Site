
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: chartreuse}
    </style>
    <title>Message Area</title>
</head>
<body>
    <h1>{{session()->get('RecieverName')}}</h1>
    <form action="SendMessage" method="post">
        @csrf
        <input type="text" name="messagetext" placeholder="Type a message" >
        <button type="submit">Send</button>
    </form>
    {{session()->get('Sender')}}

</body>
</html>
