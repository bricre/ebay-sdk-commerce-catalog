<?php

namespace Ebay\Commerce\Catalog\Api;

use Ebay\Commerce\Catalog\Model\ProductSearchResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Summary extends AbstractAPI
{
    /**
     * This call searches for and retrieves summaries of one or more products in the
     * eBay catalog that match the search criteria provided by a seller. The seller can
     * use the summaries to select the product in the eBay catalog that corresponds to
     * the item that the seller wants to offer for sale. When a corresponding product
     * is found and adopted by the seller, eBay will use the product information to
     * populate the item listing. The criteria supported by search include keywords,
     * product categories, and category aspects. To see the full details of a selected
     * product, use the getProduct call. In addition to product summaries, this call
     * can also be used to identify refinements, which help you to better pinpoint the
     * product you're looking for. A refinement consists of one or more aspect values
     * and a count of the number of times that each value has been used in previous
     * eBay listings. An aspect is a property (e.g. color or size) of an eBay category,
     * used by sellers to provide details about the items they're listing. The
     * refinement container is returned when you include the fieldGroups query
     * parameter in the request with a value of ASPECT_REFINEMENTS or FULL. Example A
     * seller wants to find a product that is &quot;gray&quot; in color, but doesn't
     * know what term the manufacturer uses for that color. It might be Silver, Brushed
     * Nickel, Pewter, or even Grey. The returned refinement container identifies all
     * aspects that have been used in past listings for products that match your search
     * criteria, along with all of the values those aspects have taken, and the number
     * of times each value was used. You can use this data to present the seller with a
     * histogram of the values of each aspect. The seller can see which color values
     * have been used in the past, and how frequently they have been used, and selects
     * the most likely value or values for their product. You issue the search call
     * again with those values in the aspect_filter parameter to narrow down the
     * collection of products returned by the call. Although all query parameters are
     * optional, this call must include at least the q parameter, or the category_ids,
     * gtin, or mpn parameter with a valid value. If you provide more than one of these
     * parameters, they will be combined with a logical AND to further refine the
     * returned collection of matching products. Note: This call requires that certain
     * special characters in the query parameters be percent-encoded:
     * &nbsp;&nbsp;&nbsp;&nbsp;(space) = %20 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;, =
     * %2C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: = %3A
     * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ = %5B
     * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;] = %5D
     * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ = %7B
     * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| = %7C
     * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} = %7D This requirement applies to all
     * query parameter values. However, for readability, call examples and samples in
     * this documentation will not use the encoding. This call returns product
     * summaries rather than the full details of the products. To retrieve the full
     * details of a product, use the getProduct call with an ePID.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	An eBay category and one or more aspects of that
     *                       category, with the values that can be used to narrow down the collection of
     *                       products returned by this call. Aspects are product attributes that can
     *                       represent different types of information for different products. Every product
     *                       has aspects, but different products have different sets of aspects. You can
     *                       determine appropriate values for the aspects by first submitting this call
     *                       without this parameter. It will return either the productSummaries.aspects
     *                       container, the refinement.aspectDistributions container, or both, depending on
     *                       the value of the fieldgroups parameter in the request. The
     *                       productSummaries.aspects container provides the category aspects and their
     *                       values that are associated with each returned product. The
     *                       refinement.aspectDistributions container provides information about the
     *                       distribution of values of the set of category aspects associated with the
     *                       specified categories. In both cases sellers can select from among the returned
     *                       aspects to use with this parameter. Note: You can also use the Taxonomy API's
     *                       getItemAspectsForCategory call to retrieve detailed information about aspects
     *                       and their values that are appropriate for your selected category. The syntax for
     *                       the aspect_filter parameter is as follows (on several lines for readability;
     *                       categoryId is required): aspect_filter=categoryId:category_id,
     *                       aspect1:{valueA|valueB|...}, aspect2:{valueC|valueD|...},... A matching product
     *                       must be within the specified category, and it must have least one of the values
     *                       identified for every specified aspect. Note: Aspect names and values are case
     *                       sensitive. Here is an example of an aspect_filter parameter in which 9355 is the
     *                       category ID, Color is an aspect of that category, and Black and White are
     *                       possible values of that aspect (on several lines for readability): GET
     *                       https://api.ebay.com/commerce/catalog/v1_beta/product_summary/search?
     *                       aspect_filter=categoryId:9355,Color:{White|Black} Here is the aspect_filter with
     *                       required URL encoding and a second aspect (on several lines for readability):
     *                       GET https://api.ebay.com/commerce/catalog/v1_beta/product_summary/search?
     *                       aspect_filter=categoryId:9355,Color:%7BWhite%7CBlack%7D,
     *                       Storage%20Capacity:%128GB%7C256GB%7D Note: You cannot use the aspect_filter
     *                       parameter in the same call with either the gtin parameter or the mpn parameter.
     *                       For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/commerce/catalog/types/catal:AspectFilter
     *                       'category_ids'	string	Important: Currently, only the first category_id value is
     *                       accepted. One or more comma-separated category identifiers for narrowing down
     *                       the collection of products returned by this call. Note: This parameter requires
     *                       a valid category ID value. You can use the Taxonomy API's getCategorySuggestions
     *                       call to retrieve appropriate category IDs for your product based on keywords.
     *                       The syntax for this parameter is as follows:
     *                       category_ids=category_id1,category_id2,... Here is an example of a call with the
     *                       category_ids parameter: GET
     *                       https://api.ebay.com/commerce/catalog/v1_beta/product_summary/search?
     *                       category_ids=178893 Note: Although all query parameters are optional, this call
     *                       must include at least the q parameter, or the category_ids, gtin, or mpn
     *                       parameter with a valid value. If you provide only the category_ids parameter,
     *                       you cannot specify a top-level (L1) category.
     *                       'fieldgroups'	string	The type of information to return in the response.
     *                       Important: This parameter may not produce valid results if you also provide more
     *                       than one value for the category_ids parameter. It is recommended that you avoid
     *                       using this combination. Valid Values: ASPECT_REFINEMENTS &mdash; This returns
     *                       the refinement container, which includes the category aspect and aspect value
     *                       distributions that apply to the returned products. For example, if you searched
     *                       for Ford Mustang, some of the category aspects might be Model Year, Exterior
     *                       Color, Vehicle Mileage, and so on. Note: Aspects are category specific. FULL
     *                       &mdash; This returns all the refinement containers and all the matching
     *                       products. This value overrides the other values, which will be ignored.
     *                       MATCHING_PRODUCTS &mdash; This returns summaries for all products that match the
     *                       values you provide for the q and category_ids parameters. This does not affect
     *                       your use of the ASPECT_REFINEMENTS value, which you can use in the same call.
     *                       Code so that your app gracefully handles any future changes to this list.
     *                       Default: MATCHING_PRODUCTS
     *                       'gtin'	string	A string consisting of one or more comma-separated Global Trade
     *                       Item Numbers (GTINs) that identify products to search for. Currently the GTIN
     *                       values can include EAN, ISBN, and UPC identifier types. Note: Although all query
     *                       parameters are optional, this call must include at least the q parameter, or the
     *                       category_ids, gtin, or mpn parameter with a valid value. You cannot use the gtin
     *                       parameter in the same call with either the q parameter or the aspect_filter
     *                       parameter.
     *                       'limit'	string	The number of product summaries to return. This is the result
     *                       set, a subset of the full collection of products that match the search or filter
     *                       criteria of this call. Maximum: 200 Default: 50
     *                       'mpn'	string	A string consisting of one or more comma-separated Manufacturer
     *                       Part Numbers (MPNs) that identify products to search for. This call will return
     *                       all products that have one of the specified MPNs. MPNs are defined by
     *                       manufacturers for their own products, and are therefore certain to be unique
     *                       only within a given brand. However, many MPNs do turn out to be globally unique.
     *                       Note: Although all query parameters are optional, this call must include at
     *                       least the q parameter, or the category_ids, gtin, or mpn parameter with a valid
     *                       value. You cannot use the mpn parameter in the same call with either the q
     *                       parameter or the aspect_filter parameter.
     *                       'offset'	string	This parameter is reserved for internal or future use.
     *                       'q'	string	A string consisting of one or more keywords to use to search for
     *                       products in the eBay catalog. Note: This call searches the following product
     *                       record fields: title, description, brand, and aspects.localizedName, which do
     *                       not include product IDs. Wildcard characters (e.g. *) are not allowed. The
     *                       keywords are handled as follows: If the keywords are separated by a comma (e.g.
     *                       iPhone,256GB), the query returns products that have iPhone AND 256GB. If the
     *                       keywords are separated by a space (e.g. &quot;iPhone&nbsp;ipad&quot; or
     *                       &quot;iPhone,&nbsp;ipad&quot;), the query ignores any commas and returns
     *                       products that have iPhone OR iPad. Note: Although all query parameters are
     *                       optional, this call must include at least the q parameter, or the category_ids,
     *                       gtin, or mpn parameter with a valid value. You cannot use the q parameter in the
     *                       same call with either the gtin parameter or the mpn parameter.
     *
     * @return ProductSearchResponse|UnexpectedResponse
     */
    public function search(array $queries = [])
    {
        return $this->request(
        'search',
        'GET',
        'product_summary/search',
        null,
        $queries,
        []
        );
    }
}
