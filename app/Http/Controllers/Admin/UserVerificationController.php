<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserVerificationController extends Controller
{
    public function index()
    {
        $users = User::where('verified_by_admin', false)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.verify-users', compact('users'));
    }

    public function verify(User $user)
    {
        $user->update(['verified_by_admin' => true]);
        return back()->with('status', 'User verified successfully.');
    }
}