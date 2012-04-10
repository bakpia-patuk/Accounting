<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -  
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['title'] = "Accounting";
        $data['menu'] = 'menu';
        $this->load->model('Model_Golongan');
        $data['test'] = $this->Model_Golongan->getAllGolongan();
        /*
        $data['navigation'] = $this->MCats->getCategoriesNav();
        $data['mainf'] = $this->MProducts->getMainFeature();
        $skip = $data['mainf']['id'];
        $data['sidef'] = $this->MProducts->getRandomProducts(3, $skip);
         */
        $data['main'] = 'cpanel';
        $this->load->vars($data);
        $this->load->view('template');
    }
    
    public function test()
    {
        $data['title'] = "test";
        /*
        $data['navlist'] = $this->MCats->getCategoriesNav();
        $data['mainf'] = $this->MProducts->getMainFeature();
        $skip = $data['mainf']['id'];
        $data['sidef'] = $this->MProducts->getRandomProducts(3, $skip);
        $data['main'] = 'home';
        */
        $this->load->vars($data);
        $this->load->view('template');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */