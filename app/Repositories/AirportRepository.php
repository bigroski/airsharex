<?php

namespace App\Classes\Repositories;

// use App\Models\ConsignmentRate;
use Illuminate\Support\Facades\Log;
use App\Repositories\Repository as BaseRepository;
use App\Models\Airport;
class AirportRepository extends BaseRepository
{
	public function __construct(private Airport $model){
		
	}
	public function getActiverAirports(){
        return $this->model->all();

    }




}