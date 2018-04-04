<?php
    declare(strict_types=1);

    namespace LourensSystems\ApiWrapper\Interfaces;

    use LourensSystems\ApiWrapper\Response\Response;

    /**
     * Interface FileInterface
     * @package LourensSystems\ApiWrapper\Interfaces
     */
    interface FileInterface
    {
        /**
         * Uploads file with optional data
         * @param array $fileData
         * @param array $data
         * @return Response
         */
        public function uploadFile(array $fileData, array $data = []): Response;

        /**
         * gets file
         * @param int $id
         * @return Response
         */
        public function getFile(int $id): Response;

    }