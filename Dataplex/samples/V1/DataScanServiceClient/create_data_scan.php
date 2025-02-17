<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START dataplex_v1_generated_DataScanService_CreateDataScan_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Dataplex\V1\DataScan;
use Google\Cloud\Dataplex\V1\DataScanServiceClient;
use Google\Cloud\Dataplex\V1\DataSource;
use Google\Rpc\Status;

/**
 * Creates a DataScan resource.
 *
 * @param string $formattedParent The resource name of the parent location:
 *                                `projects/{project}/locations/{location_id}`
 *                                where `project` refers to a *project_id* or *project_number* and
 *                                `location_id` refers to a GCP region. Please see
 *                                {@see DataScanServiceClient::locationName()} for help formatting this field.
 * @param string $dataScanId      DataScan identifier.
 *
 *                                * Must contain only lowercase letters, numbers and hyphens.
 *                                * Must start with a letter.
 *                                * Must end with a number or a letter.
 *                                * Must be between 1-63 characters.
 *                                * Must be unique within the customer project / location.
 */
function create_data_scan_sample(string $formattedParent, string $dataScanId): void
{
    // Create a client.
    $dataScanServiceClient = new DataScanServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $dataScanData = new DataSource();
    $dataScan = (new DataScan())
        ->setData($dataScanData);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $dataScanServiceClient->createDataScan($formattedParent, $dataScan, $dataScanId);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var DataScan $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DataScanServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $dataScanId = '[DATA_SCAN_ID]';

    create_data_scan_sample($formattedParent, $dataScanId);
}
// [END dataplex_v1_generated_DataScanService_CreateDataScan_sync]
