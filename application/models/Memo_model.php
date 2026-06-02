<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_model extends CI_Model {

    private $table = 'memos';

    public function get_all()
    {
        return $this->db->order_by('id', 'DESC')->get($this->table)->result();
    }

    public function insert($content)
    {
        $this->db->insert($this->table, ['content' => $content]);
    }

    public function delete($id)
    {
        $this->db->where('id', $id)->delete($this->table);
    }
}
