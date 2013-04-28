<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Db\Adapter\Adapter;
class UsuarioController extends AbstractActionController
{
    /**
     * @var Adapter
     */
    public $dbAdapter;
    public function indexAction()
    {
        
    }
    public function usuarioAction(){
        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
        var_dump($this->dbAdapter);
    }
    public function pruebaAction(){
    }
}
