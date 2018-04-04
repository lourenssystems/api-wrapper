<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\BadRequest;

    use LourensSystems\ApiWrapper\Exception\BadRequestException;

    /**
     * Class InvalidLimitValueException
     * @package LourensSystems\ApiWrapper\Exception\BadRequest
     */
    class InvalidLimitValueException extends BadRequestException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2103;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid limit value. Limit cannot be <= 0 or > 200';
    }