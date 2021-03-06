<?php
/**
 * @link https://github.com/linpax/microphp-mvc
 * @copyright Copyright &copy; 2017 Linpax
 * @license https://github.com/linpax/microphp-mvc/blob/master/LICENSE
 */

namespace Micro\Mvc;


interface Widget
{
    public function init();
    public function run();
}