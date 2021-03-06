<?php

/**
 * AppserverIo\Apps\Example\Service\UserProcessorInterface
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

namespace AppserverIo\Apps\Api\Service;

use AppserverIo\Psr\Security\PrincipalInterface;

/**
 * An interface for SLSB implementations providing the business logic
 * to handle users.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/api
 * @link      http://www.appserver.io
 */
interface UserProcessorInterface
{

    /**
     * Login the passed principal and return a DTO representation.
     *
     * @param \AppserverIo\Psr\Security\PrincipalInterface $principal The principal to login
     *
     * @return \AppserverIo\Apps\Api\TransferObject\UserPrincipal The user logged into the system
     */
    public function login(PrincipalInterface $principal);
}
