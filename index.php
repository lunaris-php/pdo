<?php

    require_once "vendor/autoload.php";

    use Lunaris\Pdo\Pdo;
    use Lunaris\Pdo\Queries\SelectUsersQuery;

    /** @var SelectUsersQuery $data */
    $data = Pdo::execute(new SelectUsersQuery());

    print "<pre>";
    print_r($data->first());
    print "</pre>";