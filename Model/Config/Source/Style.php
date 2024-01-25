<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Swirth\ScrollToTop\Model\Config\Source;

class Style implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'round', 'label' => __('round')],['value' => 'square', 'label' => __('square')]];
    }

    public function toArray()
    {
        return ['round' => __('round'),'square' => __('square')];
    }
}

