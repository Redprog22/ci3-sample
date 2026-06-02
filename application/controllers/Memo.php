<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Memo_model');
        $this->load->helper(['url', 'form']);
    }

    public function index()
    {
        $data['memos'] = $this->Memo_model->get_all();
        $this->load->view('memo/index', $data);
    }

    public function add()
    {
        $content = $this->input->post('content');
        if ($content) {
            $this->Memo_model->insert($content);
        }
        redirect(base_url());
    }

    public function delete($id)
    {
        $this->Memo_model->delete($id);
        redirect(base_url());
    }
}
