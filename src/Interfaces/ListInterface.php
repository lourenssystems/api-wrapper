<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Response\Response;
    use LourensSystems\ApiWrapper\Endpoints\Parameters\ListParameters;

    /**
     * Interface ListInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface ListInterface
    {

        /**
         * Lists entities
         * @param ListParameters $parameters
         * @return Response
         */
        public function list(ListParameters $parameters = null): Response;

    }