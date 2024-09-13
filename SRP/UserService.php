<?php
class UserService {
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function registerUser($name, $email) {
        if ($this->userRepository->getUserByEmail($email) === null) {
            $user = new User($name, $email);
            $this->userRepository->addUser($user);
            return $user;
        }
        return null;
    }
}