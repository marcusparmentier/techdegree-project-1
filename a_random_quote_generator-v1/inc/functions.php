<?php


// PHP - Random Quote Generator

// multidimensional array named quotes with inner array elements being associative arrays

$quotes[] = [
    'quote' => "Motivation is crap. Motivation comes and goes. When you’re driven, whatever is in front of you will get destroyed.",
    'source' => 'David Goggins',
    'citation' => "Can't Hurt Me",
    'year' => '2018',
];
$quotes[] = [
    'quote' => "Our greatest glory is not in never falling, but in rising everytime we fall.",
    'source' => 'Confucius',
];
$quotes[] = [
    'quote' => "Suffering is discomfort multiplied by resistance.",
    'source' => 'Buddhist saying',
];
$quotes[] = [
    'quote' => "Success is not something that happens to you, it's something that happens because of you and because of the actions you take.",
    'source' => 'Grant Cardone',
    'citation' => 'The 10X Rule',
    'year' => '2011',
];
$quotes[] = [
    'quote' => "The art of living is more like wrestling than dancing.",
    'source' => 'Marcus Aurelius',
];
$quotes[] = [
    'quote' => "We work with nutrition and exercise to increase our energy, but we ignore the richest source of energy we possess-our emotions.",
    'source' => 'Karla McLaren',
    'citation' => 'The Language of Emotions',
    'year' => '2010',
];

//var_dump($quotes);

// Created function getRandomQuote that returns a random key from $quotes array

function getRandomQuote() {
    global $quotes;
    return $quotes[rand(0, 5)];
}

// Made printQuote function calling getRandomQuote function and made empty string varible
// called displayQuote with conditional statements to leave off citation and year if quote does not have them

function printQuote() {
    $randQuote = getRandomQuote();
    $displayQuote = '';
    if (array_key_exists('citation', $randQuote) && (array_key_exists('year', $randQuote))) {
        $displayQuote = '<p class="quote">' . $randQuote['quote'] . '</p>';
        $displayQuote .= '<p class="source">' . $randQuote['source'];
        $displayQuote .= '<span class="citation">' .  $randQuote['citation'] . '</span>';
        $displayQuote .= '<span class="year">' . $randQuote['year'] . '</span>';
        $displayQuote .= '</p>';
    } else {
        $displayQuote = '<p class="quote">' . $randQuote['quote'] . '</p>';
        $displayQuote .= '<p class="source">' . $randQuote['source'];
        $displayQuote .= '</p>';
    }

}

?>