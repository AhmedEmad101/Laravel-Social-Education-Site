<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color: coral}
        button{font-size: 20px}
        button{background-color: rgb(26, 255, 0)}
    </style>
    <title>Msq Exam</title>
</head>
<body>
    <form action="CorrectExam" method="post">
        @csrf
        <p>Questions 1 : Which is valid C expression?</p>
        <label for="">int my_num = 100,000;</label>
        <input type="radio" name="Question1" value="int my_num = 100,000;">
        <br>
        <label for="">int my_num = 100000;</label>
        <input type="radio" name="Question1" value="int my_num = 100000;">
        <br>
        <label for="">int my num = 1000;</label>
        <input type="radio" name="Question1" value="int my num = 1000;">
        <br>
        <label for="">int $my_num = 10000;</label>
        <input type="radio" name="Question1" value="int $my_num = 10000;">
        <br>
        <p>Questions 2 : Which of the following cannot be a variable name in C?</p>
        <label for="">volatile</label>
        <input type="radio" name="Question2" value="volatile">
        <br>
        <label for="">true</label>
        <input type="radio" name="Question2" value="true">
        <br>
        <label for="">friend</label>
        <input type="radio" name="Question2" value="friend">
        <br>
        <label for="">export</label>
        <input type="radio" name="Question2" value="export">
        <br>
        <p>Questions 3 :  What is short int in C programming?</p>
        <label>The basic data type of C</label>
        <input type="radio" name="Question3" value="The basic data type of C">
        <br>
        <label>Qualifier</label>
        <input type="radio" name="Question3" value=" Qualifier">
        <br>
        <label>Short is the qualifier and int is the basic data type</label>
        <input type="radio" name="Question3" value="Short is the qualifier and int is the basic data type">
        <br>
        <label>All of the mentioned</label>
        <input type="radio" name="Question3" value="All of the mentioned">
        <br>
        <p>Questions 4:  Which of the following declaration is not supported by C language?</p>
        <label>String str;</label>
        <input type="radio" name="Question4" value="String str;">
        <br>
        <label>char *str;</label>
        <input type="radio" name="Question4" value="char *str;">
        <br>
        <label>float str = 3e2;</label>
        <input type="radio" name="Question4" value="float str = 3e2;">
        <br>
        <label>Both String str; & float str = 3e2;</label>
        <input type="radio" name="Question4" value="Both String str; & float str = 3e2;">
        <br>
        <p>Questions 5 : Which keyword is used to prevent any changes in the variable within a C program?</p>
        <label>immutable</label>
        <input type="radio" name="Question5" value="immutable">
        <br>
        <label>mutable</label>
        <input type="radio" name="Question5" value="mutable">
        <br>
        <label>const</label>
        <input type="radio" name="Question5" value="const">
        <br>
        <label>volatile</label>
        <input type="radio" name="Question5" value="volatile">
        <br>

<button type="submit" name="SubmitAnswer">Submit Answers</button>
    </form>
</body>
</html>
