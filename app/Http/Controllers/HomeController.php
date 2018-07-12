<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Repositories\PostRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $postRepo;

    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth');
        $this->postRepo = $postRepository;


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepo->getAll();
        return view('home', ['posts' => $posts]);
    }

    public function mail()
    {
       $name = 'Allan';
       Mail::to('allankirui57@gmail.com')->send(new SendMailable($name));
       
       return 'Email was sent';
    }
}
