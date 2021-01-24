<?php namespace App\Models;
use CodeIgniter\Model;

class InvestmentGroupsModel extends Model
{
    protected $table = 'investmentGroup';
      protected $primaryKey = 'id';

    protected $allowedFields = ['propertyId', 'investmentPercentage', 'updatedAt', 'createdBy', 'deletedBy', 'groupName'];


    protected $useTimestamps = true;
    protected $createdField  = 'createdAt';
    
    
}