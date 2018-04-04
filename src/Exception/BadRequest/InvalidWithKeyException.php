<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\BadRequest;

    use LourensSystems\ApiWrapper\Exception\BadRequestException;

    /**
     * Class InvalidWithKeyException
     * @package LourensSystems\ApiWrapper\Exception\BadRequest
     */
    class InvalidWithKeyException extends BadRequestException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2100;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid key for with listing parameter';
    }