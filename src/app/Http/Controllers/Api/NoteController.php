<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => NoteResource::collection(Note::all())
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
        $note = Note::create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Nota creada correctamente.',
            'data' => $note
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new NoteResource($note)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NoteRequest $note)
    {
        $note->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Nota actualizada correctamente.',
            'data' => $note
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json([
            'success' => true,
            'message' => 'Nota eliminada correctamente.'
        ], 200);
    }
}
