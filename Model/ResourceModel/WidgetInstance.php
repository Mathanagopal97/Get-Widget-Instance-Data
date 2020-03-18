<?php
namespace VendorName\ModuleName\Model\ResourceModel;

/**
 * Class WidgetInstance
 */
class WidgetInstance extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init('widget_instance', 'instance_id');
    }
}
