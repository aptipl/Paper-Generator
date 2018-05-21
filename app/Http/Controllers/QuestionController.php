<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Subject;
use App\Question;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::latest()->paginate(10);

        return view('questions.index', compact('questions'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $subjects = Subject::pluck('name', 'id');

        return view('questions.create', compact('subjects'));
    }

    public function edit(Question $question)
    {
        $subjects = Subject::pluck('name', 'id');

        return view('questions.edit', compact('question','subjects'));
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('question.index')
                        ->with('success', 'Question deleted successfully');
    }

    public function store(QuestionRequest $request)
    {
        Question::create($request->except('_token'));

        return redirect()->route('question.index')
                        ->with('success', 'Question created successfully');
    }

    public function update(QuestionRequest $request, Question $question)
    {
        $question->update($request->except('_token'));

        return redirect()->route('question.index')
                        ->with('success', 'Question updated successfully');
    }
}
