<?php namespace App\Models;
use CodeIgniter\Model;

class UserProperiesModel extends Model
{
    protected $table = 'userProperties';
  

    protected $allowedFields = ['userId', 'propertyId', 'amount'];


    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    
    public function getUserProperties($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['userId' => $id]);
        }   
    }

    public function saveUserProperty($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateUserProperties($data, $userId, $propertyId)
    {
        $query = $this->db->table($this->table)->update($data, array('userId' => $userId, 'propertyId' => $propertyId));
        return $query;
    }

    public function deleteUserProperty($userId, $propertyId)
    {
        $query = $this->db->table($this->table)->delete(array('userId' => $userId, 'propertyId' => $propertyId));
        return $query;
    } 
}