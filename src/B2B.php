<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\Coupon;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Middleware;

class B2B
{
    private $token;
    private $client;
    private $auth;
    private $olrId;
    private $scopes = [];
    private $endpoint;
    private $sso_endpoint;
    private $environment = 'development';
    private $debug = false;
    private $endpoints = [
        'development' => [
            'api' => 'https://support-api.b2bsoft.com',
            'sso' => 'https://support-sso.b2bsoft.com',
        ],
        'production'  => [
            'api' => 'https://api.b2bsoft.com',
            'sso' => 'https://sso.b2bsoft.com',
        ],
    ];

    /**
     * B2B constructor.
     *
     * @param string $auth
     * @param string $scopes
     * @param bool   $init
     * @param string $environment
     */
    public function __construct($auth, $scopes = '', $init = false, $environment = 'development')
    {
        $this->auth = $auth;
        $this->addScope($scopes);
        $this->setEnvironment($environment);

        if ($init) {
            $this->getOauthToken();
            $this->getToken();
        }
    }

    /**
     * Set the B2B environment to use
     *
     * @param $environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        $this->endpoint = $this->endpoints[ $environment ]['api'];
        $this->sso_endpoint = $this->endpoints[ $environment ]['sso'];

        return $this;
    }

    /**
     * Get the current environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Get the current endpoint being used
     *
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Get the current SSO endpoint being used
     *
     * @return mixed
     */
    public function getSsoEndpoint()
    {
        return $this->sso_endpoint;
    }

    public function setDebug($debug = true)
    {
        $this->debug = $debug;
    }

    /**
     * Add the oauth scopes
     *
     * @param $scopes
     *
     * @return $this
     */
    public function addScope($scopes)
    {
        if ($scopes) {
            if (is_array($scopes)) {
                $this->scopes = array_merge($this->scopes, $scopes);
            } else {
                $this->addScope(explode(' ', $scopes));
            }
        }

        return $this;
    }

    /**
     * Get the current scopes
     *
     * @param bool $asString
     *
     * @return array|string
     */
    public function scopes($asString = false)
    {
        if ($asString) {
            return implode(' ', $this->scopes);
        }

        return $this->scopes;
    }

    /**
     * Set the olrID for requests
     *
     * @param $olrId
     *
     * @return $this
     */
    public function setOlrId($olrId)
    {
        $this->olrId = $olrId;

        return $this;
    }

    /**
     * Get the current local oAuth token
     *
     * @param string $key
     *
     * @return mixed
     */
    public function getToken($key = '')
    {
        if ($key) {
            if (!!property_exists($this->token, $key)) {

            }

            return $this->token->{$key};
        }

        return $this->token;
    }


    /**
     * Request a new oAuth token
     *
     * @return mixed
     */
    private function getOauthToken()
    {
        $client = new Client();
        $response = $client->post($this->sso_endpoint . '/core/connect/token', [
            'headers'     => [
                'Accept'        => 'application/json',
                'Authorization' => 'Basic ' . $this->auth,
            ],
            'form_params' => [
                'grant_type' => 'client_credentials',
                'scope'      => $this->scopes(true),
            ],
        ]);

        $this->setTokenFromResponse($response->getBody()->getContents());

        return $this->token;
    }

    /**
     * Get or request a new token
     *
     * @return mixed
     */
    private function getCurrentToken()
    {
        if ($this->hasCurrentToken()) {
            return $this->token;
        } else {
            $this->getOauthToken();

            return $this->token;
        }
    }

    /**
     * Get a transaction
     *
     * @param $transactionId
     *
     * @return string
     * @throws \Exception
     */
    public function getTransaction($transactionId)
    {
        return $this->makeRequest('/Transaction/api/transaction/' . $transactionId);
    }

    /**
     * Get the list of coupons
     *
     * @param string $sku
     * @param null   $isActive
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getCoupons($sku = '', $isActive = null, $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters([], $pageIndex, $pageSize);
        if ($sku) {
            $parameters['Sku'] = $sku;
        }
        if ($isActive !== null) {
            $parameters['IsActive'] = ($isActive) ? 'true' : 'false';
        }

        return $this->makeRequest('/coupon/api/coupons', $parameters);
    }

    /**
     * Get a single Coupon
     *
     * @param $sku
     *
     * @return string
     * @throws \Exception
     */
    public function getCoupon($sku)
    {
        return $this->makeRequest('/coupon/api/coupons/' . $sku);
    }

    /**
     * Add a coupon
     *
     * @param $couponData
     *
     * @return string
     * @throws \Exception
     */
    public function addCoupon($couponData)
    {
        if (is_a($couponData, Coupon::class)) {
            $couponData = ['coupons' => [$couponData]];
        } elseif (is_array($couponData)) {
            $couponData = ['coupons' => $couponData];
        }

        return $this->makeRequest('/coupon/api/coupons', $couponData, 'post');
    }

