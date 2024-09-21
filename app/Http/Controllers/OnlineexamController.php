<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

use App\onlineexam;

use App\questions;

use App\quslists;

use App\User;

use App\contact;

use App\answer;

use App\students;

use App\file;

use App\Rating;

use Carbon\Carbon;


class OnlineexamController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) { // Check if the user is authenticated

         $data = questions::all();

         $user = File::all();
        return view('student/dashboard',compact('data','user'));
     }else{
        
        // Redirect to login page or show an error message
    
        return view('student/login');
     }
    

    }
 public function profile()
    {
    if (Auth::check()) { // Check if the user is authenticated
    
        $user = Auth::user();
    
        return view('student/profile', ['data' => $user]);
    
    } else {
    
        // Redirect to login page or show an error message
    
        return view('student/login');
    
    }

    }

    public function selectCategory()
    {

        $data = questions::all();
    
        return view('student/selectCategory')->with('data', $data);

    }


    public function freeBooks()
    {

        $data = File::all();



        return view('student/freeBooks')->with('data', $data);;
    }


    public function leaderBoard(Request $ename)
    {
         $counts =Answer::where('ansStatus', 'correct')
                ->groupBy('answers.email', 'name')
                ->orderByRaw('COUNT(answers.email) DESC')
                ->selectRaw('COUNT(answers.email) as count, answers.email,name')
                ->distinct()
                ->take(3)
                ->get();
        $userCounts=DB::table('answers')
                ->where('ansStatus', 'correct')
                ->distinct()
                ->count('email');


        return view('student/leaderBoard',compact('counts','userCounts'));
    }


    public function contactUs()
    {
        return view('student/contactUs');
    }


    public function terms()
    {
        return view('student/terms');
    }

    public function rate()
    {

        return view('student/rate');
    }

    public function login()
    {
        return view('student/login');
    }

    public function selexamins($eid)
    {
        $ins = questions::find($eid);
 
        echo "<h1>ID - ".$eid."</h1>";

        return view('student/examIns');
    }

    public function examIns($eid)
    {
        $data=questions::where('eid',$eid)->get();


        return view('student/examIns',compact('data'));
    }

/////////////////////////////////////////////////////////////////////////





public function questions(Request $request,$eid)
    {

        // Get the user data from the session
         $user = $request->session()->get('user');

        // Get the first question
        $users = quslists::where('eid',$eid)->get();

        $time = questions::where('eid',$eid)->value('time');
         
        $question=quslists::where('eid',$eid)->limit(1)->get();
        // Render the quiz view
        return view('student/questions', compact('question','user','users','time'));
    }


    public function getNextData(Request $request)
    {
        $currentId = $request->currentId;
        $ename=$request->ename;
        $nextUser = quslists::where('id', '>', $currentId)->where('ename',$ename)->first();
        if ($nextUser) {
            return response()->json($nextUser);
        } else {
            return response()->json(['message' => 'No more data']);
                    return redirect()->route('analytics')->with('message', 'No more data');

        }
    }

        public function getPreviousData(Request $request)
    {
        $currentId = $request->currentId;
        $ename=$request->ename;
        $previousUser = quslists::where('id', '<', $currentId)->where('ename',$ename)->orderBy('qusid', 'desc')->first();
        if ($previousUser) {
            return response()->json($previousUser);
        } else {
            return response()->json(['message' => 'No previous data']);
        }
    }


    public function insertanswer(Request $req)
{
        $name=$req->input('name');

        $email=$req->input('email');
        
        $ename=$req->input('ename');

        $time=$req->input('time');

        $question=$req->input('question');
        
        $sel_ans = $req->input('sel_ans');

        $qus_status=$req->input('qus_status');
        
        $ans = $req->input('ans');
        
        $ansStatus = ($sel_ans == $ans) ? 'correct' : 'Not correct';
        
        $qusid=$req->input('qusid');

        $id = answer::where('ename', $ename)->where('email', Auth::user()->email)->where('qusid',$qusid)->first();

        if (!$id) {
        // Insert new data
        $obj = new answer;

        $obj->name=$name;

        $obj->email=$email;

        $obj->ename=$ename;

        $obj->time=$time;

        $obj->question=$question;

        $obj->sel_ans=$sel_ans;

        $obj->qus_status=$qus_status;

        $obj->ans=$ans;

        $obj->ansStatus=$ansStatus;

        $obj->qusid=$qusid;

        $obj ->save();          //Insert query
    
        return response()->json(['message' => 'New user data inserted successfully']);

    } else {
        // Update existing data
        $obj=answer::find($qusid);    
        
        $obj->name=$name;

        $obj->email=$email;

        $obj->ename=$ename;

        $obj->time=$time;

        $obj->question=$question;

        $obj->sel_ans=$sel_ans;

        $obj->qus_status=$qus_status;

        $obj->ans=$ans;

        $obj->ansStatus=$ansStatus;

        $obj->qusid=$qusid;

        $obj ->save();          //Insert query

        return response()->json(['message' => 'Existing user data updated successfully']);

}
        
         // return response()->json(['message' => 'Data inserted successfully','data'=>$obj]);
}


