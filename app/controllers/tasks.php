<?php
class Tasks extends CI_Controller {
    public function show($id) {
        $data['task'] = $this->Task_model->get_task($id);
        //Check if marked complete
        $data['is_complete'] = $this->Task_model->check_if_complete($id);
        //Load view and layout
        $data['main_content'] = 'tasks/show';
        $this->load->view('layouts/main',$data);
    }
}