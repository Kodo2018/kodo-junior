<?php
/***users controllers */
 
    class Users extends Controller
    {
        function index()
        {
           if(!Auth::logged_in())
           {
             $this->redirect('login');
           }
        //
        // $user =$this->load_model('User');
        $user =new User();
             
    
          $school_id=Auth::school_name();
        
          $data = $user->query("select * from users where school_id =:school_id",['school_id'=>$school_id]);  
            $this->view('users',['rows'=>$data]);
        }

    }



?>