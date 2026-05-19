<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;

class ContactSubmissionController extends Controller
{
    public function index()
    {
        $messages = ContactSubmission::latest()->paginate(20);

        return view('admin.messages.index', compact('messages'));
    }

    public function show(ContactSubmission $message)
    {
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(ContactSubmission $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index')->with('success', 'Bericht verwijderd.');
    }
}
