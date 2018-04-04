<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyInvalidFileTypeException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyInvalidFileTypeException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1107;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid file type';

    }