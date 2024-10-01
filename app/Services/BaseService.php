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

    public function saveFiles($request, $object, $files = [])
    {
    	if(!$object) { return ; }
    	if(count($files) > 0){
    		foreach($files as $file){
    			if ($request->hasFile($file)) {
		            $object
		                ->addMedia($request->$file)
		                ->toMediaCollection($file);
		        }		
    		}
    	}
    }
    
    public function saveFile($request, $object, $files = [])
    {
    	if(!$object) { return ; }
    	if(count($files) > 0){
    		foreach($files as $file){
    			if ($request->hasFile($file)) {
    	    	    $object->clearMediaCollection($file);
		            $object
		                ->addMedia($request->$file)
		                ->toMediaCollection($file);
		        }		
    		}
    	}
    }
    
}
