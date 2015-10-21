<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\TaxCategories;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractQueryRequest;
use Commercetools\Core\Model\TaxCategory\TaxCategoryCollection;
use Commercetools\Core\Response\ApiResponseInterface;

/**
 * @package Commercetools\Core\Request\TaxCategories
 * @apidoc http://dev.sphere.io/http-api-projects-taxCategories.html#tax-categories-by-query
 * @method TaxCategoryCollection mapResponse(ApiResponseInterface $response)
 */
class TaxCategoryQueryRequest extends AbstractQueryRequest
{
    protected $resultClass = '\Commercetools\Core\Model\TaxCategory\TaxCategoryCollection';

    /**
     * @param Context $context
     */
    public function __construct(Context $context = null)
    {
        parent::__construct(TaxCategoriesEndpoint::endpoint(), $context);
    }

    /**
     * @param Context $context
     * @return static
     */
    public static function of(Context $context = null)
    {
        return new static($context);
    }
}