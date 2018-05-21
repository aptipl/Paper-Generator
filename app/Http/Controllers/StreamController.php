<?php

namespace App\Http\Controllers;

use App\Http\Requests\StreamRequest;
use App\Stream;

class StreamController extends Controller
{
    public function index()
    {
        $streams = Stream::latest()->paginate();

        return view('streams.index', compact('streams'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('streams.create');
    }

    public function edit(Stream $stream)
    {
        return view('streams.edit', compact('stream'));
    }
    
    public function destroy(Stream $stream)
    {
        $stream->delete();

        return redirect()->route('stream.index')
                        ->with('success', 'Stream deleted successfully');
    }
    
    public function store(StreamRequest $request)
    {
        Stream::create($request->except('_token'));

        return redirect()->route('stream.index')
                        ->with('success', 'Stream created successfully');
    }

    public function update(StreamRequest $request, Stream $stream)
    {
        $stream->update($request->except('_token'));

        return redirect()->route('stream.index')
                        ->with('success', 'Stream updated successfully');
    }
}
