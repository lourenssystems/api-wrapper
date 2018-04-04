<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Endpoints;

    use LourensSystems\ApiWrapper\Exception\LSException;
    use LourensSystems\ApiWrapper\OAuth2\Client\Provider\Provider;

    /**
     * Class EndpointStrategy
     * @package LourensSystems\ApiWrapper\Endpoints
     */
    class EndpointStrategy
    {

        /**
         * Base api URL (to be overwritten in extending classes)
         * @var string
         */
        protected static $baseUrl = '';

        /**
         * Gets specified endpoint object by provider options
         * @param string $class
         * @param array $providerOptions
         * @return AbstractEndpoint
         */
        public static function getEndpoint(string $class, array $providerOptions): AbstractEndpoint
        {
            if (!isset($providerOptions['baseUrl']) || !$providerOptions['baseUrl']) {
                $providerOptions['baseUrl'] = static::$baseUrl;
            }

            $provider = new Provider($providerOptions);

            return static::getEndpointByProvider($class, $provider);
        }

        /**
         * Gets specified endpoint object by provider object
         * @param string $class
         * @param Provider $provider
         * @param string|null $refreshToken
         * @return AbstractEndpoint
         * @throws LSException
         */
        public static function getEndpointByProvider(
            string $class,
            Provider $provider,
            string $refreshToken = null
        ): AbstractEndpoint {
            if (!$provider->getBaseUrl()) {
                if (!static::$baseUrl) {
                    throw new LSException('Base URL is missing');
                }

                $provider->setBaseUrl(static::$baseUrl);
            }

            $endpoint = new $class($provider, $refreshToken);

            return $endpoint;
        }
    }