<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\BadRequest;

    use LourensSystems\ApiWrapper\Exception\BadRequestException;

    /**
     * Class InvalidSortKeyException
     * @package LourensSystems\ApiWrapper\Exception\BadRequest
     */
    class InvalidSortKeyException extends BadRequestException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2102;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid sorting key value';
    }