<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: deepskyblue}
        h1{text-align: center}
        h1{border:4px solid}
        h1{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
        #N,#E,#P,#RP{width: 200px}
        #N,#E,#P,#RP{height: 30px}
        button{width: 100px }
        button{height:50px }
        button{background-color: yellow}
    </style>
    <title>Signup Page</title>
    <h1>Sign Up page</h1>
</head>
<body>
    @if(session()->has('success'))

    {{session()->get('success')}}
     @endif

 @if(session()->has('failed'))
 {{session()->get('failed')}}
 @endif
    <form action="emailcreation" method="POST">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" placeholder="Enter your name" id="N">
        <br>
        <label for="email">email</label>
        <input type="text" name="email" placeholder="Enter your Email" id="E">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="write your passowrd" id="P">
        <br>
        <label for="repassword">repassword</label>
        <input type="password" name="repassword" placeholder="rewrite your passowrd" id="RP">
        <br>
        <pre>
        <button type="submit">Submit</button>
    </pre>
    </form>

</body>
</html>
