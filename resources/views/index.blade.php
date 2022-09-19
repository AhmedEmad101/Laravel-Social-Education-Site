<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: blue}
        h1{font-size: 50px}
        h1{text-align: center}
        h1{border:4px solid}
        h1{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
        label{font-size:30px; }
        label{font-family: 'Times New Roman', Times, serif}
        label{display:inline-block}
        #UserName{width: 200px}
        #UserName{height:30px}
        #UserName{text-align: center}
        #UserPassword{width: 200px}
        #UserPassword{height: 30px}
        #UserPassword{text-align: center}
        button{width: 100px }
        button{height:50px }
        button{background-color: yellow}
        a{font-size: 30px}
    </style>
    <title>Login Page</title>
    <h1>Login</h1>
    <form action="UserValidation" method="POST">
        @csrf
        <label>name</label>
        <input type="text" name="name" id="UserName" placeholder="Enter Your Name">
        <br>
        <label >password</label>
        <input type="password" name="password" id="UserPassword" placeholder="Enter Your Password">
        <br>
        <pre>
        <button type="submit">Login</button>
    </pre>
    </form>

    <a href="SignUp">Sign Up Page</a>
</head>
<body>

</body>
</html>
