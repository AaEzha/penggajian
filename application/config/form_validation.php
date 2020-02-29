<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [
	'pengaturan/tambah' => [
			[
				'field' => 'jabatan',
				'label' => 'Jabatan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'masakerja',
				'label' => 'Masa Kerja',
				'rules' => 'trim|required|numeric|greater_than[0]|max_length[2]'
			],
			[
				'field' => 'insentif',
				'label' => 'Insentif',
				'rules' => 'trim|required|numeric|greater_than[0]'
			],
			[
				'field' => 'bonus',
				'label' => 'Bonus',
				'rules' => 'trim|required|numeric|greater_than[0]'
			],
	],
	'pengaturan/ubah' => [
			[
				'field' => 'jabatan',
				'label' => 'Jabatan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'masakerja',
				'label' => 'Masa Kerja',
				'rules' => 'trim|required|numeric|greater_than[0]|max_length[2]'
			],
			[
				'field' => 'insentif',
				'label' => 'Insentif',
				'rules' => 'trim|required|numeric|greater_than[0]'
			],
			[
				'field' => 'bonus',
				'label' => 'Bonus',
				'rules' => 'trim|required|numeric|greater_than[0]'
			],
	],
];