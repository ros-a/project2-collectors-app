<?php

require_once '../functions.php';

use PHPUnit\Framework\Testcase;

class Functions extends TestCase
{
    public function testSuccessPrintInsect()
    {
        $input = [
            'id' => 1,
            'common_name' => 'Jewel Bug',
            'species' => 'Scutiphora Pedicellata',
            'date_spotted' => '2018-03-15',
            'country_spotted' => 'India',
            'size' => '5-20 mm',
            'image_path' => 'images/jewel_bug.jpeg'];
        $expectedOutput = '<div class="insects"><img src="images/jewel_bug.jpeg" alt="Image of a Jewel Bug"><h2>Jewel Bug</h2>' .
            '<p class="species">Scutiphora Pedicellata</p><p>Date spotted: 2018-03-15</p>' .
             '<p>Country spotted: India</p><p>Size: 5-20 mm</p></div>';
        $actualOutput = printInsect($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testFailurePrintInsect()
    {
        $input = ['id' => '1', 'name' => 'Jewel Bug', 'species' => 'Scutiphora Pedicellata', 'date_spotted' => '2018-03-15', 'country_spotted' => 'India', 'size' => '5-20 mm', 'image_path' => 'images/jewel_bug.jpeg'];
        $expectedOutput = 'I\'m sorry, that array doesn\'t contain the expected keys.';
        $actualOutput = printInsect($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testMalformedPrintInsect() {
        $input = 3;
        $this->expectException(TypeError::class);
        $actualOutput = printInsect($input);
    }
}