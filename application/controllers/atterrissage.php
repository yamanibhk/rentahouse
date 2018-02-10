<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class atterrissage extends CI_Controller{

		public function __construct() {
			parent::__construct();
			$this->load->helper("url_helper");//Load a helper
		}

		/**
		 * Affiche la page d'atterrissage
		 */
		public function index() {
            if ( ! file_exists ( APPPATH . 'views/atterrissage/index.php' )) { show_404 (); }
			$data["titre"] = "RENTAHOUSE";//the page title
			//Load the views
			$this->load->view("templates/header.php", $data);
			$this->load->view("atterrissage/index",$data);
			$this->load->view("templates/footer.php", $data);
		}
        
    }

		/**
		 * Charge le contenu a afficher dans <div id="content"> a la page d'accueil
		 */
		public function backToIndex() {
			$this->load->view("atterrissage/index-content");
		}

		/**
		 * Charge le contenu a afficher dans <div id="content"> lors d'une connexion
		 */
		public function connexion() {
			$this->load->view("atterrissage/connexion-form.php");
		}

		/**
		 * Charge le contenu a afficher dans <div id="content"> lors d'une inscription
		 */
		public function inscription() {
			$this->load->view("atterrissage/inscription-form.php");
		}

	}
?>