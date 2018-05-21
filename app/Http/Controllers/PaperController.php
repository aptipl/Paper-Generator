<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaperRequest;
use App\Subject;
use App\Paper;
use App\PaperQuestions;
use App\Question;

class PaperController extends Controller
{
    public function index()
    {
        $papers = Paper::latest()->paginate(10);

        return view('papers.index', compact('papers'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $subjects = Subject::pluck('name', 'id');

        return view('papers.create', compact('subjects'));
    }

    public function store(PaperRequest $request)
    {

        $paper = Paper::create($request->except('_token'));

        $questions = Question::select('question', 'type', 'answer1', 'answer2', 'answer3', 'answer4', 'marks')->inRandomOrder()->get()->toArray();

        $totalMarks = 0;
        $requreMarks = $request->input('total_marks');
        foreach($questions as $question){

            if($totalMarks >= $requreMarks)
                break;

            if( ($requreMarks - $totalMarks) < $question['marks'])
                continue;

            $totalMarks = $totalMarks + $question['marks'];
            $question['paper_id'] = $paper->id;
            PaperQuestions::create($question);
        }
        return redirect()->route('paper.index')
                        ->with('success', 'Paper Generated successfully');
    }

    public function destroy(Paper $paper)
    {
        $paper->delete();

        return redirect()->route('papers.index')
            ->with('success', 'Paper deleted successfully');
    }

    public function printPaper(Paper $paper)
    {
        $questions = PaperQuestions::where('paper_id', $paper->id)->get();
        $subject = Subject::find($paper->subject_id);

        return view('papers.print', compact('questions', 'paper', 'subject'));
    }
}
