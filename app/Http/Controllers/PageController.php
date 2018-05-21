<?php

namespace App\Http\Controllers;

use App\Paper;
use App\Subject;
use App\Question;

class PageController extends Controller
{
    public function index()
    {
        $paperCount = Paper::where('status', 1)->count();
        $subjectCount = Subject::where('status', 1)->count();
        $questionCount = Question::where('status', 1)->count();

        return view('dashboard', compact('paperCount', 'subjectCount', 'questionCount'));
    }

}
