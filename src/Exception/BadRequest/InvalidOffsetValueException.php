<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception\BadRequest;

    use LourensSystems\ApiWrapper\Exception\BadRequestException;

    /**
     * Class InvalidOffsetValueException
     * @package LourensSystems\ApiWrapper\Exception\BadRequest
     */
    class InvalidOffsetValueException extends BadRequestException
    {

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2104;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid offset value. Offset cannot be < 0';
    }