//////////////////////////////////////////////////////////////////////////////

    public function selexam($eid)
    {
        $ins = questions::find($eid);
 
        echo "<h1>ID - ".$eid."</h1>";

        return view('student/exams');
    }

    public function exams($eid)
    {
        $data=questions::where('eid',$eid)->get();
        $questionsCount = quslists::where('eid', $eid)->count();
        return view('student/exams',compact('data','questionsCount'));
    }


     public function analytics($ename)
{


    $startTime= answer::where('email', Auth::user()->email)
              ->where('ename', $ename)
              ->orderBy('time', 'desc')
              ->limit(1)
              ->value('time');

    $endTime = Answer::where('email', Auth::user()->email)
              ->where('ename', $ename)
              ->orderBy('time', 'asc')
              ->limit(1)
              ->value('time');

$carbonTime1 = Carbon::parse($startTime);
$carbonTime2 = Carbon::parse($endTime);

$diff = $carbonTime1->diff($carbonTime2);

$timeTaken=$diff->format('%Hh:%Im:%Ss'); 


    $questionsCount = quslists::where('ename', $ename)->count();

    $exam = answer::where('ename', $ename)->where('email', Auth::user()->email)->first();
    
    $answers = answer::where('ename', $ename)->where('email', Auth::user()->email)->get(); 

    $startTime=Answer::where('ename', $ename)->where('email', Auth::user()->email)->first();
    
    $attempted = 0;
    
    $correct = 0;
    
    $incorrect = 0;
    
    foreach ($answers as $answer) {
    
        if ($answer->sel_ans != null) {
    
            $attempted++; 
    
            if ($answer->ansStatus == 'correct') {
    
                $correct++; 
    
            } else {
    
                $incorrect++; 
    
            }
    
        }
    }


    $notAttempted = $questionsCount - $attempted; // calculate not attempted questions
    
    $Percentile = ($correct / $questionsCount) * 100;
    
    $percentileFormatted = number_format($Percentile, 2); // 2 decimal places
    
    $score =$correct; // calculate the score

    $counts = DB::table('answers')
    ->where('ename',$ename )
    ->where('ansStatus', 'correct')
    ->groupBy('email')
    ->orderBy('count', 'DESC')
    ->selectRaw('email, count(email) as count')
    ->get();

     $countss = DB::table('answers')
            ->where('ename', $ename)
            ->where('ansStatus', 'correct')
            ->groupBy('email')
            ->orderBy('count', 'DESC')
            ->selectRaw('email, count(email) as count')
            ->take(3)
            ->get();


    $user=answer::where('ename',$ename)->where('email', Auth::user()->email)->first();


    return view('student/analytics', compact('timeTaken','exam', 'attempted', 'notAttempted', 'correct', 'incorrect', 'score','percentileFormatted','questionsCount','counts','countss','user'));

}

    public function answers(Request $request,$ename)
    {
        // Get the first question
        $users = quslists::where('ename',$ename)->get();
         
        $question=quslists::where('ename',$ename)->limit(1)->get();
        
        return view('student/answers', compact('question','users'));

    }


    public function ansgetNextData(Request $request)
    {
              $currentId = $request->currentId;
        $ename=$request->ename;
        $nextUser = quslists::where('id', '>', $currentId)->where('ename',$ename)->first();
        if ($nextUser) {
            return response()->json($nextUser);
        } else {
            return response()->json(['message' => 'No more data']);
                    return redirect()->route('analytics')->with('message', 'No more data');

        }
    }

        public function ansgetPreviousData(Request $request)
    {
        $currentId = $request->currentId;
        $ename=$request->ename;
        $previousUser = quslists::where('id', '<', $currentId)->where('ename',$ename)->orderBy('qusid', 'desc')->first();
        if ($previousUser) {
            return response()->json($previousUser);
        } else {
            return response()->json(['message' => 'No previous data']);
        }
    }
    



    public function editPro($mobile)
    {

        $ins = User::where('mobile',$mobile)->first();   

        return view('student/editProfile',compact('ins'));

    }

        public function editProupda(Request $rest,$mobile)
    {
        $upd = User::where('mobile',$mobile)->first();

        if ($rest->img) {
        
        $imagename = time(). ".". $rest->img->extension();
        
        $rest->img->move(public_path('images'),$imagename);
            
        $upd->img = $imagename;
       
        }
        
        $upd->fname = $rest->input("fname");

        $upd->lname = $rest->input("lname");

        $upd->mobile= $rest->input("mobile");

        $upd->city = $rest->input("city");

        $upd->state = $rest->input("state");

        $upd->board = $rest->input("board");

        $upd->gender = $rest->input("gender");

        $upd->dob = $rest->input("dob");

        $upd->gender = $rest->input("gender");

        $upd->update();

        echo "$upd";

        return redirect('profile');

    }

            public function registration()
    {
        return view('student/registration');
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Admin
    public function selqus($eid)
    {
        $ins = quslists::find($eid);
        echo "<h1>ID - ".$eid."</h1>";
        // Get the user data from the session
        
        return view('admin/questions',compact('admin'));
    }
    public function selans($eid)
    {
        $ins = answer::find($eid);
 
        echo "<h1>ID - ".$eid."</h1>";
        // Get the user data from the session
        

        return view('admin/answers',compact('admin'));
    }
//index display 
    public function questionview(Request $request)
    {

       $sub = new questions();

       $examCount = questions::count();
       
       $newExamIdNum = $examCount + 1;
       
       $newExamId = 'EX' . str_pad($newExamIdNum, 3, '0', STR_PAD_LEFT);


        $obj = new quslists();
        
        $qusCount = quslists::count();
        
        $newQusIdNum = $qusCount + 1;
        
        $newQusId =str_pad($newQusIdNum, 1, '0', STR_PAD_LEFT);

        // Get the user data from the session
        $admin = $request->session()->get('admin');
       

        return view('admin/questions',compact('newExamId','newQusId','admin'));
    }

 //free Books
 
public function addBooks(Request $request)
    {
        // Get the user data from the session
        $admin = $request->session()->get('admin');
        

        return view('admin/addBooks',compact('admin'));
    }


public function insertBooks(Request $insert)
    {
    $file = new File();
    $file->name = $insert->input('name');
    $file->file_name = $insert->file('file')->getClientOriginalName();
    $file->file_path = $insert->file('file')->storeAs('public', $file->file_name . '.pdf', 'public');
    $file->save();
    return redirect('freeBooksTab');
    }


    public function freeBooksTabList(Request $request)
    {
        $tab = File::all();
        
        // Get the user data from the session

        $admin = $request->session()->get('admin');
        

        return view('admin/freeBooksTab',compact('tab','admin'));
    }

    public function edit($id)
{
    $book = File::find($id);
    return view('admin/editBooks', compact('book'));
}

public function editBooks(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'file' => 'nullable|file',
    ]);

    ini_set('post_max_size', '20M');
    ini_set('upload_max_filesize', '20M');
    
    $book = File::find($id);
    $book->name = $request->input('name');

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->storeAs('public', $fileName, 'public'); 
        $book->file_name = $fileName;
        $book->file_path = $filePath;
    }
    
    $book->update();
    return redirect()->route('freeBooksTab');
}

    public function delBooks($id)
    {
        $san = File::find($id)->delete();

        return redirect('freeBooksTab');
    }



    public function download($id)
{
    $file = File::find($id);
    $file_path = storage_path('app/public/' . $file->file_path);

    return response()->download($file_path, $file->file_name . '.pdf');
}

 // insert exams 

    public function insertqus(Request $req)
    {
        $req->validate([
            'ename'=>'required',
            'time'=>'required',
            'total'=>'required',
            'mark'=>'required',
        ]);

            $sub = new questions;

            $sub->eid = $req->eid;

            $sub ->ename =$req ->ename;

            $sub ->time =$req ->time;
 
            $sub ->total =$req ->total;

            $sub ->mark =$req ->mark;
            
            $sub ->save();          //Insert query
            
            echo "<script>alert('Successfully inserted');</script>";
            
            return redirect('questionview'); 
    }

