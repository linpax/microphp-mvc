<?php
/**
 * @link https://github.com/linpax/microphp-mvc
 * @copyright Copyright &copy; 2017 Linpax
 * @license https://github.com/linpax/microphp-mvc/blob/master/LICENSE
 */

namespace Micro\Mvc;


interface View
{
    public function addParameter($name, $value);
    public function getParameters();

    public function setData($data);
    public function getData();
}