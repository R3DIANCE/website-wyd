<?php
if (!defined('LOCAL')) exit();

class CurlWeb
{
    private string $url;
    private string $uri;
    private array $postdata;
    private string $getdata;
    private array $header;

    public function __construct($web)
    {
        switch ($web) {
            case 'picpay': {
                return true;
            }
        }
        return false;
    }

    public function curlExec(): string
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL             => $this->url.$this->uri.$this->getdata,
            CURLOPT_HEADER          => true,
            CURLOPT_HTTPHEADER      => $this->header,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_POST            => true,
            CURLOPT_POSTFIELDS      => $this->postdata
        ]);

        $ret = curl_exec($ch);

        return $ret;
    }

    public function readerJson($json): array
    {
        $ret = [];

        $ret = json_decode($json, true);

        return $ret;
    }

    public function setGetData(): bool
    {
        $this->getdata = '';
        return false;
    }

    public function setUrlPicPay(): bool
    {
        if ($this->url = 'https://appws.picpay.com/ecommerce/public/') {
            return true;
        }
        return false;
    }

    public function setHeaderPicPay(): bool
    {
        if ($this->header = ['Content-Type: application/json', 'x-seller-token: '.PICPAY['seller']]) {
            return true;
        }
        return false;
    }

    public function setUriPicPay($type): bool
    {
        switch ($type) {
            case 'createPayment': {
                $this->uri = 'payment/';
                break;
            }

            case 'statusPayment': {
                $this->uri = 'payment/'.getReferenceId().'/cancellations';
                break;
            }

            case 'Cancellations': {
                $this->uri = 'payment/'.getReferenceId().'/status';
                break;
            }

            case 'callback': {
                break;
            }
        }
        return false;
    }
}