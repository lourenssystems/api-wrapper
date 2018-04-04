<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyInvalidValueException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyInvalidValueException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1102;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid value';

    }