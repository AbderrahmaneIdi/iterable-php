<?php
/**
 * ExperimentsApi
 * PHP version 5
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Iterable API
 *
 * Iterable API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: idihya@webpick.info
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace IterableIA\Iterable\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use IterableIA\Iterable\ApiException;
use IterableIA\Iterable\Configuration;
use IterableIA\Iterable\HeaderSelector;
use IterableIA\Iterable\ObjectSerializer;

/**
 * ExperimentsApi Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExperimentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getExperimentMetrics
     *
     * Get metrics for experiments
     *
     * @param  float[] $experiment_id Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. (optional)
     * @param  float[] $campaign_id Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. (optional)
     * @param  \DateTime $start_date_time export starting from (&gt;&#x3D;) (optional)
     * @param  \DateTime $end_date_time export ending at (&lt;&#x3D;) (optional)
     *
     * @throws \IterableIA\Iterable\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \IterableIA\Iterable\Model\ExperimentMetricsResponse
     */
    public function getExperimentMetrics($experiment_id = null, $campaign_id = null, $start_date_time = null, $end_date_time = null)
    {
        list($response) = $this->getExperimentMetricsWithHttpInfo($experiment_id, $campaign_id, $start_date_time, $end_date_time);
        return $response;
    }

    /**
     * Operation getExperimentMetricsWithHttpInfo
     *
     * Get metrics for experiments
     *
     * @param  float[] $experiment_id Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. (optional)
     * @param  float[] $campaign_id Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. (optional)
     * @param  \DateTime $start_date_time export starting from (&gt;&#x3D;) (optional)
     * @param  \DateTime $end_date_time export ending at (&lt;&#x3D;) (optional)
     *
     * @throws \IterableIA\Iterable\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \IterableIA\Iterable\Model\ExperimentMetricsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExperimentMetricsWithHttpInfo($experiment_id = null, $campaign_id = null, $start_date_time = null, $end_date_time = null)
    {
        $returnType = '\IterableIA\Iterable\Model\ExperimentMetricsResponse';
        $request = $this->getExperimentMetricsRequest($experiment_id, $campaign_id, $start_date_time, $end_date_time);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IterableIA\Iterable\Model\ExperimentMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getExperimentMetricsAsync
     *
     * Get metrics for experiments
     *
     * @param  float[] $experiment_id Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. (optional)
     * @param  float[] $campaign_id Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. (optional)
     * @param  \DateTime $start_date_time export starting from (&gt;&#x3D;) (optional)
     * @param  \DateTime $end_date_time export ending at (&lt;&#x3D;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExperimentMetricsAsync($experiment_id = null, $campaign_id = null, $start_date_time = null, $end_date_time = null)
    {
        return $this->getExperimentMetricsAsyncWithHttpInfo($experiment_id, $campaign_id, $start_date_time, $end_date_time)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getExperimentMetricsAsyncWithHttpInfo
     *
     * Get metrics for experiments
     *
     * @param  float[] $experiment_id Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. (optional)
     * @param  float[] $campaign_id Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. (optional)
     * @param  \DateTime $start_date_time export starting from (&gt;&#x3D;) (optional)
     * @param  \DateTime $end_date_time export ending at (&lt;&#x3D;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getExperimentMetricsAsyncWithHttpInfo($experiment_id = null, $campaign_id = null, $start_date_time = null, $end_date_time = null)
    {
        $returnType = '\IterableIA\Iterable\Model\ExperimentMetricsResponse';
        $request = $this->getExperimentMetricsRequest($experiment_id, $campaign_id, $start_date_time, $end_date_time);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getExperimentMetrics'
     *
     * @param  float[] $experiment_id Experiment to export. Specify multiple experimentId query parameters to export multiple experiments. (optional)
     * @param  float[] $campaign_id Campaign whose experiments you want to export. Specify multiple campaignId query parameters to export multiple campaigns. (optional)
     * @param  \DateTime $start_date_time export starting from (&gt;&#x3D;) (optional)
     * @param  \DateTime $end_date_time export ending at (&lt;&#x3D;) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getExperimentMetricsRequest($experiment_id = null, $campaign_id = null, $start_date_time = null, $end_date_time = null)
    {

        $resourcePath = '/api/experiments/metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($experiment_id)) {
            $experiment_id = ObjectSerializer::serializeCollection($experiment_id, 'multi', true);
        }
        if ($experiment_id !== null) {
            $queryParams['experimentId'] = ObjectSerializer::toQueryValue($experiment_id, null);
        }
        // query params
        if (is_array($campaign_id)) {
            $campaign_id = ObjectSerializer::serializeCollection($campaign_id, 'multi', true);
        }
        if ($campaign_id !== null) {
            $queryParams['campaignId'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($start_date_time !== null) {
            $queryParams['startDateTime'] = ObjectSerializer::toQueryValue($start_date_time, 'date-time');
        }
        // query params
        if ($end_date_time !== null) {
            $queryParams['endDateTime'] = ObjectSerializer::toQueryValue($end_date_time, 'date-time');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/csv']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/csv'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Api_Key');
        if ($apiKey !== null) {
            $headers['Api_Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
