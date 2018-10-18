<?php

namespace App\Http\Controllers;
use App\User;
use App\AdmitCard;
use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Data;
use App\Comment;
use App\CourseRegistration;
use App\ExamForm;
use Anouar\Fpdf\FpdfServiceProvider;
use Anouar\Fpdf\Facades\Fpdf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function adminPage()
    {
        $users = User::all();
        return view('admin.home', ['users' => $users]);
    }
    
    public function courseReg()
    {
        return view('includes.course_registration');
    }
    
    public function coursePostReg($id, Request $request)
    {
        $this->validate($request, [
            'reg' => 'required',
            'session' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'receipt_no' => 'required'
        ]);
        
        $admit = AdmitCard::all()->where('roll', $id)->first();
        if($admit)
        {
            $admit->roll = $id;
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->fee = 0;
            $admit->update();
        }
        else
        {
            $admit = new AdmitCard();
            $admit->roll = $id;
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->save();
        }
        
        $course = CourseRegistration::all()->where('roll', $id)->first();
        
        if($course)
        {
            $course->roll = $id;
            
            $course->c1n = $request['c1n'];
            $course->c1t = $request['c1t'];
            $course->c1c = $request['c1c'];
            
            $course->c2n = $request['c2n'];
            $course->c2t = $request['c2t'];
            $course->c2c = $request['c2c'];
            
            $course->c3n = $request['c3n'];
            $course->c3t = $request['c3t'];
            $course->c3c = $request['c3c'];
            
            $course->c4n = $request['c4n'];
            $course->c4t = $request['c4t'];
            $course->c4c = $request['c4c'];
            
            $course->c5n = $request['c5n'];
            $course->c5t = $request['c5t'];
            $course->c5c = $request['c5c'];
            
            $course->c6n = $request['c6n'];
            $course->c6t = $request['c6t'];
            $course->c6c = $request['c6c'];
            
            $course->c7n = $request['c7n'];
            $course->c7t = $request['c7t'];
            $course->c7c = $request['c7c'];
            
            $course->c8n = $request['c8n'];
            $course->c8t = $request['c8t'];
            $course->c8c = $request['c8c'];
            
            $course->c9n = $request['c9n'];
            $course->c9t = $request['c9t'];
            $course->c9c = $request['c9c'];
            
            $course->c0n = $request['c0n'];
            $course->c0t = $request['c0t'];
            $course->c0c = $request['c0c'];
            
            $course->reg = $request['reg'];
            $course->session = $request['session'];
            $course->year = $request['year'];
            $course->semester = $request['semester'];
            $course->receipt = $request['receipt_no'];
            
            $course->update();
        }
        
        else
        {
            $course = new CourseRegistration();
            
            $course->roll = $id;
            
            $course->c1n = $request['c1n'];
            $course->c1t = $request['c1t'];
            $course->c1c = $request['c1c'];
            
            $course->c2n = $request['c2n'];
            $course->c2t = $request['c2t'];
            $course->c2c = $request['c2c'];
            
            $course->c3n = $request['c3n'];
            $course->c3t = $request['c3t'];
            $course->c3c = $request['c3c'];
            
            $course->c4n = $request['c4n'];
            $course->c4t = $request['c4t'];
            $course->c4c = $request['c4c'];
            
            $course->c5n = $request['c5n'];
            $course->c5t = $request['c5t'];
            $course->c5c = $request['c5c'];
            
            $course->c6n = $request['c6n'];
            $course->c6t = $request['c6t'];
            $course->c6c = $request['c6c'];
            
            $course->c7n = $request['c7n'];
            $course->c7t = $request['c7t'];
            $course->c7c = $request['c7c'];
            
            $course->c8n = $request['c8n'];
            $course->c8t = $request['c8t'];
            $course->c8c = $request['c8c'];
            
            $course->c9n = $request['c9n'];
            $course->c9t = $request['c9t'];
            $course->c9c = $request['c9c'];
            
            $course->c0n = $request['c0n'];
            $course->c0t = $request['c0t'];
            $course->c0c = $request['c0c'];
            
            $course->reg = $request['reg'];
            $course->session = $request['session'];
            $course->year = $request['year'];
            $course->semester = $request['semester'];
            $course->receipt = $request['receipt_no'];
            
            $course->save();
        }
        
        return view('home');
    }
    
    public function examFormFillUp($id, Request $request)
    {
        $this->validate($request, [
            'reg' => 'required',
            'session' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'receipt_no' => 'required',
            'backlog' => 'required'
        ]);
        
        $admit = AdmitCard::all()->where('roll', $id)->first();
        if($admit)
        {
            $admit->roll = $id;
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->fee = 1;
            $admit->update();
        }
        else
        {
            $admit = new AdmitCard();
            $admit->roll = $id;
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->fee = 1;
            $admit->save();
        }
        
        $course = ExamForm::all()->where('roll', $id)->first();
        
        if($course)
        {
            $course->roll = $id;
            
            $course->c1n = $request['c1n'];
            $course->c1t = $request['c1t'];
            $course->c1c = $request['c1c'];
            
            $course->c2n = $request['c2n'];
            $course->c2t = $request['c2t'];
            $course->c2c = $request['c2c'];
            
            $course->c3n = $request['c3n'];
            $course->c3t = $request['c3t'];
            $course->c3c = $request['c3c'];
            
            $course->c4n = $request['c4n'];
            $course->c4t = $request['c4t'];
            $course->c4c = $request['c4c'];
            
            $course->c5n = $request['c5n'];
            $course->c5t = $request['c5t'];
            $course->c5c = $request['c5c'];
            
            $course->c6n = $request['c6n'];
            $course->c6t = $request['c6t'];
            $course->c6c = $request['c6c'];
            
            $course->c7n = $request['c7n'];
            $course->c7t = $request['c7t'];
            $course->c7c = $request['c7c'];
            
            $course->c8n = $request['c8n'];
            $course->c8t = $request['c8t'];
            $course->c8c = $request['c8c'];
            
            $course->c9n = $request['c9n'];
            $course->c9t = $request['c9t'];
            $course->c9c = $request['c9c'];
            
            $course->c0n = $request['c0n'];
            $course->c0t = $request['c0t'];
            $course->c0c = $request['c0c'];
            
            $course->reg = $request['reg'];
            $course->session = $request['session'];
            $course->year = $request['year'];
            $course->semester = $request['semester'];
            $course->receipt = $request['receipt_no'];
            $course->xm = $request['backlog'];
            
            $course->update();
        }
        
        else
        {
            $course = new ExamForm();
            
            $course->roll = $id;
            
            $course->c1n = $request['c1n'];
            $course->c1t = $request['c1t'];
            $course->c1c = $request['c1c'];
            
            $course->c2n = $request['c2n'];
            $course->c2t = $request['c2t'];
            $course->c2c = $request['c2c'];
            
            $course->c3n = $request['c3n'];
            $course->c3t = $request['c3t'];
            $course->c3c = $request['c3c'];
            
            $course->c4n = $request['c4n'];
            $course->c4t = $request['c4t'];
            $course->c4c = $request['c4c'];
            
            $course->c5n = $request['c5n'];
            $course->c5t = $request['c5t'];
            $course->c5c = $request['c5c'];
            
            $course->c6n = $request['c6n'];
            $course->c6t = $request['c6t'];
            $course->c6c = $request['c6c'];
            
            $course->c7n = $request['c7n'];
            $course->c7t = $request['c7t'];
            $course->c7c = $request['c7c'];
            
            $course->c8n = $request['c8n'];
            $course->c8t = $request['c8t'];
            $course->c8c = $request['c8c'];
            
            $course->c9n = $request['c9n'];
            $course->c9t = $request['c9t'];
            $course->c9c = $request['c9c'];
            
            $course->c0n = $request['c0n'];
            $course->c0t = $request['c0t'];
            $course->c0c = $request['c0c'];
            
            $course->reg = $request['reg'];
            $course->session = $request['session'];
            $course->year = $request['year'];
            $course->semester = $request['semester'];
            $course->receipt = $request['receipt_no'];
            $course->xm = $request['backlog'];
            
            $course->save();
        }
        
        return view('home');
    }
    
    public function postReply($id, Request $request)
    {
        $this->validate($request, [
            'reply' => 'required'
        ]);
        
        $comment = Comment::where('id', $id)->first();
        $comment->reply = $request['reply'];
        
        $comment->update();
        
        return redirect()->back();
    }

        public function formFillUp()
    {
        return view('includes.exam_fillup');
    }
    
    public function admitCardManagement($id)
    {
        $admit_card = AdmitCard::where('roll', $id)->first();
        if($admit_card)
            return view('r.admit_card', ['admit_card' => $admit_card, 'id' => $id]);
        else
            return redirect ()->back ();
    }

        public function makeAdmin(Request $request)
    {
        $user = User::find($request['id']);
        if($user->admin)
        {
            $user->admin = 0;
        }
        else {
            $user->admin = 1;
        }
        $user->update();
        
        return redirect()->back();
    }
    
    public function libraryAddBook()
    {
        $books = Library::all();
        return view('includes.add_book', ['books' => $books]);
    }
    
    public function faqPage(){
        
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $users = User::all();
        return view('includes.faq', ['comments' => $comments, 'users' => $users]);
    }

        public function libraryAddNewBook(Request $request)
    {
        $this->validate($request, [
            'book_id' => 'required|min:4fdr|unique:Libraries',
            'book_name' => 'required',
            'book_author' => 'required'
        ]);
        
        $book = new Library();
        $book->book_id = $request['book_id'];
        $book->book_name = $request['book_name'];
        $book->book_author = $request['book_author'];
        $book->year = $request['year'];
        $book->semester = $request['semester'];
        
        $book->save();
        
        $file = $request->file('book_file');
        $filename = $request['book_name'].'-'.$request['book_id'].'.pdf';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        $books = Library::all();
        return view('includes.library', ['books' => $books]);
    }
    
    public function addComment(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'comment' => 'required|min:20|max:500'
        ]);
        
        $comment = new Comment();
        $comment->roll = $request['id'];
        $comment->text = $request['comment'];
        
        $comment->save();
        
        return redirect()->back();
    }


    public function getDetailProfile($id, $name ) {
        
        $data = Data::all()->where('user_id', $id)->first();
        if($data)
        {
            return view('includes.profile', ['data' => $data]);
        }
        else {
            $data = new Data;
            $data->blood = '';
            $data->mobile = '';
            $data->birth = 'yyyy-mm-dd';
            $data->pre_address = '';
            $data->per_address = '';
            return view('includes.profile', ['data' => $data]);
        }
    }
    
    public function infoAdmit($id, $name)
    {
        $ad_card = AdmitCard::all()->where('roll', $id)->first();
        return view('r.info_admit', ['ad_card' => $ad_card, 'id' => $id, 'name' => $name]);
    }
    
    public function updateAdmit(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|unique:admit_cards',
            'reg' => 'required',
            'session' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'fee' => 'required'
        ]);
        
        $admit = AdmitCard::all()->where('roll', $request['id'])->first();
        if($admit)
        {
            $admit->roll = $request['id'];
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->fee = $request['fee'];
            $admit->update();
        }
        else
        {
            $admit = new AdmitCard();
            $admit->roll = $request['id'];
            $admit->reg = $request['reg'];
            $admit->session = $request['session'];
            $admit->year = $request['year'];
            $admit->semester = $request['semester'];
            $admit->fee = $request['fee'];
            $admit->save();
        }
        
        $users = User::all();
        return view('admin.home', ['users' => $users]);
    }


    public function postEditName(Request $request) {
        
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $user = User::find($request['id']);
        $user->name = $request['name'];
        
        $user->update();
        
        return redirect()->back();
    }
    
    public function postEditRoll(Request $request) {
        
        $this->validate($request, [
            'roll' => 'required|min:6|unique:users'
        ]);
        
        $user = User::find($request['id']);
        $user->roll = $request['roll'];
        
        $user->update();
        
        return redirect()->back();
    }
    
    public function postEditEmail(Request $request) {
        
        $this->validate($request, [
            'email' => 'required|email|unique:users'
        ]);
        
        $user = User::find($request['id']);
        $user->email = $request['email'];
        
        $user->update();
        
        return redirect()->back();
    }
    
    public function postEditImage(Request $request) {
        
        
        $file = $request->file('image');
        $filename = $request['roll'].'-'.$request['id'].'.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        
        return redirect()->back();
    }
    
    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    
    public function postEditBlood(Request $request) {
        
        $this->validate($request, [
            'blood' => 'required'
        ]);
        
        $data = Data::all()->where('user_id', $request['id'])->first();
        if($data)
        {
            $data->blood = $request['blood'];
            $data->user_id = $request['id'];
            $data->update();
        }
        else
        {
            $data = new Data();
            $data->blood = $request['blood'];
            $data->user_id = $request['id'];
            $data->save();
        }
        
        return redirect()->back();
    }
    
    public function postEditMobile(Request $request) {
        
        $this->validate($request, [
            'mobile' => 'required|min:11'
        ]);
        
        $data = Data::all()->where('user_id', $request['id'])->first();
        if($data)
        {
            $data->mobile = $request['mobile'];
            $data->user_id = $request['id'];
            $data->update();
        }
        else
        {
            $data = new Data();
            $data->mobile = $request['mobile'];
            $data->user_id = $request['id'];
            $data->save();
        }
        
        return redirect()->back();
    }
    
    public function postEditBirth(Request $request) {
        
        $this->validate($request, [
            'birth' => 'required|date'
        ]);
        
        $data = Data::all()->where('user_id', $request['id'])->first();
        if($data)
        {
            $data->birth = $request['birth'];
            $data->user_id = $request['id'];
            $data->update();
        }
        else
        {
            $data = new Data();
            $data->birth = $request['birth'];
            $data->user_id = $request['id'];
            $data->save();
        }
        
        return redirect()->back();
    }
    
    public function postEditPreAdd(Request $request) {
        
        $this->validate($request, [
            'address' => 'required'
        ]);
        
        $data = Data::all()->where('user_id', $request['id'])->first();
        if($data)
        {
            $data->pre_address = $request['address'];
            $data->user_id = $request['id'];
            $data->update();
        }
        else
        {
            $data = new Data();
            $data->pre_address = $request['address'];
            $data->user_id = $request['id'];
            $data->save();
        }
        
        return redirect()->back();
    }
    
    public function postEditPerAdd(Request $request) {
        
        $this->validate($request, [
            'p_address' => 'required'
        ]);
        
        $data = Data::all()->where('user_id', $request['id'])->first();
        if($data)
        {
            $data->per_address = $request['p_address'];
            $data->user_id = $request['id'];
            $data->update();
        }
        else
        {
            $data = new Data();
            $data->per_address = $request['p_address'];
            $data->user_id = $request['id'];
            $data->save();
        }
        
        return redirect()->back();
    }
    
    public function downAdmit($roll, $name)
    {
        $ac = AdmitCard::all()->where('roll', $roll)->first();
        
        if($roll != \Auth::user()->roll or $ac->fee == 0)
        {
            return view('home');
        }
        
        $pdf = new Fpdf();
        $pdf::SetMargins(10, 10, 10);
        $pdf::AddPage();
        $pdf::SetFont('Times', 'B', 17);
        $pdf::SetDrawColor(124, 155, 255);
        $pdf::SetFillColor(30, 144, 255);
        $pdf::SetTextColor(255, 255, 255);
        $pdf::SetX(10);
        $pdf::Cell(0,20,"RAJSHAHI UNIVERSITY OF ENGINEERING AND TECHNOLOGY", 1, 0, 'C', TRUE);
        $pdf::SetFont('Helvetica', 'B', 16);
        $pdf::SetX(10);
        $pdf::SetTextColor(0, 0, 0);
        $pdf::Cell(0,50,"Department of Computer Science & Engineering", 0, 0, 'C');
        $pdf::SetX(10);
        $pdf::SetFont('Courier', 'B', 16);
        $pdf::Cell(0, 75, "Registration No: $ac->reg", 0, 0, 'L');
        $pdf::SetX(10);
        $pdf::Cell(0, 75, "Session: $ac->session", 0, 0, 'R');
        $pdf::SetX(10);
        $pdf::SetFont('Helvetica', '', 14);
        $pdf::Cell(0, 95, "B.Sc Engineering $ac->year Year $ac->semester Semester / Backlog Examination.", 0, 0, 'C');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetX(10);
        $pdf::Cell(0, 115, "ADMIT CARD", 1, 0, 'C');
        $pdf::SetFont('Courier', 'B', 16);
        $pdf::SetTextColor(0, 0, 0);
        $pdf::SetX(10);
        $pdf::Cell(0, 140, "Name:            $name", 0, 0, 'L');
        $pdf::SetX(10);
        $pdf::Cell(0, 160, "Student ID:      $roll", 0, 0, 'L');
        $pdf::SetX(10);
        $pdf::SetTextColor(255, 200, 0);
        $pdf::Cell(0, 210, "Signed by the exam controller", 0, 0, 'R');
        $pdf::Output();
        exit;
    } 
    
//    public function getUserData(Request $request)
//    {
//        $data = Data::find($request['id']);
//        if($data)
//            return view('includes.profile', ['data' => $data]);
//        else {
//            $data = new Data;
//            $data->blood = '...';
//            $data->mobile = '...';
//            $data->birth = '...';
//            $data->pre_address = '...';
//            $data->per_address = '...';
//            return view('includes.profile', ['data' => $data]);
//        }
//    }
}
