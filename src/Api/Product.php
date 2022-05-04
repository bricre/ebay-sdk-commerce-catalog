<?php

namespace Ebay\Commerce\Catalog\Api;

use Ebay\Commerce\Catalog\Model\Product as ProductModel;

class Product extends AbstractAPI
{
    /**
     * This call retrieves details of the catalog product identified by the eBay
     * product identifier (ePID) specified in the request. These details include the
     * product's title and description, aspects and their values, associated images,
     * applicable category IDs, and any recognized identifiers that apply to the
     * product. For a new listing, you can use the search call to identify candidate
     * products on which to base the listing, then use the getProduct call to present
     * the full details of those candidate products to the seller to make a a final
     * selection.
     *
     * @param string $epid The ePID of the product being requested. This value can be
     *                     discovered by issuing the search call and examining the value of the
     *                     productSummaries.epid field for the desired returned product summary.
     *
     * @return ProductModel
     */
    public function get(string $epid): ProductModel
    {
        return $this->request(
        'getProduct',
        'GET',
        "product/$epid",
        null,
        [],
        []
        );
    }
}
