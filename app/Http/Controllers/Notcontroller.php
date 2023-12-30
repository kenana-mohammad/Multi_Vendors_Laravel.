<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ladumor\OneSignal\OneSignal;

class Notcontroller extends Controller
{
    //
    public function index(){

$fields['include_player_ids'] = ['43b91b14-5380-4869-ac2b-c2e2aaf221ea'];
$notificationMsg = 'Hello!! A tiny web push notification.!';
OneSignal::sendPush($fields, $notificationMsg);
OneSignal::getNotifications();
        return view('f');
    }
}
