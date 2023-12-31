<?php



// UserController.php

namespace app\controllers;
use app\models\UserModel;
use app\core\Application;
use app\core\Request;
use app\core\Router;

class UserController
{
    public Router $router;
    public UserModel $userModel;

    public function __construct()
    {
        // Assuming you have a Request class
        $request = new Request();
        $this->router = new Router($request);
        $this->userModel = new userModel();
    }




    public function showData()
    {
        $users = $this->userModel->getUsers();
        if ($users) {
            return $this->router->renderView("home", ['users' => $users]);
        } else {
            return false;
        }
    }
    	
    public function showDetails(){
      
        $eventDetails = $this->userModel->getEventDetails($_GET['id']);
        
        if ($eventDetails) {
            return $this->router->renderView("details", ['eventDetails' => $eventDetails]);

        } else {
            return $this->router->renderView("not-found");
        }
    }
    



}
