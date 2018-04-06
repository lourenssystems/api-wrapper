<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Endpoints\Parameters\PreviewParameters;
    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface PreviewInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface PreviewInterface
    {

        /**
         * Gets preview of specified id
         * @param int $id
         * @param PreviewParameters|null $parameters
         * @return Response
         */
        public function getPreview(int $id, PreviewParameters $parameters = null): Response;

    }