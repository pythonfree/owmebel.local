<?php

function dump($var, $die = false, $all = false)
{
    global $USER;
    if ($USER->IsAdmin() || ($all == true)) {
//    if ($USER->IsAdmin() || ($all == true)) {
        echo '<font style="text-align: left; font-size: 10px"><pre>' . var_dump($var) . '</pre></font><br>';
    }
    if ($die) {
        die;
    }
}

function getUserId()
{
    global $USER;
    return $USER->GetID();
}