var config = {
    config: {
        mixins: {
            'mage/gallery/gallery': {
                'WebRotate360_ProductViewerStandard/wr360hook': true
            },

            'Magento_Swatches/js/swatch-renderer': {
                'WebRotate360_ProductViewerStandard/wr360swatch': true
            }
        },
    },

    map: {
        '*': {
            'imagerotator': 'WebRotate360_ProductViewerStandard/imagerotator/html/js/imagerotator'
        }
    }
};
