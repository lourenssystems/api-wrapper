<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Feature;

    /**
     * Class FeatureHardLimitException
     * @package LourensSystems\ApiWrapper\Exception\Feature
     */
    class FeatureHardLimitException extends FeatureLimitException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 4001;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'The following hard limit has been reached for the current package';
    }