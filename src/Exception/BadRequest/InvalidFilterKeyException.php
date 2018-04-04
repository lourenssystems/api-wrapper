<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\BadRequest;

    use LourensSystems\ApiWrapper\Exception\BadRequestException;

    /**
     * Class InvalidFilterKeyException
     * @package LourensSystems\ApiWrapper\Exception\BadRequest
     */
    class InvalidFilterKeyException extends BadRequestException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2101;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid filter key value';
    }