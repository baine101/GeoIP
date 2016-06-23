<?php
/**
 * Copyright © 2016 AionNext Ltd. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Juicy\Geoip\Block\Adminhtml\Test\Edit;

/**
 * Adminhtml Geoip item edit form
 */
class Form extends \Magento\Framework\View\Element\Html\Select
{

    protected $groupFactory;

    public function __construct(\Magento\Framework\View\Element\Context $context,\Magento\Customer\Model\GroupFactory $groupfactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->groupFactory = $groupfactory;
    }

    public function _toHtml()
    {


        return parent::_toHtml(); // TODO: Change the autogenerated stub
    }

}