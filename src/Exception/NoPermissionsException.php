<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Interfaces\StickToDefaultValues;
    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;
    use LourensSystems\ApiWrapper\Exception\Traits\StickToDefaultValuesImplementation;

    /**
     * Class NoPermissionsException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class NoPermissionsException extends LSException implements StickToDefaultValues
    {

        use RequestResponse;
        use StickToDefaultValuesImplementation;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 5000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'User does not have sufficient permissions to perform this action';
    }