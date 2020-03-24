<?php 
require_once('config/Database.php');

class FlipModel { 

	public $table = "transactions";

	public $fillable = [
        'transactions_id',
        'amount',
        'status',
        'timestamp',
        'bank_code',
        'account_number',
        'beneficiary_name',
        'remark',
        'receipt',
        'time_served',
        'fee',
        'created_at'
    ];

}
