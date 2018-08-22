<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cities
 *
 * @property-read mixed $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cities like($term)
 * @mixin \Eloquent
 */
class Cities extends Model
{
    /**like($term)
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $visible = ['id', 'value'];

    /**
     * @param $query
     * @param $term
     * @return mixed
     */
    public function scopeLike($query, $term)
    {
        return $query->where('name', 'like', '%' . $term . '%');
    }

    /**
     * @param $term
     * @return array
     */
    public static function getCityFromTerm($term)
    {
        $models = static::where('name', 'LIKE', $term . '%')
            ->limit(5)
            ->orderByRaw("CASE WHEN name like '$term %' THEN 0
               WHEN name like '$term%' THEN 1
               WHEN name like '% $term%' THEN 2
               ELSE 3
          END, name")
            ->get();

        $result = [];
        foreach ($models as $model) {
            $result[] = [
                'id' => $model->id,
                'value' => $model->region ? $model->name . ', ' . $model->region : $model->name
            ];
        }

        return $result;
    }
}
