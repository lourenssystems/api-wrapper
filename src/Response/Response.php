<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Response;

    /**
     * Class Response
     * @package LourensSystems\ApiWrapper\Response
     */
    class Response extends \GuzzleHttp\Psr7\Response
    {

        /**
         * @var \stdClass
         */
        protected $parsedBody;

        /**
         * @param \GuzzleHttp\Psr7\Response $response
         * @return Response
         */
        public static function createFromResponse(\GuzzleHttp\Psr7\Response $response): Response
        {
            $newResponse = new static($response->getStatusCode(), $response->getHeaders(), $response->getBody(),
                $response->getProtocolVersion(), $response->getReasonPhrase());

            return $newResponse;
        }

        /**
         * Returns response body as an object
         * @return \stdClass
         */
        public function getParsedBody(): \stdClass
        {
            if (!$this->parsedBody) {
                $this->parsedBody = \GuzzleHttp\json_decode((string)$this->getBody());
            }

            return $this->parsedBody;
        }

        /**
         * @return ResponseItem
         */
        public function getItem(): ResponseItem
        {
            return ResponseItem::createFromResponse($this);
        }

        /**
         * @return ResponseItems
         */
        public function getItems(): ResponseItems
        {
            return ResponseItems::createFromResponse($this);
        }

        /**
         * @return ResponseFile
         */
        public function getFile(): ResponseFile
        {
            return ResponseFile::createFromResponse($this);
        }
    }