<?php

class Interview_Form_Account extends Zend_Form
{
    public function init()
    {
        $this->addElement('text', 'id', array(
            'required' => false,
            'validators' => array(
                array('Int', true, array())
            ),
        ));

        $this->addElement('text', 'balance', array(
            'required' => false,
            'validators' => array(
                array('Int', true, array())
            ),
        ));
    }

}