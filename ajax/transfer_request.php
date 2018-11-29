<?php
/**
 * Created by PhpStorm.
 * User: hasitha
 * Date: 11/25/18
 * Time: 1:07 AM
 */
include_once '../class/Customer.php';

$customer = new Customer();

if(!empty($_POST))
{
    $request_data = $_POST;

    $from_account = $request_data['account'];
    $account_number = $request_data['account_number'];
    $confirm_account_number = $request_data['confirm_account_number'];
    $branch = $request_data['branch'];
    $amount = $request_data['transaction_amount'];

    $result = $customer->transferRequest($from_account,$account_number,$branch,$amount);

    if ($result==1){

        header('Location:../tranfer.php?output=1');
        exit();
    }else{
        header('Location:../tranfer.php?output=0');
        exit();
    }


}