<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyValueAlreadyExistsException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyValueAlreadyExistsException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1105;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Value already exists';

    }