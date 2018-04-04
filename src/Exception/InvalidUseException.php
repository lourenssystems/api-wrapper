<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    /**
     * Class InvalidUseException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class InvalidUseException extends LSException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 0;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid code use';
    }