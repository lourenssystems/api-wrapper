<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Exception;

    use LourensSystems\ApiWrapper\Exception\Interfaces\StickToDefaultValues;
    use LourensSystems\ApiWrapper\Exception\Traits\RequestResponse;
    use LourensSystems\ApiWrapper\Exception\Traits\StickToDefaultValuesImplementation;

    /**
     * Class NotFoundException
     * @package LourensSystems\ApiWrapper\Exception
     */
    class NotFoundException extends LSException implements StickToDefaultValues
    {

        use RequestResponse;
        use StickToDefaultValuesImplementation;

        /**
         * Default exception code
         * @var int
         */
        protected $defaultCode = 3000;

        /**
         * Default exception message
         * @var string
         */
        protected $defaultMessage = 'Entity not found';

        /**
         * Type of entity that does not exist
         * @var string
         */
        private $entityType;

        /**
         * Creates new exception for specified entity type
         * @param string $entityType
         * @param string $message
         * @param int $code
         * @return NotFoundException
         */
        public static function createNew($entityType, $message = '', $code = 0)
        {
            $new = new static($message, $code);
            $new->setEntityType($entityType);

            return $new;
        }

        /**
         * Sets type of the entity that does not exists
         * @param string $entityType
         */
        public function setEntityType(string $entityType)
        {
            $this->entityType = $entityType;
        }

        /**
         * Gets entity type
         * @return string
         */
        public function getEntityType(): string
        {
            return $this->entityType;
        }
    }