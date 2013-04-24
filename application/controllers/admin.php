<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends Ci_Controller {
	public function index() {
		if($this->session->userdata('email')) {
			$data['title'] = 'Organiza tus HangOuts';
			$this->load->view('admin/home', $data);
			$data['title'] = 'Todo OK d(^_^o)';
		} else {
			$this->load->view('admin/login_form');
		}

	}

	public function add_hangout() {
		if($this->session->userdata('email')) {
			if($this->input->post()) {
				$youtube_url = $this->input->post('youtube_url');
				$this->load->library('youtube_video');
				if($youtube_data = $this->youtube_video->youtube_data($youtube_url)) {
					echo '<pre>'; var_dump($youtube_data); echo '</pre><br><br>';
					$valores = array(
					'youtube_id' => $youtube_data['youtube_id'],
					'title' => $youtube_data['title'],
					'hashtag' => '****************,,',
					'published' => (string)$youtube_data['published'],
					'duration_format' => $youtube_data['duration_format'],
					'description' => $youtube_data['description'],
					'0_thumbnail' => $youtube_data['0_thumbnail']['url'],
					'1_thumbnail' => $youtube_data['1_thumbnail']['url'],
					'2_thumbnail' => $youtube_data['2_thumbnail']['url'],
					'3_thumbnail' => $youtube_data['3_thumbnail']['url'],
					'create' => date("Y-m-d H:i:s"),
					'create_by' => $this->session->userdata('email')
				);	
					$param = array(
						'table' => 'io_events',
						'valores' => $valores
						);
					if($insert = $this->General_model->insert_item($param)) {
						echo "string";
					}
				} else {
					echo 'Ups!! - el video no existe o la url es incorrecta (u_u\')';
				}
			} else {
				redirect('/admin', 'refresh');
			}
		} else {
			$this->load->view('admin/login_form');
		}
	}
	
/***** sistema de login *****/
	public function user_login() {
		if($this->session->userdata('email')){ redirect('/admin', 'refresh'); }
		if(!$_POST){ redirect('/admin', 'refresh'); }
		$this->load->model('General_model');
		$msg_login['email'] = $this->input->post('email');
		$msg_login['password'] = $this->input->post('password');
		$param = array(
			'table' => 'users',
			'where' => array('email' => $msg_login['email'])
		);
		$existe = $this->General_model->view_item($param);
		if($existe) {
			if($existe['password']==md5($this->input->post('password'))) {
				$newdata = array(
                   'email' => $existe['email'],
                   'nombre' => $existe['nombre'],
                   'nivel' => $existe['nivel']
               	);
				$this->session->set_userdata($newdata);
				redirect('/admin', 'refresh');
			} else {
				$msg_login['respuesta'] = 'Password incorrecto!';
				$this->load->view('admin/login_form', $msg_login);
			}

		} else {
			$msg_login['respuesta'] = 'E-mail incorrecto!';
			$this->load->view('admin/login_form', $msg_login);
		}
	}

	public function kill_session() 
	{
		$datos_secion = array('email' => '', 'nombre' => '', 'nivel' => '');
		$this->session->unset_userdata($datos_secion);
		redirect('/admin', 'refresh');
	}
}