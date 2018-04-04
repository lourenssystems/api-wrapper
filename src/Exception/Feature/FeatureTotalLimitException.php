<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Feature;

    /**
     * Class FeatureTotalLimitException
     * @package LourensSystems\ApiWrapper\Exception\Feature
     */
    class FeatureTotalLimitException extends FeatureLimitException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 4003;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'The following total limit has been reached for the current package';
    }