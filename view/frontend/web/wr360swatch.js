define([
    'jquery'
], function ($) {
    'use strict';

    return function (SwatchRenderer) {
        $.widget('mage.SwatchRenderer', $['mage']['SwatchRenderer'], {
            _init: function () {
                window['__wr360Swatches'] = this.options.jsonConfig.index;
                this._super();
            },
        });

        return $['mage']['SwatchRenderer'];
    };
});
