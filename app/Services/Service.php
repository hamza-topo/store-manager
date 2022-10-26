<?php 
namespace App\Services;

interface Service {


public function create(array $object = []);

public function edit(int $id,array $object = []);

public function delete(int $id);

public function findById(int $id);

public function getAll();

public function clearCache();

}