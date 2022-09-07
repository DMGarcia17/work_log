<?php
/**
 * 
 */
class procedimientos
{
    public $db;
    public function __construct()
    {
        require_once 'inf.php';
        try{
            $this->db = new PDO('mysql:host='.server.';dbname='.db, user, pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    public function blankect_query($table, $fields)
    {
        $query = $this->db->prepare('select '.$fields.' from '.$table);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function filtered_query($table, $fields, $condition)
    {
        $query = $this->db->prepare('select '.$fields.' from '.$table.' where '.$condition);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function query($sql)
    {
        $query = $this->db->prepare($sql);
        try{
          $query->execute();
          $res = $query->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
          $res = $e->getMessage();
        }
        return $res;
    }

    public function insert($sql)
    {
    $query = $this->db->prepare($sql);
    try{
      $res = $query->execute();
    }catch (PDOException $e){
      $res = $e->getMessage();
    }
    return $res;
    }
    public function delete($table, $condition){
        $sql = "delete from $table where $condition";
        $query = $this->db->prepare($sql);
        try{
            $res = $query->execute();
        }catch (PDOException $e){
            $res = $e->getMessage();
        }
        return $res;
    }

}