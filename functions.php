<?php

function printInsect (array $dbRow) : string
{
    if (array_key_exists('image_path', $dbRow) && array_key_exists('common_name', $dbRow) && array_key_exists('species', $dbRow) && array_key_exists('date_spotted', $dbRow) && array_key_exists('location_spotted', $dbRow) && array_key_exists('size', $dbRow)) {
        return '<div class="insects">' .
                    '<img src="' . $dbRow['image_path'] . '">' .
                    '<h2>' . $dbRow['common_name'] . '</h2>' .
                    '<p class="species">' . $dbRow['species'] . '</p>' .
                    '<p>Date spotted: ' . $dbRow['date_spotted'] . '</p>' .
                    '<p>Location spotted: ' . $dbRow['location_spotted'] . '</p>' .
                    '<p>Size: ' . $dbRow['size'] . '</p>' .
                '</div>';
    } else {
        return 'I\'m sorry, that array doesn\'t contain the expected keys';
    }
}
