<?php
/***switch controller*/
 
    class Schoolswitch extends Controller
    {
        function index($id= '')
        {
           Auth::schoolswitch($id);
           
             $this->redirect('schools');
           
        ;
        }

    }



?>