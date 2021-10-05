<?php

namespace App\Repositories;

use App\Models\table_sales;
use App\Repositories\BaseRepository;

/**
 * Class table_salesRepository
 * @package App\Repositories
 * @version October 5, 2021, 8:32 am UTC
*/

class table_salesRepository extends BaseRepository
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
        return table_sales::class;
    }
}
