<?php

namespace core\base\controller;

use core\base\model\BaseModel;

class JScontroller
{

    use Singleton;

    public function run($crud)
    {

        if (isset($crud['validation'])) {

            $return = BaseModel::checkModelCookie($crud['validation']['username'], $crud['validation']['password']);

            echo json_encode($return);
        } else {

            if (isset($crud['currentUrl'])) {


                $currentUrl = urldecode($crud['currentUrl']);

            } else {
                $data = BaseModel::processCrud($crud);
                $response = json_encode($data);
                echo $response;
            }

        }
    }
}
