<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Contracts\View\View;
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
}
