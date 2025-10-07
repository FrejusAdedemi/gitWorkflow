<?php
class Notifications {
    private $users = [];
    
    public function send($message) {
        foreach ($this->users as $user) {
            // Envoyer notification
            mail($user->email, 'Notification', $message);
        }
        return true;
    }
    
    public function addUser($user) {
        $this->users[] = $user;
    }
}

