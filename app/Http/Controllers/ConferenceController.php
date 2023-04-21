<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function index()
    {
        $conference = new Conference();

        return view('conference.index', ['conferences' => $conference->all()]);
    }

    public function show(int $id): View
    {
        return view('conference.show', ['conference' => Conference::findOrFail($id)]);
    }

    public function create(): View
    {
        return view('conference.create');
    }

    public function store(StoreConferenceRequest $request, Conference $conference): RedirectResponse
    {
        $validated = $request->validated();

        $conference->title = $validated['title'];
        $conference->description = $validated['description'];
        $conference->date = $validated['date'];
        $conference->address = $validated['address'];
        $conference->save();

        @$request->session()->flash('status', 'Conference created');

        return redirect()->route('conference.show', ['conference' => $conference->id]);
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conference.edit', compact('conference'));
    }

    public function update($id, Request $request)
    {
        $conference = Conference::findOrFail($id);
        $conference->update($request->all());
        return redirect()->route('conference.show', ['conference' => $conference->id]);
    }
}
