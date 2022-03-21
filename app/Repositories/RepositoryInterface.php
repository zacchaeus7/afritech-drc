<?php 

namespace App\Repositories;

Interface RepositoryInterface{
    public function save($table, $data);
    public function findAll($table,$per_page = 10);
    public function findRecordsByField($table, $fieldName, $fieldValue);
    public function  findRecordByField($table, $fieldName, $fieldValue);
    public function findRecordsByTwoFields($table, array $fields, array $values);
    public function findOneRecordsByTwoFields($table, array $fields, array $values);
    public function findRecord($table, $id);
    public function update($table, $id, $data);
    public function updateByArgs($table, array $fields, $data, $updatedDate = true);
    public function delete($table, $id);
    public function search($table,$keyword);
}