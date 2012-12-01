<?php

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        if (($method = $this->_getParam('method')) && ($component = $this->_getParam('component'))) {
            $className = "Interview_Service_" . $component;
            if (method_exists($className, $method)) {
                $result = call_user_func_array(array($className, $method), $_GET['p']);
                $this->view->data = Zend_Json::encode($result);
            }
        }
    }

}
