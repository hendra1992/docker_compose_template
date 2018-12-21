<?php
    $API_KEY = '1q2w3e4r5t6y7u8i9o';
    $order_id = '1086742441';
    $status_code = '200';
    $gross_amount = '757500';
    $dep_kode = 'SMKDEMOSS';
    $SERVER_KEY = "SB-Mid-server-9X4RLAV0ZxA_2rEQVQeSWv_9";

    $reff_id = '123456789';

    $payment_channel = 'BCA Virtual Account';
    $trx_date = '1542988800';

    $input = $order_id.$status_code.$gross_amount.$SERVER_KEY;
    echo '<pre>';
    print_r("NOTIF-MIDTRANS"); echo '<br/>'; print_r(hash('sha512', $input));
    echo '</pre>';

    $inquiry = '%'.$order_id.'%'.$dep_kode.'%'.$API_KEY.'%';
    echo '<pre>';
    print_r("INQUIRY"); echo '<br/>'; print_r(hash('sha256', $inquiry));
    echo '</pre>';

    $all_billing = '%'.$dep_kode.'%'.$API_KEY.'%';
    echo '<pre>';
    print_r("GET ALL BILLING"); echo '<br/>'; print_r(hash('sha256', $all_billing));
    echo '</pre>';

    $payment = '%'.$order_id.'%'.$dep_kode.'%'.$payment_channel.'%'.$trx_date.'%'.$API_KEY.'%';
    echo '<pre>';
    print_r("PAYMENT SS_API"); echo '<br/>'; print_r(hash('sha256', $payment));
    echo '</pre>';

    $inquiry_indomaret = '%'.$order_id.'%'.$dep_kode.'%'.$reff_id.'%'.$trx_date.'%'.$API_KEY.'%';
    echo '<pre>';
    print_r("INQUIRY INDOMARET"); echo '<br/>'; print_r(hash('sha256', $inquiry_indomaret));
    echo '</pre>';

    $payment_indomaret = '%'.$order_id.'%'.$dep_kode.'%'.$reff_id.'%'.$trx_date.'%'.$API_KEY.'%';
    echo '<pre>';
    print_r("PAYMENT/REVERSAL INDOMARET"); echo '<br/>'; print_r(hash('sha256', $payment_indomaret));
    echo '</pre>';
?>