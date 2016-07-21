<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use DateTime, DateInterval, DatePeriod;

class DateTimeHelper {
    public function yearMonths(Carbon $end, Carbon $start) {
        $end = new DateTime($end->addMonth()->format('Y-m-d'));
        $start = new DateTime($start->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 month');
        $period = new DatePeriod($start, $interval, $end);
        $months = [];
        foreach ($period as $dt) {
            $months[] = $dt->format("Y-m");
        }
        return $months;
    }
}