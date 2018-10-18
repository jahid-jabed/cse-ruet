<?php

namespace App\Http\Controllers;
use App\Library;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
//use Response;

class MyController extends Controller
{
    public function libraryManagement()
    {
        $books = Library::all();
        return view('includes.library', ['books' => $books]);
    }
    
    public function index()
    {
        return view('home');
    }
    
    public function getBookFile($filename)
    {
//        $file = Storage::disk('local')->url($filename);
        $file = Storage::disk('local')->get($filename);
//         $headers = array(
//              'Content-Type: application/pdf',
//            );
//        return Response::download($file, $filename, $headers);
        return new Response($file, 200, [
    'Content-Type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="'.$filename.'"'
    ]);
    }
    
    public function viewPdfFile($filename)
    {
        return view('includes.viewer', ['filename' => $filename]);
    }
}
