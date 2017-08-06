<?php

use Crunz\Schedule;

$schedule = new Schedule();

$schedule->run('php cli.php Cache:Clear Maintenance')
    ->everyMinute()
    ->description('Cache Maintenance');

$schedule->run('php cli.php Cache:Clear All')
    ->everyFiveMinute()
    ->description('Cache Clear All');

return $schedule;
