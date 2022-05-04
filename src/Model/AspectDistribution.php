<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about one category aspect that is associated with
 * a specified category.
 */
class AspectDistribution extends AbstractModel
{
    /**
     * Contains information about one or more values of the category aspect identified
     * by localizedAspectName.
     *
     * @var \Ebay\Commerce\Catalog\Model\AspectValueDistribution[]
     */
    public $aspectValueDistributions = null;

    /**
     * The localized name of an aspect that is associated with the category identified
     * by dominantCategoryId.
     *
     * @var string
     */
    public $localizedAspectName = null;
}
