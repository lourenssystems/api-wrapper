<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Feature;

    /**
     * Class FeatureSoftLimitException
     * @package LourensSystems\ApiWrapper\Exception\Feature
     */
    class FeatureSoftLimitException extends FeatureLimitException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 4002;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'The following soft limit has been reached for the current plan';
    }