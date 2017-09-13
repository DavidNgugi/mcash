<?php

namespace Mcash\Pesa\Data;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Uuid Trait
 *
 *@category PHP
 *@package  Mcash\Pesa
 *@author   Ayim Domnic <ayimdomnic@gmail.com>
*/
trait uuidTrait
{
  protected static function boot()
  {

    parent::boot();

    /**
     * Add the UUID before persisting the model
     */

    static::creating(function (Model $model) {
      $uuidCol = config('app.default_uuid_column', 'uuid');
      if (empty($model->attributes[$uuidCol])) {
        $model->attributes[$uuidCol] = Uuid::uuid4();
      }
    });
  }

  /**
   * Add UUID scope to model
   * So you can query like Model::Uuid('uuid string');
   * @param string Uuid
   *
   */
  public function scopeUuid($query, $uuid, $first = TRUE)
  {

    if (!is_string($uuid) || !Uuid::isValid($uuid)) {
      throw (new ModelNotFoundException)->setModel(get_class($this));
    }
    $results = $query->where(config('app.default_uuid_column', 'uuid'), $uuid);
    return $first ? $results->firstOrFail() : $results;
  }
}
