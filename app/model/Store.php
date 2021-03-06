<?php

namespace app\model;

use app\core\Model;
use m4\m4mvc\helper\Session;
use m4\m4mvc\helper\Str;

class Store extends Model
{
    public static $table = "supermarkets";

    public function insert($data) {
        $sql = "INSERT INTO supermarkets(name, slug, image, country, note, description)
                VALUES(:name, :slug, :image, :country, :note, :description)";
        $array = array(
            ":name"         => $data['name'],
            ":slug"         => Str::slugify($data['name']),
            ":image"        => $data['image'],
            ":country"      => COUNTRY_CODE,
            ":note"         =>  $data['note'],
            ":description"  =>  $data['description']
        );
        return $this->save($sql, $array, True);
    }

    public function update($data, $id) {
        $sql = "UPDATE supermarkets
                SET name        = :name,
                    slug        = :slug,
                    image       = :image,
                    note        = :note,
                    description = :description
                WHERE id = :id";
        $args = array(
            ":name"         =>  $data['name'],
            ":slug"         =>  Str::slugify($data['name']),
            ":image"        =>  $data['image'],
            ":id"           =>  $id,
            ":note"         =>  $data['note'],
            ":description"  =>  $data['description']
        );
        return $this->save($sql, $args);
    }

    public function getSupermarketById($id) {
        $sql = "select * from supermarkets WHERE id = :id LIMIT 1";
        return $this->fetch($sql, array(":id" => $id));
    }

    public function list() {
        $sql = "select * from supermarkets WHERE country = :country";
        $args = array(':country'  => COUNTRY_CODE);
        return $this->fetchAll($sql, $args);
    }

    public function createEdit($store_id, $reason = null, $diff = null, $comment = null)
    {
      $edit = new Edit();
      $data['type'] = $reason ?? "new";
      $data['object_type'] = "store";
      $data['object_id'] = $store_id;
      $edit_id = $edit->newEdit($data);
      $edit->closeEdit($edit_id, $comment, $diff);
    }

}
