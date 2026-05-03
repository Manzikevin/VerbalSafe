<?php

require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Filter.php';

use VerbalSafe\Core\Filter;

// Test 1: Default loading (All languages)
$filter = new Filter();
$input = "This is a badword and some ikinyarwanda_badword";
echo "Test 1 (Default): " . $filter->clean($input) . "\n";

// Test 2: Language Picking (Only Kinyarwanda)
// If 'badword' is only in en.json, it should NOT be masked here.
$rwFilter = new Filter(['rw']);
echo "Test 2 (Kinyarwanda Only): " . $rwFilter->clean($input) . "\n";

// Test 3: Language Picking (Only English)
$enFilter = new Filter(['en']);
echo "Test 3 (English Only): " . $enFilter->clean($input) . "\n";