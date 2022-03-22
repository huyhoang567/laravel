<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Session;
    class User extends Controller{
        public static function extisUser(Session $session){
            if ($session->has('user')) {
                return true;
            }
            else
            return false;
        }
        public function setUser($user,Session $session){
            $session->put('user.id',$user->id);
            $session->put('user.email',$user->email);
            $session->put('user.name',$user->name);
           // ............//
        }   
    }

?>