<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\Validation;

    /**
     * Class KeyInvalidFileException
     * @package LourensSystems\ApiWrapper\Exception\Validation
     */
    class KeyInvalidFileException extends KeyException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1108;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid file';

    }