<?php

namespace App\Repositories;

use App\Models\table_pricing;
use App\Repositories\BaseRepository;

/**
 * Class table_pricingRepository
 * @package App\Repositories
 * @version October 5, 2021, 8:31 am UTC
*/

class table_pricingRepository extends BaseRepository
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
        return table_pricing::class;
    }
}
