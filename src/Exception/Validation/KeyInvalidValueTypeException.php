<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyInvalidValueTypeException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyInvalidValueTypeException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1101;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid value type';

    }