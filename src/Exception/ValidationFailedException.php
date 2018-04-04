<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;

    /**
     * Class ValidationException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class ValidationFailedException extends LSException
    {

        use RequestResponse;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 1000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Invalid data';

        /**
         * @var array
         */
        private $errorsData;

        /**
         * @param array $errorsData
         */
        public function setErrorsData(array $errorsData)
        {
            $this->errorsData = $errorsData;
        }

        /**
         * @return [
         * 'key' => 'string',
         * 'code' => 0,
         * 'message' => 'string'
         * ][]
         */
        public function getErrorsData(): array
        {
            if (isset($this->errorsData)) {
                return $this->errorsData;
            }

            return [];
        }

        /**
         * @return array
         */
        public function getFieldKeys(): array
        {
            $keys = [];
            foreach ($this->getErrorsData() as $metaError) {
                $keys[] = $metaError['key'];
            }

            return $keys;
        }
    }