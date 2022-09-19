<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color:greenyellow
        }
        table{
            background-color: gold
        }
        table{border: 4px solid}

        td{padding: 10px}

    </style>
    <title>Exam Result</title>
</head>
<body>
<table>
@foreach ($StudentResult as $item)
<tr>StudentName</tr>
<tr>StudentGrade</tr>
<tr>Grade letter</tr>
<td>{{$item->StudentName}}</td>
<td>{{$item->StudentGrade}}</td>
<td>{{$item->SubjectGrade}}</td>
@endforeach

</table>
</body>
</html>
