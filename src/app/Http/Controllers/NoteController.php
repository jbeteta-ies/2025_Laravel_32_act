<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
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

    public function store(Request $request): RedirectResponse
    {
        $note = new Note();
        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->date = $request->input('date');
        $note->done = $request->input('done') ? 1 : 0;
        $note->save();
        // Redirigir a la lista de notas
        return redirect()->route('note.index');
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
    /*
    public function update(Request $request, Note $note)
    {
         $note->update($request->all());
         return redirect()->route('note.index');
    }
    */

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
        return redirect()->route('note.index');
    }

}
