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

        // Store the age in the session
        $request->session()->put('age', $request->input('age'));

        // Redirect to the restricted route to check access
        return redirect()->route('restricted');
    }
}
