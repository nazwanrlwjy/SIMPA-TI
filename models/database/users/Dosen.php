<?php

namespace app\models\database\users;

use app\cores\Blueprint;
use app\cores\Schema;
use app\models\BaseModel;

class Dosen extends BaseModel
{
    public const TABLE = "dosen";
    public const ID = "id";
    public const NIDN = "nidn";
    public const NAMA = "nama";

    public static function insert(array $data): array
    {
        return Schema::insertInto(self::TABLE, function (Blueprint $table) use ($data) {
            $table->insert([self::ID,self::NIDN, self::NAMA], $data);
            
        });
    }

    public static function deleteAll(): array
    {
        return Schema::deleteFrom(self::TABLE);
    }
}