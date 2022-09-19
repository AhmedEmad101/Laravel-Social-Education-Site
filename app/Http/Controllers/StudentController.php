<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function index()
   {
    return view('login');
   }
   public function SaveUserData(Request $req)
   {
    $req->validate(
        [
            'name'=>'required'
            ,

            'email'=>'required|email'
            ,
            'password'=>'required'
        ]
        );
        if($_POST['password'] == $_POST['repassword'])
        {
        $query = DB::table('UserEmailInfo')
        ->insert(
            ['UserName'=>$req->input('name'),
            'Email' =>$req->input('email'),
            'UserPassword'=>$req->input('password')
            ]
        );
    }
    if($query)
    {

        return back()->with('success' ,'Your email has been created successfully');

    }
    else {

        return back()->with('failed','Something went wrong');
    }
   }
   public function CheckUser(Request $req)
   {
    $user = DB::table('UserEmailInfo')->where('UserName',$req->input('name'))->get();
    if($user[0]->UserPassword == $_POST['password'])
    {
        $req->session()->put('user',$req->input('name'));
        return view('profile');
    }
    else
    {
        return redirect('SignUp');
    }

   }
   public function StoreProfilePhoto(Request $req)
   {

        if($req->hasFile('ProfileImg'))
        {
            $file = $req->file('ProfileImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('uploads/students/',$fileName);
            $userName = session()->get('user');
            $query = DB::table('ProfilePhotos')->insert(
                [
                    'photoname'=>$fileName,
                    'ProfileUserName'=>$userName
                ]
                );
        }
        $req->session()->put('ProfilePhoto',$fileName);
        return view('profile');
   }
   public function ProfilePhotosViewer(Request $req)
   {
    if($req->hasFile('ProfileImg'))
    {
        $file = $req->file('ProfileImg');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move('uploads/students/',$fileName);
        $userName = session()->get('user');
        $query = DB::table('ProfilePhotos')->insert(
            [
                'photoname'=>$fileName,
                'ProfileUserName'=>$userName
            ]
            );
    }

    $UserPhotos = array(
       'pfPhotos'=> Db::table('ProfilePhotos')->where('ProfileUserName',$userName)->get()
    );
    return view('ProfilePhotos',$UserPhotos);
   }
   public function GotoProfilePhotos()
   {
    $userName = session()->get('user');
    $UserPhotos = array(
        'pfPhotos'=> Db::table('ProfilePhotos')->where('ProfileUserName',$userName)->get()
     );

    return view('ProfilePhotos',$UserPhotos);
   }
   public function search(Request $req)
   {
    $KeyUser = $req->input('SearchField');
    $user = DB::table('UserEmailInfo')->where('UserName',$KeyUser)->get();


    if($user[0]->UserName == $KeyUser){
     $req->session()->put('FounderUser',$KeyUser );
return view('SearchResults');
    }
    else
    {
        return redirect('Profile');
    }

   }
   public function AddFriend(Request $req)
   {$userName = session()->get('user');
    $FoundedUser = $req->session()->get('FounderUser');
    $query = DB::table('UserFriends')->insert([
        'UserN'=>$userName ,
        'FriendName'=> $FoundedUser
    ]);
    $query2 = DB::table('UserFriends')->insert([
        'UserN'=>$FoundedUser ,
        'FriendName'=> $userName
    ]);
    if($query){
    return( 'You added '.$FoundedUser.' added successfully');
    }
    else{
        return('failed to add '.$FoundedUser);
    }
   }
   public function ListFriends(Request $req)
   {
    $userName = session()->get('user');
    $friends = array(
        'FriendName'=>DB::table('UserFriends')->where('UserN',$userName )->get(),
        'FriendsNumber'=>Db::table('UserFriends')->where('UserN',$userName )->count()
    );

    return view('UserFriends',$friends);
   }

public function ChatFriends(Request $req)
   {
    $userName = session()->get('user');
    $friends = array('FriendName'=>DB::table('UserFriends')->where('UserN',$userName )->get());
    return view('ChatRoom',$friends);
   }
   public function goToChatRoom(Request $req)
   {
   $recieverName = $req->input('RecieverName');
   $req->session()->put('RecieverName',$recieverName);
   return view('SendingMsg');
   }
public function SendMessage(Request $req)
{
    $Message = $req->input('messagetext');
    $sender = session()->get('user');
    $reciever = session()->get('RecieverName');
    $query = DB::table('Chat')->insert(
        ['SenderName'=>$sender,
        'message'=> $Message,
        'RecieverName'=>$reciever
        ]
    );
    $Messages = array(
        'SendedMsgs'=>Db::table('Chat')->where('RecieverName' , $reciever)->where('SenderName',$sender)->get(),
        'RecivedMsgs'=>Db::table('Chat')->where('SenderName' , $reciever)->where('RecieverName',$sender)->get()
        );

  return view('ShowMessages', $Messages);
}

public function GoToExam()
{
    return view('Exam');
}
public function CorrectExam(Request $req)
{$grade = 0;
    $question1Answer = $_POST['Question1'];
    $question2Answer = $_POST['Question2'];
    $question3Answer = $_POST['Question3'];
    $question4Answer = $_POST['Question4'];
    $question5Answer = $_POST['Question5'];
    if(isset($_POST['SubmitAnswer']))
    {
        if($question1Answer == 'int my_num = 100000;')
        {
            $grade += 20;
        }
        if($question2Answer == 'export')
        {
            $grade += 20;
        }
        if($question3Answer == 'Short is the qualifier and int is the basic data type')
        {
            $grade += 20;
        }
        if($question4Answer == 'String str;')
        {
            $grade += 20;
        }
        if($question5Answer == 'const')
        {
            $grade += 20;
        }
        $StudentName = Session()->get('user');
        $GradeChar = '';
        if($grade <50)
        {
            $GradeChar = 'F';
        }
        if($grade == 60 )
        {
            $GradeChar = 'D+';
        }
        if($grade == 80 )
        {
            $GradeChar = 'B';
        }
        if($grade == 100 )
        {
            $GradeChar = 'A+';
        }
        $StudentInfo = DB::table('ExamGrades')->insert(
            [
                'StudentName'=>$StudentName,
                'StudentGrade'=>$grade,
                'SubjectGrade'=>$GradeChar
            ]
            );
    }
}
public function ViewPhoto()
{
    return view('SinglePhoto');
}
public function showPhoto($PhotoName)
{
    $photo = array('currentphoto'=> DB::table('ProfilePhotos')->where('photoname',$PhotoName)->get());

    return view('SinglePhoto',$photo );
}
public function LikePhoto($PhotoName)
{
    $LikerName = session()->get('user');
    $query = DB::table('Likes')->insert([
        'LikerName'=> $LikerName,
        'LikedPhotoName'=>$PhotoName
    ]
    );
return view('SinglePhoto');
}
public function ViewProfileOnSearch($FoundedUser)
{
    $TheSearchedUser = array(
        'SearchedUser'=>Db::table('UserEmailInfo')->where('UserName',$FoundedUser)->get(),
        'SearchedUserPhotos' =>Db::table('ProfilePhotos')->where('ProfileUserName',$FoundedUser)->get()
    );
    return view('SearchedUserProfile',$TheSearchedUser);
}
public function GetExamResult($user)
{
    $UserResult =array('StudentResult'=>DB::table('ExamGrades')->where('StudentName',$user)->get());
    return view('ExamResults',$UserResult);
}
public function Like(Request $req)
{$ImgName = session()->get('photoname');
 $user = session()->get('user');
  $query = DB::table('Likes')->insert(
    ['LikerName'=> $user
    ,
    'LikedPhotoName'=>$ImgName
    ]
   );
   $photo = array(
    'currentphoto'=> DB::table('ProfilePhotos')->where('photoname',$ImgName)->get(),
    'Likers'=>DB::table('Likes')->where('LikedPhotoName' ,$ImgName)->get(),
    'LikersCount'=>DB::table('Likes')->where('LikedPhotoName' ,$ImgName)->count());
return view('PhotoWithLikes',$photo);
}
public function Unlike()
{
    $ImgName = session()->get('photoname');
    $user = session()->get('user');
    $query = DB::table('Likes')->where('LikerName',$user)->where('LikedPhotoName',$ImgName)->delete();
    $photo = array(
        'currentphoto'=> DB::table('ProfilePhotos')->where('photoname',$ImgName)->get()
        ,
        'Likers'=>DB::table('Likes')->where('LikedPhotoName' ,$ImgName)->get(),
        'LikersCount'=>DB::table('Likes')->where('LikedPhotoName' ,$ImgName)->count()
    );
return view('SinglePhoto',$photo);
}
public function AddPosts(Request $req)
{
    $PostCaption = $req->input('PostCaption');
    if($req->hasFile('PostImg'))
    {
        $file = $req->file('PostImg');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move('Posts/',$fileName);
        $PubisherName = session()->get('user');
        $query = DB::table('UserPosts')->insert([
            'AuthorName'=>$PubisherName,
            'PostImg'=>$fileName,
            'PostCaption'=>$PostCaption
        ]
        );
}
}
public function ShowPosts($UserName)
{
    $UserPosts = array
    (
        'UPosts'=>DB::table('UserPosts')->where('AuthorName',$UserName)->get()

    );
    return view('UserProfilePhotos',$UserPosts);
}
}

