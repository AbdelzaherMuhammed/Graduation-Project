<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Lab;
use App\Models\Question;
use App\Models\Sponsor;
use App\Models\Tool;
use App\Models\Tutorial;

class HomeController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        $sponsors = Sponsor::all();
        $tutorials = Tutorial::all();
        $labs = Lab::all();
        $articles = Article::all();
        $questions = Question::all();
        return view('front.home', compact('tools', 'sponsors', 'tutorials', 'labs', 'articles', 'questions'));
    }


    public function updateProfile(\Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());
    }
}