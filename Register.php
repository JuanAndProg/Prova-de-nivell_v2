<?php

require("Player.php");

class Register{
    private array $players;

    public function __construct(){
        $this->players = [];
    }

    public function addPlayer(Player $player){
        $this->players[] = $player;
    }

    public function findMostScoringPlayer(): Player{
        $mostScoringPlayer = $this->players[0];

        foreach ($this->players as $player){
            if ($player->getPoints() > $mostScoringPlayer->getPoints()){
                $mostScoringPlayer = $player;
            }
        }

        return $mostScoringPlayer;
    }

    public function findPlayersUnderAge(int $age): array{
        $playersUnderAge = [];

        foreach ($this->players as $player){
            if ($player->getAge() <= $age){
                $playersUnderAge[] = $player;
            }
        }

        return $playersUnderAge;
    }
}
