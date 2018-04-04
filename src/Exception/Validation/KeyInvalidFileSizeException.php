<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyInvalidFileSizeException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyInvalidFileSizeException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1106;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid file size';

    }