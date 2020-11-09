<?php namespace App\Models;
use CodeIgniter\Model;

class DepoitsModel extends Model
{
    protected $table = 'userDeposits';

    protected $allowedFields = ['userId', 'amount', 'created_at', 'status'];


    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    
    
}