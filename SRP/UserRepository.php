<?php
class UserRepository {
    private $users = [];

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function getUserByEmail($email) {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
        return null;
    }
}
