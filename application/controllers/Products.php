<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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

	public function index($category)
	{
        $this->firstload();
        $category = $this->security->xss_clean($category);
        $category_id = explode('-', $category);
        $last_key = sizeof($category_id) - 1;
        if(is_numeric($category_id[$last_key]))
        {
    		$search_query = '`trashed_at` IS NULL AND `group_id` = "'.$category_id[$last_key].'" AND `haku_status` = "2"';
         	$this->data['product_rows'] = $this->Base_model->list_all('tz_haku', '', '', 'haku_sort', 'asc', $search_query, 'haku_id,haku_name,haku_image');
        }

        $this->data['current_category_name'] = $this->data['category_rows']['id_name_list'][$category_id[$last_key]]['group_name'];
		$this->tpl_body = 'product_list';
		$this->tpl();
	}

    public function detail($product)
    {
        $this->firstload();
        $product = $this->security->xss_clean($product);
        $product_id = explode('-', $product);        
        $last_key = sizeof($product_id) - 1;
        if(is_numeric($product_id[$last_key]))
        {
            $search_query = '`trashed_at` IS NULL AND `haku_id` = "'.$product_id[$last_key].'" AND `haku_status` = "2"';
            $this->data['product_row'] = $this->Base_model->search_one($search_query, 'tz_haku');
        }
        $this->tpl_body = 'product_detail';
        $this->tpl();
    }
}
