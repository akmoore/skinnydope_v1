<?php

namespace App\SkinnyDope\Helpers;

class States {

	public static function states(){
		return $states = [
				    'AL'=>'Alabama',
				    'AK'=>'Alaska',
				    'AZ'=>'Arizona',
				    'AR'=>'Arkansas',
				    'CA'=>'California',
				    'CO'=>'Colorado',
				    'CT'=>'Connecticut',
				    'DE'=>'Delaware',
				    'DC'=>'District of Columbia',
				    'FL'=>'Florida',
				    'GA'=>'Georgia',
				    'HI'=>'Hawaii',
				    'ID'=>'Idaho',
				    'IL'=>'Illinois',
				    'IN'=>'Indiana',
				    'IA'=>'Iowa',
				    'KS'=>'Kansas',
				    'KY'=>'Kentucky',
				    'LA'=>'Louisiana',
				    'ME'=>'Maine',
				    'MD'=>'Maryland',
				    'MA'=>'Massachusetts',
				    'MI'=>'Michigan',
				    'MN'=>'Minnesota',
				    'MS'=>'Mississippi',
				    'MO'=>'Missouri',
				    'MT'=>'Montana',
				    'NE'=>'Nebraska',
				    'NV'=>'Nevada',
				    'NH'=>'New Hampshire',
				    'NJ'=>'New Jersey',
				    'NM'=>'New Mexico',
				    'NY'=>'New York',
				    'NC'=>'North Carolina',
				    'ND'=>'North Dakota',
				    'OH'=>'Ohio',
				    'OK'=>'Oklahoma',
				    'OR'=>'Oregon',
				    'PA'=>'Pennsylvania',
				    'RI'=>'Rhode Island',
				    'SC'=>'South Carolina',
				    'SD'=>'South Dakota',
				    'TN'=>'Tennessee',
				    'TX'=>'Texas',
				    'UT'=>'Utah',
				    'VT'=>'Vermont',
				    'VA'=>'Virginia',
				    'WA'=>'Washington',
				    'WV'=>'West Virginia',
				    'WI'=>'Wisconsin',
				    'WY'=>'Wyoming',
				];
	}

	public static function statesIndexed(){
		return [
	        'A' =>
	            [
	                0 => 'Alabama',
	                1 => 'Alaska',
	                2 => 'Arizona',
	                3 => 'Arkansas',
	            ],
	        'C' =>
	            [
	                0 => 'California',
	                1 => 'Colorado',
	                2 => 'Connecticut',
	            ],
	        'D' =>
	            [
	                0 => 'Delaware',
	                1 => 'District of Columbia',
	            ],
	        'F' =>
	            [
	                0 => 'Florida',
	            ],
	        'G' =>
	            [
	                0 => 'Georgia',
	            ],
	        'H' =>
	            [
	                0 => 'Hawaii',
	            ],
	        'I' =>
	            [
	                0 => 'Idaho',
	                1 => 'Illinois',
	                2 => 'Indiana',
	                3 => 'Iowa',
	            ],
	        'K' =>
	            [
	                0 => 'Kansas',
	                1 => 'Kentucky',
	            ],
	        'L' =>
	            [
	                0 => 'Louisiana',
	            ],
	        'M' =>
	            [
	                0 => 'Maine',
	                1 => 'Maryland',
	                2 => 'Massachusetts',
	                3 => 'Michigan',
	                4 => 'Minnesota',
	                5 => 'Mississippi',
	                6 => 'Missouri',
	                7 => 'Montana',
	            ],
	        'N' =>
	            [
	                0 => 'Nebraska',
	                1 => 'Nevada',
	                2 => 'New Hampshire',
	                3 => 'New Jersey',
	                4 => 'New Mexico',
	                5 => 'New York',
	                6 => 'North Carolina',
	                7 => 'North Dakota',
	            ],
	        'O' =>
	            [
	                0 => 'Ohio',
	                1 => 'Oklahoma',
	                2 => 'Oregon',
	            ],
	        'P' =>
	            [
	                0 => 'Pennsylvania',
	            ],
	        'R' =>
	            [
	                0 => 'Rhode Island',
	            ],
	        'S' =>
	            [
	                0 => 'South Carolina',
	                1 => 'South Dakota',
	            ],
	        'T' =>
	            [
	                0 => 'Tennessee',
	                1 => 'Texas',
	            ],
	        'U' =>
	            [
	                0 => 'Utah',
	            ],
	        'V' =>
	            [
	                0 => 'Vermont',
	                1 => 'Virginia',
	            ],
	        'W' =>
	            [
	                0 => 'Washington',
	                1 => 'West Virginia',
	                2 => 'Wisconsin',
	                3 => 'Wyoming',
	            ]
	    ];
	}

	public static function statesCoordinates(){
		return [
			'AL'=>'32.6010112,-86.6807365',
	        'AK'=>'61.3025006,-158.7750198',
	        'AZ'=>'34.1682185,-111.930907',
	        'AR'=>'34.7519275,-92.1313784',
	        'CA'=>'37.2718745,-119.2704153',
	        'CO'=>'38.9979339,-105.550567',
	        'CT'=>'41.5187835,-72.757507',
	        'DE'=>'39.145251,-75.4189206',
	        'DC'=>'38.8993487,-77.0145666',
	        'FL'=>'27.9757279,-83.8330166',
	        'GA'=>'32.6781248,-83.2229757',
	        'HI'=>'20.46,-157.505',
	        'ID'=>'45.4945756,-114.1424303',
	        'IL'=>'39.739318,-89.504139',
	        'IN'=>'39.7662195,-86.441277',
	        'IA'=>'41.9383166,-93.389798',
	        'KS'=>'38.4987789,-98.3200779',
	        'KY'=>'37.8222935,-85.7682399',
	        'LA'=>'30.9733766,-91.4299097',
	        'ME'=>'45.2185133,-69.0148656',
	        'MD'=>'38.8063524,-77.2684162',
	        'MA'=>'42.0629398,-71.718067',
	        'MI'=>'44.9435598,-86.4158049',
	        'MN'=>'46.4418595,-93.3655146',
	        'MS'=>'32.5851062,-89.8772196',
	        'MO'=>'38.3046615,-92.437099',
	        'MT'=>'46.6797995,-110.044783',
	        'NE'=>'41.5008195,-99.680902',
	        'NV'=>'38.502032,-117.0230604',
	        'NH'=>'44.0012306,-71.5799231',
	        'NJ'=>'40.1430058,-74.7311156',
	        'NM'=>'34.1662325,-106.0260685',
	        'NY'=>'40.7056258,-73.97968',
	        'NC'=>'35.2145629,-79.8912675',
	        'ND'=>'47.4678819,-100.3022655',
	        'OH'=>'40.1903624,-82.6692525',
	        'OK'=>'35.3097654,-98.7165585',
	        'OR'=>'44.1419049,-120.5380993',
	        'PA'=>'40.9945928,-77.6046984',
	        'RI'=>'41.5827282,-71.5064508',
	        'SC'=>'33.62505,-80.9470381',
	        'SD'=>'44.2126995,-100.2471641',
	        'TN'=>'35.830521,-85.9785989',
	        'TX'=>'31.1693363,-100.0768425',
	        'UT'=>'39.4997605,-111.547028',
	        'VT'=>'43.8717545,-72.4477828',
	        'VA'=>'38.0033855,-79.4587861',
	        'WA'=>'38.8993487,-77.0145665',
	        'WV'=>'38.9201705,-80.1816905',
	        'WI'=>'44.7862968,-89.8267049',
	        'WY'=>'43.000325,-107.5545669',
		];
	}
}