<?php
//
//$deck = ['1 of Diamonds' => 1, '1 of Hearts' => 1, '1 of Spades' => 1, '1 of Clubs' => 1
//    , '2 of Diamonds' => 2, '2 of Hearts' => 2, '2 of Spades' => 2, '2 of Clubs' => 2
//    , '3 of Diamonds' => 3, '3 of Hearts' => 3, '3 of Spades' => 3, '3 of Clubs' => 3
//    , '4 of Diamonds' => 4, '4 of Hearts' => 4, '4 of Spades' => 4, '4 of Clubs' => 4
//    , '5 of Diamonds' => 5, '5 of Hearts' => 5, '5 of Spades' => 5, '5 of Clubs' => 5
//    , '6 of Diamonds' => 6, '6 of Hearts' => 6, '6 of Spades' => 6, '6 of Clubs' => 6
//    , '7 of Diamonds' => 7, '7 of Hearts' => 7, '7 of Spades' => 7, '7 of Clubs' => 7
//    , '8 of Diamonds' => 8, '8 of Hearts' => 8, '8 of Spades' => 8, '8 of Clubs' => 8
//    , '9 of Diamonds' => 9, '9 of Hearts' => 9, '9 of Spades' => 9, '9 of Clubs' => 9
//    , '10 of Diamonds' => 10, '10 of Hearts' => 10, '10 of Spades' => 10, 10
//    , 'Jack of Diamonds' => 10, 'Jack of Hearts' => 10, 'Jack of Spades' => 10, 'Jack of Clubs' => 10
//    , 'Queen of Diamonds' => 10, 'Queen of Hearts' => 10, 'Queen of Spades' => 10, 'Queen of Clubs' => 10
//    , 'King of Diamonds' => 10, 'King of Hearts' => 10, 'King of Spades' => 10, 'King of Clubs' => 10
//    , 'Ace of Diamonds' => 10, 'Ace of Hearts' => 10, 'Ace of Spades' => 10, 'Ace of Clubs' => 10];
//
//echo $deck['Ace of Diamonds'];
//
//foreach ($deck )
//
//if ($deck >= 1 && $deck <= 55) {
//    return $deck[];
//} else {
//    return 'Invalid month';
//}

function returnFirstSecond($first, $second)
{
    echo $first;
    return $second;
}
$result_value = returnFirstSecond('broccoli', 'vegetable');
//echo returnFirstSecond('apple', 'fruit');
echo $result_value;

echo '<p></p>';


$array_of_arrays = ["a",
                    "Not that lucky",
                    2,
                    [
                        "smoke detectors",
                        "d",
                        [
                            "boring street in",
                            "U.S."
                        ],
                        "nothing happens"
                    ],
                    "."];

echo $array_of_arrays[1][2]; //result is the 't' from 'not'
echo $array_of_arrays[3][0][3]; // 'k' from 'smoke'
echo $array_of_arrays[3][2][1][2]; // 'S' from 'U.S.'
echo $array_of_arrays[3][2][1]; // result 'U.S.'

echo '<p></p>';
//$deck_of_cards = [
//
//]
//    [
//        ]

echo '<p></p>';

//PARSE URL EXERCISE
//parse_url( $url, $component = -1 );
//**Parameters:** This function accepts two parameters as mentioned above and described below:
//
//- **URL:** This parameter holds the URL to be parsed. The invalid characters are replaced by _ (underscore).
//- **component:** This parameter specifies any of the component ( PHP_URL_SCHEME, PHP_URL_HOST, PHP_URL_PORT,
//    PHP_URL_USER, PHP_URL_PASS, PHP_URL_PATH, PHP_URL_QUERY or PHP_URL_FRAGMENT ) to retrieve a specific URL in
//the form of string.

//Using parse_url function:
//echo parse_url('https://io-academy.uk/about-io/#meet-the-team', $component = PHP_URL_SCHEME);
//echo '<p></p>';
//echo parse_url('https://io-academy.uk/about-io/#meet-the-team', $component = PHP_URL_HOST);
//echo '<p></p>';
//echo parse_url('https://io-academy.uk/about-io/#meet-the-team', $component = PHP_URL_PATH);

//Making my own function using parse_url to print formatted result:
function pArse(string $url): string
{
    $array_scheme = parse_url($url, $component = PHP_URL_SCHEME);
    $array_host = parse_url($url, $component = PHP_URL_HOST);
    $array_path = parse_url($url, $component = PHP_URL_PATH);
    return "<p>Scheme: " . $array_scheme . "</p>" . "<p>Host: " . $array_host . "</p>Path: " . $array_path . "</p>";
}

$the_end = pArse('https://io-academy.uk/about-io/#meet-the-team');
$the_start = pArse('https://www.phptutorial.net/php-tutorial/php-function-parameters/');
echo '<pre>';
echo $the_end;
echo '</pre>';
echo '<pre>';
echo $the_start;
echo '</pre>';

//String handling same exercise as above
//echo strpos('https://io-academy.uk/about-io/#meet-the-team', "https");

function stringTheory(string $string): string
{
    $string = (explode('/', $string, 5));
    return '<p>Scheme: ' . $string[0] . '<p>Host: ' . $string[2] . '</p>Path: ' . $string[3]. '/' . $string[4];
}

$test_url = stringTheory('https://www.phptutorial.net/php-tutorial/php-function-parameters/');
echo '<pre>';
echo $test_url;
echo '</pre>';

echo '<p></p>';


//EXERCISE
//A small company has the following staff data.
//Mary Contrary £32000
//Fred Dredd £29500
//Jane Doe £30750
//Write PHP to display this data in an HTML table.

//$staff_deets = ['Staff List',
//                  ['Mary Contrary', '£32,000'],
//                  ['Fred Dredd', '£29,500'],
//                  ['Jane Doe', '£30,075'],
//                ];
//function table()
//{
//    $col_name = 'Staff Member';
//    $col_salary = 'Salary';
//    global $staff_deets;
//
//    return "<table>
//    <tr >
//        <td >
//            $col_name
//        </td >
//        <td >
//            $col_salary
//        </td >
//    </tr >
//    <tr >
//        <td >
//            $staff_deets[1]
//        </td >
//        <td >
//            $staff_deets[1]
//        </td >
//    </tr >
//</table >";
//}
//
//echo table();


function table(
    $staff1 = 'Mary Contrary',
    $staff1_sal = '£32, 000')
{
    $staff_name = 'Staff Member';
    $salary = 'Salary';
 return "<table>
    <tr >
        <td >
            $staff_name
        </td >
        <td >
            $salary
        </td >
    </tr >
    <tr >
        <td >
            $staff1
        </td >
        <td >
            $staff1_sal
        </td >
    </tr >
</table >";
}
echo table('Fred Dredd', '£29,500');
echo table('Fred Dredd', '£29,500');
echo table('Fred Dredd', '£29,500');

echo '<p></p>';

function sum(int ...$numbers): int
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}
echo sum(1,2,4,7);