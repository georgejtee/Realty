<?php namespace App\Models;
use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'propertId ';

    protected $allowedFields = ['description', 'location', 'investmentReturnPercentage', 'shortDescription', 'developmentTime', 'imagepath1', 'imagepath2', 'imagepath3', 'investmentRequired', 'verified', 'verifiedBy'];


    protected $useTimestamps = false;
    protected $createdField  = 'dateUploaded';
    
    public function getProperty($id = false)
    {
        if($id === false){
            return $this->where('verified', 1)->findAll();
        }else{
            return $this->getWhere(['propertId' => $id])
            ->first();
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