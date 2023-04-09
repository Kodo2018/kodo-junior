<?php
/***school controllers */
 
    class Schools extends Controller
    {
      public  function index()
        {
           if(!Auth::logged_in())
           {
             $this->redirect('login');
           }
        //
        // $user =$this->load_model('User');
        $school =new School();
             
    
          

          $data = $school->findAll();  
            $this->view('school',['rows'=>$data]);
        }
         
      }



?>