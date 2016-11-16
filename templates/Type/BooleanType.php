<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Templates\Type;

class BooleanType extends FieldType
{
    public function __construct(array $data)
    {
        $data['name'] = 'Boolean';
        parent::__construct($data);
    }
}