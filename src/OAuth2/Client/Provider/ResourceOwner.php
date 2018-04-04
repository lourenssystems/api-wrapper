<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\OAuth2\Client\Provider;

    use League\OAuth2\Client\Provider\ResourceOwnerInterface;

    /**
     * Represents a generic resource owner for use with the AbstractProvider.
     */
    class ResourceOwner implements ResourceOwnerInterface
    {

        /**
         * Raw response
         *
         * @var array
         */
        protected $response;

        /**
         * Creates new resource owner.
         *
         * @param array $response
         */
        public function __construct(array $response = array())
        {
            $this->response = $response;
        }

        /**
         * Get resource owner id
         *
         * @return string
         */
        public function getId()
        {
            return $this->response['uid'] ?: null;
        }

        /**
         * Get resource owner name
         *
         * @return string
         */
        public function getName()
        {
            return $this->response['display_name'] ?: null;
        }

        /**
         * Return all of the owner details available as an array.
         *
         * @return array
         */
        public function toArray()
        {
            return $this->response;
        }
    }