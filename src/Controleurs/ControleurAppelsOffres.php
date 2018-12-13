<?php

namespace appelsOffres\Controleurs;

use appelsOffres\Vues\VueAppelsOffres;
use \Slim\Views\Twig as twig;

class ControleurAppelsOffres {

	protected $view;

	/**
	 * Constructor of the class HomeController
	 * @param view
	 */
    public function __construct(twig $view) {
        $this->view = $view;
    }

	/**
	 * Method that displays the home connect if we are in the database
	 * @param request
	 * @param response
	 * @param args
	 */

	public function afficherAppelsOffres($request, $response, $args) {
		return $this->view->render($response, 'VueAppelsOffres.html.twig', [
		]);
	}

}
