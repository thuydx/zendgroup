<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace ZG\Services\Google\Contrib\Analytics;

use ZG\Services\Google\Model;
use ZG\Services\Google\Service;
use ZG\Services\Google\Client;
use ZG\Services\Google\Contrib\Analytics\DataGaServiceResource;
use ZG\Services\Google\Contrib\Analytics\DataMcfServiceResource;
use ZG\Services\Google\Contrib\Analytics\DataRealtimeServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementAccountsServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementCustomDataSourcesServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementDailyUploadsServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementExperimentsServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementGoalsServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementProfilesServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementSegmentsServiceResource;
use ZG\Services\Google\Contrib\Analytics\ManagementWebpropertiesServiceResource;

/**
 * Service definition for Google_Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/analytics/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AnalyticsService extends Service {
  public $data_ga;
  public $data_mcf;
  public $data_realtime;
  public $management_accounts;
  public $management_customDataSources;
  public $management_dailyUploads;
  public $management_experiments;
  public $management_goals;
  public $management_profiles;
  public $management_segments;
  public $management_webproperties;
  /**
   * Constructs the internal representation of the Analytics service.
   *
   * @param Google_Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'analytics/v3/';
    $this->version = 'v3';
    $this->serviceName = 'analytics';

    $client->addService($this->serviceName, $this->version);
    $this->data_ga = new DataGaServiceResource($this, $this->serviceName, 'ga', json_decode('{"methods": {"get": {"id": "analytics.data.ga.get", "path": "data/ga", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "segment": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "GaData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->data_mcf = new DataMcfServiceResource($this, $this->serviceName, 'mcf', json_decode('{"methods": {"get": {"id": "analytics.data.mcf.get", "path": "data/mcf", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "McfData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->data_realtime = new DataRealtimeServiceResource($this, $this->serviceName, 'realtime', json_decode('{"methods": {"get": {"id": "analytics.data.realtime.get", "path": "data/realtime", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}}, "response": {"$ref": "RealtimeData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_accounts = new ManagementAccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"list": {"id": "analytics.management.accounts.list", "path": "management/accounts", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_customDataSources = new ManagementCustomDataSourcesServiceResource($this, $this->serviceName, 'customDataSources', json_decode('{"methods": {"list": {"id": "analytics.management.customDataSources.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomDataSources"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_dailyUploads = new ManagementDailyUploadsServiceResource($this, $this->serviceName, 'dailyUploads', json_decode('{"methods": {"delete": {"id": "analytics.management.dailyUploads.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.dailyUploads.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "end-date": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploads"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "upload": {"id": "analytics.management.dailyUploads.upload", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "appendNumber": {"type": "integer", "required": true, "format": "int32", "minimum": "1", "maximum": "20", "location": "query"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "reset": {"type": "boolean", "default": "false", "location": "query"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploadAppend"}, "scopes": ["https://www.googleapis.com/auth/analytics"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "5MB", "protocols": {"simple": {"multipart": true, "path": "/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}, "resumable": {"multipart": true, "path": "/resumable/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}}}}}}', true));
    $this->management_experiments = new ManagementExperimentsServiceResource($this, $this->serviceName, 'experiments', json_decode('{"methods": {"delete": {"id": "analytics.management.experiments.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.experiments.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.experiments.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.experiments.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.experiments.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.experiments.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
    $this->management_goals = new ManagementGoalsServiceResource($this, $this->serviceName, 'goals', json_decode('{"methods": {"list": {"id": "analytics.management.goals.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Goals"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_profiles = new ManagementProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"list": {"id": "analytics.management.profiles.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Profiles"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_segments = new ManagementSegmentsServiceResource($this, $this->serviceName, 'segments', json_decode('{"methods": {"list": {"id": "analytics.management.segments.list", "path": "management/segments", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Segments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_webproperties = new ManagementWebpropertiesServiceResource($this, $this->serviceName, 'webproperties', json_decode('{"methods": {"list": {"id": "analytics.management.webproperties.list", "path": "management/accounts/{accountId}/webproperties", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Webproperties"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));

  }
}