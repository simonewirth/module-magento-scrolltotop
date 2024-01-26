<?php
declare(strict_types=1);

namespace Swirth\ScrollToTop\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'left',
                'label' => __('left')
            ],
            [
                'value' => 'right',
                'label' => __('right')
            ]
        ];
    }

    public function toArray(): array
    {
        return [
            'left' => __('left'),
            'right' => __('right')
        ];
    }
}
