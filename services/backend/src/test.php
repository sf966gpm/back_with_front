<?php

/**
 * Implements binary search.
 *
 * @param array $arr The sorted array to search in.
 * @param mixed $target The value to search for.
 * @return int|bool The index of the target value if found, or false otherwise.
 */
function binarySearch(array $arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = ($low + $high) >> 1;

        if ($arr[$mid] === $target) {
            return $mid;
        }

//        if ($arr[$mid] < $target) {
//            $low = $mid + 1;
//        } else {
//            $high = $mid - 1;
//        }
    }

    return false;
}

/**
 * Test cases:
 * 1. Empty array and target not found.
 * 2. Array with one element and target found.
 * 3. Array with one element and target not found.
 * 4. Array with multiple elements and target found.
 * 5. Array with multiple elements and target not found.
 */

function testBinarySearch()
{
    // Test case 1
    $arr = [];
    $target = 5;
    $expected = false;
    $result = binarySearch($arr, $target);
    assert($result === $expected, "Test case 1 failed");

    // Test case 2
    $arr = [10];
    $target = 10;
    $expected = 0;
    $result = binarySearch($arr, $target);
    assert($result === $expected, "Test case 2 failed");

    // Test case 3
    $arr = [10];
    $target = 5;
    $expected = false;
    $result = binarySearch($arr, $target);
    assert($result === $expected, "Test case 3 failed");

    // Test case 4
    $arr = [2, 5, 8, 12, 16];
    $target = 8;
    $expected = 2;
    $result = binarySearch($arr, $target);
    assert($result === $expected, "Test case 4 failed");

    // Test case 5
    $arr = [2, 5, 8, 12, 16];
    $target = 7;
    $expected = false;
    $result = binarySearch($arr, $target);
    assert($result === $expected, "Test case 5 failed");
}

testBinarySearch();
