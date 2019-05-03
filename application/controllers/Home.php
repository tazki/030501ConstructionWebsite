<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function firstload()
	{
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;
        $this->data['category_rows'] = listCategory();
	}

	public function tpl()
    {
        $home_rows = $this->Base_model->search_one('haku_id=2', 'tz_haku');
        $home_rows = array_merge($home_rows, json_decode($home_rows['haku_json'], true));
        $this->data['home_rows'] = $home_rows;
    	$this->data['status_message'] = (!empty($this->data['status_message'])) ? $this->data['status_message'] : $this->session->flashdata('status_message');

    	$tpl['header'] = $this->load->view('common/header', $this->data, true);
		$tpl['body'] = $this->load->view($this->tpl_body, $this->data, true);
		$tpl['footer'] = $this->load->view('common/footer', $this->data, true);
		$this->load->view('common/main', $tpl);
    }

	public function index()
	{
        $this->firstload();
		$search_query = '`trashed_at` IS NULL AND `group_id` = "17" AND `haku_status` = "2"';
     	$this->data['imageslider_rows'] = $this->Base_model->list_all('tz_haku', '', '', 'haku_sort', 'asc', $search_query, 'haku_id,haku_image');

        $child_id_list = $this->data['category_rows']['child_id_list'];
        #this is gallery group
        unset($child_id_list[17]);
        $child_id_list = implode(',', $child_id_list);
        $search_query = '`trashed_at` IS NULL AND `haku_status` = "2"';
        $search_query .= ' AND `group_id` IN('.$child_id_list.')';
        $this->data['product_rows'] = $this->Base_model->list_all('tz_haku', '', '', 'created_at', 'desc', $search_query, 'haku_id,haku_name,haku_image');

		$this->tpl_body = 'home';
		$this->tpl();
	}

    public function about()
    {
        $this->firstload();
        $about_rows = $this->Base_model->search_one('haku_id=1', 'tz_haku');
        $this->data['about_rows'] = $about_rows;
        $this->tpl_body = 'about';
        $this->tpl();
    }

    public function contact()
    {
        $this->firstload();
        $this->tpl_body = 'contact';
        $this->tpl();
    }
}
