<?php 
$storeSchedule = [
    'Sun' => ['09:00 AM' => '11:00 PM', '09:00 AM' => '12:00 AM'],
    'Mon' => ['09:00 AM' => '11:00 PM'],
    'Tue' => ['09:00 AM' => '11:00 PM'],
    'Wed' => ['09:00 AM' => '11:00 PM'],
    'Thu' => ['09:00 AM' => '11:00 PM'],
    'Fri' => ['09:00 AM' => '11:00 PM'],
    'Sat' => ['09:00 AM' => '11:00 PM', '09:00 AM' => '12:00 AM']
];


// current or user supplied UNIX timestamp
$timestamp = time();

// default status
$status = 'closed';

// get current time object
$currentTime = (new DateTime())->setTimestamp($timestamp);

// loop through time ranges for current day
foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

    // create time objects from start/end times
    $startTime = DateTime::createFromFormat('h:i A', $startTime);
    $endTime   = DateTime::createFromFormat('h:i A', $endTime);

    // check if current time is within a range
    if (($startTime < $currentTime) && ($currentTime < $endTime)) {
        $status = 'open';
        break;
    }
}

echo "We are currently: $status";


?>