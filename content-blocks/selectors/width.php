<?php
// This will take what width is chosen within the WP backend and displat the width based on this

$widthText = "";
$widthImage = "";
$widthSelector = get_field('width');

if ($widthSelector  == "25") {
    $widthText = "col-3";
    $widthImage = "col-9";
} else if ($widthSelector == "50") {
    $widthText = "col-6";
    $widthImage = "col-6";
} else if ($widthSelector == "75") {
    $widthText = "col-9";
    $widthImage = "col-3";
} else {
    return;
}