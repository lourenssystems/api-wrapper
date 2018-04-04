<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Endpoints\Parameters\GetParameters;
    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface GetInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface GetInterface
    {

        /**
         * Gets data of specified entity
         * @param int $id
         * @param GetParameters $parameters
         * @return Response
         */
        public function get(int $id, GetParameters $parameters = null): Response;

    }