<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class M_Site extends CI_Model
{

	public $table_site = 'tb_site';
	public $table_site_meta = 'tb_site_meta';

	public function init(){
		$site = $this->read_site();
		$meta = $this->read_site_meta();
		$site['meta'] = $meta;

		return $site;
	}

	public function read_site(){
		$read_site = $this->_Process_MYSQL->read_data($this->table_site, 'type', 'ASC')->result_array();      

		foreach ($read_site as $data_site) {
			$site[$data_site['type']] = $data_site['data'];
		}

		$site['image'] = base_url('storage/images/'.$site['image']);
		$site['blog_comment'] = json_decode($site['blog_comment'],true);
		$site['payment_midtrans'] = json_decode($site['payment_midtrans'],true);		
		
		return $site;
	}

	public function read_site_meta(){

		$read_site_meta = $this->_Process_MYSQL->read_data($this->table_site_meta, 'type', 'ASC')->result_array();      
		
		foreach ($read_site_meta as $data_meta) {
			$meta[$data_meta['type']] = json_decode($data_meta['data_json'],TRUE);
		}	

		return $meta;
	}

}