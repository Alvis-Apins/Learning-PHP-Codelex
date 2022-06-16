<?php
## Exercise #5
//Create an interactive game of Tic-Tac-Toe

$emptyGameBoard = array_fill(0, 9, ' ');
$playerTurn = 'X';

function checkWinner(array $array):bool{
    if (($array[0] == $array[1] && $array[1] == $array[2] && $array[0] != ' ') ||
        ($array[3] == $array[4] && $array[4] == $array[5] && $array[3] != ' ') ||
        ($array[6] == $array[7] && $array[7] == $array[8] && $array[6] != ' ') ||

        ($array[0] == $array[3] && $array[3] == $array[6] && $array[0] != ' ') ||
        ($array[1] == $array[4] && $array[4] == $array[7] && $array[1] != ' ') ||
        ($array[2] == $array[5] && $array[5] == $array[8] && $array[2] != ' ') ||

        ($array[0] == $array[4] && $array[4] == $array[8] && $array[0] != ' ') ||
        ($array[6] == $array[4] && $array[4] == $array[2] && $array[6] != ' '))
    {
        return true;
    }
    return false;
}

function gameMechanics(string $playerTurn, array $emptyGameBoard){

    $winner = ' ';

    while ($winner == ' '){

        echo $emptyGameBoard[0] . '  |  ' . $emptyGameBoard[1] . '  |  ' . $emptyGameBoard[2] . PHP_EOL;
        echo '---------------' . PHP_EOL;
        echo $emptyGameBoard[3] . '  |  ' . $emptyGameBoard[4] . '  |  ' . $emptyGameBoard[5] . PHP_EOL;
        echo '---------------' . PHP_EOL;
        echo $emptyGameBoard[6] . '  |  ' . $emptyGameBoard[7] . '  |  ' . $emptyGameBoard[8] . PHP_EOL;
        echo PHP_EOL;

        $a = readline("Where would you like to place $playerTurn? :");
        echo PHP_EOL;

        if ($a >= 0 && $a < 9 && $emptyGameBoard[$a] == ' '){
            $emptyGameBoard[$a] = $playerTurn;
        }else{
            echo "!!!Not a valid option - Play by the rules!!!" . PHP_EOL;
        }

        if (checkWinner($emptyGameBoard)){
            $winner = "$playerTurn Wins!";
        }

        if (!in_array(' ', $emptyGameBoard)){
            $winner = "Draw";
        }

        ($playerTurn == 'O') ? $playerTurn = 'X' : $playerTurn = 'O';

    }
    echo PHP_EOL;
    echo $winner . PHP_EOL;

    $reStarter = readline('Start a blank game? (y/n)');
    echo PHP_EOL;

    if ($reStarter == 'y'){
        $emptyGameBoard = array_fill(0, 9, ' ');
        $winner = ' ';
        gameMechanics($playerTurn, $emptyGameBoard);
    }else{
        return;
    }
}

gameMechanics($playerTurn, $emptyGameBoard);






