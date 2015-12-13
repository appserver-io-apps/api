<?php

/**
 * AppserverIo\Apps\Api\Assembler\TransferObject\PersistenceUnitTransferObjectAssembler
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/api
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Apps\Api\Assembler\TransferObject;

use AppserverIo\Apps\Api\Assembler\PersistenceUnitAssemblerInterface;
use AppserverIo\Appserver\Core\Api\Node\PersistenceUnitNodeInterface;

/**
 * A SLSB implementation providing the business logic to assemble persistence units into DTOs.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/api
 * @link      http://www.appserver.io
 *
 * @Stateless
 */
class PersistenceUnitTransferObjectAssembler implements PersistenceUnitAssemblerInterface
{

    /**
     * Returns the a new JSON-API document with the persistence unit data.
     *
     * @param \AppserverIo\Appserver\Core\Api\Node\PersistenceUnitNodeInterface $persistenceUnit The persistence unit to assemble
     *
     * @return \Tobscure\JsonApi\Document The document representation of the persistence unit
     * @see \AppserverIo\Apps\Api\Assembler\PersistenceUnitAssemblerInterface::getPersistenceUnitViewData()
     */
    public function getPersistenceUnitViewData(PersistenceUnitNodeInterface $persistenceUnit)
    {
    }

    /**
     * Returns the a new JSON-API document with the persistence unit array as the data.
     *
     * @param array $entityManagers The array with the persistence units to assemble
     *
     * @return \Tobscure\JsonApi\Document The document representation of the persistence units
     * @see \AppserverIo\Apps\Api\Assembler\PersistenceUnitAssemblerInterface::getPersistenceUnitOverviewData()
     */
    public function getPersistenceUnitOverviewData(array $entityManagers)
    {
    }
}