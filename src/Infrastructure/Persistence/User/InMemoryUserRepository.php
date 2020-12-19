<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\User;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    /**
     * @var User[]
     */
    private $users;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $users
     */
    public function __construct(array $users = null)
    {
        $this->users = $users ?? [
            1 => new User(1,'bill' ,'bill.gates', 'Bill', 'Gates'),
            2 => new User(2,'steve@jobs.com' ,'steve.jobs', 'Steve', 'Jobs'),
            3 => new User(3, 'mark@zuckerberg.com','mark.zuckerberg', 'Mark', 'Zuckerberg'),
            4 => new User(4, 'evan@spiegel.com','evan.spiegel', 'Evan', 'Spiegel'),
            5 => new User(5, 'jack@dorsey.com','jack.dorsey', 'Jack', 'Dorsey'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->users);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id];
    }

    public function findUserOfEmail(string $email): User
    {
        foreach ($this->users as $item) {
            if ($item->getEmail()== $email) {
                return $item;
            }

        }
        throw new UserNotFoundException();

    }
}
