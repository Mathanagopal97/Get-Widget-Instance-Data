<?php
namespace VendorName\ModuleName\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use VendorName\ModuleName\Api\Data\WidgetInstanceInterface;
use VendorName\ModuleName\Model\ResourceModel\WidgetInstance as ResourceModel;

/**
 * Class WidgetInstance
 */
class WidgetInstance extends AbstractModel implements
    WidgetInstanceInterface,
    IdentityInterface
{
    const CACHE_TAG = 'widget_instance';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getInstanceId()];
    }

    /**
     * @inheritDoc
     */
    public function getInstanceId()
    {
        return $this->getData('instance_id');
    }

    /**
     * @inheritDoc
     */
    public function getInstanceType()
    {
        return $this->getData('instance_type');
    }

    /**
     * @inheritDoc
     */
    public function getThemeId()
    {
        return $this->getData('theme_id');
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->getData('title');
    }

    /**
     * @inheritDoc
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }

    /**
     * @inheritDoc
     */
    public function getWidgetParameters()
    {
        return $this->getData('widget_parameters');
    }

    /**
     * @inheritDoc
     */
    public function getSortOrder()
    {
        return $this->getData('sort_order');
    }
}
