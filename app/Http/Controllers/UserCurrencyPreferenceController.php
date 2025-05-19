<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCurrencyPreferenceRequest;
use App\Http\Requests\UpdateUserCurrencyPreferenceRequest;
use App\Models\UserCurrencyPreference;

class UserCurrencyPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserCurrencyPreferenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserCurrencyPreference $userCurrencyPreference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserCurrencyPreference $userCurrencyPreference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserCurrencyPreferenceRequest $request, UserCurrencyPreference $userCurrencyPreference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCurrencyPreference $userCurrencyPreference)
    {
        //
    }
}
