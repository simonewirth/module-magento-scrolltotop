<?php
declare(strict_types=1);

namespace Swirth\ScrollToTop\Model\Config\Source;

class Style implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'round',
                'label' => __('round')
            ],
            [
                'value' => 'square',
                'label' => __('square')
            ]
        ];
    }

    public function toArray(): array
    {
        return [
            'round' => __('round'),
            'square' => __('square')
        ];
    }
}

