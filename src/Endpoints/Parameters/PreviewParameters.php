<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Endpoints\Parameters;

    /**
     * Class PreviewParameters
     * @package LourensSystems\ApiWrapper\Endpoints\Parameters
     */
    class PreviewParameters
    {

        /**
         * @var int
         */
        private $size;

        /**
         * @var int
         */
        private $page;

        /**
         * Sets preview size (width in pixels)
         * @param int $size
         * @return PreviewParameters
         */
        public function setSize(int $size): PreviewParameters
        {
            $this->size = $size;

            return $this;
        }

        /**
         * Checks whether preview size is set
         * @return bool
         */
        public function hasSize(): bool
        {
            return !is_null($this->size);
        }

        /**
         * Gets preview size
         * @return int
         */
        public function getSize(): int
        {
            return $this->size;
        }

        /**
         * Sets preview page
         * @param int $page
         * @return PreviewParameters
         */
        public function setPage(int $page): PreviewParameters
        {
            $this->page = $page;

            return $this;
        }

        /**
         * Checks whether preview page is set
         * @return bool
         */
        public function hasPage(): bool
        {
            return !is_null($this->page);
        }

        /**
         * Gets preview page
         * @return int
         */
        public function getPage(): int
        {
            return $this->page;
        }

    }