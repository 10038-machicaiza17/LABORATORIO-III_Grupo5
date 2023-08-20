<?php

require_once './clases/Continentes.php';
require_once './clases/ONG.php';
require_once './clases/Continente.php';
require_once './clases/Organizacion.php';
require_once './clases/Pais.php';
require_once './clases/Provincia.php';
require_once './clases/Ciudad.php';
require_once './clases/AFC.php'; // Corregir el nombre de la clase aquí

//Creacion de Japon
$paisJapon = array();

//Creacion de de los objetos ciudad en un arreglo
$regionesDatos = array(
    "Hokkaido" => array(
        new Ciudad("Hokkaido (Hokkaido)", "000-0000")
    ),
    "Tohoku" => array(
        new Ciudad("Aomori", "030-0000"),
        new Ciudad("Iwate", "020-0000"),
        new Ciudad("Miyagi", "980-0000"),
        new Ciudad("Akita", "010-0000"),
        new Ciudad("Yamagata", "990-0000"),
        new Ciudad("Fukushima", "960-0000")
    ),
    "Kanto" => array(
        new Ciudad("Ibaraki", "300-0000"),
        new Ciudad("Tochigi", "320-0000"),
        new Ciudad("Gunma", "370-0000"),
        new Ciudad("Saitama", "330-0000"),
        new Ciudad("Chiba", "260-0000"),
        new Ciudad("Tokyo", "100-0000"),
        new Ciudad("Kanagawa", "230-0000")
    ),
    "Chubu" => array(
        new Ciudad("Niigata", "950-0000"),
        new Ciudad("Toyama", "930-0000"),
        new Ciudad("Ishikawa", "920-0000"),
        new Ciudad("Fukui", "910-0000"),
        new Ciudad("Yamanashi", "400-0000"),
        new Ciudad("Nagano", "380-0000"),
        new Ciudad("Gifu", "500-0000"),
        new Ciudad("Shizuoka", "420-0000"),
        new Ciudad("Aichi", "460-0000")
    ),
    "Kansai" => array(
        new Ciudad("Mie", "510-0000"),
        new Ciudad("Shiga", "520-0000"),
        new Ciudad("Kyoto", "600-0000"),
        new Ciudad("Osaka", "540-0000"),
        new Ciudad("Hyogo", "650-0000"),
        new Ciudad("Nara", "630-0000"),
        new Ciudad("Wakayama", "640-0000")
    ),
    "Chugoku" => array(
        new Ciudad("Tottori", "680-0000"),
        new Ciudad("Shimane", "690-0000"),
        new Ciudad("Okayama", "700-0000"),
        new Ciudad("Hiroshima", "730-0000"),
        new Ciudad("Yamaguchi", "750-0000")
    ),
    "Shikoku" => array(
        new Ciudad("Tokushima", "770-0000"),
        new Ciudad("Kagawa", "760-0000"),
        new Ciudad("Ehime", "790-0000"),
        new Ciudad("Kochi", "780-0000")
    ),
    "Kyushu" => array(
        new Ciudad("Fukuoka", "810-0000"),
        new Ciudad("Saga", "840-0000"),
        new Ciudad("Nagasaki", "850-0000"),
        new Ciudad("Kumamoto", "860-0000"),
        new Ciudad("Oita", "870-0000"),
        new Ciudad("Miyazaki", "880-0000"),
        new Ciudad("Kagoshima", "890-0000")
    ),
    "Okinawa" => array(
        new Ciudad("Okinawa (Okinawa)", "900-0000")
    )
);

//Creacion de de los objetos provincias en un arreglo
foreach ($regionesDatos as $region => $ciudades) {
    $regionesJapon = new Provincia($region, count($ciudades));
    $paisJapon[] = $regionesJapon;
}

//Creacion del objeto Japon
$objPaisJapon = new Pais("Japon","IngresarPlatos","Yen","InsertarBandera");

// echo "<pre>";
//     print_r($regionesDatos);
// echo "</pre>";

