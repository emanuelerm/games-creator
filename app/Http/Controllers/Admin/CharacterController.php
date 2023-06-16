<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character;
use App\Models\Item;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRequest $request)
    {
        $form_data = $this->validation($request->all());
        $newCharacter = new Character();
        $newCharacter->fill($form_data);
        $newCharacter->save();
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {

        // return $character->items;
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterRequest  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $form_data = $this->validation($request->all());
        $character->update($form_data);
        return redirect()->route('characters.show', $character->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
