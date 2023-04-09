<?php
     class Schooldelete extends controller{
     public  function index($id=null)
        {
           if(!Auth::logged_in())
           {
             $this->redirect('login');
           }
        //
        $school =new School();
        $errors=array();
        
       
        if(count($_POST) >0)
        {
         
          
            
             // $_POST['date'] = date("y-m-d H:i:s");
              
              $school->delete($id);

            $this->redirect('schools');
          }
         
        
             $row=$school->where('id',$id);
            
            $this->view('schooldelete',
            [
                'row'=>$row,

            ]);
        }
    }
        ?>