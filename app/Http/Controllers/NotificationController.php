<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notifications(Request $request)
    {
        // $notifications = $request->user()->notifications;
        // $notifications = $request->user()->unreadNotifications;
        $notifications = $request->user()->unreadNotifications()->limit(5)->get();

        return response()->json(compact('notifications'));
    }


    public function markAsRead(Request $request)
    {
        $notification = $request->user()->notifications()->where('id', $request->id)->first();

        if ($notification)
            $notification->markAsRead();
    }


    public function markAllAsRead(Request $request)
    {
        $request->user()->unreadNotifications->markAsRead();
    }
}
