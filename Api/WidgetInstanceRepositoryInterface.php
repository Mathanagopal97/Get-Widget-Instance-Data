<?php
namespace VendorName\ModuleName\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use VendorName\ModuleName\Api\Data\WidgetInstanceInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
* Interface WidgetInstanceRepositoryInterface
*
* @api
*/
interface WidgetInstanceRepositoryInterface
{
    /**
     * Get a Widget by it's Instance Id
     *
     * @param int $id
     * @return WidgetInstanceInterface
     * @throws NoSuchEntityException If Widget with the specified Instance ID does not exist.
     * @throws LocalizedException
     */
    public function getByInstanceId($id);

    /**
     * Retrieve Widgets which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);
}
