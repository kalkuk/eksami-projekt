<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactController
{
    public function index(): Response {
        return Inertia::render(
            'Contact',
        );
    }


    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        Contact::create([
            'email' => $request->email,
        ]);

        return response()->json(['messages' => ['You have been subscribed!']]);
    }
}
