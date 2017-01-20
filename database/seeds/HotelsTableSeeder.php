<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Hotels::insert([
        	[
		      'hotel_name'  	=> 'Hotel Lavos',
		      'hotel_email' 	=> 'lavoshotel@gmail.com',
		      'hotel_address'   => 'Jl.Letjen Sutoyo 21',
		      'hotel_city'  	=> 'Semarang'
    		],

    		[
		      'hotel_name'  	=> 'Hotel Republik',
		      'hotel_email' 	=> 'republikhotel@gmail.com',
		      'hotel_address'   => 'Jl.Tokala 16',
		      'hotel_city'  	=> 'Jakarta'
    		],

    		[
		      'hotel_name'  	=> 'Hotel Javana',
		      'hotel_email' 	=> 'javanahotel@gmail.com',
		      'hotel_address'   => 'Jl.Dirgantara 3',
		      'hotel_city'  	=> 'Probolinggo'
    		],
			
			[
		      'hotel_name'  	=> 'Hotel Socialism',
		      'hotel_email' 	=> 'socialismhotel@gmail.com',
		      'hotel_address'   => 'Jl.Soekarnoe Hatta 30',
		      'hotel_city'  	=> 'Malang'
    		],        
        ]);
        \App\fullcalender::insert([
    		[
    		'Nama_Event'	=> 'Beli Cilok',
    		'Tanggal'		=> '2017-01-05',
    		'Keterangan'	=> 'Kebiasaan sehari-hari'
    		],
    		[

        		'Nama_Event'	=> 'Car Free Day',
    		'Tanggal'		=> '2017-01-08',
    		'Keterangan'	=> 'Ketemu gebetan'
    		],
    		[
    		'Nama_Event'	=> 'Machung Festival',
    		'Tanggal'		=> '2017-01-15',
    		'Keterangan'	=> 'Di terima di Universitas tercinta'
    		],
    		[
    		'Nama_Event'	=> 'Color Run',
    		'Tanggal'		=> '2017-01-21',
    		'Keterangan'	=> 'Menjaga kebugaran badan'
    		],
    		[
    		'Nama_Event'	=> 'Fitnes',
    		'Tanggal'		=> '2017-01-22',
    		'Keterangan'	=> 'Olah raga'
    		]
    		]);

    }
    	
}
