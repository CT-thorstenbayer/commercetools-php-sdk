<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\Carts\Command;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Common\LocalizedString;
use Sphere\Core\Model\Common\Money;
use Sphere\Core\Model\TaxCategory\TaxCategory;
use Sphere\Core\Request\AbstractAction;

/**
 * @package Sphere\Core\Request\Carts\Command
 * @link http://dev.sphere.io/http-api-projects-carts.html#add-custom-line-item
 * @method string getAction()
 * @method CartAddCustomLineItemAction setAction(string $action = null)
 * @method LocalizedString getName()
 * @method CartAddCustomLineItemAction setName(LocalizedString $name = null)
 * @method int getQuantity()
 * @method CartAddCustomLineItemAction setQuantity(int $quantity = null)
 * @method Money getMoney()
 * @method CartAddCustomLineItemAction setMoney(Money $money = null)
 * @method string getSlug()
 * @method CartAddCustomLineItemAction setSlug(string $slug = null)
 * @method TaxCategory getTaxCategory()
 * @method CartAddCustomLineItemAction setTaxCategory(TaxCategory $taxCategory = null)
 */
class CartAddCustomLineItemAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'name' => [static::TYPE => '\Sphere\Core\Model\Common\LocalizedString'],
            'quantity' => [static::TYPE => 'int'],
            'money' => [static::TYPE => '\Sphere\Core\Model\Common\Money'],
            'slug' => [static::TYPE => 'string'],
            'taxCategory' => [static::TYPE => '\Sphere\Core\Model\TaxCategory\TaxCategory'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('addCustomLineItem');
    }

    /**
     * @param LocalizedString $name
     * @param int $quantity
     * @param Money $money
     * @param string $slug
     * @param TaxCategory $taxCategory
     * @param Context|callable $context
     * @return CartAddCustomLineItemAction
     */
    public static function ofNameQuantityMoneySlugAndTaxCategory(
        LocalizedString $name,
        $quantity,
        Money $money,
        $slug,
        TaxCategory $taxCategory,
        $context = null
    ) {
        return static::of($context)
            ->setName($name)
            ->setQuantity($quantity)
            ->setMoney($money)
            ->setSlug($slug)
            ->setTaxCategory($taxCategory);
    }
}
