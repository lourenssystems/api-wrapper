<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface CreateInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface CreateInterface
    {

        /**
         * Creates new entity
         * @param array $data
         * @return Response
         */
        public function create(array $data): Response;

    }