<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        $this->generateCaptcha($request);

        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefoon' => ['nullable', 'string', 'max:20'],
            'behandeling' => ['nullable', 'string', 'max:255'],
            'bericht' => ['required', 'string', 'max:5000'],
            'captcha' => ['required', 'integer'],
            'privacy' => ['accepted'],
        ], [
            'captcha.required' => 'Vul het antwoord op de beveiligingsvraag in.',
            'privacy.accepted' => 'Je moet akkoord gaan met de privacyverklaring.',
        ]);

        $expected = $request->session()->get('captcha_answer');

        if ((int) $validated['captcha'] !== $expected) {
            $this->generateCaptcha($request);

            return back()->withInput()->withErrors(['captcha' => 'Het antwoord op de beveiligingsvraag is onjuist.']);
        }

        ContactSubmission::create([
            'naam' => $validated['naam'],
            'email' => $validated['email'],
            'telefoon' => $validated['telefoon'],
            'behandeling' => $validated['behandeling'],
            'bericht' => $validated['bericht'],
        ]);

        $this->generateCaptcha($request);

        return back()->with('success', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');
    }

    private function generateCaptcha(Request $request): void
    {
        $a = random_int(1, 9);
        $b = random_int(1, 9);

        $request->session()->put('captcha_a', $a);
        $request->session()->put('captcha_b', $b);
        $request->session()->put('captcha_answer', $a + $b);
    }
}
