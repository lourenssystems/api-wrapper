<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface DeleteInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface DeleteInterface
    {

        /**
         * Deletes specified entities
         * @param array $ids
         * @return Response
         */
        public function delete(array $ids): Response;

    }