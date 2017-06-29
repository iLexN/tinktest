<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tink\Module\Transfer\Rule;

use Tink\Module\Transfer\Rule\RuleInterface;
/**
 * Description of RuleWithDrawAmount
 *
 * @author user
 */
class RuleApiApprove implements RuleInterface {
    //put your code here

    /**
     * @var \Slim\Container
     */
    public $container;


    public function __construct($container) {
        $this->container = $container;
    }

    public function validate() {
        $httpClient = $this->container['httpClient'];
        $response = $httpClient->request('GET', '/test/success.json');

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        $body = \json_decode((string) $response->getBody(), true);
        if (isset($body['status']) && $body['status'] !== 'success') {
            return false;
        }

        return true;
    }

    public function getErrorMsg() {
        return 'not approve';
    }
}
