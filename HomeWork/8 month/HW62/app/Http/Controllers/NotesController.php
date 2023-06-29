<?php

namespace App\Http\Controllers;

use App\Http\Form\NoteForm;
use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotesController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $notes = Note::where('user_id', auth_user()->id)->get();
        return view('notes.index', compact('notes'));
    }

    /**
     * @param NoteRequest $request
     * @return RedirectResponse
     */
    public function store(NoteRequest $request): RedirectResponse
    {
        $note = NoteForm::execute($request);

        $notes = Note::where('user_id', auth_user()->id)->get();
        return redirect()->route('notes.index', compact('notes'))->with('success', 'Вы успешно создали заметку');
    }

    /**
     * @param Note $note
     * @return RedirectResponse
     */
    public function destroy(Note $note)
    {
        $note->delete();

        $notes = Note::where('user_id', auth_user()->id)->get();
        return redirect()->route('notes.index', compact('notes'))->with('success', 'Вы успешно удалили заметку');
    }
}
