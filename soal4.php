<?php

function sort_data($abjad)
{

    $alength = count($abjad);
    for ($x = 0; $x < $alength; $x++) {
        $acount = count($abjad[$x]);
        sort($abjad[$x]);
        $huruf[$acount] = $abjad[$x];
    }

    sort($huruf);
    echo json_encode($huruf);
}

$abjad = [
    ["a", "c", "b", "e", "d"],
    ["g", "e", "f"]
];



echo sort_data($abjad);
