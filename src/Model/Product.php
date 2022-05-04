<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains the full details of a specified product, including
 * information about the product's identifiers, product images, aspects, and
 * categories.
 */
class Product extends AbstractModel
{
    /**
     * Contains information about additional images associated with this product. For
     * the primary image, see the image container.
     *
     * @var \Ebay\Commerce\Catalog\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * Contains an array of the category aspects and their values that are associated
     * with this product.
     *
     * @var \Ebay\Commerce\Catalog\Model\Aspect[]
     */
    public $aspects = null;

    /**
     * The manufacturer's brand name for this product.
     *
     * @var string
     */
    public $brand = null;

    /**
     * The rich description of this product, which might contain HTML.
     *
     * @var string
     */
    public $description = null;

    /**
     * A list of all European Article Numbers (EANs) that identify this product.
     *
     * @var string[]
     */
    public $ean = null;

    /**
     * The eBay product ID of this product.
     *
     * @var string
     */
    public $epid = null;

    /**
     * A list of all GTINs that identify this product. Currently this can include EAN,
     * ISBN, and UPC identifier types.
     *
     * @var string[]
     */
    public $gtin = null;

    /**
     * Contains information about the primary image of this product. For more images of
     * this product, see the additionalImages container.
     *
     * @var \Ebay\Commerce\Catalog\Model\Image
     */
    public $image = null;

    /**
     * A list of all International Standard Book Numbers (ISBNs) that identify this
     * product.
     *
     * @var string[]
     */
    public $isbn = null;

    /**
     * A list of all MPN values that the manufacturer uses to identify this product.
     *
     * @var string[]
     */
    public $mpn = null;

    /**
     * A list of category IDs (other than the value of primaryCategoryId) for all the
     * leaf categories to which this product might belong.
     *
     * @var string[]
     */
    public $otherApplicableCategoryIds = null;

    /**
     * The identifier of the leaf category that eBay recommends using to list this
     * product, based on previous listings of similar products. Products in the eBay
     * catalog are not automatically associated with any particular category, but using
     * an inappropriate category can make it difficult for prospective buyers to find
     * the product. For other possible categories that might be used, see
     * otherApplicableCategoryIds.
     *
     * @var string
     */
    public $primaryCategoryId = null;

    /**
     * The URL for this product's eBay product page.
     *
     * @var string
     */
    public $productWebUrl = null;

    /**
     * The title of this product on eBay.
     *
     * @var string
     */
    public $title = null;

    /**
     * A list of Universal Product Codes (UPCs) that identify this product.
     *
     * @var string[]
     */
    public $upc = null;

    /**
     * The current version number of this product record in the catalog.
     *
     * @var string
     */
    public $version = null;
}