echo "<pre>";
    print_r($paisJapon);
echo "</pre>";


//Creacion de Malasia
$paisMalasia = array();

//Creacion de de los objetos ciudad en un arreglo
$regionesMalasia = array(
    "Johor" => array(
        new Ciudad("Johor Bahru", "80000"),
        new Ciudad("Muar", "84000"),
        new Ciudad("Kluang", "86000")
    ),
    "Kedah" => array(
        new Ciudad("Alor Setar", "05000"),
        new Ciudad("Sungai Petani", "08000"),
        new Ciudad("Langkawi", "07000")
    ),
    "Kelantan" => array(
        new Ciudad("Kota Bharu", "15000"),
        new Ciudad("Pasir Mas", "17000"),
        new Ciudad("Tanah Merah", "17500")
    ),
    "Kuala Lumpur" => array(
        new Ciudad("Kuala Lumpur", "50000"),
        new Ciudad("Cheras", "56100"),
        new Ciudad("Kepong", "52000")
    ),
    "Labuan" => array(
        new Ciudad("Labuan", "87000")
    ),
    "Malaca" => array(
        new Ciudad("Malaca", "75000"),
        new Ciudad("Ayer Keroh", "75450"),
        new Ciudad("Alor Gajah", "78000")
    ),
    "Negeri Sembilan" => array(
        new Ciudad("Seremban", "70000"),
        new Ciudad("Port Dickson", "71000"),
        new Ciudad("Nilai", "71800")
    ),
    "Pahang" => array(
        new Ciudad("Kuantan", "25000"),
        new Ciudad("Temerloh", "28000"),
        new Ciudad("Bentong", "28700")
    ),
    "Perak" => array(
        new Ciudad("Ipoh", "30000"),
        new Ciudad("Taiping", "34000"),
        new Ciudad("Teluk Intan", "36000")
    ),
    "Perlis" => array(
        new Ciudad("Kangar", "01000"),
        new Ciudad("Arau", "02600")
    ),
    "Penang" => array(
        new Ciudad("George Town", "10100"),
        new Ciudad("Butterworth", "12300"),
        new Ciudad("Batu Ferringhi", "11100")
    ),
    "Putrajaya" => array(
        new Ciudad("Putrajaya", "62000")
    ),
    "Sabah" => array(
        new Ciudad("Kota Kinabalu", "88000"),
        new Ciudad("Sandakan", "90000"),
        new Ciudad("Tawau", "91000")
    ),
    "Sarawak" => array(
        new Ciudad("Kuching", "93000"),
        new Ciudad("Miri", "98000"),
        new Ciudad("Sibu", "96000")
    ),
    "Selangor" => array(
        new Ciudad("Shah Alam", "40000"),
        new Ciudad("Petaling Jaya", "46200"),
        new Ciudad("Klang", "41000")
    ),
    "Terengganu" => array(
        new Ciudad("Kuala Terengganu", "20000"),
        new Ciudad("Dungun", "23000"),
        new Ciudad("Marang", "21600")
    )
);

//Creacion de de los objetos provincias en un arreglo
foreach ($regionesMalasia as $region => $ciudades) {
    $estadoMalasia = new Provincia($region, count($ciudades));
    $paisMalasia[] = $estadoMalasia;
}

//Creacion del objeto Malasia
$objPaisMalasia = new Pais("Malasia","IngresarPlatos","Ringgit malayo","InsertarBandera");

echo "<pre>";
    print_r($paisMalasia);
echo "</pre>";

//Creacion de Rusia
$paisRusia = array();

