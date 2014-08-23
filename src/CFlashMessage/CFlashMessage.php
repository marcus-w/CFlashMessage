<?php

namespace mwhd\CFlashMessage;

class CFlashMessage
{
    // types of messages that are valid
    public $valid = ['info', 'danger', 'success', 'warning'];

    function __construct()
    {
        // setup session
        if(!isset($_SESSION['flash'])) {
            $_SESSION['flash'] = array();
        }
    }

    /**
    * Clear the session of messages
    *
    */
    public function clear()
    {
        $_SESSION['flash'] = null;
    }

    /**
    * Set mesage and type
    *
    * @param string $type the message type (info, danger, success, warning)
    * @param string $message the message
    */
    public function message($type = 'info', $message)
    {
        // check if type chosen is valid
        if(!in_array($type, $this->valid)) {
            $type = $valid[0];
        }

        // add message to session
        $_SESSION['flash'][] = [
            'type' => $type,
            'message' => $message,
        ];
    }

    /**
    * Sets a message of type notice
    *
    * @param string $message the message
    */
    public function info($message)
    {
        message('info', $message);
    }

    /**
    * Sets a message of type error
    *
    * @param string $message the message
    */
    public function danger($message)
    {
        message('danger', $message);
    }

    /**
    * Sets a message of type success
    *
    * @param string $message the message
    */
    public function success($message)
    {
        message('success', $message);
    }

    /**
    * Sets a message of type warning
    *
    * @param string $message the message
    */
    public function warning($message)
    {
        message('warning', $message);
    }

    /**
    * Get messages
    * 
    * @return string messages in HTML
    */
    public function getMessages() 
    {
        $messages = null;

        if(isset($_SESSION['flash'])) {

            foreach($_SESSION['flash'] as $flashes => $flash) {
                $type = $flash['type'];
                $message = $flash['message'];

                $messages .= "<div class='alert alert-{$type}'>\n";
                $messages .= "  " . $message . "\n</div>\n";
            }

            // done, clear messages
            $_SESSION['flash'] = null;
        }

        return $messages;
    }
}