// insert questions 

public function insertquslist(Request $req)
{
    
            $obj = new quslists;

            $obj->eid=$req->eid;

            $obj->qusid=$req->qusid;  

            $obj->ename=$req->ename;

            $obj->question=$req->question;

            $obj->op1=$req->op1;
 
            $obj->op2=$req->op2;

            $obj->op3=$req->op3;

            $obj->op4=$req->op4;

            $obj->ans=$req->ans;
            
            $obj ->save();          //Insert query

            echo "Successfully inserted";


            

}
//display table
 
   // public function display()
   //  {

   //      return view('admin/display',compact('admin'));
   //  }   
    
    public function extab(Request $request)
    {
        $tab = questions::all();
        
        $admin = $request->session()->get('admin');

        return view('admin/display',compact('tab','admin'));
    }

//exam update view table 
    public function extabup(Request $request,$eid)
    {
        $ins = questions::where('eid',$eid)->first();

        $admin = $request->session()->get('admin');
        
        return view('admin/extabupdate',compact('ins','admin'));
    }

// exam update 
    public function extabupdate(Request $rest,$eid)
    {
        $upd = questions::where('eid',$eid)->first();

        $upd->ename = $rest->input("ename");

        $upd->time = $rest->input("time");

        $upd->total = $rest->input("total");

        $upd->mark = $rest->input("mark");

        $upd->update();


        return redirect('display');
    }

