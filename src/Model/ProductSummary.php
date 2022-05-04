<?php

namespace Ebay\Commerce\Catalog\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains a summary of a specified product. The product summary
 * includes information about the product's identifiers, product images, aspects,
 * and the getProduct URL for retrieving the product details.
 */
class ProductSummary extends AbstractModel
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
     * A list of all GTINs that identify this product. This includes all of the values
     * returned in the ean, isbn, and upc fields.
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
     * A list of all Manufacturer Product Number (MPN) values that the manufacturer
     * uses to identify this product.
     *
     * @var string[]
     */
    public $mpn = null;

    /**
     * The URI of the getProduct call request that retrieves this product's details.
     *
     * @var string
     */
    public $productHref = null;

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
}
