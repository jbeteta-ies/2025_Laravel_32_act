<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{

    public function index(): View
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function show($id): View
    {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    public function create(): View
    {
        return view('notes.create');
    }

    /* Otra forma de hacer el método store */
    /*
    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect()->route('note.index');
    }
    */

    public function store(NoteRequest $request): RedirectResponse
    {
        $data = $request->all();
        dd($data);
        $data['done'] = $request->has('done') ? 1 : 0; // Convert checkbox to boolean
        Note::create($data);
        return redirect()->route('note.index')->with('success', 'Nota creada correctamente.');
    }

    /* Otra forma de hacer el método edit, utilizando inyección de dependencias */
    /*
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }
    */

    public function edit($id): View
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }



    /* Otra forma de hacer el método update, utilizando inyección de dependencias */
    
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $data = $request->all();
        $data['done'] = $request->has('done') ? true : false; // Convert checkbox to boolean
        $note->update($data);
        return redirect()->route('note.index')->with('success', 'Nota actualizada correctamente.');
    }
    
    
    /*
    public function update(Request $request, $id): RedirectResponse
    {
        $note = Note::findOrFail($id);
        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->date = $request->input('date');
        $note->done = $request->input('done') ? 1 : 0;
        $note->save();
        return redirect()->route('note.index');
    }
    */

    /* Otra forma de hacer el método destroy, utilizando inyección de dependencias */
    /*
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index');
    }
    */

    public function destroy($id): RedirectResponse
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('note.index')->with('success', 'Nota eliminada correctamente.');
    }
}
