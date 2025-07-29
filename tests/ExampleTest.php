<?php

namespace BrainGames\Tests;

require_once __DIR__ . '/../src/Games/Even.php'; // или другой путь, если нужно

use function BrainGames\Games\Even\isEven;

assert(isEven(2) === true);
assert(isEven(3) === false);
