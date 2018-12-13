<?php

namespace WebRotate360\ProductViewerStandard\Model\Config\Source;

class ViewerSkin implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return array(
           array(
               'value' => 'basic',
               'label' => 'basic'
           ),

           array(
               'value' => 'thin',
               'label' => 'thin'
           ),

           array(
               'value' => 'round',
               'label' => 'round'
           ),

           array(
               'value' => 'retina',
               'label' => 'retina'
           ),

           array(
               'value' => 'empty',
               'label' => 'empty'
           ),

           array(
               'value' => 'zoom_light',
               'label' => 'zoom light'
           ),

           array(
              'value' => 'zoom_dark',
              'label' => 'zoom dark'
          ),
       );
    }
}