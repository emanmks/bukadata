<?php


use Faker\Factory as Faker;

class InstansiDKIJakartaTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();

        $organizationTypeId = OrganizationType::whereName('Instansi Pemerintah')->first()->id;

		$organizations = [
            'Badan Kepegawaian Daerah',
            'Badan Kesatuan Bangsa dan Politik',
            'Badan Pelayanan pengadaaan barang jasa',
            'Badan Pelayanan terpadu satu pintu',
            'Badan Pemberdayaan Masyarakat dan Perempuan dan KB',
            'Badan Pembinaan BUMD dan Penanaman Modal',
            'Badan Penangulangan Bencana Daerah (BPBD)',
            'Badan Pendidikan dan Pelatihan',
            'Badan Pengelola Keuangan dan Aset Daerah (BPKAD)',
            'Badan Perencanaan Pembangunan Daerah (BAPPEDA)',
            'Badan Pengelolaan Lingkungan hidup daerah',
            'Badan Perpustakaan Arsip daerah',
            'Bina Mental Spiritual dan Kesejahteraan sosial',
            'Badan Pusat Statistik',
            'Biro Administrasi Keuangan dan Aset Setda',
            'Biro Keserjaheraan Sosial',
            'Biro hukum',
            'Biro Kepala Daerah dan Kerjasama Luar Negeri',
            'Biro Penataan Kota dan Lingkungan Hidup',
            'Biro Organisasi Reformasi dan Birokrasi',
            'Biro Pendidikan dan Mental Sosial',
            'Biro Perekonomian',
            'Biro Tata Pemerintah',
            'Biro Umum',
            'Dinas Kebersihan',
            'Dinas Binamarga',
            'Dinas Olahraga dan Pemuda',
            'Dinas Kelautan Pertanian dan Ketahanan Pangan',
            'Dinas Kependudukan dan Catatan Sipil',
            'Dinas Kesehatan',
            'Dinas Koperasi, UKM serta Perdagangan',
            'Dinas Pariwisata dan Kebudayaan',
            'Dinas Komunikasi, Informatika dan Kehumasan',
            'Dinas Penanggulangan Kebakaran dan Penyelamatan',
            'Dinas Penataan Kota',
            'Dinas Pelayanan Pajak',
            'Dinas Perindustrian dan Energi',
            'Dinas Pendidikan',
            'Dinas Perhubungan',
            'Dinas Sosial',
            'Dinas Pertamanan dan Pemakaman',
            'Dinas Perumahan dan Gedung Pemda',
            'Dinas Tata air',
            'Dinas Tenaga kerja dan Transmigrasi',
            'Inspektorat Provinsi DKI Jakarta',
            'Satuan Polisi Pamong Praja (Satpol PP)',
        ];

        foreach($organizations as $organization){
            Organization::create([
                    'organization_type' => $organizationTypeId,
                    'hierarchy_id' => 0,
                    'parent_id' => 0,
                    'name' => $organization,
                    'tax_file_number' => str_random(15),
                    'reg_no' => str_random(12),
                    'address' => $faker->address,
                    'url' => $faker->domainName
                ]);
        }
	}

}