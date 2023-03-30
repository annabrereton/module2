<?php

//Create a basic Blackjack game.
//It's an interpretation of Blackjack. More like Twenty-One (Vingt-Un/Vingt-et-Un).
//At this stage, the computer plays the whole game. No user interaction because we don't know how to do it yet.
//One deck of cards.
//Shuffle the deck.
//Deal four cards.
//Add two pairs to get two scores.
//Over 21: bust, other player wins.
//Under 21: highest score wins.
//Equal scores: draw, neither player wins.
//J, Q, K: all worth 10.
//A: worth 11.

//$numbers = range(1, 20);
//shuffle($numbers);
//foreach ($numbers as $number) {
//    echo "$number ";
//}

function shuffDeck(string $deck = 'name'): string
{
    $deck = ['1 of Diamonds' => 1, '1 of Hearts' => 1, '1 of Spades' => 1, '1 of Clubs' => 1
        , '2 of Diamonds' => 2, '2 of Hearts' => 2, '2 of Spades' => 2, '2 of Clubs' => 2
        , '3 of Diamonds' => 3, '3 of Hearts' => 3, '3 of Spades' => 3, '3 of Clubs' => 3
        , '4 of Diamonds' => 4, '4 of Hearts' => 4, '4 of Spades' => 4, '4 of Clubs' => 4
        , '5 of Diamonds' => 5, '5 of Hearts' => 5, '5 of Spades' => 5, '5 of Clubs' => 5
        , '6 of Diamonds' => 6, '6 of Hearts' => 6, '6 of Spades' => 6, '6 of Clubs' => 6
        , '7 of Diamonds' => 7, '7 of Hearts' => 7, '7 of Spades' => 7, '7 of Clubs' => 7
        , '8 of Diamonds' => 8, '8 of Hearts' => 8, '8 of Spades' => 8, '8 of Clubs' => 8
        , '9 of Diamonds' => 9, '9 of Hearts' => 9, '9 of Spades' => 9, '9 of Clubs' => 9
        , '10 of Diamonds' => 10, '10 of Hearts' => 10, '10 of Spades' => 10, 10
        , 'Jack of Diamonds' => 10, 'Jack of Hearts' => 10, 'Jack of Spades' => 10, 'Jack of Clubs' => 10
        , 'Queen of Diamonds' => 10, 'Queen of Hearts' => 10, 'Queen of Spades' => 10, 'Queen of Clubs' => 10
        , 'King of Diamonds' => 10, 'King of Hearts' => 10, 'King of Spades' => 10, 'King of Clubs' => 10
        , 'Ace of Diamonds' => 10, 'Ace of Hearts' => 10, 'Ace of Spades' => 10, 'Ace of Clubs' => 10];
    shuffle($deck);
    return ['name' => key($deck[0]), 'name_value'];
}

//echo '<p>'. shuffDeck('name', 1) . '</p>';
//echo '<p>'. shuffDeck() . '</p>';
//echo '<p>'. shuffDeck() . '</p>';
//echo '<p>'. shuffDeck() . '</p>';



//
//[1, 1, 1, 1
//    , 2, 2, 2, 2
//    , 3, 3, 3, 3
//    , 4, 4, 4, 4
//    , 5, 5, 5, 5
//    , 6, 6, 6, 6
//    , 7, 7, 7, 7
//    , 8, 8, 8, 8
//    , 9, 9, 9, 9
//    , 10, 10, 10, 10],
//['j1' => 10, 'j2' => 10, 'j3' => 10, 'j4' => 10
//    , 'q1' => 10, 'q2' => 10, 'q3' => 10, 'q4' => 10
//    , 'k1' => 10, 'k2' => 10, 'k3' => 10, 'k4' => 10
//    , 'a1' => 10, 'a2' => 10, 'a3' => 10, 'a4' => 10]
//];

//, 3, 3, 3, 3
//, 4, 4, 4, 4
//, 5, 5, 5, 5
//, 6, 6, 6, 6
//, 7, 7, 7, 7
//, 8, 8, 8, 8
//, 9, 9, 9, 9
//, 10, 10, 10, 10
//, 40 => 'j1', 41 => 'j1', 42 => 'j1', 43 => 'j1'
//, 44 => 'q1', 45 => 'q1', 46 => 'q1', 47 => 'q1'
//, 48 => 'k1', 49 => 'k2', 50 => 'k3', 51 => 'k4'
//, 52 => 'a1', 53 => 'a2', 54 => 'a3', 55 => 'a4'];

//[1, 1, 1, 1
//    , 2, 2, 2, 2
//    , 3, 3, 3, 3
//    , 4, 4, 4, 4
//    , 5, 5, 5, 5
//    , 6, 6, 6, 6
//    , 7, 7, 7, 7
//    , 8, 8, 8, 8
//    , 9, 9, 9, 9
//    , 10, 10, 10, 10],
//[j => 10, j, j, j
//    , q, q, q, q
//    , k, k, k, k
//    , a, a, a, a]
//];