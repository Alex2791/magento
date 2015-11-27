<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/4/15
 * Time: 10:23 AM
 */
class DS_Test_Block_Adminhtml_Test_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'dstest';
        $this->_controller = 'adminhtml_test';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('dstest');
        $model = Mage::registry('current_test');

        if ($model->getId()) {
            return $helper->__("Edit Test item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add Test item");
        }
    }

}