<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains the specifications for the collection of products that match
 * the search or filter criteria of a search call. A maximum of 200 product
 * summaries is returned (the result set), fewer if you include the limit query
 * parameter in the request.
 */
class ProductSearchResponse extends AbstractModel
{
    /**
     * This field is reserved for internal or future use.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of product summaries returned in the response. This is the result
     * set, a subset of the full collection of products that match the search or filter
     * criteria of this call. If the limit query parameter was included in the request,
     * this field will have the same value. Default: 50.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var string
     */
    public $next = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var int
     */
    public $offset = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var string
     */
    public $prev = null;

    /**
     * Returned if the fieldGroups query parameter was omitted from the request, or if
     * it was included with a value of MATCHING_PRODUCTS or FULL. This container
     * provides an array of product summaries in the current result set for products
     * that match the combination of the q, category_ids, and aspect_filter parameters
     * that were provided in the request. Each product summary includes information
     * about the product's identifiers, product images, aspects, the product page URL,
     * and the getProduct URL for retrieving the product details.
     *
     * @var \Ebay\Commerce\Catalog\Model\ProductSummary[]
     */
    public $productSummaries = null;

    /**
     * Returned only if the fieldGroups query parameter was included in the request
     * with a value of ASPECT_REFINEMENTS or FULL. An aspect is a property of a
     * category, used by sellers to provide details about the items they're listing.
     * For example, the Cell Phones &amp; Smartphones category (#9355) includes a
     * Storage Capacity aspect. This container provides information about the
     * distribution of values of a set of category aspects. The category aspects are
     * those associated with the category that eBay determines is most likely to cover
     * the products that match the search criteria.
     *
     * @var \Ebay\Commerce\Catalog\Model\Refinement
     */
    public $refinement = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var int
     */
    public $total = null;
}
