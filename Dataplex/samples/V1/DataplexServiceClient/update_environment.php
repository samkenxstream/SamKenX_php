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

// [START dataplex_v1_generated_DataplexService_UpdateEnvironment_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Dataplex\V1\DataplexServiceClient;
use Google\Cloud\Dataplex\V1\Environment;
use Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec;
use Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\OsImageRuntime;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Update the environment resource.
 *
 * @param string $environmentInfrastructureSpecOsImageImageVersion Dataplex Image version.
 */
function update_environment_sample(string $environmentInfrastructureSpecOsImageImageVersion): void
{
    // Create a client.
    $dataplexServiceClient = new DataplexServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $updateMask = new FieldMask();
    $environmentInfrastructureSpecOsImage = (new OsImageRuntime())
        ->setImageVersion($environmentInfrastructureSpecOsImageImageVersion);
    $environmentInfrastructureSpec = (new InfrastructureSpec())
        ->setOsImage($environmentInfrastructureSpecOsImage);
    $environment = (new Environment())
        ->setInfrastructureSpec($environmentInfrastructureSpec);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $dataplexServiceClient->updateEnvironment($updateMask, $environment);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Environment $result */
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
    $environmentInfrastructureSpecOsImageImageVersion = '[IMAGE_VERSION]';

    update_environment_sample($environmentInfrastructureSpecOsImageImageVersion);
}
// [END dataplex_v1_generated_DataplexService_UpdateEnvironment_sync]
