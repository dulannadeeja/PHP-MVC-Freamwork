<?php

namespace App\Core;

abstract class UserModel extends DatabaseModel
{
    abstract public function getUserDisplayName(): string;

}