<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;
use Illuminate\Support\Facades\Gate;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        Gate::authorize('list', Note::class);
        return view('note.index', [
            'notes' => Note::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        Gate::authorize('create', Note::class);
        return view('note.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request): RedirectResponse
    {
        Gate::authorize('create', Note::class);

        Note::create([
            'course_name' => $request->course_name,
            'content' => $request->content,
            
        ]);
        return redirect(route('note.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        Gate::authorize('view', $note);
        return view('note.show', ['note' => $note]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        Gate::authorize('update', $note);
        return view('note.edit', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        Gate::authorize('update', $note);

        $note->update([
            'course_name' => $request->course_name,
            'content' => $request->content,
        ]);
        return redirect(route('note.index'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        Gate::authorize('delete', $note);
        $note->delete();
        return redirect(route('note.index'));
    }
}
