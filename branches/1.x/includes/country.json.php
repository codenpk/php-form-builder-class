<?php
$jsonCountries = <<<STR
{ 
	"keys": 
	[ 
		"",
		"US",
		"AF",
		"AL",
		"DZ",
		"AS",
		"AD",
		"AO",
		"AI",
		"AG",
		"AR",
		"AM",
		"AW",
		"AU",
		"AT",
		"AZ",
		"BS",
		"BH",
		"BD",
		"BB",
		"BY",
		"BE",
		"BZ",
		"BJ",
		"BM",
		"BT",
		"BO",
		"BA",
		"BW",
		"BR",
		"IO",
		"BN",
		"BG",
		"BF",
		"BI",
		"KH",
		"CM",
		"CA",
		"CV",
		"KY",
		"CF",
		"TD",
		"CL",
		"CN",
		"CO",
		"CG",
		"CK",
		"CR",
		"CI",
		"HR",
		"CY",
		"CZ",
		"DK",
		"DJ",
		"DM",
		"DO",
		"EC",
		"EG",
		"SV",
		"GQ",
		"ER",
		"EE",
		"ET",
		"FO",
		"FJ",
		"FI",
		"FR",
		"GF",
		"PF",
		"GA",
		"GM",
		"GE",
		"DE",
		"GH",
		"GI",
		"GR",
		"GL",
		"GD",
		"GP",
		"GU",
		"GT",
		"GN",
		"GW",
		"GY",
		"HT",
		"HM",
		"HK",
		"HU",
		"IS",
		"IN",
		"ID",
		"IR",
		"IL",
		"IT",
		"JM",
		"JP",
		"JO",
		"KZ",
		"KE",
		"KI",
		"KP",
		"KW",
		"KG",
		"LA",
		"LV",
		"LB",
		"LS",
		"LR",
		"LI",
		"LT",
		"LU",
		"MO",
		"MK",
		"MG",
		"MW",
		"MY",
		"MV",
		"ML",
		"MT",
		"MH",
		"MQ",
		"MR",
		"MU",
		"MX",
		"FM",
		"MD",
		"MC",
		"MN",
		"MS",
		"MA",
		"MZ",
		"NA",
		"NP",
		"NL",
		"AN",
		"NC",
		"NZ",
		"NI",
		"NE",
		"NG",
		"NF",
		"MP",
		"NO",
		"OM",
		"PK",
		"PW",
		"PA",
		"PG",
		"PY",
		"PE",
		"PH",
		"PL",
		"PT",
		"PR",
		"QA",
		"RE",
		"RO",
		"RU",
		"RW",
		"KN",
		"LC",
		"VC",
		"WS",
		"SM",
		"SA",
		"SN",
		"SC",
		"SL",
		"SG",
		"SK",
		"SI",
		"SB",
		"SO",
		"ZA",
		"ES",
		"LK",
		"SD",
		"SR",
		"SZ",
		"SE",
		"CH",
		"SY",
		"TW",
		"TJ",
		"TZ",
		"TH",
		"TG",
		"TO",
		"TT",
		"TN",
		"TR",
		"TM",
		"TC",
		"TV",
		"UG",
		"UA",
		"AE",
		"GB",
		"UY",
		"UZ",
		"VU",
		"VE",
		"VN",
		"VG",
		"VI",
		"WF",
		"EH",
		"YE",
		"YU",
		"ZM",
		"ZR",
		"ZW"
	], 
	"values": 
	[ 
		"--Select a Country--",
		"United States",
		"Afghanistan",
		"Albania",
		"Algeria",
		"American Samoa",
		"Andorra",
		"Angola",
		"Anguilla",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Aruba",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bermuda",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegowina",
		"Botswana",
		"Brazil",
		"British Indian Ocean Territory",
		"Brunei Darussalam",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Cayman Islands",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombia",
		"Congo",
		"Cook Islands",
		"Costa Rica",
		"Cote d'Ivoire",
		"Croatia",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Faroe Islands",
		"Fiji",
		"Finland",
		"France",
		"French Guiana",
		"French Polynesia",
		"Gabon",
		"Gambia",
		"Georgia",
		"Germany",
		"Ghana",
		"Gibraltar",
		"Greece",
		"Greenland",
		"Grenada",
		"Guadeloupe",
		"Guam",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Heard Island And Mcdonald Islands",
		"Hong Kong",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran, Islamic Republic of",
		"Israel",
		"Italy",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Korea, Democratic People's Republic of",
		"Kuwait",
		"Kyrgyzstan",
		"Lao People's Democratic Republic",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macau",
		"Macedonia, The Former Yugoslav Republic of",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Martinique",
		"Mauritania",
		"Mauritius",
		"Mexico",
		"Micronesia, Federated States of",
		"Moldova, Republic of",
		"Monaco",
		"Mongolia",
		"Montserrat",
		"Morocco",
		"Mozambique",
		"Namibia",
		"Nepal",
		"Netherlands",
		"Netherlands Antilles",
		"New Caledonia",
		"New Zealand",
		"Nicaragua",
		"Niger",
		"Nigeria",
		"Norfolk Island",
		"Northern Mariana Islands",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",
		"Portugal",
		"Puerto Rico",
		"Qatar",
		"Reunion",
		"Romania",
		"Russian Federation",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent and the Grenadines",
		"Samoa",
		"San Marino",
		"Saudi Arabia",
		"Senegal",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",
		"Sweden",
		"Switzerland",
		"Syrian Arab Republic",
		"Taiwan, Province of China",
		"Tajikistan",
		"Tanzania, United Republic of",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Turks and Caicos Islands",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Venezuela",
		"Vietnam",
		"Virgin Islands (British)",
		"Virgin Islands (U.S.)",
		"Wallis and Futuna Islands",
		"Western Sahara",
		"Yemen",
		"Yugoslavia",
		"Zambia",
		"Zaire",
		"Zimbabwe"
	] 
}
STR;
