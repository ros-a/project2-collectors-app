<?php

function printInsects ($allInsects, $numberOfInsects) {
    for ($i=0; $i < $numberOfInsects; $i++) {
        echo '<div>
                <img src="' . $allInsects[$i]['image_path'] . '">
                <h2>' . $allInsects[$i]['common_name'] . '</h2>
                <p>species: ' . $allInsects[$i]['species'] .  '</p>
                <p>date spotted: ' . $allInsects[$i]['date_spotted'] .  '</p>
                <p>location spotted: ' . $allInsects[$i]['location_spotted'] .  '</p>
                <p>size: ' . $allInsects[$i]['size'] .  '</p>
            </div>';
    }
}