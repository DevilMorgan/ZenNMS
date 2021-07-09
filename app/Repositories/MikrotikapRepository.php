<?php

namespace App\Repositories;

use App\Models\Mikrotikap;
use App\Repositories\BaseRepository;

/**
 * Class MikrotikapRepository
 * @package App\Repositories
 * @version July 9, 2021, 12:49 am UTC
*/

class MikrotikapRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mikrotikap::class;
    }
}
