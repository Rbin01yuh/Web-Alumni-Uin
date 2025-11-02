<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Handle CV upload
        if ($request->hasFile('cv')) {
            $path = $request->file('cv')->store('cv', 'public');
            $data['cv_path'] = $path;
        }

        // Normalize privacy settings
        if (isset($data['privacy_settings'])) {
            $data['privacy_settings'] = [
                'show_email' => (bool)($data['privacy_settings']['show_email'] ?? false),
                'show_phone' => (bool)($data['privacy_settings']['show_phone'] ?? false),
                'show_linkedin' => (bool)($data['privacy_settings']['show_linkedin'] ?? false),
                'show_cv' => (bool)($data['privacy_settings']['show_cv'] ?? false),
            ];
        }

        $request->user()->fill($data);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
