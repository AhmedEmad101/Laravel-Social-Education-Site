<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{background-color:chartreuse}
        h1{border: 5px solid}
        h1{text-align: center}
        h1{font-family: Arial, Helvetica, sans-serif }
        h2{text-align: center }
        h2{font-family: 'Times New Roman', Times, serif}
        h2{font-size: 35px}
        h2{border: 3px solid}
        #ProfilePhotosForm,#ViewFriendsForm,#ViewChatFriendsForm,#GoToExamForm,#ProfileImgViewForm,#AddPostsForm,#GoToResultForm,#ShowPostsForm{display: inline-block}
        #SearchForm{text-align: center}
        button{background-color: crimson}
        button{font-size: 15px}
    </style>
    <title>profile</title>
</head>
<body>
    <form action="searchforuser" method="post" id="SearchForm">
        @csrf
        <input type="text" name="SearchField" >
        <button type="submit">Search</button>
    </form>
    <h1>Welcome to your profile</h1>
    <h2>{{session()->get('user')}}</h2>
    <form action="GoToProfilePhotos" method="post" id="ProfilePhotosForm">
        @csrf
        <button type="submit">GoToProfilePhotos</button>
    </form>
    <form action="ViewFriends" method="post" id="ViewFriendsForm">
        @csrf
        <button type="submit"> Friends</button>
    </form>
    <form action="ViewChatFriends" method="post" id="ViewChatFriendsForm">
        @csrf
        <button type="submit">Chat</button>
    </form>
    <form action="GoToExam" method="post" id="GoToExamForm">
        @csrf
        <button type="submit">Go to Exam</button>
<br>
    </form>
    <form action="UserResult/{{session()->get('user')}}" method="post" id="GoToResultForm">
        @csrf
        <button type="submit">Go to Result</button>
    </form>
    <form action="ShowPosts/{{session()->get('user')}}" method="post" id="ShowPostsForm">
        @csrf
        <button type="submit">Show Posts</button>
    </form>
    <form action="ProfileImgView"  method = "post" enctype="multipart/form-data" id="ProfileImgViewForm">
        @csrf
        <label for="">Choose Img to be Profile img</label>
        <input type="file" name="ProfileImg">
        <button type="submit">Upload</button>
    </form>
    <h3>Posts</h3>
    <form action="AddPosts" method = "post" enctype="multipart/form-data" id="AddPostsForm">
        @csrf
        <input type="file" name="PostImg">
        <br>
        <label>Photo Caption</label>
        <input type="text" placeholder="type something" name="PostCaption">
        <button type="submit">Upload</button>
    </form>
    <br>

</body>
</html>
