<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Endpoints\Parameters\PdfParameters;
    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface PdfInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface PdfInterface
    {

        /**
         * Gets PDF of specified id
         * @param int $id
         * @param PdfParameters|null $parameters
         * @return Response
         */
        public function getPdf(int $id, PdfParameters $parameters = null): Response;

    }