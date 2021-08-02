<?php

$player1 = [];
$player2 = [];

$cards = [
    'ace' => 11,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'jack' => 10,
    'queen' => 10,
    'king' => 10
];

$random_number1 = rand(0, 12);
$random_number2 = rand(0, 12);
$random_number3 = rand(0, 12);
$random_number4 = rand(0, 12);

$keys_cards = array_keys($cards);

$player1_card1 = $keys_cards[$random_number1];
$player1_card1_value = $cards[$player1_card1];

$player1_card2 = $keys_cards[$random_number2];
$player1_card2_value = $cards[$player1_card2];

$player2_card1 = $keys_cards[$random_number3];
$player2_card1_value = $cards[$player2_card1];

$player2_card2 = $keys_cards[$random_number4];
$player2_card2_value = $cards[$player2_card2];

$total_score_player1 = $player1_card1_value + $player1_card2_value;
$total_score_player2 = $player2_card1_value + $player2_card2_value;

if ($total_score_player1 < 22 && $total_score_player1 > $total_score_player2) {
    echo "Player 1 wins!<br>";
    if ($total_score_player1 > 15) {
        echo "And what a win!<br> The cards being an $player1_card1 and an $player1_card2 makes for an incredible score of $total_score_player1";
    } else if ($total_score_player1 > 10) {
        echo "The cards being an $player1_card1 and an $player1_card2 makes for quite an average score of $total_score_player1";
    } else {
        echo "What a luck! An $player1_card1 and an $player1_card2 makes for quite a terrible score of $total_score_player1";
    }
} else if ($total_score_player2 < 22 && $total_score_player2 > $total_score_player1) {
    echo 'Player 2 wins!<br>';
    if ($total_score_player2 > 15) {
        echo "And what a win!<br> The cards being an $player2_card1 and an $player2_card2 makes for an incredible score of $total_score_player2";
    } else if ($total_score_player1 > 10) {
        echo "The cards being an $player2_card1 and an $player2_card2 makes for quite an average score of $total_score_player2";
    } else {
        echo "What a luck! An $player2_card1 and an $player2_card2 makes for quite a terrible score of $total_score_player2";
    }
} else {
    echo 'No winners this time! Let\'s try again';
};