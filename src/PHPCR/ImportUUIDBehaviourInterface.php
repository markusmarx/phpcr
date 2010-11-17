<?php
/**
 * Interface to describe the contract for the uuidBehavior.
 *
 * This file was ported from the Java JCR API to PHP by
 * Karsten Dambekalns <karsten@typo3.org> for the FLOW3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version. Alternatively, you may use the Simplified
 * BSD License.
 *
 * This script is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser
 * General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with the script.
 * If not, see {@link http://www.gnu.org/licenses/lgpl.html}.
 *
 * The TYPO3 project - inspiring people to share!
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 *
 * @package phpcr
 * @subpackage interfaces
 */

declare(ENCODING = 'utf-8');
namespace PHPCR;


/**
 * The possible actions specified by the uuidBehavior parameter in
 * - Workspace::importXML()
 * - Session::importXML()
 * - Workspace::getImportContentHandler()
 * - Session::getImportContentHandler()
 *
 * @package phpcr
 * @subpackage interfaces
 * @api
 */
interface ImportUUIDBehaviourInterface {

    /**
     * When importing remove existing item upon collision.
     * @api
     */
    const IMPORT_UUID_COLLISION_REMOVE_EXISTING = 1;

    /**
     * When importing replace existing item upon collision.
     * @api
     */
    const IMPORT_UUID_COLLISION_REPLACE_EXISTING = 2;

    /**
     * When importing throw exception upon collision.
     * @api
     */
    const IMPORT_UUID_COLLISION_THROW = 3;

    /**
     * When importing create new UUIDs.
     * @api
     */
    const IMPORT_UUID_CREATE_NEW = 0;

}
