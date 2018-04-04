<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Endpoints\Parameters;

    /**
     * Class GetParameters
     * @package LourensSystems\ApiWrapper\Endpoints\Parameters
     */
    class GetParameters
    {

        /**
         * @var string
         */
        protected $with;

        public function setWith(string $with): GetParameters
        {
            $this->with = $with;

            return $this;
        }

        public function hasWidth(): bool
        {
            return !is_null($this->with);
        }

        public function getWith(): string
        {
            return $this->with;
        }
    }