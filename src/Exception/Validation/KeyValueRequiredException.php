<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyValueRequiredException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyValueRequiredException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1100;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Value is required';

    }