<?php

namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailcationNotificationController extends Controller
{
    /**
     * Send a new email cation notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailcationNotification();

        return back()->with('status', 'cation-link-sent');
    }
}
