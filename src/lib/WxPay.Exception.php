<?php
namespace WxPay;

//***** added by Haoong
use Exception;
//


/**
 * 
 * 微信支付API异常类
 * @author widyhu
 *
 */
class WxPayException extends Exception {
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
