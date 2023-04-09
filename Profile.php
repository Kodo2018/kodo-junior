<?php
/***profile controllers */
 
    class Profile extends Controller
    {
        function index($id="")
        {
            $user =new User();
            $this->view('profile');
        }

    }



?>