<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Evaluation;
use App\Models\Notification;
use App\Models\PhotoPlace;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $notification=Notification::find(1);
        dd($notification->user);
    }
}
