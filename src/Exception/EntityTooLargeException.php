<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;

    /**
     * Class EntityTooLargeException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class EntityTooLargeException extends LSException
    {

        use RequestResponse;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 0;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Entity too large';
    }