<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    protected $fillable = [
        'inv_id',
        'serv_prov_nam',
        'received_by',
        'inv_amount',
        'patient_name',
        'po_num',
        'inv_type',
        'start_date',
        'end_date',
        'veri_by',
        'batch_number',
        'veri_date',
        'batch_date',
        'batch_by',
        'resub',
        'comment',
        'check_out_date_l',
        'check_in_date_n',
        'commit_com',
        'aud',
        'stamp_date',
        'adhoc',
        'audit_rdate',
        'audit_odate',
        'audit_reject_amou',
        'aud_notes',
        'aud_type',
        'aud_engage',
        'aud_sp',
        'aud_by',
        'sent_by',
        'Centre'
    ];
}
