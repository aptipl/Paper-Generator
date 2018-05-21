<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::latest()->paginate();

        return view('subjects.index', compact('subjects'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('subjects.create', compact('streams'));
    }

    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject', 'streams'));
    }

    public function destroy($id)
    {
        Subject::destroy($id);

        return redirect()->route('subject.index')
            ->with('success', 'Subject deleted successfully');
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->except('_token'));

        return redirect()->route('subject.index')
            ->with('success', 'Subject created successfully');
    }

    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject->update($request->except('_token'));

        return redirect()->route('subject.index')
            ->with('success', 'Subject updated successfully');
    }

    public function activeStatus(Subject $subject)
    {
        $subject->update(['status' => 1]);

        return redirect()->route('subject.index')
            ->with('success', 'Subject Activated successfully');
    }

    public function inActiveStatus(Subject $subject)
    {

        $subject->update(['status' => 0]);

        return redirect()->route('subject.index')
            ->with('success', 'Subject In-Activated successfully');
    }
}
