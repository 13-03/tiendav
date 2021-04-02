<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pago extends CI_Controller
{
	public function mpCatcher ($payStatus){

		MercadoPago\SDK::setAccessToken(MP_EXAM_TOKEN);

		switch ($payStatus){
			case 'error':
				$this->load->view('pago/error');
				break;

			case 'pending':
				$getData = (object) $_GET;

				$externalRef = $getData ->external_reference;

				$dataToView = array(
					'external_reference' => $externalRef
				);

				$this->load->view('pago/pendiente', $dataToView);
				break;

			case 'success':

				$getData = (object) $_GET;

				$paymentId = $getData ->payment_id;
				$externalRef = $getData ->external_reference;

				$payment = MercadoPago\Payment::get($paymentId);

				$dataToView = array(
					'payment_status' => $payment->status,
					'payment_status_detail' => $payment->status_detail,
					'payment_id' => $payment->id,
					'payment_method_id' => $payment-> payment_method_id,
					'external_reference' => $externalRef
				);

				$this->load->view('pago/exitoso', $dataToView);
				break;
		}
	}

}
