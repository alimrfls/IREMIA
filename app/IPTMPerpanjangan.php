<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPTMPerpanjangan extends Model
{
    protected $fillable=[
        'pi_nomorsurat',
        'pi_tahunsurat',
        'pi_namakelurahan',
        'pi_nomorktpahliwaris',
        'pi_nomoriptm',
        'pi_tanggaliptm',
        'pi_nomorkehilangankepolisian',
        'pi_tanggalkehilangankepolisian',
        'pi_namaahliwaris',
        'pi_alamatahliwaris',
        'pi_rtahliwaris',
        'pi_rwahliwaris',
        'pi_kelurahanahliwaris',
        'pi_kecamatanahliwaris',
        'pi_kotaahliwaris',
        'pi_telephoneahliwaris',
        'pi_hubunganahliwaris',
        'pi_lokasitpu',
        'pi_namaalmarhum',
        'pi_tanggalwafat',
        'pi_blok',
        'pi_blad',
        'pi_petak',
        'pi_masaberlaku',
        'pi_perpanjanganke',
        'pi_tanggalsurat',
        'pi_fileiptmasli',
        'pi_cetakoleh',
        'pi_pemakamanid',

    ];
    protected $table='perpanjangan';
    protected $primaryKey='id';
}
