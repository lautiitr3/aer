<?php
namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $allowedFields = ['flight_id', 'user_id', 'reserved_at', 'created_at', 'updated_at'];
}