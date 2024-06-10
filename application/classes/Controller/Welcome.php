<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    public function action_index() {
        // Load the home view file
        $view = View::factory('home');

        // Assign any necessary variables to the view
        // For example, you can pass data to the view like this:
        // $view->set('variable_name', $value);

        // Render the view and set it as the response body
        $this->response->body($view);
    }

} // End Welcome
