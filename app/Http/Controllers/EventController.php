<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public static function event()
    {
        $event = Event::latest()->first();
        $today = Carbon::now()->format('Y-m-d');

        if($event){
            $eventTime = $event->time;
            if($today == $eventTime){
                $event->delete;
                return null;
            }
            return $event;
        }
        return null;
    }
}
