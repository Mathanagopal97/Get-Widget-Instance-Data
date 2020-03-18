<?php
namespace VendorName\ModuleName\Api\Data;

/**
 * Interface WidgetInstnaceInterface
 *
 * @api
 */
interface WidgetInstanceInterface
{
    /**
     * @return int
     */
    public function getInstanceId();

    /**
     * @return string
     */
    public function getInstanceType();

    /**
     * @return int
     */
    public function getThemeId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return int
     */
    public function getStoreId();

    /**
     * @return string
     */
    public function getWidgetParameters();

    /**
     * @return int
     */
    public function getSortOrder();

}
