<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type identifies a product category and the aspects associated with that
 * category. Each aspect distribution container returns the distribution of values
 * that have been used for the aspect.
 */
class Refinement extends AbstractModel
{
    /**
     * Contains information about one or more aspects that are associated with the
     * category identified by dominantCategoryId.
     *
     * @var \Ebay\Commerce\Catalog\Model\AspectDistribution[]
     */
    public $aspectDistributions = null;

    /**
     * The ID of the category that eBay determines is most likely to cover the products
     * matching the search criteria.
     *
     * @var string
     */
    public $dominantCategoryId = null;
}
