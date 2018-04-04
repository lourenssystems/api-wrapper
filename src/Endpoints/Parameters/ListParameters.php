<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Endpoints\Parameters;

    /**
     * Class ListParameters
     * @package LourensSystems\ApiWrapper\Endpoints\Parameters
     */
    class ListParameters
    {

        const LIMIT_MAX = 200;
        const LIMIT_DEFAULT = 100;

        /**
         * @var string
         */
        private $q;

        /**
         * @var string
         */
        private $filter;

        /**
         * @var string
         */
        private $with;

        /**
         * @var string
         */
        private $sort;

        /**
         * @var int
         */
        private $limit;

        /**
         * @var int
         */
        private $offset;

        public function setQ(string $q): ListParameters
        {
            $this->q = $q;

            return $this;
        }

        public function setFilterArray(array $filter): ListParameters
        {
            $this->filter = json_encode($filter);

            return $this;
        }

        public function setFilter(string $filter): ListParameters
        {
            $this->filter = $filter;

            return $this;
        }

        public function setWithArray(array $with): ListParameters
        {
            $this->with = implode(',', $with);

            return $this;
        }

        public function setWith(string $with): ListParameters
        {
            $this->with = $with;

            return $this;
        }

        public function setSortArray(array $sort): ListParameters
        {
            $this->sort = implode(',', $sort);

            return $this;
        }

        public function setSort(string $sort): ListParameters
        {
            $this->sort = $sort;

            return $this;
        }

        public function setLimit(int $limit): ListParameters
        {
            $this->limit = $limit;

            return $this;
        }

        public function setMaxLimit(): ListParameters
        {
            $this->setLimit(self::LIMIT_MAX);

            return $this;
        }

        public function setOffset(int $offset): ListParameters
        {
            $this->offset = $offset;

            return $this;
        }

        public function hasQ(): bool {
            return !is_null($this->q);
        }

        public function hasFilter(): bool {
            return !is_null($this->filter);
        }

        public function hasWidth(): bool {
            return !is_null($this->with);
        }

        public function hasSort(): bool {
            return !is_null($this->sort);
        }

        public function hasLimit(): bool {
            return !is_null($this->limit);
        }

        public function hasOffset(): bool {
            return !is_null($this->offset);
        }

        public function getQ(): string
        {
            return $this->q;
        }

        public function getFilter(): string
        {
            return $this->filter;
        }

        public function getWith(): string
        {
            return $this->with;
        }

        public function getSort(): string
        {
            return $this->sort;
        }

        public function getLimit(): int
        {
            return $this->limit;
        }

        public function getOffset(): int
        {
            return $this->offset;
        }
    }
