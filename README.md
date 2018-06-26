## KumbiaPHP con WebPay

Sistema de compra con WebPay en KumbiaPHP, WebPay es la pasarela de pago más utilizada en Chile, por ser universal con la aceptación de pago de cualquier tipo de medio, tanto tarjeta de débito, así como tarjeta de crédido de cualquier marca como Visa, Mastercard, American Express o Diners Club.

Fue realizado de forma simple para que cualquiera pueda realizar la prueba sin nada más que descargar y copiar en su PC o Laptop para que haga la prueba.

Los datos de tarjetas ficticias para realizar la prueba son:

* Visa --- Para forzar resultados **EXITOSOS**
* PAN:		4051885600446623
* FECHA EXP: 	Cualquiera superior al dia de hoy
* CVV: 123

* Mastercard --- Para forzar resultados **FRACASOS**
* PAN:		5186059559590568
* FECHA EXP: 	Cualquiera superior al dia de hoy
* CVV:		123

RUT: 11.111.111-1
Clave: 123

Respecto a la librería que se encuentra en "default/app/libs/webpago.php" debes modificar la url de retorno y la url final para que funcione perfectamente cabe destaca que el sistema de Transbank funciona perfectamente bajo el sistema de HTTPS.

Documentación de Webpay se puede conseguir en http://www.transbankdevelopers.cl/

Este sistema no utiliza base de datos sin embargo lo más normal es que se almacenen las transacciones realizadas por este medio de pago, por lo que en el código fuente explica donde hacer dichas operaciones.

Para mayor información puedes comunicarte conmigo en el Slack de KumbiaPHP @yickson.
