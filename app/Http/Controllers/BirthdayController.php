<?php
namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Famous;
use App\Models\Lider;
use App\Models\u11;
use App\Models\u12;
use App\Models\u13;
use App\Models\u14;
use App\Models\u15;
use App\Models\u16;
use App\Models\u17;
use App\Models\u18;
use Carbon\Carbon;

class BirthdayController extends Controller
{
    public static function birthday()
    {
        $today = Carbon::today();
        $monthDay = $today->format('m-d'); // Get current month and day in MM-DD format
    
        $models = [
            Coach::class,
            Lider::class,
            Famous::class,
            u11::class,
            u12::class,
            u13::class,
            u14::class,
            u15::class,
            u16::class,
            u17::class,
            u18::class,
        ];
    
        $matchingBirthdays = [];
    
        foreach ($models as $model) {
            $results = $model::all();
    
            foreach ($results as $result) {
                $birthdayParts = explode('.', $result->birthday);
    
                if (count($birthdayParts) !== 3) {
                    // Invalid birthday format, skip this record
                    continue;
                }
    
                $birthdayMonth = $birthdayParts[1];
                $birthdayDay = $birthdayParts[2];
    
                if ($birthdayMonth . '-' . $birthdayDay === $monthDay) {
                    $matchingBirthdays[] = $result;
                }
            }
        }
    
        return $matchingBirthdays;
    }


}
