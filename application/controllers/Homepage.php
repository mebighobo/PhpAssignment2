<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Homepage extends Application {
 
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->data['pagebody'] = 'homepage_view';
        $this->render();
   }
   
}