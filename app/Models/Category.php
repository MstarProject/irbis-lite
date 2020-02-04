<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'id_parent',
        'description',
        'is_visible'
    ];

    public function getForEdit($id)
    {
        return $this->find($id);
    }

    public function getForSelect()
    {
        $sColumns = implode(",", ['id', "CONCAT(id,'. ', title) as id_title"]);
        $result = $this->selectRaw($sColumns)
            ->toBase()
            ->get();

        return $result;
    }

    public function getAllPaginate ($iPerPage = null){
        $aColumns = ['id', "title", 'id_parent'];
        $result = $this->select($aColumns)
            ->paginate($iPerPage);

        return $result;
    }
}
