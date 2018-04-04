<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyValueCannotBeChangedException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyValueCannotBeChangedException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1104;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Value cannot be changed';

    }