//Creacion de de los objetos ciudad en un arreglo
$distritosRusia = array(
    "Distrito Central" => array(
        new Ciudad("Belgorod", "308000"),
        new Ciudad("Bryansk", "241000"),
        new Ciudad("Vladímir", "600000"),
        new Ciudad("Vorónezh", "394000"),
        new Ciudad("Ivánovo", "153000"),
        new Ciudad("Kaluga", "248000"),
        new Ciudad("Kostroma", "156000"),
        new Ciudad("Kursk", "305000"),
        new Ciudad("Lipetsk", "398000"),
        new Ciudad("Moscú", "101000"),
        new Ciudad("Oriol", "302000"),
        new Ciudad("Riazán", "390000"),
        new Ciudad("Smolensk", "214000"),
        new Ciudad("Tambov", "392000"),
        new Ciudad("Tver", "170000"),
        new Ciudad("Tula", "300000"),
        new Ciudad("Yaroslavl", "150000")
    ),
    "Distrito Noroeste" => array(
        new Ciudad("San Petersburgo", "190000"),
        new Ciudad("Murmansk", "183000"),
        new Ciudad("Pskov", "180000"),
        new Ciudad("Arkhangelsk", "163000"),
        new Ciudad("Vólogda", "160000"),
        new Ciudad("Kaliningrado", "236000"),
        new Ciudad("Leningrado", "187000"),
        new Ciudad("Novgorod", "173000"),
        new Ciudad("Petrozavodsk", "185000"),
        new Ciudad("Cherepovets", "162000"),
        new Ciudad("Múrmansk", "183000"),
        new Ciudad("Narváy", "353000"),
        new Ciudad("Pskov", "180000"),
        new Ciudad("Sortavala", "186000"),
        new Ciudad("Sosnovy Bor", "188000"),
        new Ciudad("Víborg", "188000")
    ),
    "Distrito del Sur" => array(
        new Ciudad("Rostov del Don", "344000"),
        new Ciudad("Volgogrado", "400000"),
        new Ciudad("Astracán", "414000"),
        new Ciudad("Krasnodar", "350000"),
        new Ciudad("Stávropol", "355000"),
        new Ciudad("Krasnodar", "350000"),
        new Ciudad("Makhachkala", "367000"),
        new Ciudad("Elista", "358000"),
        new Ciudad("Majachkalá", "366000"),
        new Ciudad("Nalchik", "360000"),
        new Ciudad("Kislovodsk", "357000"),
        new Ciudad("Piatigorsk", "357500"),
        new Ciudad("Krasnodar", "350000"),
        new Ciudad("Novorosíisk", "353900"),
        new Ciudad("Armavir", "352900"),
        new Ciudad("Taganrog", "347900"),
        new Ciudad("Shajty", "346000"),
        new Ciudad("Azov", "346780")
    ),
    "Distrito del Volga" => array(
        new Ciudad("Nizhni Nóvgorod", "603000"),
        new Ciudad("Samara", "443000"),
        new Ciudad("Uliánovsk", "432000"),
        new Ciudad("Kazán", "420000"),
        new Ciudad("Cheboksary", "428000"),
        new Ciudad("Saransk", "430000"),
        new Ciudad("Ioshkar-Ola", "424000"),
        new Ciudad("Penza", "440000"),
        new Ciudad("Syzran", "446000"),
        new Ciudad("Izhevsk", "426000"),
        new Ciudad("Perm", "614000"),
        new Ciudad("Ufá", "450000"),
        new Ciudad("Saratov", "410000"),
        new Ciudad("Volgogrado", "400000"),
        new Ciudad("Astracán", "414000"),
        new Ciudad("Kurgán", "640000"),
        new Ciudad("Oremburgo", "460000"),
        new Ciudad("Barnaul", "656000")
    ),
    "Distrito del Ural" => array(
        new Ciudad("Ekaterimburgo", "620000"),
        new Ciudad("Cheliábinsk", "454000"),
        new Ciudad("Tiumén", "625000"),
        new Ciudad("Izhevsk", "426000"),
        new Ciudad("Magnitogorsk", "455000"),
        new Ciudad("Orsk", "462400"),
        new Ciudad("Nizhni Taguil", "622000"),
        new Ciudad("Serov", "624000"),
        new Ciudad("Kurgán", "640000"),
        new Ciudad("Nizhnevártovsk", "628600"),
        new Ciudad("Kamensk-Uralsky", "623400"),
        new Ciudad("Novotroitsk", "462390"),
        new Ciudad("Nefteyugansk", "628300"),
        new Ciudad("Nizhni Taguil", "622000"),
        new Ciudad("Serguéi Posad", "141300"),
        new Ciudad("Kachkanar", "624230")
    ),
    "Distrito de Siberia" => array(
        new Ciudad("Novosibirsk", "630000"),
        new Ciudad("Omsk", "644000"),
        new Ciudad("Kemerovo", "650000"),
        new Ciudad("Tomsk", "634000"),
        new Ciudad("Barnaul", "656000"),
        new Ciudad("Novokuznetsk", "654000"),
        new Ciudad("Irkutsk", "664000"),
        new Ciudad("Krasnoyarsk", "660000"),
        new Ciudad("Ulan-Udé", "670000"),
        new Ciudad("Chita", "672000"),
        new Ciudad("Omsk", "644000"),
        new Ciudad("Birobidzhán", "679000"),
        new Ciudad("Ulan-Udé", "670000"),
        new Ciudad("Irkutsk", "664000"),
        new Ciudad("Kemerovo", "650000"),
        new Ciudad("Bratsk", "665700")
    ),
    "Distrito del Lejano Oriente" => array(
        new Ciudad("Vladivostok", "690000"),
        new Ciudad("Komsomolsk del Amur", "681000"),
        new Ciudad("Birobidzhán", "679000"),
        new Ciudad("Yakutsk", "677000"),
        new Ciudad("Chita", "672000"),
        new Ciudad("Magadán", "685000"),
        new Ciudad("Anádyr", "689000"),
        new Ciudad("Petropávlovsk-Kamchatski", "683000"),
        new Ciudad("Korsakov", "693000"),
        new Ciudad("Kamchatski", "683000"),
        new Ciudad("Uliánovsk", "432000"),
        new Ciudad("Khabarovsk", "680000"),
        new Ciudad("Vladivostok", "690000"),
        new Ciudad("Yuzhno-Sajalinsk", "693000"),
        new Ciudad("Jabárovsk", "680000"),
        new Ciudad("Yakutsk", "677000")
    ),
    "Distrito del Norte del Cáucaso" => array(
        new Ciudad("Stávropol", "355000"),
        new Ciudad("Jasaviurt", "368500"),
        new Ciudad("Elista", "358000"),
        new Ciudad("Majachkalá", "367000"),
        new Ciudad("Vladikavkaz", "362000"),
        new Ciudad("Nálchik", "360000"),
        new Ciudad("Cherkessk", "369000"),
        new Ciudad("Piatigorsk", "357500"),
        new Ciudad("Majachkalá", "367000"),
        new Ciudad("Vladikavkaz", "362000"),
        new Ciudad("Derbent", "368600"),
        new Ciudad("Grozni", "364000"),
        new Ciudad("Nálchik", "360000"),
        new Ciudad("Mozdok", "361200"),
        new Ciudad("Majachkalá", "367000")
    )
);

//Creacion de de los objetos provincias en un arreglo
foreach ($distritosRusia as $distrito => $ciudades) {
    $distritoRusia = new Provincia($distrito, count($ciudades));
    $paisRusia[] = $distritoRusia;
}

//Creacion del objeto Rusia
$objPaisRusia = new Pais("Rusia","IngresarPlatos","Rublo ruso","InsertarBandera");

echo "<pre>";
    print_r($paisRusia);
echo "</pre>";


// Ejemplo de uso

$continenteAFC = Continentes::ASIA;
$sedeAFC = $regionesMalasia["Kuala Lumpur"][0];
$ONG_AFC = ONG::BRICS;
$objAFC = new AFC("ASIA",51,"./img/afc.jpg",46,$continenteAFC,$sedeAFC,$ONG_AFC);

//print_r($sedeAFC);

echo "<pre>";
print_r($objAFC);
echo "</pre>";

$objAFC->imprimir();
?>

