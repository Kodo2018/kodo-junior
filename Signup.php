<?php
/***signup controllers */
 
    class Signup extends Controller
    {
        function index()
        {
            $errors =array();
            if(count($_POST) >0)
            {
                $user = new User();
                if($user->validate($_POST))
                {
                    $_POST['date'] = date("y-m-d H:i:s");
                    $user->insert($_POST);
                  $this->redirect('users');
                }
                else{
                    $errors=$user->errors;
                }
            }
            $this->view('signup',['errors'=>$errors]);
        }

    }



?>