<?php
declare(strict_types=1);

namespace Tests\Domain\User;

use App\Domain\User\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function userProvider()
    {
        return [
            [1,'bill@gates.com', 'bill.gates', 'Bill', 'Gates'],
            [2,'steve@jobs.com' ,'steve.jobs', 'Steve', 'Jobs'],
            [3,'mark@zuckerberg.com' ,'mark.zuckerberg', 'Mark', 'Zuckerberg'],
            [4,'evan@spiegel.com' ,'evan.spiegel', 'Evan', 'Spiegel'],
            [5,'jack@dorsgey.com' ,'jack.dorsey', 'Jack', 'Dorsey'],
        ];
    }

    /**
     * @dataProvider userProvider
     * @param $id
     * @param $email
     * @param $username
     * @param $firstName
     * @param $lastName
     */
    public function testGetters($id,$email, $username, $firstName, $lastName)
    {
        $user = new User($id,$email, $username, $firstName, $lastName);

        $this->assertEquals($id, $user->getId());
        $this->assertEquals($username, $user->getUsername());
        $this->assertEquals($firstName, $user->getFirstName());
        $this->assertEquals($lastName, $user->getLastName());
        $this->assertEquals($email, $user->getEmail());
    }

    /**
     * @dataProvider userProvider
     * @param $id
     * @param $email
     * @param $username
     * @param $firstName
     * @param $lastName
     */
    public function testJsonSerialize($id,$email, $username, $firstName, $lastName)
    {
        $user = new User($id,$email, $username, $firstName, $lastName);

        $expectedPayload = json_encode([
            'id' => $id,
            'email'=>$email,
            'username' => $username,
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);

        $this->assertEquals($expectedPayload, json_encode($user));
    }
}
