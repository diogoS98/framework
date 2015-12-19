<?php
/**
 * Welcome controller
 *
 * @author Virgil-Adrian Teaca - virgil@@giulianaeassociati.com
 * @version 3.0
 * @date December 17th, 2015
 */

namespace App\Controllers;

use Smvc\Core\View;
use App\Core\ClassicController;

/**
 * Sample Themed Controller with its typical usage.
 */
class ClassicWelcome extends ClassicController
{
    private $filePath;


    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function beforeFlight()
    {
        $method = $this->method();

        $viewsPath = str_replace(BASEPATH, '', $this->viewsPath());

        $this->filePath = $viewsPath.$method.'.php';

        // Leave to parent's method the Flight decisions.
        return parent::beforeFlight();
    }

    protected function afterFlight($result)
    {
        // Do some processing there, even deciding to stop the Flight, if case.

        // Leave to parent's method the Flight decisions.
        return parent::afterFlight($result);
    }

    /**
     * Define Welcome page message and set the Controller's variables.
     */
    public function welcome()
    {
        $message = __('Hello, welcome from the welcome controller! <br/>
This content can be changed in <code>{0}</code>', $this->filePath);

       // Setup the View variables.
        $this->title(__('Welcome'));

        $this->set('message', $message);
    }

    /**
     * Define Subpage page message and set the Controller's variables.
     */
    public function subPage()
    {
        $message = __('Hello, welcome from the welcome controller and subpage method! <br/>
This content can be changed in <code>{0}</code>', $this->filePath);

       // Setup the View variables.
        $this->title(__('Subpage'));

        $this->set('message', $message);
    }

}
