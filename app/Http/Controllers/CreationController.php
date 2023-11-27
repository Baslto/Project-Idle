<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreationController extends Controller
{
    public function store(Request $request)
    {
            $request->validate([
                'userid' => 'required',
                'characterName' => 'required|unique:characters',
                'characterClass' => 'required'
            ]);
            $character = $request->only('userid', 'characterName', 'characterClass');

            Character::create($character);
    }
}
