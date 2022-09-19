<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color: yellow
        }
    </style>
    <title>MessagesShow</title>
</head>
<body>
    <h1>{{session()->get('RecieverName')}}</h1>
    @foreach($SendedMsgs as $item)
    {{$item->SenderName}}

    {{$item->message}}
    <br>
    @endforeach
    <br>
    @foreach ($RecivedMsgs as $RMsgs)
    {{$RMsgs->SenderName}}
    {{$RMsgs->message}}
    <br>
    @endforeach

</body>
</html>
