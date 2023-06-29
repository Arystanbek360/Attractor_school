<?php

namespace App\Http\Controllers;

use App\Http\Form\ContactForm;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): view
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * @return View
     */
    public function create(): view
    {
        return view('contacts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        $contact = ContactForm::execute($request);

        return redirect()
            ->route('home')
            ->with('success', "Новый контакт был создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return View
     */
    public function show(Contact $contact):view
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return View
     */
    public function edit(Contact $contact): View
    {
        return view('contacts.form', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ContactRequest $request
     * @param Contact $Contact
     * @return RedirectResponse
     */
    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $contact->update($data);

        return redirect()
            ->route('contacts.show', ['contact' => $contact])
            ->with('success', "Контакт был обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $Contact
     * @return RedirectResponse
     */
    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();
        return redirect()->route('home')->with('success', $contact->number . ' был удален!');
    }
}