    /**
     * Update a Coupon
     *
     * @param $couponData
     *
     * @return string
     * @throws \Exception
     */
    public function updateCoupon($couponData)
    {
        if (is_a($couponData, Coupon::class)) {
            $couponData = ['coupons' => [$couponData->forUpdate()]];
        } elseif (is_array($couponData)) {
            $couponData = ['coupons' => [$couponData]];
        }

        return $this->makeRequest('/coupon/api/coupons', $couponData, 'put');
    }

    /**
     * Add a serial for a coupon
     *
     * @param $serialData
     *
     * @return string
     * @throws \Exception
     */
    public function addCouponSerials($serialData)
    {
        if (!is_array($serialData)) {
            $serialData = [$serialData];
        }
        $data = ['couponSerialNumbers' => $serialData];

        return $this->makeRequest('/coupon/api/coupons/serials', $data, 'post');
    }

    /**
     * Get the serial number for a coupon
     *
     * @param $sku
     *
     * @return string
     * @throws \Exception
     */
    public function getCouponSerials($sku)
    {
        return $this->makeRequest('/coupon/api/coupons/serials/' . $sku);
    }


    /**
     * Get the list of product Manufacturers
     *
     * @return string
     * @throws \Exception
     */
    public function getManufacturers()
    {
        return $this->makeRequest('/Product/api/manufacturers');
    }

    /**
     * Get the list of product departments
     *
     * @return string
     * @throws \Exception
     */
    public function getDepartments()
    {
        return $this->makeRequest('/Product/api/departments');
    }

    /**
     * Get the list of product department categories
     *
     * @param $departmentId
     *
     * @return string
     * @throws \Exception
     */
    public function getDepartmentCategories($departmentId)
    {
        return $this->makeRequest("/Product/api/departments/{$departmentId}/categories");
    }

    /**
     * Get the list of product categories
     *
     * @return string
     * @throws \Exception
     */
    public function getCategories()
    {
        return $this->makeRequest('/Product/api/categories');
    }

    /**
     * Get a list of system defined product categories
     *
     * @return string
     * @throws \Exception
     */
    public function getSystemCategories()
    {
        return $this->makeRequest('/Product/api/systemcategories');
    }


    /**
     * Get a list of products
     *
     * @param array $filters
     * @param int   $pageIndex
     * @param int   $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getProducts($filters = [], $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters($filters, $pageIndex, $pageSize);

        return $this->makeRequest('/Product/api/products', $parameters);
    }

    /**
     * Get a list of in stock products
     *
     * @param array $filters
     * @param int   $pageIndex
     * @param int   $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getProductsInStock($filters = [], $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters($filters, $pageIndex, $pageSize);

        return $this->makeRequest('/Product/api/products-in-stock', $parameters);
    }

    /**
     * Get a list of stores
     *
     * @return string
     * @throws \Exception
     */
    public function getStores()
    {
        return $this->makeRequest('/Product/api/stores');
    }

    /**
     * Get a single store
     *
     * @param $storeId
     *
     * @return string
     * @throws \Exception
     */
    public function getStore($storeId)
    {
        return $this->makeRequest("/Product/api/stores/{$storeId}");
    }

    /**
     * Get a list of products in stock for a single store
     *
     * @param int   $storeId
     * @param array $filters
     * @param int   $pageIndex
     * @param int   $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getStoreProductsInStock($storeId, $filters = [], $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters($filters, $pageIndex, $pageSize);

        return $this->makeRequest("/Product/api/stores/{$storeId}/products-in-stock", $parameters);
    }

    /**
     * Create a purchase order
     *
     * @param PurchaseOrder|string $purchaseOrderData
     *
     * @return string
     * @throws \Exception
     */
    public function addPurchaseOrder($purchaseOrderData)
    {
        return $this->makeRequest('/inventory/api/purchasing/order', $purchaseOrderData, 'post');
    }

    /**
     * Get purchase orders
     *
     * @param string $referenceNum
     * @param string $vendorCode
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getPurchaseOrders($referenceNum = '', $vendorCode = '', $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters([], $pageIndex, $pageSize);
        if ($referenceNum) {
            $parameters['ReferenceNum'] = $referenceNum;
        }
        if ($vendorCode) {
            $parameters['VendorCode'] = $vendorCode;
        }

        return $this->makeRequest('/inventory/api/purchasing/order', $parameters);
    }

    /**
     * Get a single purchase order
     *
     * @param string $purchaseOrderId
     *
     * @return string
     * @throws \Exception
     */
    public function getPurchaseOrder($purchaseOrderId)
    {
        return $this->makeRequest('/inventory/api/purchasing/order/' . $purchaseOrderId);
    }

    /**
     * Get a purchase order receipts
     *
     *
     * @param string $referenceNum
     * @param string $vendorCode
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return string
     * @throws \Exception
     */
    public function getPurchaseOrderReceipts($referenceNum = '', $vendorCode = '', $pageIndex = 0, $pageSize = 1000)
    {
        $parameters = $this->getPagingAndFilterParameters([], $pageIndex, $pageSize);
        if ($referenceNum) {
            $parameters['ReferenceNum'] = $referenceNum;
        }
        if ($vendorCode) {
            $parameters['VendorCode'] = $vendorCode;
        }

        return $this->makeRequest('/inventory/api/receiving/order', $parameters);
    }

    /**
     * Get a single purchase order
     *
     * @param string $purchaseOrderId
     *
     * @return string
     * @throws \Exception
     */
    public function getPurchaseOrderReceipt($purchaseOrderId)
    {
        return $this->makeRequest('/inventory/api/receiving/order/' . $purchaseOrderId);
    }

    /**
     * Get the VMI report
     *
     * @param int|array         $location           Store Id or Ids
     * @param string            $vendor             B2b Vendor Identifier
     * @param string|array|null $periodOrParameters Date period or parameters array
     * @param array             $parameters         Additional request parameters
     *
     * @return string
     * @throws \Exception
     */
    public function getVmiReport($location, $vendor, $periodOrParameters = null, $parameters = [])
    {
        if (is_array($periodOrParameters)) {
            $parameters = $periodOrParameters;
        } else {
            $parameters['Period'] = $periodOrParameters;
        }
        $parameters['Location'] = $location;
        $parameters['Vendor'] = $vendor;

        return $this->makeRequest('/inventory/api/purchasing/reporting', $parameters);
    }

    /**
     * Make the request to the B2B endpoint, adding the authorization token
     *
     * @param string $endpoint
     * @param array  $parameters
     * @param string $method
     *
     * @return string
     * @throws \Exception
     */
    private function makeRequest($endpoint, $parameters = [], $method = 'get')
    {
        $fullEndpoint = $this->endpoint . $endpoint;

        $olrId = $this->olrId;
        if (!$olrId) {
            throw new \Exception('Mo olrId specified. Must be set using setOlrId()');
        }
        $this->getCurrentToken();
        $client = new Client();
        try {

            $request = [
                'headers' => [
                    'User-Agent'    => 'testing/1.0',
                    'Accept'        => 'application/json',
                    'Authorization' => 'Bearer ' . $this->getToken('access_token'),
                    'OlrIdentity'   => $olrId,
                ],
                'verify'  => false,
            ];

            if ($parameters) {
                if ($method == 'post' || $method == 'put') {
                    $request['json'] = $parameters;
                } elseif ($method == 'get') {
                    $request['query'] = $parameters;
                }
            }

            if ($this->debug) {
                $tapMiddleware = Middleware::tap(function ($realRequest) use ($fullEndpoint, $request) {
                    echo "Environment: {$this->environment}\n";


                    echo "Request URL: {$fullEndpoint}\n";

                    echo "Request Body:\n";
                    echo $realRequest->getBody();
                    print_r($request);
                    echo "\n";
                });
                $clientHandler = $client->getConfig('handler');
                $request['handler'] = $tapMiddleware($clientHandler);
            }

            $response = $client->$method($fullEndpoint, $request);
        } catch (ClientException $exception) {
            //dd($exception->getMessage(), $exception->getRequest()->getMethod(), $exception->getRequest()->getUri(), $exception->getRequest()->getBody()->getContents());

            return $exception;
        } catch (ServerException $exception) {
            return $exception;
        }

        return $response->getBody()->getContents();
    }

    /**
     * Set the local token from the oAuth response
     *
     * @param $response
     */
    private function setTokenFromResponse($response)
    {
        $json = json_decode($response);
        $this->token = $json;
        $this->token->expires_at = Carbon::now()->addSeconds($json->expires_in);
    }

    /**
     * Do we have a current (non expired) token
     *
     * @return bool
     */
    private function hasCurrentToken()
    {
        if (!$this->token || !property_exists($this->token, 'access_token') || !$this->token->access_token) {
            return false;
        } elseif ($this->tokenIsExpired()) {
            return false;
        }

        return true;
    }

    /**
     * Is the token expired?
     *
     * @return bool
     */
    private function tokenIsExpired()
    {
        $expires = $this->getToken('expires_at');
        if (!$expires) {
            return true;
        } elseif (Carbon::now()->greaterThanOrEqualTo($expires)) {
            return true;
        }

        return false;
    }

    /**
     * Get the paging and filter parameters - shared logic
     *
     * @param $filters
     * @param $pageIndex
     * @param $pageSize
     *
     * @return array
     */
    private function getPagingAndFilterParameters($filters, $pageIndex, $pageSize)
    {
        /*
         * filter.categoryCode
         * filter.systemCategoryCode
         * filter.upc
         * filter.sku
         * filter.serial
         * filter.shortName
         * filter.inventoryType
         * filter.active
         * filter.lookup
         */
        $parameters = [
            'pageIndex' => $pageIndex,
            'pageSize'  => $pageSize,
        ];
        if ($filters) {
            foreach ($filters as $filter => $value) {
                $parameters[ $filter ] = $value;
            }
        }

        return $parameters;
    }

}
