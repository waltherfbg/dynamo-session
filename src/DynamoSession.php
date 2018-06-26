<?php
namespace waltherfbg\DynamoSession;

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Session\SessionHandler;

/**
 * Description of DynamoSession
 *
 * @author Walther Bojaca
 */
class DynamoSession {
    private $dynamoDb;
    private $sessionHandler;

    public function __construct() {
        $this->dynamoDb = DynamoDbClient::factory(array('region' => 'us-west-2','version' => 'latest','credentials' => array('key' => '','secret' => '')));
        $this->sessionHandler = $this->dynamoDb->registerSessionHandler(array('table_name' => 'sesiones'));
        $this->sessionHandler->register();
    }
    
}
