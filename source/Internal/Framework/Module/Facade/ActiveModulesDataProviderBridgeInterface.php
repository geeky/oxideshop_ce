<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Framework\Module\Facade;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataObject\ModuleConfiguration\Controller;

interface ActiveModulesDataProviderBridgeInterface
{
    /**
     * @return string[]
     */
    public function getModuleIds(): array;

    /**
     * @return string[]
     */
    public function getModulePaths(): array;

    /**
     * @return Controller[]
     */
    public function getControllers(): array;
}
