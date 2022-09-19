<?php

namespace App\Models;

use App\Domain\Configs\Model\Config;
use App\Domain\Users\Activities\ActivityLog\Actions\ActivityLogStoreAction;
use App\Domain\Users\Activities\ActivityLog\DTO\ActivityLogDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use App\Exceptions\RequestException;
use App\Helpers\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SmartModel extends Model
{
//    private static $user_id;
//
//    public static function boot()
//    {
//        parent::boot();
//
//        static::$user_id = Auth::guard('api')->id();
//
//        if(Config::$logging)
//            static::lintening();
//    }
//
//    public static function lintening()
//    {
//        static::retrieved(function ($model) {
//                ActivityType::$RETRIEVED ? ActivityLogStoreAction::execute(ActivityLogDTO::fromRequest(
//                    Response::createUserActivityRequest($model->id, $model->getTable(), ActivityType::$RETRIEVED))) : null;
//        });
//
//        static::created(function ($model) {
//                ActivityType::$CREATE ? ActivityLogStoreAction::execute(ActivityLogDTO::fromRequest(
//                    Response::createUserActivityRequest($model->id, $model->getTable(), ActivityType::$CREATE))) : null;
//        });
//
//        static::creating(function ($model) {
//            $model->created_by_user_id ? $model->created_by_user_id = static::$user_id : null;
//        });
//
//        static::updated(function ($model) {
//                ActivityType::$CREATE ? ActivityLogStoreAction::execute(ActivityLogDTO::fromRequest(
//                    Response::createUserActivityRequest($model->id, $model->getTable(), ActivityType::$UPDATE))) : null;
//        });
//
//        static::updating(function ($model) {
//            $model->updated_by_user_id ? $model->updated_by_user_id = static::$user_id : null;
//        });
//        static::deleted(function ($model) {
//                ActivityType::$CREATE ? ActivityLogStoreAction::execute(ActivityLogDTO::fromRequest(
//                    Response::createUserActivityRequest($model->id, $model->getTable(), ActivityType::$DELETE))) : null;
//        });
//
//        static::deleting(function ($model) {
//            if (!Config::$can_delete) throw new RequestException(
//                json_encode("delete action is disabled by admin!")
//            );
//            $model->deleted_by_user_id ? $model->deleted_by_user_id = static::$user_id : null;
//        });
//
//    }


    public function updateRelation($relation,$data){
        DB::transaction(function () use($relation,$data){
            if(is_object($data)) $data = [$data];
            $ids = [];
            foreach ($data as $item){
                if(isset($item['id'])){
                    $this->{$relation}()->where('id',$item['id'])->update($item);
                    array_push($ids,$item['id']);
                }else{
                    $model = $this->{$relation}()->create($item);
                    array_push($ids,$model->id);
                }
            }
            $this->{$relation}()->whereNotIn('id',$ids)->delete();
        });
        return $this->{$relation}()->get();
    }
}
