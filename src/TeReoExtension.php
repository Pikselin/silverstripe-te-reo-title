<?php

namespace Pikselin\TeReo;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBVarchar;

class TeReoExtension extends DataExtension
{

    private static $db = [
        'TeReoTitle' => DBVarchar::class
    ];

    public function updateCMSFields(FieldList $fields)
    {
        parent::updateCMSFields($fields);

        $fields->addFieldToTab(
            'Root.Main',
            TextField::create(
                'TeReoTitle',
                _t(self::class . '.TEREOTITLE', 'Te reo Māori title'),
                'URLSegment'
            )
        );
    }
}
