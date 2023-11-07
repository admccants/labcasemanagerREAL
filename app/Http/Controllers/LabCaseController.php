<?php

namespace App\Http\Controllers;

use App\Models\LabCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class LabCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Cases/Index', [
            'labCases' => Auth::user()->account->labCases]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Cases/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Auth::user()->account->labCases()->create(
            Request::validate([
                'patient_first_name' =>['required', 'max:30'],
                'patient_last_name' =>['nullable', 'max:30'],
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(LabCase $labCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LabCase $labCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LabCase $labCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LabCase $labCase)
    {
        $labCase->delete();

        return Redirect::back();
    }
}
