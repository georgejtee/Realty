<?php namespace App\Models;
use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table = 'Property';
    
    public function getProperty($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['Propertyid' => $id]);
        }   
    }

    public function saveProperty($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateProperty($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('Property_id' => $id));
        return $query;
    }

    public function deleteProperty($id)
    {
        $query = $this->db->table($this->table)->delete(array('Property_id' => $id));
        return $query;
    } 
}