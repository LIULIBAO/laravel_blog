<?php
/**
 * Created by PhpStorm.
 * User: hf-li
 * Date: 2018/11/9
 * Time: 22:00
 */

namespace App\Exceptions;

use Exception;

/**
 * 处理repository 错误异常
 * Class RepositoryException
 * @package App\Exceptions
 */
class RepositoryException extends \Exception
{
    protected $repositoryException;

    public function __construct( $message = "", $code = 0, Exception $previous = null )
    {
        parent::__construct($message, $code, $previous);

        $this->repositoryException = $message;
    }

    public function getRepositoryMessage()
    {
        return $this->repositoryException;
    }


}