<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * The configuration file for the test suite.
 *
 * @package    OpenX
 * @subpackage TestSuite
 * @author     Andrew Hill <andrew.hill@openx.org>
 */

// Define the different environment configurations
define('NO_DB',          0);
define('DB_NO_TABLES',   2);
define('DB_WITH_TABLES', 3);
define('DB_WITH_DATA',   4);

// Project path - helpful for testing external projects
// which integrate with OpenX code
define('MAX_PROJECT_PATH', MAX_PATH);

// Define the available root-level test groups
$GLOBALS['_MAX']['TEST']['groups'] = array(
    0 => 'unit',
    1 => 'integration',
    2 => 'visualisation'
);

/*
+---------------------------------------------------------------------------+
| UNIT TESTING CONFIGURATION ITEMS                                          |
+---------------------------------------------------------------------------+
*/

// The test type name
$type = $GLOBALS['_MAX']['TEST']['groups'][0];

// Define the directory that tests should be stored in
// (e.g. "tests", "tests/unit", etc.).
define($type . '_TEST_STORE', 'tests/unit');

// The different "layers" that can be tested, defined in terms of
// layer test codes (ie. the test files for the layer will be
// xxxxx.code.test.php), and the layer names and database
// requirements for the test(s) in that layer
$GLOBALS['_MAX']['TEST'][$type . '_layers'] =
    array(
        'cor'   => array('Core Classes',                        DB_NO_TABLES),
        'db'    => array('Database Abstraction Layer (DB)',     DB_NO_TABLES),
        'tbl'   => array('Table Creation Layer (DB)',           DB_NO_TABLES),
        'dal'   => array('Data Abstraction Layer (DB)',         DB_WITH_TABLES),
        'dll'   => array('Domain Logic Layer (DB)',             DB_WITH_TABLES),
        'del'   => array('Delivery Engine',                     NO_DB),
        'ext'   => array('Extensions',                          NO_DB),
        'mtc'   => array('Maintenance Engine (DB)',             DB_WITH_TABLES),
        'mtsdb' => array('Maintenance Statistics Engine (DB)',  DB_NO_TABLES),
        'mtp'   => array('Maintenance Priority Engine',         NO_DB),
        'mtpdb' => array('Maintenance Priority Engine (DB)',    DB_WITH_TABLES),
        'plg'   => array('Plugins',                             DB_WITH_TABLES),
        'admin' => array('Administrative Interface',            DB_NO_TABLES),
        'lib'   => array('OpenX - Libraries',                   DB_NO_TABLES),
        'mol'   => array('OpenX - Other Libraries',             DB_WITH_TABLES),
        'up'    => array('Upgrade Classes',                     DB_WITH_TABLES),
        'mig'   => array('Upgrade Migration Classes',           DB_NO_TABLES),
        'oacdb' => array('OpenX Central (DB)',                  DB_WITH_TABLES),
        'util'  => array('Commonly used utilities',             NO_DB)
    );

/*
+---------------------------------------------------------------------------+
| INTEGRATION TESTING CONFIGURATION ITEMS                                   |
+---------------------------------------------------------------------------+
*/

// The test type name
$type = $GLOBALS['_MAX']['TEST']['groups'][1];

// Define the directory that tests should be stored in
// (e.g. "tests", "tests/unit", etc.).
define($type . '_TEST_STORE', 'tests/integration');

// The different "layers" that can be tested, defined in terms of
// layer test codes (ie. the test files for the layer will be
// xxxxx.code.test.php), and the layer names and database
// requirements for the test(s) in that layer
$GLOBALS['_MAX']['TEST'][$type . '_layers'] =
    array(
        'cor' => array('Core',                                      NO_DB),
        'dal' => array('Data Abstraction Layer (DB)',               DB_WITH_TABLES),
        'mts' => array('Maintenance Statistics Engine (DB)',        DB_WITH_TABLES),
        'mtp' => array('Maintenance Priority Engine (DB)',          DB_WITH_DATA),
        'mpe' => array('Maintenance Priority Engine (DB, No Data)', DB_WITH_TABLES),
        'up'  => array('Upgrade Classes',                           DB_WITH_TABLES),
        'mig' => array('Upgrade Migration Classes',                 DB_NO_TABLES),
        'del' => array('Delivery Engine (DB)',                      DB_WITH_TABLES),
        'ext'   => array('Extensions',                              DB_WITH_TABLES),
        'plg' => array('Plugins',                                   DB_WITH_TABLES),
        'api' => array('Webservices API',                           DB_WITH_TABLES)
    );

/*
+---------------------------------------------------------------------------+
| VISUALISATION TESTING CONFIGURATION ITEMS                                 |
+---------------------------------------------------------------------------+
*/

// The test type name
$type = $GLOBALS['_MAX']['TEST']['groups'][2];

// Define the directory that tests should be stored in
// (e.g. "tests", "tests/unit", etc.).
define($type . '_TEST_STORE', 'tests/visualisation');

// The different "layers" that can be tested, defined in terms of
// layer test codes (ie. the test files for the layer will be
// xxxxx.code.test.php), and the layer names and database
// requirements for the test(s) in that layer
$GLOBALS['_MAX']['TEST'][$type . '_layers'] =
    array(
        'mtp'   => array('Maintenance Priority Engine',      NO_DB),
        'mtpdb' => array('Maintenance Priority Engine (DB)', DB_WITH_TABLES)
    );

?>
