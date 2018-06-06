<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\OAuth2\Client\Provider;

    use GuzzleHttp\Exception\ClientException;
    use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
    use League\OAuth2\Client\Token\AccessToken;
    use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
    use Psr\Http\Message\RequestInterface;
    use Psr\Http\Message\ResponseInterface;

    /**
     * Class Provider
     * @package LourensSystems\ApiWrapper\OAuth2\Client\Provider
     */
    class Provider extends \League\OAuth2\Client\Provider\AbstractProvider
    {

        use BearerAuthorizationTrait;

        /**
         * @var string
         */
        protected $baseUrl;

        /**
         * @var string
         */
        protected $urlAuthorize;

        /**
         * @var string
         */
        protected $urlAccessToken;

        /**
         * @var string
         */
        protected $urlResourceOwnerDetails;

        /**
         * Sets base API URL.
         * @param string $baseUrl
         */
        public function setBaseUrl(string $baseUrl)
        {
            $this->baseUrl = $baseUrl;
        }

        /**
         * Returning base API URL.
         *
         * @return string
         */
        public function getBaseUrl(): string
        {
            return $this->baseUrl;
        }

        /**
         * @return string
         */
        public function getBaseAuthorizationUrl()
        {
            return isset($this->urlAuthorize) ? $this->urlAuthorize : $this->getBaseUrl() . '/auth/authorize';
        }

        /**
         * @return string
         */
        public function getBaseAccessTokenUrl(array $params)
        {
            return isset($this->urlAccessToken) ? $this->urlAccessToken : $this->getBaseUrl() . '/auth/access-tokens';
        }

        /**
         * Get provider url to fetch user details
         *
         * @param  AccessToken $token
         * @return string
         */
        public function getResourceOwnerDetailsUrl(AccessToken $token)
        {
            return isset($this->urlResourceOwnerDetails) ? $this->urlResourceOwnerDetails : $this->getBaseUrl() . '/auth/owner';
        }

        /**
         * Generate a user object from a successful user details request.
		 *
         * @param array $response
         * @param AccessToken $token
         * @return ResourceOwner
         */
        protected function createResourceOwner(array $response, AccessToken $token)
        {
            return new ResourceOwner($response);
        }

        /**
         * Get the default scopes used by this provider.
         *
         * This should not be a complete list of all scopes, but the minimum
         * required for the provider user interface
         *
         * @return array
         */
        protected function getDefaultScopes()
        {
            return [];
        }

        /**
         * @inheritdoc
         */
        public function getResponse(RequestInterface $request)
        {
            $response = $this->sendRequest($request);
            $parsed = $this->parseResponse($response);

            try {
                $this->checkResponse($response, $parsed);
            } catch (IdentityProviderException $e) {
                throw new ClientException($e->getMessage(), $request, $response);
            }

            return $parsed;
        }

        /**
         * @inheritdoc
         */
        protected function checkResponse(ResponseInterface $response, $data)
        {
            if ($response->getStatusCode() != 200 && $response->getStatusCode() != 201) {
                throw new IdentityProviderException(
                    isset($data['error']) ? $data['error'] : $response->getReasonPhrase(),
                    $response->getStatusCode(),
                    $response
                );
            }
        }
    }