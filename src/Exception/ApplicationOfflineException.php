<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;

    /**
     * Class ApplicationOfflineException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class ApplicationOfflineException extends LSException
    {

        use RequestResponse;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 8000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Application is offline';
    }