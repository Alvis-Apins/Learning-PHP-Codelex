<?php
## Exercise #5
function createArray(int $size): array
{
    return array_fill(0, $size, ' ');
}
$emptyGameBoard = createArray(9);

for ($i = 1; $i <= 9; $i++)
{
    echo $emptyGameBoard[0] . '  |  ' . $emptyGameBoard[1] . '  |  ' . $emptyGameBoard[2] . PHP_EOL;
    echo '---------------' . PHP_EOL;
    echo $emptyGameBoard[3] . '  |  ' . $emptyGameBoard[4] . '  |  ' . $emptyGameBoard[5] . PHP_EOL;
    echo '---------------' . PHP_EOL;
    echo $emptyGameBoard[6] . '  |  ' . $emptyGameBoard[7] . '  |  ' . $emptyGameBoard[8] . PHP_EOL;
    echo PHP_EOL;
    echo ($i % 2 != 0) ?
        'Turn ' . $i . ' for player X ' . PHP_EOL :
        'Turn ' . $i . ' for player O ' . PHP_EOL;

    $a = readline('Pick your field - ' . PHP_EOL);

    if ($a >= 0 && $a < 9)
    {
        ($i % 2 != 0) ? $emptyGameBoard[$a] = 'X' : $emptyGameBoard[$a] = 'O';
    }else
    {
        echo PHP_EOL . '!!! Please select a number between 0 and 8 !!!' . PHP_EOL;
        continue;
    }

    if ($i == 9)
    {
        echo 'Draw' . PHP_EOL;
        return;
    }

    if (($emptyGameBoard[0] == $emptyGameBoard[1] && $emptyGameBoard[1] == $emptyGameBoard[2] && $emptyGameBoard[0] != ' ') ||
        ($emptyGameBoard[3] == $emptyGameBoard[4] && $emptyGameBoard[4] == $emptyGameBoard[5] && $emptyGameBoard[3] != ' ') ||
        ($emptyGameBoard[6] == $emptyGameBoard[7] && $emptyGameBoard[7] == $emptyGameBoard[8] && $emptyGameBoard[6] != ' ') ||

        ($emptyGameBoard[0] == $emptyGameBoard[3] && $emptyGameBoard[3] == $emptyGameBoard[6] && $emptyGameBoard[0] != ' ') ||
        ($emptyGameBoard[1] == $emptyGameBoard[4] && $emptyGameBoard[4] == $emptyGameBoard[7] && $emptyGameBoard[1] != ' ') ||
        ($emptyGameBoard[2] == $emptyGameBoard[5] && $emptyGameBoard[5] == $emptyGameBoard[8] && $emptyGameBoard[2] != ' ') ||

        ($emptyGameBoard[0] == $emptyGameBoard[4] && $emptyGameBoard[4] == $emptyGameBoard[8] && $emptyGameBoard[0] != ' ') ||
        ($emptyGameBoard[6] == $emptyGameBoard[4] && $emptyGameBoard[4] == $emptyGameBoard[2] && $emptyGameBoard[6] != ' '))
    {
        echo ($i % 2 != 0) ? 'Player X wins' . PHP_EOL : 'Player O wins' . PHP_EOL;
        return;
    }
}








