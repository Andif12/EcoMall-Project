<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Payment;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        return view('profile.update', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->fill($request->validated());

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.update')->with('status', 'profile-updated');
    }

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
    public function show()
    {
        return view('profile');
    }

    public function storeAddress(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
        ]);

        $user = Auth::user();

        $user->address()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'province' => $request->input('province'),
                'postal_code' => $request->input('postal_code'),
            ]
        );

        return redirect()->route('profile.show')->with('status', 'address-updated');
    }

    // public function showProfile()
    // {
    //     $payments = Payment::where('user_id', Auth::id())->get();
    //     return view('profile', compact('payments'));
    // }
}
