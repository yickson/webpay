<?php

/**
 * Controlador para la conexion con WebPay
 */
class CarritoController extends AppController
{

  public function index()
  {
    Load::lib('webpago');
    $webpay = New Webpago;
    $monto = Input::post('monto');
    $result = $webpay->inicioWebpay($monto);
    if(is_object($result)){
      $this->result = $webpay->inicioWebpay($monto);
    }else{
      Redirect::to('../');
    }
  }

  public function retorno()
  {
    Load::lib('webpago');
    $webpay = New Webpago;
    $this->token = $_POST['token_ws'];
    $this->result = $webpay->retornoWebpay($this->token);
    if($this->result->detailOutput->responseCode != 0) {
      //Si el codigo es diferente de cero es un error en la transaccion
      Redirect::to('carrito/error');
    }else{
      //Si es exitoso aquí debes hacer la operación con la Base de datos y almacenar dicha informacion
      Session::set('compra', $this->result->detailOutput);
      View::template(null);
    }
  }

  public function fin()
  {
    //Final
    $this->token = $_POST['token_ws'];
    if($this->token == '' or $this->token == null){
      $this->mensaje = true;
    }
    else{
      $this->mensaje = false;
    }
  }

  public function error()
  {

  }
}


?>
