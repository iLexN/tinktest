<?php

namespace Tink\Module\Transfer\Rule;

use Psr\Container\ContainerInterface;

/**
 * Description of RuleWithDrawAmount.
 *
 * @author user
 */
class RuleApiApprove implements RuleInterface
{
    /** @var ContainerInterface  */
    public $container;

    /**
     * RuleApiApprove constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Validate this rule - by api
     * @return bool
     */
    public function validate(): bool
    {
        /** @var \GuzzleHttp\Client $httpClient */
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

    /**
     * Get Error Message
     * @return string
     */
    public function getErrorMsg(): string
    {
        return 'not approve';
    }
}