//question table view

    public function qustab(Request $eid)
    {
        $ins = quslists::find($eid);

        // echo "<h1>ID - ".$eid."</h1>";

        return view('admin/qustab');
    }

//question table view by id 
    
    public function qustabli(Request $request,$eid)
    {
           // $tab1 = questions::where('eid',$eid)->first();

        $tab=quslists::where('eid',$eid)->get();

        $admin = $request->session()->get('admin');

        return view('admin/qustab',compact('tab','admin'));
    }       

//question update table  view

     public function qustabup(Request $request,$qusid)
    {
        $ins = quslists::where('qusid',$qusid)->first();

        $admin = $request->session()->get('admin');

        return view('admin/qustabupdate',compact('ins','admin'));
   
    }
//question update table

    public function qustabupdate(Request $request,$qusid)
    {
        $upd = quslists::where('qusid',$qusid)->first();

        $upd->eid =$request->input("eid");

        $upd->qusid = $request->input("qusid");

        $upd->question = $request->input("question");

        $upd->op1 = $request->input("op1");
  
        $upd->op2 = $request->input("op2"); 

        $upd->op3 = $request->input("op3");

        $upd->op4 = $request->input("op4");

        $upd->ans = $request->input("ans");

        $upd->update();   

        $eid = $request->input('eid');
        
        return redirect()->route('qustab', ['eid' => $eid]);
    } 
     
    public function stuDisTab(Request $request)
    {
        $tab = User::all();

        $admin = $request->session()->get('admin');
          
        return view('admin/stuDisplay',compact('tab','admin'));
    }

    public function stuTab($email)
    {
        $ins = User::find($email);
 
        echo "<h1>ID - ".$email."</h1>";

        return view('admin/stuTab');
    }

//Students table  view by Email 
    
    public function stuTabList(Request $request,$email)
    {
        $tab=User::where('email',$email)->get();

        $admin=$request->session()->get('admin');

        return view('admin/stuDisplayList',compact('tab','admin'));
    }

    //answers table

        public function ansDisplay()
    {
        return view('admin/ansDisplay');
    }   
    
    public function ansDisTab(Request $request)
    {
        $tab = answer::all();

        $admin = $request->session()->get('admin');

        return view('admin/ansDisplay',compact('tab','admin'));
    }

    public function ansTab($name)
    {
        $ins = answer::find($name);
        $admin = $request->session()->get('admin');
 
        return view('admin/ansTab',compact('admin'));
    }

//Students table  view by qusid 
    
    public function ansTabList(Request $request,$qusid)
    {
$admin = $request->session()->get('admin');
        $tab=answer::where('qusid',$qusid)->where('email', Auth::user()->email)->get();                  

        return view('admin/ansDisplayList',compact('tab','admin'));
    }


public function contactUsIns(Request $val)
{
    $val->validate([

        'name'=>'required',
        
        'email'=>'required',
        
        'message'=>'required'

    ]);

            $ins = new contact;

            $ins->name =$val->name;

            $ins->email=$val->email;

            $ins->message=$val ->message;

            $ins->save();

            echo "<h1 style='color:white;'>Successfully inserted</h1>".$ins;

            return redirect('contactUs');

}



// SUbmit ratings

public function ratingDisplay()
    {

        return view('admin/ratingDisplay');
    }

    public function RatingDisTab(Request $request)
    {
        $tab = Rating::all();
        $admin = $request->session()->get('admin');

        return view('admin/ratingDisplay',compact('tab','admin'));
    }

 public function ratsubmit(Request $request)
    {        
        $username = $request->input('username');
        $rating = $request->input('rating');
        $email = $request->input('email');
        $id=Rating::where('email',$email)->first();
        if (!$id) {
            $ratins=new Rating;
            $ratins->username=$username;
            $ratins->email=$email;
            $ratins->rating=$rating;
            $ratins->save();

            return response()->json(['message' => 'Rating inserted successfully']);
        } else {

        $ratupd = Rating::where('email', $email)->firstOrFail();    
        
        $ratupd->username=$username;

        $ratupd->email=$email;

        $ratupd->rating=$rating;

        $ratupd->save();

        return response()->json(['message' => 'Existing Rating data updated successfully']);
        }
        


    }

}

