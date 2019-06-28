<?php

namespace WebRotate360\ProductViewerStandard\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Config class for design skins.
 */
class ViewerSkin implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
           [
               'value' => 'basic',
               'label' => 'basic'
           ],

           [
               'value' => 'thin',
               'label' => 'thin'
           ],

           [
               'value' => 'round',
               'label' => 'round'
           ],

           [
               'value' => 'retina',
               'label' => 'retina'
           ],

           [
               'value' => 'empty',
               'label' => 'empty'
           ],

           [
               'value' => 'zoom_light',
               'label' => 'zoom light'
           ],

           [
              'value' => 'zoom_dark',
              'label' => 'zoom dark'
           ],
        ];
    }
}
