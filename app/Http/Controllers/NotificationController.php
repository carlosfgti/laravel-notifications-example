<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notifications(Request $request)
    {
        // $notifications = $request->user()->notifications;
        $notifications = $request->user()->unreadNotifications;

        return response()->json(compact('notifications'));
    }
}
