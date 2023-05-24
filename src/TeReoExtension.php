<?php

namespace Pikselin\TeReo;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBVarchar;

/**
 * Class \Pikselin\TeReo\TeReoExtension
 *
 * @property Page|TeReoExtension $owner
 * @property string $TeReoTitle
 */
class TeReoExtension extends DataExtension
{

    private static $db = [
        'TeReoTitle' => DBVarchar::class
    ];

    public function updateCMSFields(FieldList $fields)
    {
        parent::updateCMSFields($fields);

        $fields->insertBefore(
            'URLSegment',
            TextField::create(
                'TeReoTitle',
                _t(self::class . '.TEREOTITLE', 'Te reo Māori name')
            )
        );
    }
}
