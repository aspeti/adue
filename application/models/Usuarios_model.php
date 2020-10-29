<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function getUsuarios()
	{
		//$this->db->select("*");
		//$this->db->from('usuarios');
		$this->db->where("estado","1");

		$resultados = $this->db->get("usuarios");
			return $resultados->result();
	}

	public function agregarusuario($data)
	{
		return $this->db->insert('usuarios',$data);
	}

	public function getUsuario($idusuario)
	{
		$this->db->where("idusuario",$idusuario);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();
	}
	//
	public function update($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		return $this->db->update('usuarios',$data);
	}	

	public function deleteUsuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		return $this->db->update('usuarios',$data);
	}



}
