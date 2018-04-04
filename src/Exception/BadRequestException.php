<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Interfaces\StickToDefaultValues;
    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;
    use LourensSystems\ApiWrapper\Exception\Traits\StickToDefaultValuesImplementation;

    /**
     * Class BadRequestException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class BadRequestException extends LSException implements StickToDefaultValues
    {

        use RequestResponse;
        use StickToDefaultValuesImplementation;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 2000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Bad request';
    }