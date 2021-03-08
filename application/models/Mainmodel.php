<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mainmodel extends CI_Model
{
	public function checklog($w)
	{
		$this->db->where($w);
		return $this->db->get('auth');
	}
	public function getData($t)
	{
		return $this->db->get($t);
	}
	public function ins($d)
	{
		$this->db->insert('vote', $d);
	}
	public function getReport()
	{
		return $this->db->query('SELECT COUNT(vote) as hasil FROM `vote` GROUP BY vote');
	}
}

/* End of file Mainmodel.php */
