<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Golongan extends CI_Controller {
    
    protected $bars = array(
        "apply" => array(
            "id" => "toolbar-apply",
            "type" => "button",
            "doTask" => "javascript:Joomla.submitbutton('religion.apply')",
            "rel" => "",
            "class" => "icon-32-apply",
            "text" => "Save",
            "style" => ""),
        "save" => array(
            "id" => "toolbar-save",
            "type" => "button",
            "doTask" => "Joomla.submitbutton('religion.save')",
            "rel" => "",
            "class" => "icon-32-save",
            "text" => "Save &amp; Close",
            "style" => ""),
        "save_new" => array(
            "id" => "toolbar-save-new",
            "type" => "button",
            "doTask" => "Joomla.submitbutton('religion.save2new')",
            "rel" => "",
            "class" => "icon-32-save-new",
            "text" => "Save &amp; New",
            "style" => ""),
        "cancel" => array(
            "id" => "toolbar-save-new",
            "type" => "button",
            "doTask" => "Joomla.submitbutton('religion.cancel')",
            "rel" => "",
            "class" => "icon-32-cancel",
            "text" => "Close",
            "style" => ""),
        "separator1" => array(
            "id" => "",
            "type" => "divider",
            "doTask" => "",
            "rel" => "",
            "class" => "",
            "text" => "",
            "style" => ""),
        "help" => array(
            "id" => "toolbar-help",
            "type" => "button",
            "doTask" => "popupWindow('http://iMedis.com/help', 'Help', 700, 500, 1)",
            "rel" => "Help",
            "class" => "icon-32-help",
            "text" => "Help",
            "style" => "")
    );
    
    protected $_golonganPerkiraanConstants = array(
        "1" => "Aktiva",
        "2" => "Hutang",
        "3" => "Modal",
        "4" => "Pendapatan",
        "5" => "Biaya",
        "6" => "Pendapatan Lain-lain",
        "7" => "Biaya Lain-lain"
    );
    protected $_kategoriConstants = array(
        "1" => "Debit",
        "2" => "Kredit",
        "3" => "Debit/Kredit"
    );

    public function __construct()
    {
        parent::__construct();
        session_start();
        
        $this->load->model('Model_Golongan');
    }
    
    public function index()
    {
        $data['title'] = "Accounting | Golongan Perkiraan";
        $data['module_title'] = VToolBar_Helper::title('Golongan Perkiraan Manager: Golongan Perkiraan');
        $this->addToolbar();
        $data['help'] = VToolbar::getInstance('help');
        $data['toolbar'] = VToolbar::getInstance('toolbar');
        $data['menu'] = 'menu';
        $data['main'] = 'golongan_list';
        $data['data_golongan'] = $this->Model_Golongan->getAllGolongan();
        $this->load->vars($data);
        $this->load->view('template');
    }
    
    public function add()
    {
        if ($this->input->post('vform')) {
            switch ($this->input->post('task')) {
                case 'golongan.apply':
                    $golongan = $this->_getGolonganArray();
                    if (isset($_REQUEST['id'])) {
                        $id = $_REQUEST['id'];
                        $this->Model_Golongan->updateGolongan(
                            $id,
                            $golongan['kode_golongan'],
                            $golongan['nama_golongan'],
                            $golongan['kategori'],
                            $golongan['saldo_normal']
                        );
                    }
                    else {
                        $id = $this->Model_Golongan->createGolongan(
                            $golongan['kode_golongan'],
                            $golongan['nama_golongan'],
                            $golongan['kategori'],
                            $golongan['saldo_normal']
                        );
                    }
                    $data['data_golongan'] = $golongan;
                    $this->session->set_flashdata('message', 'Category created');
                    redirect('golongan/add?id='.$id, 'refresh');
                case 'golongan.save':
                    $golongan = $this->_getGolonganArray();
                    $id = $this->Model_Golongan->createGolongan(
                        $golongan['kode_golongan'],
                        $golongan['nama_golongan'],
                        $golongan['kategori'],
                        $golongan['saldo_normal']
                    );
                    $this->session->set_flashdata('message', 'Category created');
                    redirect('golongan/index', 'refresh');
                case 'golongan.save2new':
                    $golongan = $this->_getGolonganArray();
                    $id = $this->Model_Golongan->createGolongan(
                        $golongan['kode_golongan'],
                        $golongan['nama_golongan'],
                        $golongan['kategori'],
                        $golongan['saldo_normal']
                    );
                    $golongan = $this->_getEmptyGolonganArray();
                    $data['data_golongan'] = $golongan;
                    $this->session->set_flashdata('message', 'Category created');
                    redirect('golongan/add', 'refresh');
            }
        } else {
            $data['title'] = "Accounting | Tambah Golongan Perkiraan";
            $data['module_title'] = VToolBar_Helper::title('Golongan Perkiraan Manager: Golongan Perkiraan');
            $data['menu'] = 'menu';
            $data['main'] = 'golongan_form';
            $data['cons_golongan_perkiraan'] = $this->_golonganPerkiraanConstants;
            $data['cons_kategori'] = $this->_kategoriConstants;
            if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];
                $golonganData = $this->Model_Golongan->getGolongan($id);
                $golongan = array(
                    'id'            => $golonganData['id'],
                    'kode_golongan' => $golonganData['kode_golongan'],
                    'nama_golongan' => $golonganData['nama_golongan'],
                    'kategori'      => $golonganData['kategori'],
                    'saldo_normal'  => $golonganData['saldo_normal']
                );
            }
            else {
                $golongan = $this->_getEmptyGolonganArray();
            }
            $data['data_golongan'] = $golongan;
            $this->load->vars($data);
            $this->load->view('template');
        }
    }
    
    public function edit($id = 0) {
        if ($this->input->post('vform')) {
            
            $golongan = $this->_getGolonganArray();
            $this->Model_Golongan->updateGolongan(
                $id,
                $golongan['kode_golongan'],
                $golongan['nama_golongan'],
                $golongan['kategori'],
                $golongan['saldo_normal']
            );
            $this->session->set_flashdata('message', 'Category updated');
            redirect('golongan/index', 'refresh');
        } else {
            $data['title'] = "Accounting | Edit Golongan Perkiraan";
            $data['module_title'] = VToolBar_Helper::title('Golongan Perkiraan Manager: Edit Golongan Perkiraan');
            $this->addToolbarForm($id);
            $data['help'] = VToolbar::getInstance('help');
            $data['toolbar'] = VToolbar::getInstance('toolbar');
            $data['menu'] = 'menu';
            $data['main'] = 'golongan_form';
            $data['cons_golongan_perkiraan'] = $this->_golonganPerkiraanConstants;
            $data['cons_kategori'] = $this->_kategoriConstants;
            $golonganData = $this->Model_Golongan->getGolongan($id);
            $golongan = array(
                'id'            => $golonganData['id'],
                'kode_golongan' => $golonganData['kode_golongan'],
                'nama_golongan' => $golonganData['nama_golongan'],
                'kategori'      => $golonganData['kategori'],
                'saldo_normal'  => $golonganData['saldo_normal']
            );
            $data['data_golongan'] = $golongan;
            $this->load->vars($data);
            $this->load->view('template');
        }
    }
    
    private function _getEmptyGolonganArray()
    {
        $golongan = array(
            'id'            => 0,
            'kode_golongan' => '',
            'nama_golongan' => '',
            'kategori'      => 1,
            'saldo_normal'  => 1
        );
        return $golongan;
    }
    
    private function _getGolonganArray()
    {
        $golongan = array(
            'id'            => $this->input->_clean_input_data($_POST['vform']['id']),
            'kode_golongan' => $this->input->_clean_input_data($_POST['vform']['kode_golongan']),
            'nama_golongan' => $this->input->_clean_input_data($_POST['vform']['nama_golongan']),
            'kategori'      => $this->input->_clean_input_data($_POST['vform']['kategori']),
            'saldo_normal'  => $this->input->_clean_input_data($_POST['vform']['saldo_normal'])
        );
        return $golongan;
    }
    
    protected function addToolbar()
	{
        //$canDo	= ContentHelper::getActions($this->state->get('filter.category_id'));
		//$user		= JFactory::getUser();
		//JToolBarHelper::title(JText::_('COM_CONTENT_ARTICLES_TITLE'), 'article.png');
        
        //if ($canDo->get('core.create') || (count($user->getAuthorisedCategories('com_content', 'core.create'))) > 0 ) {
		//	JToolBarHelper::addNew('article.add');
		//}
        VToolBar_Helper::addNew('golongan.add');
        
        //if (($canDo->get('core.edit')) || ($canDo->get('core.edit.own'))) {
		//	JToolBarHelper::editList('article.edit');
		//}
        VToolBar_Helper::editList('article.edit');
        
        //if ($canDo->get('core.edit.state')) {
		//	JToolBarHelper::divider();
		//	JToolBarHelper::publish('articles.publish', 'JTOOLBAR_PUBLISH', true);
		//	JToolBarHelper::unpublish('articles.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		//	JToolBarHelper::custom('articles.featured', 'featured.png', 'featured_f2.png', 'JFEATURED', true);
		//	JToolBarHelper::divider();
		//	JToolBarHelper::archiveList('articles.archive');
		//	JToolBarHelper::checkin('articles.checkin');
		//}
        VToolBar_Helper::publish('golongan.publish', 'Publish', true);
        VToolBar_Helper::unpublish('golongan.unpublish', 'Unpublish', true);
        VToolBar_Helper::custom('golongan.featured', 'featured.png', 'featured_f2.png', 'Featured', true);
        VToolBar_Helper::divider();
        VToolBar_Helper::archiveList('golongan.archive');
        VToolBar_Helper::checkin('golongan.checkin');
        
        //if ($this->state->get('filter.published') == -2 && $canDo->get('core.delete')) {
		//	JToolBarHelper::deleteList('', 'articles.delete','JTOOLBAR_EMPTY_TRASH');
		//	JToolBarHelper::divider();
		//}
        //else if ($canDo->get('core.edit.state')) {
		//	JToolBarHelper::trash('articles.trash');
		//	JToolBarHelper::divider();
		//}
        VToolBar_Helper::trash('golongan.trash');
        VToolBar_Helper::divider();
        
        //if ($canDo->get('core.admin')) {
		//	JToolBarHelper::preferences('com_content');
		//	JToolBarHelper::divider();
		//}
        VToolBar_Helper::preferences('com_content');
        VToolBar_Helper::divider();

        VToolBar_Helper::help('Golongan Perkiraan Manager');
	}
    
    protected function addToolbarForm($id = 0)
	{
        //JRequest::setVar('hidemainmenu', 1);

		//$user		= JFactory::getUser();
		//$isNew		= ($this->item->id == 0);
		//$canDo		= UsersHelper::getActions();

		//JToolBarHelper::title(JText::_($isNew ? 'COM_USERS_VIEW_NEW_GROUP_TITLE' : 'COM_USERS_VIEW_EDIT_GROUP_TITLE'), 'groups-add');

		//if ($canDo->get('core.edit')||$canDo->get('core.create')) {
		//	JToolBarHelper::apply('group.apply');
		//	JToolBarHelper::save('group.save');
		//}
        VToolBar_Helper::apply('golongan.apply');
        VToolBar_Helper::save('golongan.save');
        
        //if ($canDo->get('core.create')) {
		//	JToolBarHelper::save2new('group.save2new');
		//}
        VToolBar_Helper::save2new('golongan.save2new');
        
		// If an existing item, can save to a copy.
		//if (!$isNew && $canDo->get('core.create')) {
		//	JToolBarHelper::save2copy('group.save2copy');
		//}

		//if (empty($this->item->id))  {
		//	JToolBarHelper::cancel('group.cancel');
		//} else {
		//	JToolBarHelper::cancel('group.cancel', 'JTOOLBAR_CLOSE');
		//}
        if (empty($id)) {
			VToolBar_Helper::cancel('golongan.cancel');
		} else {
			VToolBar_Helper::cancel('golongan.cancel', 'Close');
		}

		//JToolBarHelper::divider();
		//JToolBarHelper::help('JHELP_USERS_GROUPS_EDIT');
	}
    
}

/* End of file golongan.php */
/* Location: ./application/controllers/golongan.php */