<?php
/***home controllers */
 
    class Home extends Controller
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
             
    
          

          $data = $user->findAll();  
            $this->view('home',['rows'=>$data]);
        }

    }



?>