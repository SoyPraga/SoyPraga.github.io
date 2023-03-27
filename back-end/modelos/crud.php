<?php 
interface CRUD{
    public function create($conn);
    public function read_all($conn);
    public function read($conn);
    public function update($conn);
    public function delete($conn);
}
?>