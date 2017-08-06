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

    public function setLayout($name);
    public function getLayout();

    public function setView($name);
    public function getView();

    public function setModulePath($module);
    public function getModulePath();

    public function setPath($viewDir);
    public function getPath();

    public function setData($source);
    public function getData();
}