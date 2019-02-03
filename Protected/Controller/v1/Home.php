<?php
namespace Controller\v1;
use Strawframework\Base\Controller, Strawframework\Base\Result;
use Common\Code;
use Strawframework\Base\Log;
use Strawframework\Base\RequestObject;

/**
 * Homepage
 * @Ro (name="Home")
 */
class Home extends Controller{


    /**
     * 取一个用户
     * @Request (uri="/", target='get')
     * @return Result
     */
    public function welcome(){


        return new Result(Code::SUCCESS, 'Welcome to Project Kiwi');
    }

}