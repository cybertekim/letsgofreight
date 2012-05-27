<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Demo extends CI_Controller {

    function __construct()  {
        parent::__construct();
        $this->load->spark('friendly-template/1.1.4');
    }
    
    public function index() 
    {    
        // $this->template->title = 'Welcome to Demo Website';

        $data['title'] = "Welcome!";
        
        // dynamically add a css stylesheet
        //$this->template->stylesheet->add('http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css');
        
        //$news = array(); // load from model (but using a dummy array here)
        //$this->template->content->view('frontend/news', $news);
       
        // set a partial's content
        $this->template->copyright = '&copy; Let\'s Go Freight 2012';
        
        // publish the template
        $this->template->publish('frontend/main_tpl', $data);
    }

    public function about()
    {
        $data['title'] = "About";
        
        $this->template->content->view('frontend/about');
        
        $this->template->publish('frontend/inner_tpl', $data);   
    }

    public function services()
    {
        $data['title'] = "Services";

        $this->template->content->view('frontend/services');
        $this->template->publish('frontend/inner_tpl', $data);

    }

    public function contact()
    {
        $data['title'] = "Contact";

        $this->template->javascript->add('/js/jquery.gmap-1.1.0-min.js');

        $this->template->content->view('frontend/contact');
        $this->template->publish('frontend/inner_tpl', $data);

    }



    public function LGF_Sell_Sheet()
    {
        $this->load->helper('download');

        $data = file_get_contents(site_url() . "files/LGF-Sell_Sheet.pdf");
        $name = 'LGF-Sell_Sheet.pdf';

        force_download($name, $data);
    }

}