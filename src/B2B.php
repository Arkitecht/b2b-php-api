<?php

namespace Arkitecht\B2B;

use Arkitecht\B2B\Coupon;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class B2B
{
    private $token;
    private $client;
    private $auth;
    private $olrId;
    private $scopes = [];
    private $endpoint = 'https://support-api.b2bsoft.com';

    /**
     * B2B constructor.
     *
     * @param string $auth
     * @param string $scopes
     * @param bool   $init
     */
    public function __construct($auth, $scopes = '', $init = false)
    {
        $this->auth = $auth;
        $this->addScope($scopes);
        if ($init) {
            $this->getOauthToken();
            $this->getToken();
        }
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
        $response = $client->post('https://support-sso.b2bsoft.com/core/connect/token', [
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
     * @return string
     * @throws \Exception
     */
    /*public function getCoupons()
    {
        return $this->makeRequest('/coupon/api/coupons');
    }*/

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
    public function getProducts($filters = [], $pageIndex = 1, $pageSize = 1000)
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
    public function getProductsInStock($filters = [], $pageIndex = 1, $pageSize = 1000)
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
    public function getStoreProductsInStock($storeId, $filters = [], $pageIndex = 1, $pageSize = 1000)
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
                $parameters["filter.{$filter}"] = $value;
            }
        }

        return $parameters;
    }

}