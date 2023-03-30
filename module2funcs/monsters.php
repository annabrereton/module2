<?php

//function that creates a random combination
function randComb()
{
    //create an array of monsters
    $monsters = [
//        'Lucius',
//        'Growler',
//        'Neal',
//        'Medusa',
//        'Stormwind'
        'Lucius' => 13,
        'Growler' => 8.9,
        'Neal' => 9.9,
        'Medusa' => 11.11,
        'Stormwind' => 10.5
    ];
//create an array of types
    $types = [
//        'Vampire',
//        'Werewolf',
//        'Goblin',
//        'Ghost',
//        'Demon'
        'Vampire' => 5,
        'Werewolf' => 7,
        'Goblin' => 8,
        'Ghost' => 9,
        'Demon' => 10
    ];
    return implode(array_rand(array_flip($types)));
//    $rand_num = [0,1,2,3,4];
////    $rand_num = array_rand($rand_num);
////    echo $rand_num;
//    return implode((array_rand($rand_num)));


//    $monsterKey = array_rand($monsters);
//    $typekey = array_rand($types);
//    $monster = $monsters[$monsterKey];
//    $type = $types[$typekey];
//    return "This is " . $monster . ' the ' . $type;
}
echo randComb();
//$player1 = randComb();
//$player2 = randComb();
//
//echo $player1;
//echo '<p></p>';
//echo $player2;