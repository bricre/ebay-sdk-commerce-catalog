<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains the name and values of a category aspect.
 */
class Aspect extends AbstractModel
{
    /**
     * The localized name of this category aspect.
     *
     * @var string
     */
    public $localizedName = null;

    /**
     * A list of the localized values of this category aspect.
     *
     * @var string[]
     */
    public $localizedValues = null;
}
