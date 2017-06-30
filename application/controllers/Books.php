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
			$this->Books_model->publish();
			// redirect('books','refresh');
			var_dump($_POST);
		}
		


	}

}


?>