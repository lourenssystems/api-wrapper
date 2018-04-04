<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Traits;

    use Psr\Http\Message\RequestInterface;
    use Psr\Http\Message\ResponseInterface;

    /**
     * Trait RequestResponse
     * @package LourensSystems\ApiWrapper\Exception\Traits
     */
    trait RequestResponse
    {

        /**
         * @var RequestInterface
         */
        protected $request;

        /**
         * @var ResponseInterface
         */
        protected $response;

        /**
         * @param RequestInterface $request
         * @param ResponseInterface $response
         * @return static
         */
        public static function createNewWithRequestResponse(RequestInterface $request, ResponseInterface $response)
        {
            $body = json_decode((string)$response->getBody(), true);
            $e = new static($body['message'], $body['code']);

            $e->setRequest($request);
            $e->setResponse($response);

            return $e;
        }

        /**
         * @param RequestInterface $r
         */
        public function setRequest(RequestInterface $r)
        {
            $this->request = $r;
        }

        /**
         * @param ResponseInterface $r
         */
        public function setResponse(ResponseInterface $r)
        {
            $this->response = $r;
        }

        /**
         * @return RequestInterface
         */
        public function getRequest(): RequestInterface
        {
            return $this->request;
        }

        /**
         * @return ResponseInterface
         */
        public function getResponse(): ResponseInterface
        {
            return $this->response;
        }
    }