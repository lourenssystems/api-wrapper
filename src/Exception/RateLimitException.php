<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;

    /**
     * Class RateLimitException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class RateLimitException extends LSException
    {

        use RequestResponse;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 6000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Too many requests';
    }