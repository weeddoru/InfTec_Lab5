<?php

namespace Controllers;

use Core\Controller;
use Core\View;

/**
 * Class CustomerController
 */
class CustomerController extends Controller
{
    public function indexAction()
    {
        $this->forward('customer/list');
    }

 HEAD
        /**
        /**
 761d629 (Task 10.2 login/logout)
     *
     */
    public function listAction()
    {
        $this->set('title', "Клієнти");

        $customers = $this->getModel('Customer')
            ->initCollection()
            ->getCollection()
            ->select();
        $this->set('customers', $customers);

        $this->renderLayout();
    }

 HEAD
 761d629 (Task 10.2 login/logout)
}