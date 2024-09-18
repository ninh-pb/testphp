<?php

require_once __DIR__ . '/Programmer.php';
require_once __DIR__ . '/TestException.php';

use App82\Programmer;
use common\Language;

$php82 = new Programmer('ninhpb', new Language('js'), new DateTime());

$php82->throwException();
