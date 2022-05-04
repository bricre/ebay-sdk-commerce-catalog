<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about one value of a specified aspect. This value
 * serves as a product refinement.
 */
class AspectValueDistribution extends AbstractModel
{
    /**
     * The localized value of the category aspect identified by
     * refinement.aspectDistributions.localizedAspectName.
     *
     * @var string
     */
    public $localizedAspectValue = null;

    /**
     * The number of times the value of localizedAspectValue has been used for eBay
     * product listings. By comparing this quantity to the matchCount for other values
     * of the same aspect, you can present a histogram of the values to sellers, who
     * can use that information to select which aspect value is most appropriate for
     * their product. You can then include the user-selected value in the the search
     * call's aspect_filter parameter to refine your search.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * A HATEOAS reference that further refines the search with this particular
     * localizedAspectValue.
     *
     * @var string
     */
    public $refinementHref = null;
}
