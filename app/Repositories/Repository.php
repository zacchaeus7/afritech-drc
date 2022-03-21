<?php 

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class Repository implements RepositoryInterface
{
    
    public function save($table, $data, $createdDate = true)
    {
        if ($createdDate) {

            $data["created_at"] = date("Y-m-d h:i:s");

        }
        
        $primary_key = DB::table($table)->insertGetId($data);
        
        return $primary_key;
    }

    public function findAll($table, $organisationId = 0,$per_page =10)
    {
        $data = DB::table($table)->orderBy('created_at', 'desc')
            ->where('is_deleted','=',0)
            ->paginate($per_page);

        if ($organisationId != 0) {
            $data = DB::table($table)->where('organisation_id', $organisationId)->orderBy('created_at', 'desc')->get();
        }

        return $data;
    }

    public function findRecordsByField($table, $fieldName, $fieldValue, $per_page = 10)
    {
        return DB::table($table)
            ->where($fieldName,'=',$fieldValue)
            ->where('is_deleted','=',0)
            ->paginate($per_page);
    }

    public function findRecordsByFieldNotPaginate($table, $fieldName, $fieldValue)
    {
        return DB::table($table)
            ->where($fieldName,'=',$fieldValue)
            ->where('is_deleted','=',0)
            ->get();
    }

    public function findRecordByField($table, $fieldName, $fieldValue)
    {
        return DB::table($table)
            ->where($fieldName,'=',$fieldValue)
            ->where('is_deleted','=',0)
            ->get()->first();
    }



    public function findRecordsTwoByField($table, $fieldName,$fileName2, $fieldValue,$fieldValue2)
    {
        return DB::table($table)
            ->where($fieldName,'=',$fieldValue)
            ->where($fileName2,'=',$fieldValue2)
            ->where('is_deleted','=',0)

            ->get()->first();
    }


    public function findRecordsByTwoFields($table, array $fields, array $values)
    {
        return DB::table($table)
            ->where('is_deleted','=',0)
            ->where($fields[0], $values[0])
            ->where($fields[1], $values[1])
            ->paginate();
    }



    public function findOneRecordsByTwoFields($table, array $fields, array $values)
    {
        $data =  DB::table($table)
            ->where('is_deleted','=',0)
            ->where($fields[0], $values[0])
            ->where($fields[1], $values[1])
            ->get();

        return $data[0];
    }

    public function findRecord($table, $id)
    {
        return DB::table($table)->find($id);
        
    }

    public function update($table, $id, $data, $updatedDate = true)
    {

        if ($updatedDate) {

            $data["updated_at"] = date("Y-m-d h:i:s");
            
        }
        
        DB::table($table)->where('id', $id)->update($data);

        return true;
        
    }

    public function updateByArgs($table, array $fields, $data, $updatedDate = true)
    {

        if ($updatedDate) {
            $data["updated_at"] = date("Y-m-d h:i:s");
        }

        $request = DB::table($table);

        foreach ($fields as $key => $fieldValue) {
            $request->where($key, $fieldValue);
        }

        $request->update($data);
        
        return true;        
    }

    public function delete($table, $id)
    {

        DB::table($table)->where('id', $id)->update(['is_deleted' => 1]);

        return true;

    }

    public function search($table, $keyword)
    {
        $data = DB::table($table)->orderBy('created_at','desc')
            ->where('name','LIKE','%'.$keyword.'%')
            ->where('is_deleted','=',0)

            ->paginate();

        return $data;
    }

}
