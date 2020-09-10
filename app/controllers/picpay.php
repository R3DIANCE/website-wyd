<?php
if (!defined('LOCAL')) exit();

class PicPay extends CurlWeb
{
    private string $referenceId;
    private string $callbackUrl;
    private string $returnUrl;
    private int $value;
    private string $expiresAt;
    private array $buyer = [
        'firstName' => '',
        'lastName'  => '',
        'document'  => '',
        'email'     => '',
        'phone'     => ''
    ];
    private string $paymentUrl;
    private array $qrcode = [
        'content'   => '',
        'base64'    => ''
    ];
    private string $authorizationId;
    private string $cancellationId;
    private int $status;

    public function __construct()
    {
        
    }

    public function setReferenceId(): bool
    {
        if ($this->referenceId = md5(time().$_SESSION['user'].rand())) {
            return true;
        }
        return false;
    }

    private function setCallbackUrl(): bool
    {
        if ($this->callbackUrl = '') {
            return true;
        }
        return false;
    }

    private function setReturnUrl(): bool
    {
        if ($this->returnUrl = '') {
            return true;
        }
        return false;
    }

    private function setValue($value): bool
    {
        if (is_integer($value)) {
            $this->value = $value;
            return true;
        }
        return false;
    }

    private function setExpiresAt($expiresAt = null): bool
    {
        if ($expiresAt !== null) {
            if ($this->expiresAt = date('Y-m-d H:m:i', strtotime('+1 week'))) {
                return true;
            } 
        }
        return false;
    }

    private function setFirstName(): bool
    {
        if (is_array($_POST['fistName'])) {
            if (preg_match('/^[a-zA-Z]{4,12}$/i', $_POST['firstName'])) {
                $this->buyer['firstName'] = $_POST['firstName'];
                return true;
            }
        }
        return false;
    }

    private function setLastName(): bool
    {
        if (is_array($_POST['lastName'])) {
            if (preg_match('/^[a-zA-Z]{4,12}$/i', $_POST['lastName'])) {
                $this->buyer['lastName'] = $_POST['lastName'];
                return true;
            }
        }
        return false;
    }

    private function setStatus($status): bool
    {
        if (is_integer($status)) {
            $this->status = $status;
            return true;
        }
        return false;
    }

    public function setDocument(): bool
    {
        if (is_array($_POST['document'])) {
            if (preg_match('/^([\d]{3})\.([\d]{3})\.([\d]{3})\+([\d]{2})$/', $_POST['document'])) {
                $this->buyer['document'] = $_POST['document'];
                return true;
            }
        }
        return false;
    }

    private function setEmail(): bool
    {
        if (is_array($_POST['email'])) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->buyer['email'] = $_POST['email'];
                return truue;
            }
        }
        return false;
    }

    private function setPhone(): bool
    {
        if (is_array($_POST['phone'])) {
            if (preg_match('/^([\d]{2})\ ([\d]{5})\-([\d]{4})$/i'), $_POST['phone']) {
                $this->buyer['phone'] = $_POST['phone'];
                return true;
            }
        }
        return false;
    }

    private function setPaymentUrl($paymentUrl): bool
    {
        if ($this->paymentUrl = $paymentUrl) {
            return true;
        }
        return false;
    }

    public function setPayment(): bool
    {
        return false;
    }

    public function setQRCode($qrcode, $content): bool
    {
        if ($this->qrcode['qrcode'] = $qrcode && $this->qrcode['content'] = $content) {
            return true;
        }
        return false;
    }

    private function authorizationId(): bool
    {
        if (preg_match('/^([a-zA-Z0-9]{32})$/i', $_POST['authorizationId'])) {
            $this->authorizationId = $_POST['authorizationId'];
            return true;
        }
        return false;
    }

    private function cancellationId($cancellationId): bool
    {
        if ($this->cancellationId = $cancellationId) {
            return true;
        }
        return false;
    }

    public function getReferenceId(): string
    {
        return $this->referenceId;
    }
}
