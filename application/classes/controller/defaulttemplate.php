<?php defined('SYSPATH') or die('No direct script access.');

class Controller_DefaultTemplate extends Controller_Template {

    public $template = 'base_view';
    public $title_separator = " &raquo; ";
    public $base_title = "Balance";
    public $page_title = "";
    public $scripts = array();

    /**
     * Initialize properties before running the controller methods (actions),
     * so they are available to our action.
     */
    
    public function before() {
        // Run anything that need ot run before this.
        parent::before();

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->title = $this->base_title;
            $this->template->header = View::factory('includes/header_view');
            $this->template->nav = '';
            $this->template->content = '';
            $this->template->footer = View::factory('includes/footer_view');
            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }
    
    public function setPageTitle($newtitle = "", $basefirst = FALSE){
        if($basefirst){
            $this->template->title = $this->base_title . $this->title_separator . $newtitle;
        }else{
            $this->template->title = $newtitle . $this->title_separator . $this->base_title;
        }
        $this->page_title = $newtitle;
    }

    public function addScript($script) {
        array_push($this->scripts, $script);
    }

    /**
     * Fill in default values for our properties before rendering the output.
     */
    public function after() {

        $this->template->scripts = array_merge($this->template->scripts, $this->scripts);
        
        if ($this->auto_render) {
            // Define defaults
            //$styles = array('assets/css/reset.css' => 'screen');
            //$scripts = array('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js');

            // Add defaults to template variables.
            //$this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
            //$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
        }

        // Run anything that needs to run after this.
        parent::after();
    }

}