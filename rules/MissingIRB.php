<?php
/**
 * Created by PhpStorm.
 * User: alvaro1
 * Date: 4/20/18
 * Time: 11:31 AM
 */
namespace Stanford\GoProd;


function  MissingIRB(){

    $Rule['title']=lang('IRB_TITLE');
    $Rule['body']=lang('IRB_BODY');
    $Rule['risk']="danger"; // level of risk: warning, danger or info.

    $phat_to_rule= dirname(dirname(__FILE__)) . '/classes/Check_pi_irb_type.php';

    if(!@include_once($phat_to_rule)){ error_log("Failed to include:: $phat_to_rule");}

    $res= new check_pi_irb_type();
    $Rule['results']=$res::MissingIRB();
    return  $Rule;
}