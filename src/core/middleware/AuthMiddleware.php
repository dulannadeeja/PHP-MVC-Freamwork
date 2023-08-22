<?php

namespace App\Core\middleware;

use App\Core\Application;
use App\Core\Exceptions\NonAuthorizedException;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    /**
     * @throws NonAuthorizedException
     */
    public function execute(): void
    {
        if (Application::isGuest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
                // Throw forbidden exception
                Application::$app->response->setStatusCode(403);
                throw new NonAuthorizedException();
            }

        }

    }
}