<?php

/**
 * AppserverIo\Apps\Api\TransferObject\PersistenceUnitOverviewData
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

namespace AppserverIo\Apps\Api\TransferObject;

use Swagger\Annotations as SWG;

/**
 * DTO for the persistence unit overview data implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/api
 * @link      http://www.appserver.io
 *
 * @SWG\Definition(type="object", required={"id", "name"})
 */
class PersistenceUnitOverviewData
{

    /**
     * The virtual host UUID.
     *
     * @var string
     * @SWG\Property(property="id", type="string")
     */
    protected $id;

    /**
     * The virtual host name.
     *
     * @var string
     * @SWG\Property(property="name", type="string")
     */
    protected $name;

    /**
     * Set's the persistence unit's UUID.
     *
     * @param string $name The persistence unit's UUID
     *
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Return's the persistence unit's UUID.
     *
     * @return string The persistence unit's UUID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set's the persistence unit's name.
     *
     * @param string $name The persistence unit's name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return's the persistence unit's name.
     *
     * @return string The persistence unit's name
     */
    public function getName()
    {
        return $this->name;
    }
}
