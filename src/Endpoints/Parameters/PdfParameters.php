<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Endpoints\Parameters;

    /**
     * Class PdfParameters
     * @package LourensSystems\ApiWrapper\Endpoints\Parameters
     */
    class PdfParameters
    {

        /**
         * @var string
         */
        private $options;

        /**
         * Sets options (as array)
         * @param array $options
         * @return PdfParameters
         */
        public function setOptionsArray(array $options): PdfParameters
        {
            $this->options = json_encode($options);

            return $this;
        }

        /**
         * Sets options (as JSON string)
         * @param string $options
         * @return PdfParameters
         */
        public function setOptions(string $options): PdfParameters
        {
            $this->options = $options;

            return $this;
        }

        /**
         * Checks whether options are set
         * @return bool
         */
        public function hasOptions(): bool
        {
            return !is_null($this->options);
        }

        /**
         * Gets options JSON string
         * @return string
         */
        public function getOptions(): string
        {
            return $this->options;
        }
    }