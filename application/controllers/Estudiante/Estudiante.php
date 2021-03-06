<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

  public function __construct(){
  parent::__construct();
  $this->load->model("Estudiante_model");
  $this->load->model("Curso_model");


  }

	public function index()
	{
    $data = array (
      'estudiantes' => $this->Estudiante_model->getEstudiantes(),
    );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/estudiante/list',$data);
		$this->load->view('layouts/footer');
  }

  public function add()
  {
      $data = array (
        'cursos' => $this->Curso_model->getCursos(),
      );

      $this->load->view('layouts/header');
    	$this->load->view('layouts/aside');
      $this->load->view('admin/estudiante/add', $data);
      $this->load->view('layouts/footer');
  }
  //
  public function agregardb()
  {
    $nombres = $this->input->post("nombres");
    $aPaterno = $this->input->post("apaterno");
    $aMaterno =$this->input->post("amaterno");
    $ci = $this->input->post("ci");
    $sexo = $this->input->post("sexo");
    $fechaNacimiento =$this->input->post("fechaNacimiento");
    $celular = $this->input->post("celular");
    $email =$this->input->post("email");
    $direccion = $this->input->post("direccion");
    $curso =$this->input->post("curso");

    $data = array('nombres' => $nombres,
                  'aPaterno'=> $aPaterno,
                  'aMaterno'=> $aMaterno,
                  'ci'      => $ci,
                  'sexo'    => $sexo,
                  'fechaNacimiento'  => $fechaNacimiento,
                  'celular' => $celular,
                  'email'   => $email,
                  'direccion'=> $direccion,
                  'idCurso'  => $curso,

                );
    if ($this->Estudiante_model->insertar($data)) {
       redirect("Estudiante/estudiante/index");
    }else {
      $this->session->set_flashdata("error","No se pudo guardar la informacion");
      redirect(base_url()."Estudiante/estudiante/add");
    }
  }
  //
  //
  // public function edit($idcurso)
  //   {
  //     $data = array('curso' => $this->Curso_model->getCurso($idcurso));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	$this->load->view('admin/curso/edit',$data);
  //   	//$this->load->view('layouts/footer');
  //   }
  //
  // public function view($idCurso)
  //   {
  //     $data = array('curso' => $this->Curso_model->getCurso($idCurso));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	$this->load->view('admin/curso/view',$data);
  //   	//$this->load->view('layouts/footer');
  //   }
  //
  // public function updatedb()
  //   {
  //     $idcurso = $this->input->post("idcurso");
  //     $nombre = $this->input->post("nombre");
  //     $seccion = $this->input->post("seccion");
  //     $tutor =$this->input->post("tutor");
  //
  //
  //     $data = array('idcurso' => $idcurso,
  //                   'nombre'=>$nombre,
  //                   'seccion'=>$seccion,
  //                   'tutor'=>$tutor,
  //                 );
  //     if ($this->Curso_model->update($idcurso,$data)) {
  //        redirect("Curso/Curso/index");
  //     }else {
  //       $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
  //       redirect(base_url()."/Curso/curso/edit".$idcurso);
  //     }
  //
  //   }
  //
  // public function delete($idcurso)
  //   {
  //     $data['estado']='0';
  //     //$data = array('usuario' => $this->Usuarios_model->deleteUsuario($idusuario,$data));
  //
  //     //$this->load->view('layouts/header');
  //     //$this->load->view('layouts/aside');
  //   	//$this->load->view('admin/usuarios/',$data);
  //     //$this->load->view('layouts/footer');
  //
  //
  //     if ($this->Curso_model->deleteCurso($idcurso,$data)) {
  //       redirect("Curso/Curso/index");
  //    }else {
  //      $this->session->set_flashdata("error","No se pudo Actualizasr la informacion");
  //      redirect(base_url()."/Curso/Curso/");
  //    }
  //   }





}
