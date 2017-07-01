 <?php 

class Books extends CI_Controller
{	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model');

		if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['nama'] = $session_data['nama'];
            $data['role'] = $session_data['role'];

            if ($session_data['role'] != 'writer') {
            	redirect('user','refresh');
            }

        }else{
            redirect('login','refresh');
        }

	}


	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['buku'] = $this->Books_model->bookById($session_data['id_pengguna']);
		$this->load->view('books_creator',$data);
	}

	public function create(){

		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('writer','writer','trim|required');
		//$this->form_validation->set_rules('subjects','subjects','trim|required');
		$this->form_validation->set_rules('publisher','publisher','trim|required');
		$this->form_validation->set_rules('synopsys','synopsys','trim|required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('book_cr');
		}else {
			//$this->Books_model->publish();

			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size'] = '1000000000';

        	$this->load->library('upload', $config);

        	if(!$this->upload->do_upload('image')){
        		$err = array('error' => $this->upload->display_errors());
        		var_dump($err); // Tampil Error Ketika gambar gagal simpan
        		var_dump($_POST);
        	}else{

	        $image_data = $this->upload->data();	
				// Resize Image Here :)
			$config['image_library']  = 'gd2';
	  		$config['source_image']   = $image_data['full_path']; //get original image
	  		$config['maintain_ratio'] = TRUE;
	  		$config['create_thumb']   = TRUE;
	 		$config['width']          = 237;
			$config['height']         = 196;
			$config['new_image']      = 'assets/uploads/cropped';

			$this->load->library('image_lib', $config);
			
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
        	
        	$this->Books_model->publish();
        	redirect('books','refresh');
        	}

			// redirect('books','refresh');
			// var_dump($_POST);
		}
		


	}

}


?>