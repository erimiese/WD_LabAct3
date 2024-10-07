<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function storeAge(Request $request)
    {
        // Validate the age input
        $request->validate([
            'age' => 'required|integer|min:0',
        ]);

        // Store age in session
        $request->session()->put('age', $request->input('age'));

        // Redirect based on the age input
        if ($request->input('age') >= 21) {
            return redirect()->route('restricted-21');
        } elseif ($request->input('age') >= 18) {
            return redirect()->route('restricted');
        } else {
            return redirect()->route('access-denied');
        }
    }
}
