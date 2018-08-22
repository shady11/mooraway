<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class Flight
 * @package App
 */
class Flight extends Model
{
    use SoftDeletes;

    /**
     *
     */
    const CREATED_AT = 'createdAt';
    /**
     *
     */
    const UPDATED_AT = 'updatedAt';
    /**
     *
     */
    const DELETED_AT = 'deletedAt';

    /**
     * @var array
     */
    protected $fillable = ['id', 'fromId', 'toId', 'flightAt'];
    /**
     * @var string
     */
    protected $table = 'flight';
    /**
     * @var array
     */
    protected $dates = ['deletedAt'];

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function findAll()
    {
        return static::where(['userId' => Auth::user()->id])->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fromCity()
    {
        return $this->hasOne('App\Cities', 'id', 'fromId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function toCity()
    {
        return $this->hasOne('App\Cities', 'id', 'toId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'userId');
    }

    /**
     * @param $value
     * @return string
     */
    public function getFlightAtDateAttribute($value)
    {
        return (new DateTime($this->flightAt))->format('d.m.Y');
    }

    /**
     * @return string
     */
    public function getFlightAtTimeAttribute()
    {
        return (new DateTime($this->flightAt))->format('H:i');
    }

    /**
     * @param $fromId
     * @param $toId
     * @param $offset
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public static function findAllByCity($fromId, $toId, $offset)
    {
        $result = static::where(['fromId' => (int)$fromId, 'toId' => (int)$toId])
            ->skip($offset)
            ->with('user')
            ->orderBy('flightAt')
            ->where(['status'=>'find'])
            ->whereDate('flightAt', '>', date('Y-m-d H:i:s'))
            ->take(10)
            ->get()
            ->toArray();

        foreach ($result as &$item) {
            $item['flightAtTime'] = (new DateTime($item['flightAt']))->format('H:i');
            $item['flightAt'] = (new DateTime($item['flightAt']))->format('d.m.Y');
        }

        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function findOneById($id)
    {
        return static::where(['id' => (int)$id])->first();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function findOneOwnerById($id)
    {
        return static::where(['id' => (int)$id, 'userId' => Auth::user()->id])->first();
    }

    /**
     * @param $flightAt
     * @param $countryId
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function search($flightAt, $countryId)
    {
        $query = static::where([]);

        $query->select([
            'flight.id',
            'fromId',
            'toId',
            'userId'
        ]);

        if ($flightAt) {
            $query->whereDate('flightAt', '=', (new DateTime($flightAt))->format('Y:m:d 00:00:00'));
        }

        if ($countryId) {
            $query
                ->leftJoin('cities', 'flight.fromId', '=', 'cities.id')
                ->where('cities.countryId', $countryId);
        }

        return $query->paginate(15);
    }
}