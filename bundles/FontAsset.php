<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace dlds\metronic\bundles;

class FontAsset extends BaseAssetBundle
{
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,800&subset=all',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&subset=all',
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];
}
