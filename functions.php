<?php

function printInsect (array $dbRow): string {
    if (array_key_exists('image_path', $dbRow) && array_key_exists('common_name', $dbRow) && array_key_exists('species', $dbRow) && array_key_exists('date_spotted', $dbRow) && array_key_exists('country_spotted', $dbRow) && array_key_exists('size', $dbRow)) {
        return '<div class="insects">' .
                    '<img src="' . $dbRow['image_path'] . '" alt="Image of a ' . $dbRow['common_name'] . '">' .
                    '<h2>' . $dbRow['common_name'] . '</h2>' .
                    '<p class="species">' . $dbRow['species'] . '</p>' .
                    '<p>Date spotted: ' . $dbRow['date_spotted'] . '</p>' .
                    '<p>Country spotted: ' . $dbRow['country_spotted'] . '</p>' .
                    '<p>Size: ' . $dbRow['size'] . '</p>' .
                '</div>';
    } else {
        return 'I\'m sorry, that array doesn\'t contain the expected keys.';
    }
}
