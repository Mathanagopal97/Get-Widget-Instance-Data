<?php
namespace VendorName\ModuleName\Model\ResourceModel\WidgetInstance;

use VendorName\ModuleName\Model\WidgetInstance as Model;
use VendorName\ModuleName\Model\ResourceModel\WidgetInstance as ResourceModel;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
