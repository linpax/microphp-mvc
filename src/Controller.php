<?php
/**
 * @link https://github.com/linpax/microphp-framework
 * @copyright Copyright &copy; 2013 Oleg Lunegov
 * @license https://github.com/linpax/microphp-framework/blob/master/LICENSE
 */

namespace Micro\Mvc;


interface Controller
{
    public function action($name, $container);
}