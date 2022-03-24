<?php
    namespace App\Services;
    use Illuminate\Support\Facades\Session;
    class User{

        public static function extisUser(){
            if (Session::has('user')) {
                return true;
            }
            else
            return false;
        }
        public function getUser(Session $session){
            if(Session::has('user')==true){
                return $session['user'];
            }
            else
            return false;
           // ............//
        }
        public function setUser(){
            
        }
    }

?>