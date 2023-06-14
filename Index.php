<<?php

require("Register.php");

$register = new Register();

//create random players
$player1 = new Player("Jugador1", 20, 180, 100, 50, Role::BASE);
$player2 = new Player("Jugador2", 22, 190, 120, 40, Role::ESCOLTA);
$player3 = new Player("Jugador3", 19, 205, 80, 70, Role::ALERO);
$player4 = new Player("Jugador4", 18, 207, 180, 80, Role::ALAPIVOT);
$player5 = new Player("Jugador5", 21, 212, 90, 130, Role::PIVOT);

$register->addPlayer($player1);
$register->addPlayer($player2);
$register->addPlayer($player3);
$register->addPlayer($player4);
$register->addPlayer($player5);

$mostScoringPlayer = $register->findMostScoringPlayer();
echo "El jugador más anotador es: " . $mostScoringPlayer->getName() . ", con " . $mostScoringPlayer->getPoints() . " puntos totales.\n";

// Mostrar nombre y edad de los jugadores menores de 21 años
$playersUnder21 = $register->findPlayersUnderAge(21);
echo "Jugadores menores de 21 años:\n";
foreach ($playersUnder21 as $player) {
    echo $player->getName() . " - Edad: " . $player->getAge() . " años.\n";
}
?>
