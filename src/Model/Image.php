<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about a product image stored in eBay Picture
 * Services (EPS).
 */
class Image extends AbstractModel
{
    /**
     * The height of the image in pixels.
     *
     * @var int
     */
    public $height = null;

    /**
     * The eBay Picture Services (EPS) URL of the image.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * The width of the image in pixels.
     *
     * @var int
     */
    public $width = null;
}
