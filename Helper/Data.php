<?php
declare(strict_types=1);

namespace Swirth\ScrollToTop\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
class Data extends AbstractHelper
{
    function __construct(Context $context)
    {
        parent::__construct($context);
    }
    function isModuleEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag("scrolltotop/general/enabled");
    }
    function getPosition()
    {
        return $this->scopeConfig->getValue("scrolltotop/general/position");
    }
    function getStyle()
    {
        return $this->scopeConfig->getValue("scrolltotop/general/style");
    }
}
