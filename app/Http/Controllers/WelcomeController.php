<?php
// クラスの継承
// Laravelは生成してくれる
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return view('welcome');
        // welcome.blade.php
    }
    public function contact(){
        return view('contact');
    }
}
