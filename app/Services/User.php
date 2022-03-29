<?php
    namespace App\Services;
    use Illuminate\Support\Facades\Session;
    // ...
    class User
    {
        // .... 
        public function existsUser(): bool{ 
            if (Session::has('user'))
                return true;
            return false;
        }

        public function getUser(): object {
            return Session::get('user');
        }

        public function setUser($user) : void{
            Session::put('user', $user);
        }
    }

?>