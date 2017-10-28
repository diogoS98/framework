<?php
/**
 * Config - the Module's specific Configuration.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */


return array(
    'activityLimit' => 5,

    'tokenLogin' => array(
        'lockoutTime' => 1,  // In minutes.
        'maxAttempts' => 5,
        'validity'    => 15, // In minutes.
    ),
);
