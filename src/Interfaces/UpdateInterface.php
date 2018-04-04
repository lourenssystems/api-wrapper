<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface UpdateInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface UpdateInterface
    {

        /**
         * Updates specified entity
         * @param int $id
         * @param array $data
         * @return Response
         */
        public function update(int $id, array $data): Response;

    }