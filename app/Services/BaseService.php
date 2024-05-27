<?php

namespace App\Services;

class BaseService{

	public function getModelFields($repository, $listConfig = null){
		$repoName = $repository.'Repository';
		return $this->$repoName->model->getListables($listConfig);
	}
	public function getModel($repository){
		$repoName = $repository.'Repository';
		return $this->$repoName->model;
	}

	
}
