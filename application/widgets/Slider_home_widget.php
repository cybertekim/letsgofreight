<?php 
/* File: widgets/slider_home_widget.php */
class slider_home_widget extends Widget {
     public function display($args = array()) {
         $this->load->model('my_model');
         $data = $this->my_model->all();

         $this->load->view('widgets/slider_home', $data);
     }
}