<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huis')->insert([
            'name' => "Tom's Huis",
            'street' => "Reijerskoop",
            'number' => "34",
            'postal_code' => "2771 BP",
            'description' => "Tom is een man van 40 en heeft klachten aan zijn benen. Hierdoor rijdt hij op een rolstoel waarbij hij hulp en steun nodig heeft mits er iets mis gaat.",
            'image' => "/img/huizen/huis-1.jpg",
            'place' => "Boskoop",
            'mantelzorger' => 1
        ]);

        DB::table('huis')->insert([
            'name' => "Dogukan's Huis",
            'street' => "Salviahof",
            'number' => "14",
            'postal_code' => "3073 JZ",
            'description' => "Dogukan is een man 60 en heeft zijn arm verloren tijdens de oorlog. Hierdoor heeft hij ook psychische stoornissen dat zich aan de oorlog herinnert.",
            'image' => "/img/huizen/huis-3.jpg",
            'place' => "Rotterdam",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Dennis's Huis",
            'street' => "Dillenburgdreef",
            'number' => "10",
            'postal_code' => "2224 AC",
            'description' => "Dennis is een 20 jarige met depressie. Hij heeft zijn ouders verloren toen hij klein was. Hij krijgt steun van zijn familie, maar hij is nog al gevoelig voor.",
            'image' => "/img/huizen/huis-2.jpg",
            'place' => "Katwijk aan Zee",
            'mantelzorger' => 1
        ]);

        DB::table('huis')->insert([
            'name' => "Ebubekir's Huis",
            'street' => "Aleidisstraat",
            'number' => "79E",
            'postal_code' => "3021 SG",
            'description' => "Ebubekir is een jongen van 20 die paniekstoornissen heeft. Hij is heel gevoelig en bang bij een normale reactie. Bij hem kan dit zo ver gaan dat hij epilepsie aanval krijgt.",
            'image' => "/img/huizen/huis-4.jpg",
            'place' => "Rotterdam",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Hasan's Huis",
            'street' => "Pleretstraat",
            'number' => "251",
            'postal_code' => "3034 JH",
            'description' => "Hasan is een oude man van 50 en heeft ADHD. Dit wil zeggen dat hij hyperactief en impulsief is. Hij heeft steeds aandacht nodig van de mensen om zich heen.",
            'image' => "/img/huizen/huis-2.jpg",
            'place' => "Rotterdam",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Gerrit's Huis",
            'street' => "Sandelingstraat",
            'number' => "88",
            'postal_code' => "3073 AT",
            'description' => "Gerrit is sinds kleins af aan schizofrenie. Dit is zo aangeboren. Hij denkt, voelt en gedraagt zich heel apart vergeleken andere mensen en heeft hulp en steun nodig.",
            'image' => "/img/huizen/huis-4.jpg",
            'place' => "Rotterdam",
            'mantelzorger' => 1
        ]);

        DB::table('huis')->insert([
            'name' => "Brenda's Huis",
            'street' => "Gansstraat",
            'number' => "20B",
            'postal_code' => "2802 CW",
            'description' => "Brenda is een alleenstaande moeder en heeft een zoon van 2 jaar. Zijn man heeft ze verloren tijdens de oorlog en sindsdien gaat het niet goed met haar qua mentaliteit.",
            'image' => "/img/huizen/huis-1.jpg",
            'place' => "Gouda",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Tijn's Huis",
            'street' => "Poelweg",
            'number' => "11",
            'postal_code' => "2362 LK",
            'description' => "Tijn is een man van 30 en heeft eetstoornissen. Dit wil zeggen dat hij niet eet als hij honger heeft, legt zichzelf strenge dieetregels op die schadelijk is voor zijn lichaam.",
            'image' => "/img/huizen/huis-3.jpg",
            'place' => "Warmond",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Remy's Huis",
            'street' => "Kelvinsstraat",
            'number' => "51",
            'postal_code' => "2723 RJ",
            'description' => "Remy is een oude man van 80 en heeft psychotische stoornissen. Dit toestand houdt in dat iemand gedeeltelijk het contact met de dagelijkse werkelijkheid verliest.",
            'image' => "/img/huizen/huis-3.jpg",
            'place' => "Zoetermeer",
            'mantelzorger' => 2
        ]);

        DB::table('huis')->insert([
            'name' => "Kelvin's Huis",
            'street' => "Tweelingenstraat",
            'number' => "38",
            'postal_code' => "3318 BV",
            'description' => "Remy is een oude man van 80 en heeft psychotische stoornissen. Dit toestand houdt in dat iemand gedeeltelijk het contact met de dagelijkse werkelijkheid verliest.",
            'image' => "/img/huizen/huis-2.jpg",
            'place' => "Dordrecht",
            'mantelzorger' => 1
        ]);

        DB::table('huis')->insert([
            'name' => "Wouter's Huis",
            'street' => "Betuwestraat",
            'number' => "3",
            'postal_code' => "6811 MA",
            'description' => "Remy is een oude man van 80 en heeft psychotische stoornissen. Dit toestand houdt in dat iemand gedeeltelijk het contact met de dagelijkse werkelijkheid verliest.",
            'image' => "/img/huizen/huis-4.jpg",
            'place' => "Arnhem",
            'mantelzorger' => 1
        ]);

        DB::table('huis')->insert([
            'name' => "Robert's Huis",
            'street' => "Sweelinckstraat",
            'number' => "64",
            'postal_code' => "6523 AS",
            'description' => "Remy is een oude man van 80 en heeft psychotische stoornissen. Dit toestand houdt in dat iemand gedeeltelijk het contact met de dagelijkse werkelijkheid verliest.",
            'image' => "/img/huizen/huis-1.jpg",
            'place' => "Nijmegen",
            'mantelzorger' => 1
        ]);
    }
}
