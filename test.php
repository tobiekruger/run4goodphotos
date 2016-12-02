<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */



require __DIR__ . '/vendor/autoload.php';
// Create a new client.
$client = new Google_Client();



$client->setApplicationName("API key");
$client->setDeveloperKey("AIzaSyCsTwCeDeEGfj92HrMKNiO2WzLdqo_gn5M");



$client->addScope('https://www.googleapis.com/auth/cloud-platform');

// Create a new Storage service.
$service = new Google_Service_Storage($client);

// * Name of the bucket in which to look for objects.
$bucket = 'corprun4good2016';

$response = $service->objects->listObjects($bucket);

foreach ($response['items'] as $element) {
  // TODO: Add code here to process the element.
}

