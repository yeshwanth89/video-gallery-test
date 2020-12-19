<?php


declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;



class LoginAction extends UserAction
{
    protected function action(): Response
    {
        $emailId =  $this->request->getQueryParams()['emailId'];
        $user = $this->userRepository->findUserOfEmail($emailId);

        $this->logger->info("User of emailid `${emailId}` was viewed.");

        return $this->respondWithData($user);
    }
}