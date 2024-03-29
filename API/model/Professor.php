<?php
include '../../conexao/Conexao.php';

class Professor extends Conexao{
    
    private $idaluno;
    private $nomealuno;
    private $cpfaluno;
    private $telefonealuno;
    private $endaluno;
    private $senhaaluno;

    function getIdaluno() {
        return $this->idaluno;
    }

    function getNomealuno() {
        return $this->nomealuno;
    }

    function getCpfaluno() {
        return $this->cpfaluno;
    }

    function getCurso_id() {
        return $this->telefonealuno;
    }

    function getPeriodo_id() {
        return $this->endaluno;
    }

    function getDisciplina_id() {
        return $this->senhaaluno;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setCurso_id($curso_id) {
        $this->curso_id = $curso_id;
    }

    function setPeriodo_id($periodo_id) {
        $this->periodo_id = $periodo_id;
    }

    function setDisciplina_id($disciplina_id) {
        $this->disciplina_id = $disciplina_id;
    }

    public function insert($obj){
    	$sql = "INSERT INTO conteudo(titulo,descricao,horario,curso_id,periodo_id,disciplina_id) VALUES (:titulo,:descricao,:horario,:curso_id,:periodo_id,:disciplina_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo',  $obj->titulo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario' , $obj->horario);
        $consulta->bindValue('curso_id' , $obj->curso_id);
        $consulta->bindValue('periodo_id' , $obj->periodo_id);
        $consulta->bindValue('disciplina_id' , $obj->periodo_id);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE conteudo SET titulo = :titulo, descricao = :descricao,horario = :horario, curso_id = :curso_id,periodo_id =:periodo_id, disciplina_id = :disciplina_id WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('titulo', $obj->titulo);
		$consulta->bindValue('descricao', $obj->descricao);
		$consulta->bindValue('horario' , $obj->horario);
		$consulta->bindValue('curso_id', $obj->curso_id);
		$consulta->bindValue('periodo_id' , $obj->periodo_id);
		$consulta->bindValue('disciplina_id' , $obj->disciplina_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM conteudo WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM profesor";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>