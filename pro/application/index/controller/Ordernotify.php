<?php


namespace app\index\controller;

class Ordernotify extends \think\Controller{
	
	
	
	
	//收银宝 支付成功后 , 回调接口
	function index(){
		// $fs = fopen(__DIR__.'/test.txt','a') ;
		// fwrite( $fs , print_r($_REQUEST,true) );
		
// Array
// (
//     [acct] => opn0buKET1Y0KmnHCqW22XlXBbSQ
//     [accttype] => 99
//     [amount] => 1  金额  (分)
//     [appid] => 00188840
//     [bizseq] => 2020051516201375085  订单号
//     [cusid] => 5614710739904N6  商户号
//     [fee] => 0
//     [paytime] => 20200515162041
//     [randomstr] => 651479
//     [sign] => 75170b83f51c01cc8c036cac0d772e63
//     [signtype] => MD5
//     [termauthno] => OTHERS
//     [termid] => U9TXGAyT
//     [termrefnum] => 4200000556202005150132810468
//     [timestamp] => 20200515162041
//     [traceno] => 0
//     [trxcode] => VSP501   微信支付
//     [trxday] => 20200515
//     [trxid] => 122089220000101160
//     [trxreserve] => 05
//     [trxstatus] => 0000
// )

	
		$order_id = input('bizseq');
		$order  = model('PayOrder')->where(['order_id' => $order_id])->column('id');
		//print_r($order);die;
		if(!$order) die;
		if( input('trxstatus') === '0000' ){  //支付成功
			model('PayOrder')->where(['order_id' => $order_id])->update(['status'=>1]);
		}else{
			model('PayOrder')->where(['order_id' => $order_id])->update(['status'=>-2]);
		}
		
	
		
		
		
	}//end function
	
	
	
	
	
	
}
