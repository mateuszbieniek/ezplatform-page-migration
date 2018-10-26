<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformPageMigration\Exception;

use EzSystems\EzPlatformPageFieldType\FieldType\LandingPage\Definition\LayoutDefinition;
use RuntimeException;

/**
 * No zone found.
 */
class ZoneNotFoundException extends RuntimeException
{
    /**
     * ZoneNotFoundException constructor.
     *
     * @param string $zoneId
     * @param \EzSystems\EzPlatformPageFieldType\FieldType\LandingPage\Definition\LayoutDefinition $layout
     */
    public function __construct(string $zoneId, LayoutDefinition $layout)
    {
        parent::__construct(
            'Zone with id: "' . $zoneId . '"" not found for layout: "' . $layout->getName() . '"", id: "' . $layout->getId() . '"'
        );
    }
}
