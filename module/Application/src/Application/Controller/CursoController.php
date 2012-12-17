<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use DateTime;
use Zend\View\Model\ViewModel;

class CursoController extends AbstractActionController
{
     // public function indexAction(){

     //    return new ViewModel(array('titulo'=> 'Curso',));
     // }

    public function listarAction()
    {
        $datetime = new DateTime();
        $view = new ViewModel(array(
          'titulo' => 'Cursos Agiles 2013',
          'curso1' => 'Scrum 101',
          'curso2' => 'Organic Scrum',
          'curso3' => 'Kanban 101',
          'curso4' => 'Scrumban',
          'fecha'  => $datetime->format('d/m/Y'),
          ));
        $view->setTemplate('application/curso/listar');
        return $view;

    }
}
