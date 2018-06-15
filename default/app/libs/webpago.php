<?php

/**
 * Librería que retorna el resultado
 */
Load::lib('libwebpay/webpay');
class Webpago
{
  public $urlR = 'https://localhost/webpay/carrito/retorno'; //URL de llamada de Retorno
  public $urlF = 'https://localhost/webpay/carrito/fin'; //URL de vista final segun caso
  public function inicioWebpay($monto)
  {
    //Load::lib('libwebpay/configuration');
    $certificate = Load::lib('libwebpay/cert-normal');
    $configuration = new configuration();
    $configuration->setEnvironment($certificate->environment);
    $configuration->setCommerceCode($certificate->commerce_code);
    $configuration->setPrivateKey($certificate->private_key);
    $configuration->setPublicCert($certificate->public_cert);
    $configuration->setWebpayCert($certificate->webpay_cert);
    $webpay = new Webpay($configuration);
    $amount    = $monto;//10990; //Input::post('total');
    $buyOrder  = uniqid(); //Recomendación cambiar esto por algo mas aleatorio y seguro
    //$buyOrderSession = setcookie("buyOrderSM", $buyOrder,time()+86400*30);

    return $webpay->getNormalTransaction()->initTransaction($amount, $buyOrder, $sessionId , $this->urlR, $this->urlF);
  }

  public function retornoWebpay($token)
  {

    //Load::lib('libwebpay/configuration');
    $certificate = Load::lib('libwebpay/cert-normal');
    //Retorno
    $configuration = new configuration();
    $configuration->setEnvironment($certificate->environment);
    $configuration->setCommerceCode($certificate->commerce_code);
    $configuration->setPrivateKey($certificate->private_key);
    $configuration->setPublicCert($certificate->public_cert);
    $configuration->setWebpayCert($certificate->webpay_cert);

    $webpay = new Webpay($configuration);
    return $webpay->getNormalTransaction()->getTransactionResult($token);
  }
}


?>
