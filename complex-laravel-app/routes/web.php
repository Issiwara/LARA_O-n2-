<?php
Route::get('/', function () {
    $arraySize = 15000;

    // Generate a random array of 15,000 numbers
    $numbers = [];
    for ($i = 0; $i < $arraySize; $i++) {
        $numbers[] = rand(1, 100000);
    }
    $length = count($numbers);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                // Swap $numbers[$j] and $numbers[$j + 1]
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    return view('welcome', compact('numbers'));
});