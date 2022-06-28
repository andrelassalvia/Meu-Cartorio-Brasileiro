<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrazilCity;

class brazilCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities=[
            [
              "id"=> 1100015,
              "name"=> "Alta Floresta d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100023,
              "name"=> "Ariquemes",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100031,
              "name"=> "Cabixi",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100049,
              "name"=> "Cacoal",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100056,
              "name"=> "Cerejeiras",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100064,
              "name"=> "Colorado do Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100072,
              "name"=> "Corumbiara",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100080,
              "name"=> "Costa Marques",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100098,
              "name"=> "Espigão d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100106,
              "name"=> "Guajará-Mirim",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100114,
              "name"=> "Jaru",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100122,
              "name"=> "Ji-Paraná",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100130,
              "name"=> "Machadinho d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100148,
              "name"=> "Nova Brasilândia d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100155,
              "name"=> "Ouro Preto do Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100189,
              "name"=> "Pimenta Bueno",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100205,
              "name"=> "Porto Velho",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100254,
              "name"=> "Presidente Médici",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100262,
              "name"=> "Rio Crespo",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100288,
              "name"=> "Rolim de Moura",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100296,
              "name"=> "Santa Luzia d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100304,
              "name"=> "Vilhena",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100320,
              "name"=> "São Miguel do Guaporé",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100338,
              "name"=> "Nova Mamoré",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100346,
              "name"=> "Alvorada d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100379,
              "name"=> "Alto Alegre dos Parecis",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100403,
              "name"=> "Alto Paraíso",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100452,
              "name"=> "Buritis",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100502,
              "name"=> "Novo Horizonte do Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100601,
              "name"=> "Cacaulândia",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100700,
              "name"=> "Campo Novo de Rondônia",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100809,
              "name"=> "Candeias do Jamari",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100908,
              "name"=> "Castanheiras",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100924,
              "name"=> "Chupinguaia",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1100940,
              "name"=> "Cujubim",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101005,
              "name"=> "Governador Jorge Teixeira",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101104,
              "name"=> "Itapuã do Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101203,
              "name"=> "Ministro Andreazza",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101302,
              "name"=> "Mirante da Serra",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101401,
              "name"=> "Monte Negro",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101435,
              "name"=> "Nova União",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101450,
              "name"=> "Parecis",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101468,
              "name"=> "Pimenteiras do Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101476,
              "name"=> "Primavera de Rondônia",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101484,
              "name"=> "São Felipe d`Oeste",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101492,
              "name"=> "São Francisco do Guaporé",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101500,
              "name"=> "Seringueiras",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101559,
              "name"=> "Teixeirópolis",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101609,
              "name"=> "Theobroma",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101708,
              "name"=> "Urupá",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101757,
              "name"=> "Vale do Anari",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1101807,
              "name"=> "Vale do Paraíso",
              "brazilstate_id"=> 11
            ],
            [
              "id"=> 1200013,
              "name"=> "Acrelândia",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200054,
              "name"=> "Assis Brasil",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200104,
              "name"=> "Brasiléia",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200138,
              "name"=> "Bujari",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200179,
              "name"=> "Capixaba",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200203,
              "name"=> "Cruzeiro do Sul",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200252,
              "name"=> "Epitaciolândia",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200302,
              "name"=> "Feijó",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200328,
              "name"=> "Jordão",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200336,
              "name"=> "Mâncio Lima",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200344,
              "name"=> "Manoel Urbano",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200351,
              "name"=> "Marechal Thaumaturgo",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200385,
              "name"=> "Plácido de Castro",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200393,
              "name"=> "Porto Walter",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200401,
              "name"=> "Rio Branco",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200427,
              "name"=> "Rodrigues Alves",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200435,
              "name"=> "Santa Rosa do Purus",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200450,
              "name"=> "Senador Guiomard",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200500,
              "name"=> "Sena Madureira",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200609,
              "name"=> "Tarauacá",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200708,
              "name"=> "Xapuri",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1200807,
              "name"=> "Porto Acre",
              "brazilstate_id"=> 12
            ],
            [
              "id"=> 1300029,
              "name"=> "Alvarães",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300060,
              "name"=> "Amaturá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300086,
              "name"=> "Anamã",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300102,
              "name"=> "Anori",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300144,
              "name"=> "Apuí",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300201,
              "name"=> "Atalaia do Norte",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300300,
              "name"=> "Autazes",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300409,
              "name"=> "Barcelos",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300508,
              "name"=> "Barreirinha",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300607,
              "name"=> "Benjamin Constant",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300631,
              "name"=> "Beruri",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300680,
              "name"=> "Boa Vista do Ramos",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300706,
              "name"=> "Boca do Acre",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300805,
              "name"=> "Borba",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300839,
              "name"=> "Caapiranga",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1300904,
              "name"=> "Canutama",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301001,
              "name"=> "Carauari",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301100,
              "name"=> "Careiro",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301159,
              "name"=> "Careiro da Várzea",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301209,
              "name"=> "Coari",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301308,
              "name"=> "Codajás",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301407,
              "name"=> "Eirunepé",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301506,
              "name"=> "Envira",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301605,
              "name"=> "Fonte Boa",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301654,
              "name"=> "Guajará",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301704,
              "name"=> "Humaitá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301803,
              "name"=> "Ipixuna",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301852,
              "name"=> "Iranduba",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301902,
              "name"=> "Itacoatiara",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1301951,
              "name"=> "Itamarati",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302009,
              "name"=> "Itapiranga",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302108,
              "name"=> "Japurá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302207,
              "name"=> "Juruá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302306,
              "name"=> "Jutaí",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302405,
              "name"=> "Lábrea",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302504,
              "name"=> "Manacapuru",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302553,
              "name"=> "Manaquiri",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302603,
              "name"=> "Manaus",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302702,
              "name"=> "Manicoré",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302801,
              "name"=> "Maraã",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1302900,
              "name"=> "Maués",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303007,
              "name"=> "Nhamundá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303106,
              "name"=> "Nova Olinda do Norte",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303205,
              "name"=> "Novo Airão",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303304,
              "name"=> "Novo Aripuanã",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303403,
              "name"=> "Parintins",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303502,
              "name"=> "Pauini",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303536,
              "name"=> "Presidente Figueiredo",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303569,
              "name"=> "Rio Preto da Eva",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303601,
              "name"=> "Santa Isabel do Rio Negro",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303700,
              "name"=> "Santo Antônio do Içá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303809,
              "name"=> "São Gabriel da Cachoeira",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303908,
              "name"=> "São Paulo de Olivença",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1303957,
              "name"=> "São Sebastião do Uatumã",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304005,
              "name"=> "Silves",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304062,
              "name"=> "Tabatinga",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304104,
              "name"=> "Tapauá",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304203,
              "name"=> "Tefé",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304237,
              "name"=> "Tonantins",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304260,
              "name"=> "Uarini",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304302,
              "name"=> "Urucará",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1304401,
              "name"=> "Urucurituba",
              "brazilstate_id"=> 13
            ],
            [
              "id"=> 1400027,
              "name"=> "Amajari",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400050,
              "name"=> "Alto Alegre",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400100,
              "name"=> "Boa Vista",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400159,
              "name"=> "Bonfim",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400175,
              "name"=> "Cantá",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400209,
              "name"=> "Caracaraí",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400233,
              "name"=> "Caroebe",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400282,
              "name"=> "Iracema",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400308,
              "name"=> "Mucajaí",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400407,
              "name"=> "Normandia",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400456,
              "name"=> "Pacaraima",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400472,
              "name"=> "Rorainópolis",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400506,
              "name"=> "São João da Baliza",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400605,
              "name"=> "São Luiz",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1400704,
              "name"=> "Uiramutã",
              "brazilstate_id"=> 14
            ],
            [
              "id"=> 1500107,
              "name"=> "Abaetetuba",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500131,
              "name"=> "Abel Figueiredo",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500206,
              "name"=> "Acará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500305,
              "name"=> "Afuá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500347,
              "name"=> "Água Azul do Norte",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500404,
              "name"=> "Alenquer",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500503,
              "name"=> "Almeirim",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500602,
              "name"=> "Altamira",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500701,
              "name"=> "Anajás",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500800,
              "name"=> "Ananindeua",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500859,
              "name"=> "Anapu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500909,
              "name"=> "Augusto Corrêa",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1500958,
              "name"=> "Aurora do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501006,
              "name"=> "Aveiro",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501105,
              "name"=> "Bagre",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501204,
              "name"=> "Baião",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501253,
              "name"=> "Bannach",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501303,
              "name"=> "Barcarena",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501402,
              "name"=> "Belém",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501451,
              "name"=> "Belterra",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501501,
              "name"=> "Benevides",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501576,
              "name"=> "Bom Jesus do Tocantins",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501600,
              "name"=> "Bonito",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501709,
              "name"=> "Bragança",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501725,
              "name"=> "Brasil Novo",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501758,
              "name"=> "Brejo Grande do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501782,
              "name"=> "Breu Branco",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501808,
              "name"=> "Breves",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501907,
              "name"=> "Bujaru",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1501956,
              "name"=> "Cachoeira do Piriá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502004,
              "name"=> "Cachoeira do Arari",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502103,
              "name"=> "Cametá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502152,
              "name"=> "Canaã dos Carajás",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502202,
              "name"=> "Capanema",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502301,
              "name"=> "Capitão Poço",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502400,
              "name"=> "Castanhal",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502509,
              "name"=> "Chaves",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502608,
              "name"=> "Colares",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502707,
              "name"=> "Conceição do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502756,
              "name"=> "Concórdia do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502764,
              "name"=> "Cumaru do Norte",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502772,
              "name"=> "Curionópolis",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502806,
              "name"=> "Curralinho",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502855,
              "name"=> "Curuá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502905,
              "name"=> "Curuçá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502939,
              "name"=> "Dom Eliseu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1502954,
              "name"=> "Eldorado dos Carajás",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503002,
              "name"=> "Faro",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503044,
              "name"=> "Floresta do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503077,
              "name"=> "Garrafão do Norte",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503093,
              "name"=> "Goianésia do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503101,
              "name"=> "Gurupá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503200,
              "name"=> "Igarapé-Açu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503309,
              "name"=> "Igarapé-Miri",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503408,
              "name"=> "Inhangapi",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503457,
              "name"=> "Ipixuna do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503507,
              "name"=> "Irituia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503606,
              "name"=> "Itaituba",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503705,
              "name"=> "Itupiranga",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503754,
              "name"=> "Jacareacanga",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503804,
              "name"=> "Jacundá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1503903,
              "name"=> "Juruti",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504000,
              "name"=> "Limoeiro do Ajuru",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504059,
              "name"=> "Mãe do Rio",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504109,
              "name"=> "Magalhães Barata",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504208,
              "name"=> "Marabá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504307,
              "name"=> "Maracanã",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504406,
              "name"=> "Marapanim",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504422,
              "name"=> "Marituba",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504455,
              "name"=> "Medicilândia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504505,
              "name"=> "Melgaço",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504604,
              "name"=> "Mocajuba",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504703,
              "name"=> "Moju",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504752,
              "name"=> "Mojuí dos Campos",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504802,
              "name"=> "Monte Alegre",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504901,
              "name"=> "Muaná",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504950,
              "name"=> "Nova Esperança do Piriá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1504976,
              "name"=> "Nova Ipixuna",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505007,
              "name"=> "Nova Timboteua",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505031,
              "name"=> "Novo Progresso",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505064,
              "name"=> "Novo Repartimento",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505106,
              "name"=> "Óbidos",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505205,
              "name"=> "Oeiras do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505304,
              "name"=> "Oriximiná",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505403,
              "name"=> "Ourém",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505437,
              "name"=> "Ourilândia do Norte",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505486,
              "name"=> "Pacajá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505494,
              "name"=> "Palestina do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505502,
              "name"=> "Paragominas",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505536,
              "name"=> "Parauapebas",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505551,
              "name"=> "Pau d`Arco",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505601,
              "name"=> "Peixe-Boi",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505635,
              "name"=> "Piçarra",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505650,
              "name"=> "Placas",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505700,
              "name"=> "Ponta de Pedras",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505809,
              "name"=> "Portel",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1505908,
              "name"=> "Porto de Moz",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506005,
              "name"=> "Prainha",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506104,
              "name"=> "Primavera",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506112,
              "name"=> "Quatipuru",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506138,
              "name"=> "Redenção",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506161,
              "name"=> "Rio Maria",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506187,
              "name"=> "Rondon do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506195,
              "name"=> "Rurópolis",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506203,
              "name"=> "Salinópolis",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506302,
              "name"=> "Salvaterra",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506351,
              "name"=> "Santa Bárbara do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506401,
              "name"=> "Santa Cruz do Arari",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506500,
              "name"=> "Santa Isabel do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506559,
              "name"=> "Santa Luzia do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506583,
              "name"=> "Santa Maria das Barreiras",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506609,
              "name"=> "Santa Maria do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506708,
              "name"=> "Santana do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506807,
              "name"=> "Santarém",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1506906,
              "name"=> "Santarém Novo",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507003,
              "name"=> "Santo Antônio do Tauá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507102,
              "name"=> "São Caetano de Odivelas",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507151,
              "name"=> "São Domingos do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507201,
              "name"=> "São Domingos do Capim",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507300,
              "name"=> "São Félix do Xingu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507409,
              "name"=> "São Francisco do Pará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507458,
              "name"=> "São Geraldo do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507466,
              "name"=> "São João da Ponta",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507474,
              "name"=> "São João de Pirabas",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507508,
              "name"=> "São João do Araguaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507607,
              "name"=> "São Miguel do Guamá",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507706,
              "name"=> "São Sebastião da Boa Vista",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507755,
              "name"=> "Sapucaia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507805,
              "name"=> "Senador José Porfírio",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507904,
              "name"=> "Soure",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507953,
              "name"=> "Tailândia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507961,
              "name"=> "Terra Alta",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1507979,
              "name"=> "Terra Santa",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508001,
              "name"=> "Tomé-Açu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508035,
              "name"=> "Tracuateua",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508050,
              "name"=> "Trairão",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508084,
              "name"=> "Tucumã",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508100,
              "name"=> "Tucuruí",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508126,
              "name"=> "Ulianópolis",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508159,
              "name"=> "Uruará",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508209,
              "name"=> "Vigia",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508308,
              "name"=> "Viseu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508357,
              "name"=> "Vitória do Xingu",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1508407,
              "name"=> "Xinguara",
              "brazilstate_id"=> 15
            ],
            [
              "id"=> 1600055,
              "name"=> "Serra do Navio",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600105,
              "name"=> "Amapá",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600154,
              "name"=> "Pedra Branca do Amaparí",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600204,
              "name"=> "Calçoene",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600212,
              "name"=> "Cutias",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600238,
              "name"=> "Ferreira Gomes",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600253,
              "name"=> "Itaubal",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600279,
              "name"=> "Laranjal do Jari",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600303,
              "name"=> "Macapá",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600402,
              "name"=> "Mazagão",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600501,
              "name"=> "Oiapoque",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600535,
              "name"=> "Porto Grande",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600550,
              "name"=> "Pracuúba",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600600,
              "name"=> "Santana",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600709,
              "name"=> "Tartarugalzinho",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1600808,
              "name"=> "Vitória do Jari",
              "brazilstate_id"=> 16
            ],
            [
              "id"=> 1700251,
              "name"=> "Abreulândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1700301,
              "name"=> "Aguiarnópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1700350,
              "name"=> "Aliança do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1700400,
              "name"=> "Almas",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1700707,
              "name"=> "Alvorada",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1701002,
              "name"=> "Ananás",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1701051,
              "name"=> "Angico",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1701101,
              "name"=> "Aparecida do Rio Negro",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1701309,
              "name"=> "Aragominas",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1701903,
              "name"=> "Araguacema",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702000,
              "name"=> "Araguaçu",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702109,
              "name"=> "Araguaína",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702158,
              "name"=> "Araguanã",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702208,
              "name"=> "Araguatins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702307,
              "name"=> "Arapoema",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702406,
              "name"=> "Arraias",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702554,
              "name"=> "Augustinópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702703,
              "name"=> "Aurora do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1702901,
              "name"=> "Axixá do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703008,
              "name"=> "Babaçulândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703057,
              "name"=> "Bandeirantes do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703073,
              "name"=> "Barra do Ouro",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703107,
              "name"=> "Barrolândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703206,
              "name"=> "Bernardo Sayão",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703305,
              "name"=> "Bom Jesus do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703602,
              "name"=> "Brasilândia do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703701,
              "name"=> "Brejinho de Nazaré",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703800,
              "name"=> "Buriti do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703826,
              "name"=> "Cachoeirinha",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703842,
              "name"=> "Campos Lindos",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703867,
              "name"=> "Cariri do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703883,
              "name"=> "Carmolândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703891,
              "name"=> "Carrasco Bonito",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1703909,
              "name"=> "Caseara",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1704105,
              "name"=> "Centenário",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1704600,
              "name"=> "Chapada de Areia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1705102,
              "name"=> "Chapada da Natividade",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1705508,
              "name"=> "Colinas do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1705557,
              "name"=> "Combinado",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1705607,
              "name"=> "Conceição do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1706001,
              "name"=> "Couto Magalhães",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1706100,
              "name"=> "Cristalândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1706258,
              "name"=> "Crixás do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1706506,
              "name"=> "Darcinópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707009,
              "name"=> "Dianópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707108,
              "name"=> "Divinópolis do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707207,
              "name"=> "Dois Irmãos do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707306,
              "name"=> "Dueré",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707405,
              "name"=> "Esperantina",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707553,
              "name"=> "Fátima",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707652,
              "name"=> "Figueirópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1707702,
              "name"=> "Filadélfia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1708205,
              "name"=> "Formoso do Araguaia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1708254,
              "name"=> "Fortaleza do Tabocão",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1708304,
              "name"=> "Goianorte",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1709005,
              "name"=> "Goiatins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1709302,
              "name"=> "Guaraí",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1709500,
              "name"=> "Gurupi",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1709807,
              "name"=> "Ipueiras",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1710508,
              "name"=> "Itacajá",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1710706,
              "name"=> "Itaguatins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1710904,
              "name"=> "Itapiratins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1711100,
              "name"=> "Itaporã do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1711506,
              "name"=> "Jaú do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1711803,
              "name"=> "Juarina",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1711902,
              "name"=> "Lagoa da Confusão",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1711951,
              "name"=> "Lagoa do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712009,
              "name"=> "Lajeado",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712157,
              "name"=> "Lavandeira",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712405,
              "name"=> "Lizarda",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712454,
              "name"=> "Luzinópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712504,
              "name"=> "Marianópolis do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712702,
              "name"=> "Mateiros",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1712801,
              "name"=> "Maurilândia do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713205,
              "name"=> "Miracema do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713304,
              "name"=> "Miranorte",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713601,
              "name"=> "Monte do Carmo",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713700,
              "name"=> "Monte Santo do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713809,
              "name"=> "Palmeiras do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1713957,
              "name"=> "Muricilândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1714203,
              "name"=> "Natividade",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1714302,
              "name"=> "Nazaré",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1714880,
              "name"=> "Nova Olinda",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715002,
              "name"=> "Nova Rosalândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715101,
              "name"=> "Novo Acordo",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715150,
              "name"=> "Novo Alegre",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715259,
              "name"=> "Novo Jardim",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715507,
              "name"=> "Oliveira de Fátima",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715705,
              "name"=> "Palmeirante",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1715754,
              "name"=> "Palmeirópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716109,
              "name"=> "Paraíso do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716208,
              "name"=> "Paranã",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716307,
              "name"=> "Pau d`Arco",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716505,
              "name"=> "Pedro Afonso",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716604,
              "name"=> "Peixe",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716653,
              "name"=> "Pequizeiro",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1716703,
              "name"=> "Colméia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1717008,
              "name"=> "Pindorama do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1717206,
              "name"=> "Piraquê",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1717503,
              "name"=> "Pium",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1717800,
              "name"=> "Ponte Alta do Bom Jesus",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1717909,
              "name"=> "Ponte Alta do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718006,
              "name"=> "Porto Alegre do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718204,
              "name"=> "Porto Nacional",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718303,
              "name"=> "Praia Norte",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718402,
              "name"=> "Presidente Kennedy",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718451,
              "name"=> "Pugmil",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718501,
              "name"=> "Recursolândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718550,
              "name"=> "Riachinho",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718659,
              "name"=> "Rio da Conceição",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718709,
              "name"=> "Rio dos Bois",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718758,
              "name"=> "Rio Sono",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718808,
              "name"=> "Sampaio",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718840,
              "name"=> "Sandolândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718865,
              "name"=> "Santa Fé do Araguaia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718881,
              "name"=> "Santa Maria do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718899,
              "name"=> "Santa Rita do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1718907,
              "name"=> "Santa Rosa do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1719004,
              "name"=> "Santa Tereza do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720002,
              "name"=> "Santa Terezinha do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720101,
              "name"=> "São Bento do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720150,
              "name"=> "São Félix do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720200,
              "name"=> "São Miguel do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720259,
              "name"=> "São Salvador do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720309,
              "name"=> "São Sebastião do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720499,
              "name"=> "São Valério",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720655,
              "name"=> "Silvanópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720804,
              "name"=> "Sítio Novo do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720853,
              "name"=> "Sucupira",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720903,
              "name"=> "Taguatinga",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720937,
              "name"=> "Taipas do Tocantins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1720978,
              "name"=> "Talismã",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1721000,
              "name"=> "Palmas",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1721109,
              "name"=> "Tocantínia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1721208,
              "name"=> "Tocantinópolis",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1721257,
              "name"=> "Tupirama",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1721307,
              "name"=> "Tupiratins",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1722081,
              "name"=> "Wanderlândia",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 1722107,
              "name"=> "Xambioá",
              "brazilstate_id"=> 17
            ],
            [
              "id"=> 2100055,
              "name"=> "Açailândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100105,
              "name"=> "Afonso Cunha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100154,
              "name"=> "Água Doce do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100204,
              "name"=> "Alcântara",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100303,
              "name"=> "Aldeias Altas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100402,
              "name"=> "Altamira do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100436,
              "name"=> "Alto Alegre do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100477,
              "name"=> "Alto Alegre do Pindaré",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100501,
              "name"=> "Alto Parnaíba",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100550,
              "name"=> "Amapá do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100600,
              "name"=> "Amarante do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100709,
              "name"=> "Anajatuba",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100808,
              "name"=> "Anapurus",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100832,
              "name"=> "Apicum-Açu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100873,
              "name"=> "Araguanã",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100907,
              "name"=> "Araioses",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2100956,
              "name"=> "Arame",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101004,
              "name"=> "Arari",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101103,
              "name"=> "Axixá",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101202,
              "name"=> "Bacabal",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101251,
              "name"=> "Bacabeira",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101301,
              "name"=> "Bacuri",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101350,
              "name"=> "Bacurituba",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101400,
              "name"=> "Balsas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101509,
              "name"=> "Barão de Grajaú",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101608,
              "name"=> "Barra do Corda",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101707,
              "name"=> "Barreirinhas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101731,
              "name"=> "Belágua",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101772,
              "name"=> "Bela Vista do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101806,
              "name"=> "Benedito Leite",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101905,
              "name"=> "Bequimão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101939,
              "name"=> "Bernardo do Mearim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2101970,
              "name"=> "Boa Vista do Gurupi",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102002,
              "name"=> "Bom Jardim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102036,
              "name"=> "Bom Jesus das Selvas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102077,
              "name"=> "Bom Lugar",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102101,
              "name"=> "Brejo",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102150,
              "name"=> "Brejo de Areia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102200,
              "name"=> "Buriti",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102309,
              "name"=> "Buriti Bravo",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102325,
              "name"=> "Buriticupu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102358,
              "name"=> "Buritirana",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102374,
              "name"=> "Cachoeira Grande",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102408,
              "name"=> "Cajapió",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102507,
              "name"=> "Cajari",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102556,
              "name"=> "Campestre do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102606,
              "name"=> "Cândido Mendes",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102705,
              "name"=> "Cantanhede",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102754,
              "name"=> "Capinzal do Norte",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102804,
              "name"=> "Carolina",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2102903,
              "name"=> "Carutapera",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103000,
              "name"=> "Caxias",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103109,
              "name"=> "Cedral",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103125,
              "name"=> "Central do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103158,
              "name"=> "Centro do Guilherme",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103174,
              "name"=> "Centro Novo do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103208,
              "name"=> "Chapadinha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103257,
              "name"=> "Cidelândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103307,
              "name"=> "Codó",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103406,
              "name"=> "Coelho Neto",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103505,
              "name"=> "Colinas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103554,
              "name"=> "Conceição do Lago-Açu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103604,
              "name"=> "Coroatá",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103703,
              "name"=> "Cururupu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103752,
              "name"=> "Davinópolis",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103802,
              "name"=> "Dom Pedro",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2103901,
              "name"=> "Duque Bacelar",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104008,
              "name"=> "Esperantinópolis",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104057,
              "name"=> "Estreito",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104073,
              "name"=> "Feira Nova do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104081,
              "name"=> "Fernando Falcão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104099,
              "name"=> "Formosa da Serra Negra",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104107,
              "name"=> "Fortaleza dos Nogueiras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104206,
              "name"=> "Fortuna",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104305,
              "name"=> "Godofredo Viana",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104404,
              "name"=> "Gonçalves Dias",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104503,
              "name"=> "Governador Archer",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104552,
              "name"=> "Governador Edison Lobão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104602,
              "name"=> "Governador Eugênio Barros",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104628,
              "name"=> "Governador Luiz Rocha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104651,
              "name"=> "Governador Newton Bello",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104677,
              "name"=> "Governador Nunes Freire",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104701,
              "name"=> "Graça Aranha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104800,
              "name"=> "Grajaú",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2104909,
              "name"=> "Guimarães",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105005,
              "name"=> "Humberto de Campos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105104,
              "name"=> "Icatu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105153,
              "name"=> "Igarapé do Meio",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105203,
              "name"=> "Igarapé Grande",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105302,
              "name"=> "Imperatriz",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105351,
              "name"=> "Itaipava do Grajaú",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105401,
              "name"=> "Itapecuru Mirim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105427,
              "name"=> "Itinga do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105450,
              "name"=> "Jatobá",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105476,
              "name"=> "Jenipapo dos Vieiras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105500,
              "name"=> "João Lisboa",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105609,
              "name"=> "Joselândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105658,
              "name"=> "Junco do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105708,
              "name"=> "Lago da Pedra",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105807,
              "name"=> "Lago do Junco",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105906,
              "name"=> "Lago Verde",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105922,
              "name"=> "Lagoa do Mato",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105948,
              "name"=> "Lago dos Rodrigues",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105963,
              "name"=> "Lagoa Grande do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2105989,
              "name"=> "Lajeado Novo",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106003,
              "name"=> "Lima Campos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106102,
              "name"=> "Loreto",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106201,
              "name"=> "Luís Domingues",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106300,
              "name"=> "Magalhães de Almeida",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106326,
              "name"=> "Maracaçumé",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106359,
              "name"=> "Marajá do Sena",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106375,
              "name"=> "Maranhãozinho",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106409,
              "name"=> "Mata Roma",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106508,
              "name"=> "Matinha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106607,
              "name"=> "Matões",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106631,
              "name"=> "Matões do Norte",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106672,
              "name"=> "Milagres do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106706,
              "name"=> "Mirador",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106755,
              "name"=> "Miranda do Norte",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106805,
              "name"=> "Mirinzal",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2106904,
              "name"=> "Monção",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107001,
              "name"=> "Montes Altos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107100,
              "name"=> "Morros",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107209,
              "name"=> "Nina Rodrigues",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107258,
              "name"=> "Nova Colinas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107308,
              "name"=> "Nova Iorque",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107357,
              "name"=> "Nova Olinda do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107407,
              "name"=> "Olho d`Água das Cunhãs",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107456,
              "name"=> "Olinda Nova do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107506,
              "name"=> "Paço do Lumiar",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107605,
              "name"=> "Palmeirândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107704,
              "name"=> "Paraibano",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107803,
              "name"=> "Parnarama",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2107902,
              "name"=> "Passagem Franca",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108009,
              "name"=> "Pastos Bons",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108058,
              "name"=> "Paulino Neves",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108108,
              "name"=> "Paulo Ramos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108207,
              "name"=> "Pedreiras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108256,
              "name"=> "Pedro do Rosário",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108306,
              "name"=> "Penalva",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108405,
              "name"=> "Peri Mirim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108454,
              "name"=> "Peritoró",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108504,
              "name"=> "Pindaré-Mirim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108603,
              "name"=> "Pinheiro",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108702,
              "name"=> "Pio XII",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108801,
              "name"=> "Pirapemas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2108900,
              "name"=> "Poção de Pedras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109007,
              "name"=> "Porto Franco",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109056,
              "name"=> "Porto Rico do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109106,
              "name"=> "Presidente Dutra",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109205,
              "name"=> "Presidente Juscelino",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109239,
              "name"=> "Presidente Médici",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109270,
              "name"=> "Presidente Sarney",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109304,
              "name"=> "Presidente Vargas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109403,
              "name"=> "Primeira Cruz",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109452,
              "name"=> "Raposa",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109502,
              "name"=> "Riachão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109551,
              "name"=> "Ribamar Fiquene",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109601,
              "name"=> "Rosário",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109700,
              "name"=> "Sambaíba",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109759,
              "name"=> "Santa Filomena do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109809,
              "name"=> "Santa Helena",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2109908,
              "name"=> "Santa Inês",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110005,
              "name"=> "Santa Luzia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110039,
              "name"=> "Santa Luzia do Paruá",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110104,
              "name"=> "Santa Quitéria do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110203,
              "name"=> "Santa Rita",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110237,
              "name"=> "Santana do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110278,
              "name"=> "Santo Amaro do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110302,
              "name"=> "Santo Antônio dos Lopes",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110401,
              "name"=> "São Benedito do Rio Preto",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110500,
              "name"=> "São Bento",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110609,
              "name"=> "São Bernardo",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110658,
              "name"=> "São Domingos do Azeitão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110708,
              "name"=> "São Domingos do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110807,
              "name"=> "São Félix de Balsas",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110856,
              "name"=> "São Francisco do Brejão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2110906,
              "name"=> "São Francisco do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111003,
              "name"=> "São João Batista",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111029,
              "name"=> "São João do Carú",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111052,
              "name"=> "São João do Paraíso",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111078,
              "name"=> "São João do Soter",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111102,
              "name"=> "São João dos Patos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111201,
              "name"=> "São José de Ribamar",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111250,
              "name"=> "São José dos Basílios",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111300,
              "name"=> "São Luís",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111409,
              "name"=> "São Luís Gonzaga do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111508,
              "name"=> "São Mateus do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111532,
              "name"=> "São Pedro da Água Branca",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111573,
              "name"=> "São Pedro dos Crentes",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111607,
              "name"=> "São Raimundo das Mangabeiras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111631,
              "name"=> "São Raimundo do Doca Bezerra",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111672,
              "name"=> "São Roberto",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111706,
              "name"=> "São Vicente Ferrer",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111722,
              "name"=> "Satubinha",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111748,
              "name"=> "Senador Alexandre Costa",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111763,
              "name"=> "Senador La Rocque",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111789,
              "name"=> "Serrano do Maranhão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111805,
              "name"=> "Sítio Novo",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111904,
              "name"=> "Sucupira do Norte",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2111953,
              "name"=> "Sucupira do Riachão",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112001,
              "name"=> "Tasso Fragoso",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112100,
              "name"=> "Timbiras",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112209,
              "name"=> "Timon",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112233,
              "name"=> "Trizidela do Vale",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112274,
              "name"=> "Tufilândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112308,
              "name"=> "Tuntum",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112407,
              "name"=> "Turiaçu",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112456,
              "name"=> "Turilândia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112506,
              "name"=> "Tutóia",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112605,
              "name"=> "Urbano Santos",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112704,
              "name"=> "Vargem Grande",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112803,
              "name"=> "Viana",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112852,
              "name"=> "Vila Nova dos Martírios",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2112902,
              "name"=> "Vitória do Mearim",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2113009,
              "name"=> "Vitorino Freire",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2114007,
              "name"=> "Zé Doca",
              "brazilstate_id"=> 21
            ],
            [
              "id"=> 2200053,
              "name"=> "Acauã",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200103,
              "name"=> "Agricolândia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200202,
              "name"=> "Água Branca",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200251,
              "name"=> "Alagoinha do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200277,
              "name"=> "Alegrete do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200301,
              "name"=> "Alto Longá",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200400,
              "name"=> "Altos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200459,
              "name"=> "Alvorada do Gurguéia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200509,
              "name"=> "Amarante",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200608,
              "name"=> "Angical do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200707,
              "name"=> "Anísio de Abreu",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200806,
              "name"=> "Antônio Almeida",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200905,
              "name"=> "Aroazes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2200954,
              "name"=> "Aroeiras do Itaim",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201002,
              "name"=> "Arraial",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201051,
              "name"=> "Assunção do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201101,
              "name"=> "Avelino Lopes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201150,
              "name"=> "Baixa Grande do Ribeiro",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201176,
              "name"=> "Barra d`Alcântara",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201200,
              "name"=> "Barras",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201309,
              "name"=> "Barreiras do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201408,
              "name"=> "Barro Duro",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201507,
              "name"=> "Batalha",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201556,
              "name"=> "Bela Vista do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201572,
              "name"=> "Belém do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201606,
              "name"=> "Beneditinos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201705,
              "name"=> "Bertolínia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201739,
              "name"=> "Betânia do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201770,
              "name"=> "Boa Hora",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201804,
              "name"=> "Bocaina",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201903,
              "name"=> "Bom Jesus",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201919,
              "name"=> "Bom Princípio do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201929,
              "name"=> "Bonfim do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201945,
              "name"=> "Boqueirão do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201960,
              "name"=> "Brasileira",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2201988,
              "name"=> "Brejo do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202000,
              "name"=> "Buriti dos Lopes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202026,
              "name"=> "Buriti dos Montes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202059,
              "name"=> "Cabeceiras do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202075,
              "name"=> "Cajazeiras do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202083,
              "name"=> "Cajueiro da Praia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202091,
              "name"=> "Caldeirão Grande do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202109,
              "name"=> "Campinas do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202117,
              "name"=> "Campo Alegre do Fidalgo",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202133,
              "name"=> "Campo Grande do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202174,
              "name"=> "Campo Largo do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202208,
              "name"=> "Campo Maior",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202251,
              "name"=> "Canavieira",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202307,
              "name"=> "Canto do Buriti",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202406,
              "name"=> "Capitão de Campos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202455,
              "name"=> "Capitão Gervásio Oliveira",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202505,
              "name"=> "Caracol",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202539,
              "name"=> "Caraúbas do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202554,
              "name"=> "Caridade do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202604,
              "name"=> "Castelo do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202653,
              "name"=> "Caxingó",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202703,
              "name"=> "Cocal",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202711,
              "name"=> "Cocal de Telha",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202729,
              "name"=> "Cocal dos Alves",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202737,
              "name"=> "Coivaras",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202752,
              "name"=> "Colônia do Gurguéia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202778,
              "name"=> "Colônia do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202802,
              "name"=> "Conceição do Canindé",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202851,
              "name"=> "Coronel José Dias",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2202901,
              "name"=> "Corrente",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203008,
              "name"=> "Cristalândia do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203107,
              "name"=> "Cristino Castro",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203206,
              "name"=> "Curimatá",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203230,
              "name"=> "Currais",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203255,
              "name"=> "Curralinhos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203271,
              "name"=> "Curral Novo do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203305,
              "name"=> "Demerval Lobão",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203354,
              "name"=> "Dirceu Arcoverde",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203404,
              "name"=> "Dom Expedito Lopes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203420,
              "name"=> "Domingos Mourão",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203453,
              "name"=> "Dom Inocêncio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203503,
              "name"=> "Elesbão Veloso",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203602,
              "name"=> "Eliseu Martins",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203701,
              "name"=> "Esperantina",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203750,
              "name"=> "Fartura do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203800,
              "name"=> "Flores do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203859,
              "name"=> "Floresta do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2203909,
              "name"=> "Floriano",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204006,
              "name"=> "Francinópolis",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204105,
              "name"=> "Francisco Ayres",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204154,
              "name"=> "Francisco Macedo",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204204,
              "name"=> "Francisco Santos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204303,
              "name"=> "Fronteiras",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204352,
              "name"=> "Geminiano",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204402,
              "name"=> "Gilbués",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204501,
              "name"=> "Guadalupe",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204550,
              "name"=> "Guaribas",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204600,
              "name"=> "Hugo Napoleão",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204659,
              "name"=> "Ilha Grande",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204709,
              "name"=> "Inhuma",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204808,
              "name"=> "Ipiranga do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2204907,
              "name"=> "Isaías Coelho",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205003,
              "name"=> "Itainópolis",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205102,
              "name"=> "Itaueira",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205151,
              "name"=> "Jacobina do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205201,
              "name"=> "Jaicós",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205250,
              "name"=> "Jardim do Mulato",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205276,
              "name"=> "Jatobá do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205300,
              "name"=> "Jerumenha",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205359,
              "name"=> "João Costa",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205409,
              "name"=> "Joaquim Pires",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205458,
              "name"=> "Joca Marques",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205508,
              "name"=> "José de Freitas",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205516,
              "name"=> "Juazeiro do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205524,
              "name"=> "Júlio Borges",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205532,
              "name"=> "Jurema",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205540,
              "name"=> "Lagoinha do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205557,
              "name"=> "Lagoa Alegre",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205565,
              "name"=> "Lagoa do Barro do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205573,
              "name"=> "Lagoa de São Francisco",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205581,
              "name"=> "Lagoa do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205599,
              "name"=> "Lagoa do Sítio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205607,
              "name"=> "Landri Sales",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205706,
              "name"=> "Luís Correia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205805,
              "name"=> "Luzilândia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205854,
              "name"=> "Madeiro",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205904,
              "name"=> "Manoel Emídio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2205953,
              "name"=> "Marcolândia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206001,
              "name"=> "Marcos Parente",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206050,
              "name"=> "Massapê do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206100,
              "name"=> "Matias Olímpio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206209,
              "name"=> "Miguel Alves",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206308,
              "name"=> "Miguel Leão",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206357,
              "name"=> "Milton Brandão",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206407,
              "name"=> "Monsenhor Gil",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206506,
              "name"=> "Monsenhor Hipólito",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206605,
              "name"=> "Monte Alegre do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206654,
              "name"=> "Morro Cabeça no Tempo",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206670,
              "name"=> "Morro do Chapéu do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206696,
              "name"=> "Murici dos Portelas",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206704,
              "name"=> "Nazaré do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206720,
              "name"=> "Nazária",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206753,
              "name"=> "Nossa Senhora de Nazaré",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206803,
              "name"=> "Nossa Senhora dos Remédios",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206902,
              "name"=> "Novo Oriente do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2206951,
              "name"=> "Novo Santo Antônio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207009,
              "name"=> "Oeiras",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207108,
              "name"=> "Olho d`Água do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207207,
              "name"=> "Padre Marcos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207306,
              "name"=> "Paes Landim",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207355,
              "name"=> "Pajeú do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207405,
              "name"=> "Palmeira do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207504,
              "name"=> "Palmeirais",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207553,
              "name"=> "Paquetá",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207603,
              "name"=> "Parnaguá",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207702,
              "name"=> "Parnaíba",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207751,
              "name"=> "Passagem Franca do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207777,
              "name"=> "Patos do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207793,
              "name"=> "Pau d`Arco do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207801,
              "name"=> "Paulistana",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207850,
              "name"=> "Pavussu",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207900,
              "name"=> "Pedro II",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207934,
              "name"=> "Pedro Laurentino",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2207959,
              "name"=> "Nova Santa Rita",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208007,
              "name"=> "Picos",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208106,
              "name"=> "Pimenteiras",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208205,
              "name"=> "Pio IX",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208304,
              "name"=> "Piracuruca",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208403,
              "name"=> "Piripiri",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208502,
              "name"=> "Porto",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208551,
              "name"=> "Porto Alegre do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208601,
              "name"=> "Prata do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208650,
              "name"=> "Queimada Nova",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208700,
              "name"=> "Redenção do Gurguéia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208809,
              "name"=> "Regeneração",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208858,
              "name"=> "Riacho Frio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208874,
              "name"=> "Ribeira do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2208908,
              "name"=> "Ribeiro Gonçalves",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209005,
              "name"=> "Rio Grande do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209104,
              "name"=> "Santa Cruz do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209153,
              "name"=> "Santa Cruz dos Milagres",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209203,
              "name"=> "Santa Filomena",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209302,
              "name"=> "Santa Luz",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209351,
              "name"=> "Santana do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209377,
              "name"=> "Santa Rosa do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209401,
              "name"=> "Santo Antônio de Lisboa",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209450,
              "name"=> "Santo Antônio dos Milagres",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209500,
              "name"=> "Santo Inácio do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209559,
              "name"=> "São Braz do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209609,
              "name"=> "São Félix do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209658,
              "name"=> "São Francisco de Assis do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209708,
              "name"=> "São Francisco do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209757,
              "name"=> "São Gonçalo do Gurguéia",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209807,
              "name"=> "São Gonçalo do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209856,
              "name"=> "São João da Canabrava",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209872,
              "name"=> "São João da Fronteira",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209906,
              "name"=> "São João da Serra",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209955,
              "name"=> "São João da Varjota",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2209971,
              "name"=> "São João do Arraial",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210003,
              "name"=> "São João do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210052,
              "name"=> "São José do Divino",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210102,
              "name"=> "São José do Peixe",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210201,
              "name"=> "São José do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210300,
              "name"=> "São Julião",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210359,
              "name"=> "São Lourenço do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210375,
              "name"=> "São Luis do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210383,
              "name"=> "São Miguel da Baixa Grande",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210391,
              "name"=> "São Miguel do Fidalgo",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210409,
              "name"=> "São Miguel do Tapuio",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210508,
              "name"=> "São Pedro do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210607,
              "name"=> "São Raimundo Nonato",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210623,
              "name"=> "Sebastião Barros",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210631,
              "name"=> "Sebastião Leal",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210656,
              "name"=> "Sigefredo Pacheco",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210706,
              "name"=> "Simões",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210805,
              "name"=> "Simplício Mendes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210904,
              "name"=> "Socorro do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210938,
              "name"=> "Sussuapara",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210953,
              "name"=> "Tamboril do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2210979,
              "name"=> "Tanque do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211001,
              "name"=> "Teresina",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211100,
              "name"=> "União",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211209,
              "name"=> "Uruçuí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211308,
              "name"=> "Valença do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211357,
              "name"=> "Várzea Branca",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211407,
              "name"=> "Várzea Grande",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211506,
              "name"=> "Vera Mendes",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211605,
              "name"=> "Vila Nova do Piauí",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2211704,
              "name"=> "Wall Ferraz",
              "brazilstate_id"=> 22
            ],
            [
              "id"=> 2300101,
              "name"=> "Abaiara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300150,
              "name"=> "Acarape",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300200,
              "name"=> "Acaraú",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300309,
              "name"=> "Acopiara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300408,
              "name"=> "Aiuaba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300507,
              "name"=> "Alcântaras",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300606,
              "name"=> "Altaneira",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300705,
              "name"=> "Alto Santo",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300754,
              "name"=> "Amontada",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300804,
              "name"=> "Antonina do Norte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2300903,
              "name"=> "Apuiarés",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301000,
              "name"=> "Aquiraz",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301109,
              "name"=> "Aracati",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301208,
              "name"=> "Aracoiaba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301257,
              "name"=> "Ararendá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301307,
              "name"=> "Araripe",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301406,
              "name"=> "Aratuba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301505,
              "name"=> "Arneiroz",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301604,
              "name"=> "Assaré",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301703,
              "name"=> "Aurora",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301802,
              "name"=> "Baixio",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301851,
              "name"=> "Banabuiú",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301901,
              "name"=> "Barbalha",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2301950,
              "name"=> "Barreira",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302008,
              "name"=> "Barro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302057,
              "name"=> "Barroquinha",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302107,
              "name"=> "Baturité",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302206,
              "name"=> "Beberibe",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302305,
              "name"=> "Bela Cruz",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302404,
              "name"=> "Boa Viagem",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302503,
              "name"=> "Brejo Santo",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302602,
              "name"=> "Camocim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302701,
              "name"=> "Campos Sales",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302800,
              "name"=> "Canindé",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2302909,
              "name"=> "Capistrano",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303006,
              "name"=> "Caridade",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303105,
              "name"=> "Cariré",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303204,
              "name"=> "Caririaçu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303303,
              "name"=> "Cariús",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303402,
              "name"=> "Carnaubal",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303501,
              "name"=> "Cascavel",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303600,
              "name"=> "Catarina",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303659,
              "name"=> "Catunda",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303709,
              "name"=> "Caucaia",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303808,
              "name"=> "Cedro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303907,
              "name"=> "Chaval",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303931,
              "name"=> "Choró",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2303956,
              "name"=> "Chorozinho",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304004,
              "name"=> "Coreaú",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304103,
              "name"=> "Crateús",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304202,
              "name"=> "Crato",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304236,
              "name"=> "Croatá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304251,
              "name"=> "Cruz",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304269,
              "name"=> "Deputado Irapuan Pinheiro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304277,
              "name"=> "Ererê",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304285,
              "name"=> "Eusébio",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304301,
              "name"=> "Farias Brito",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304350,
              "name"=> "Forquilha",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304400,
              "name"=> "Fortaleza",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304459,
              "name"=> "Fortim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304509,
              "name"=> "Frecheirinha",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304608,
              "name"=> "General Sampaio",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304657,
              "name"=> "Graça",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304707,
              "name"=> "Granja",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304806,
              "name"=> "Granjeiro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304905,
              "name"=> "Groaíras",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2304954,
              "name"=> "Guaiúba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305001,
              "name"=> "Guaraciaba do Norte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305100,
              "name"=> "Guaramiranga",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305209,
              "name"=> "Hidrolândia",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305233,
              "name"=> "Horizonte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305266,
              "name"=> "Ibaretama",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305308,
              "name"=> "Ibiapina",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305332,
              "name"=> "Ibicuitinga",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305357,
              "name"=> "Icapuí",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305407,
              "name"=> "Icó",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305506,
              "name"=> "Iguatu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305605,
              "name"=> "Independência",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305654,
              "name"=> "Ipaporanga",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305704,
              "name"=> "Ipaumirim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305803,
              "name"=> "Ipu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2305902,
              "name"=> "Ipueiras",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306009,
              "name"=> "Iracema",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306108,
              "name"=> "Irauçuba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306207,
              "name"=> "Itaiçaba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306256,
              "name"=> "Itaitinga",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306306,
              "name"=> "Itapagé",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306405,
              "name"=> "Itapipoca",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306504,
              "name"=> "Itapiúna",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306553,
              "name"=> "Itarema",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306603,
              "name"=> "Itatira",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306702,
              "name"=> "Jaguaretama",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306801,
              "name"=> "Jaguaribara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2306900,
              "name"=> "Jaguaribe",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307007,
              "name"=> "Jaguaruana",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307106,
              "name"=> "Jardim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307205,
              "name"=> "Jati",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307254,
              "name"=> "Jijoca de Jericoacoara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307304,
              "name"=> "Juazeiro do Norte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307403,
              "name"=> "Jucás",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307502,
              "name"=> "Lavras da Mangabeira",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307601,
              "name"=> "Limoeiro do Norte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307635,
              "name"=> "Madalena",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307650,
              "name"=> "Maracanaú",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307700,
              "name"=> "Maranguape",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307809,
              "name"=> "Marco",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2307908,
              "name"=> "Martinópole",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308005,
              "name"=> "Massapê",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308104,
              "name"=> "Mauriti",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308203,
              "name"=> "Meruoca",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308302,
              "name"=> "Milagres",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308351,
              "name"=> "Milhã",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308377,
              "name"=> "Miraíma",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308401,
              "name"=> "Missão Velha",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308500,
              "name"=> "Mombaça",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308609,
              "name"=> "Monsenhor Tabosa",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308708,
              "name"=> "Morada Nova",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308807,
              "name"=> "Moraújo",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2308906,
              "name"=> "Morrinhos",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309003,
              "name"=> "Mucambo",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309102,
              "name"=> "Mulungu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309201,
              "name"=> "Nova Olinda",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309300,
              "name"=> "Nova Russas",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309409,
              "name"=> "Novo Oriente",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309458,
              "name"=> "Ocara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309508,
              "name"=> "Orós",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309607,
              "name"=> "Pacajus",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309706,
              "name"=> "Pacatuba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309805,
              "name"=> "Pacoti",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2309904,
              "name"=> "Pacujá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310001,
              "name"=> "Palhano",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310100,
              "name"=> "Palmácia",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310209,
              "name"=> "Paracuru",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310258,
              "name"=> "Paraipaba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310308,
              "name"=> "Parambu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310407,
              "name"=> "Paramoti",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310506,
              "name"=> "Pedra Branca",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310605,
              "name"=> "Penaforte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310704,
              "name"=> "Pentecoste",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310803,
              "name"=> "Pereiro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310852,
              "name"=> "Pindoretama",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310902,
              "name"=> "Piquet Carneiro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2310951,
              "name"=> "Pires Ferreira",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311009,
              "name"=> "Poranga",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311108,
              "name"=> "Porteiras",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311207,
              "name"=> "Potengi",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311231,
              "name"=> "Potiretama",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311264,
              "name"=> "Quiterianópolis",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311306,
              "name"=> "Quixadá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311355,
              "name"=> "Quixelô",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311405,
              "name"=> "Quixeramobim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311504,
              "name"=> "Quixeré",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311603,
              "name"=> "Redenção",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311702,
              "name"=> "Reriutaba",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311801,
              "name"=> "Russas",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311900,
              "name"=> "Saboeiro",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2311959,
              "name"=> "Salitre",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312007,
              "name"=> "Santana do Acaraú",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312106,
              "name"=> "Santana do Cariri",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312205,
              "name"=> "Santa Quitéria",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312304,
              "name"=> "São Benedito",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312403,
              "name"=> "São Gonçalo do Amarante",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312502,
              "name"=> "São João do Jaguaribe",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312601,
              "name"=> "São Luís do Curu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312700,
              "name"=> "Senador Pompeu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312809,
              "name"=> "Senador Sá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2312908,
              "name"=> "Sobral",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313005,
              "name"=> "Solonópole",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313104,
              "name"=> "Tabuleiro do Norte",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313203,
              "name"=> "Tamboril",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313252,
              "name"=> "Tarrafas",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313302,
              "name"=> "Tauá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313351,
              "name"=> "Tejuçuoca",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313401,
              "name"=> "Tianguá",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313500,
              "name"=> "Trairi",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313559,
              "name"=> "Tururu",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313609,
              "name"=> "Ubajara",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313708,
              "name"=> "Umari",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313757,
              "name"=> "Umirim",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313807,
              "name"=> "Uruburetama",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313906,
              "name"=> "Uruoca",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2313955,
              "name"=> "Varjota",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2314003,
              "name"=> "Várzea Alegre",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2314102,
              "name"=> "Viçosa do Ceará",
              "brazilstate_id"=> 23
            ],
            [
              "id"=> 2400109,
              "name"=> "Acari",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400208,
              "name"=> "Açu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400307,
              "name"=> "Afonso Bezerra",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400406,
              "name"=> "Água Nova",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400505,
              "name"=> "Alexandria",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400604,
              "name"=> "Almino Afonso",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400703,
              "name"=> "Alto do Rodrigues",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400802,
              "name"=> "Angicos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2400901,
              "name"=> "Antônio Martins",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401008,
              "name"=> "Apodi",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401107,
              "name"=> "Areia Branca",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401206,
              "name"=> "Arês",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401305,
              "name"=> "Augusto Severo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401404,
              "name"=> "Baía Formosa",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401453,
              "name"=> "Baraúna",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401503,
              "name"=> "Barcelona",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401602,
              "name"=> "Bento Fernandes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401651,
              "name"=> "Bodó",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401701,
              "name"=> "Bom Jesus",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401800,
              "name"=> "Brejinho",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401859,
              "name"=> "Caiçara do Norte",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2401909,
              "name"=> "Caiçara do Rio do Vento",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402006,
              "name"=> "Caicó",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402105,
              "name"=> "Campo Redondo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402204,
              "name"=> "Canguaretama",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402303,
              "name"=> "Caraúbas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402402,
              "name"=> "Carnaúba dos Dantas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402501,
              "name"=> "Carnaubais",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402600,
              "name"=> "Ceará-Mirim",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402709,
              "name"=> "Cerro Corá",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402808,
              "name"=> "Coronel Ezequiel",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2402907,
              "name"=> "Coronel João Pessoa",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403004,
              "name"=> "Cruzeta",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403103,
              "name"=> "Currais Novos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403202,
              "name"=> "Doutor Severiano",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403251,
              "name"=> "Parnamirim",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403301,
              "name"=> "Encanto",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403400,
              "name"=> "Equador",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403509,
              "name"=> "Espírito Santo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403608,
              "name"=> "Extremoz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403707,
              "name"=> "Felipe Guerra",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403756,
              "name"=> "Fernando Pedroza",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403806,
              "name"=> "Florânia",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2403905,
              "name"=> "Francisco Dantas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404002,
              "name"=> "Frutuoso Gomes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404101,
              "name"=> "Galinhos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404200,
              "name"=> "Goianinha",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404309,
              "name"=> "Governador Dix-Sept Rosado",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404408,
              "name"=> "Grossos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404507,
              "name"=> "Guamaré",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404606,
              "name"=> "Ielmo Marinho",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404705,
              "name"=> "Ipanguaçu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404804,
              "name"=> "Ipueira",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404853,
              "name"=> "Itajá",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2404903,
              "name"=> "Itaú",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405009,
              "name"=> "Jaçanã",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405108,
              "name"=> "Jandaíra",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405207,
              "name"=> "Janduís",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405306,
              "name"=> "Januário Cicco",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405405,
              "name"=> "Japi",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405504,
              "name"=> "Jardim de Angicos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405603,
              "name"=> "Jardim de Piranhas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405702,
              "name"=> "Jardim do Seridó",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405801,
              "name"=> "João Câmara",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2405900,
              "name"=> "João Dias",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406007,
              "name"=> "José da Penha",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406106,
              "name"=> "Jucurutu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406155,
              "name"=> "Jundiá",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406205,
              "name"=> "Lagoa d`Anta",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406304,
              "name"=> "Lagoa de Pedras",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406403,
              "name"=> "Lagoa de Velhos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406502,
              "name"=> "Lagoa Nova",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406601,
              "name"=> "Lagoa Salgada",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406700,
              "name"=> "Lajes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406809,
              "name"=> "Lajes Pintadas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2406908,
              "name"=> "Lucrécia",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407005,
              "name"=> "Luís Gomes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407104,
              "name"=> "Macaíba",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407203,
              "name"=> "Macau",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407252,
              "name"=> "Major Sales",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407302,
              "name"=> "Marcelino Vieira",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407401,
              "name"=> "Martins",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407500,
              "name"=> "Maxaranguape",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407609,
              "name"=> "Messias Targino",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407708,
              "name"=> "Montanhas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407807,
              "name"=> "Monte Alegre",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2407906,
              "name"=> "Monte das Gameleiras",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408003,
              "name"=> "Mossoró",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408102,
              "name"=> "Natal",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408201,
              "name"=> "Nísia Floresta",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408300,
              "name"=> "Nova Cruz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408409,
              "name"=> "Olho-d`Água do Borges",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408508,
              "name"=> "Ouro Branco",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408607,
              "name"=> "Paraná",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408706,
              "name"=> "Paraú",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408805,
              "name"=> "Parazinho",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408904,
              "name"=> "Parelhas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2408953,
              "name"=> "Rio do Fogo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409100,
              "name"=> "Passa e Fica",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409209,
              "name"=> "Passagem",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409308,
              "name"=> "Patu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409332,
              "name"=> "Santa Maria",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409407,
              "name"=> "Pau dos Ferros",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409506,
              "name"=> "Pedra Grande",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409605,
              "name"=> "Pedra Preta",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409704,
              "name"=> "Pedro Avelino",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409803,
              "name"=> "Pedro Velho",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2409902,
              "name"=> "Pendências",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410009,
              "name"=> "Pilões",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410108,
              "name"=> "Poço Branco",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410207,
              "name"=> "Portalegre",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410256,
              "name"=> "Porto do Mangue",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410306,
              "name"=> "Serra Caiada",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410405,
              "name"=> "Pureza",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410504,
              "name"=> "Rafael Fernandes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410603,
              "name"=> "Rafael Godeiro",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410702,
              "name"=> "Riacho da Cruz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410801,
              "name"=> "Riacho de Santana",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2410900,
              "name"=> "Riachuelo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411007,
              "name"=> "Rodolfo Fernandes",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411056,
              "name"=> "Tibau",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411106,
              "name"=> "Ruy Barbosa",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411205,
              "name"=> "Santa Cruz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411403,
              "name"=> "Santana do Matos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411429,
              "name"=> "Santana do Seridó",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411502,
              "name"=> "Santo Antônio",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411601,
              "name"=> "São Bento do Norte",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411700,
              "name"=> "São Bento do Trairí",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411809,
              "name"=> "São Fernando",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2411908,
              "name"=> "São Francisco do Oeste",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412005,
              "name"=> "São Gonçalo do Amarante",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412104,
              "name"=> "São João do Sabugi",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412203,
              "name"=> "São José de Mipibu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412302,
              "name"=> "São José do Campestre",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412401,
              "name"=> "São José do Seridó",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412500,
              "name"=> "São Miguel",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412559,
              "name"=> "São Miguel do Gostoso",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412609,
              "name"=> "São Paulo do Potengi",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412708,
              "name"=> "São Pedro",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412807,
              "name"=> "São Rafael",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2412906,
              "name"=> "São Tomé",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413003,
              "name"=> "São Vicente",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413102,
              "name"=> "Senador Elói de Souza",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413201,
              "name"=> "Senador Georgino Avelino",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413300,
              "name"=> "Serra de São Bento",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413359,
              "name"=> "Serra do Mel",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413409,
              "name"=> "Serra Negra do Norte",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413508,
              "name"=> "Serrinha",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413557,
              "name"=> "Serrinha dos Pintos",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413607,
              "name"=> "Severiano Melo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413706,
              "name"=> "Sítio Novo",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413805,
              "name"=> "Taboleiro Grande",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2413904,
              "name"=> "Taipu",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414001,
              "name"=> "Tangará",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414100,
              "name"=> "Tenente Ananias",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414159,
              "name"=> "Tenente Laurentino Cruz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414209,
              "name"=> "Tibau do Sul",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414308,
              "name"=> "Timbaúba dos Batistas",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414407,
              "name"=> "Touros",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414456,
              "name"=> "Triunfo Potiguar",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414506,
              "name"=> "Umarizal",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414605,
              "name"=> "Upanema",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414704,
              "name"=> "Várzea",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414753,
              "name"=> "Venha-Ver",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414803,
              "name"=> "Vera Cruz",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2414902,
              "name"=> "Viçosa",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2415008,
              "name"=> "Vila Flor",
              "brazilstate_id"=> 24
            ],
            [
              "id"=> 2500106,
              "name"=> "Água Branca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500205,
              "name"=> "Aguiar",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500304,
              "name"=> "Alagoa Grande",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500403,
              "name"=> "Alagoa Nova",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500502,
              "name"=> "Alagoinha",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500536,
              "name"=> "Alcantil",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500577,
              "name"=> "Algodão de Jandaíra",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500601,
              "name"=> "Alhandra",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500700,
              "name"=> "São João do Rio do Peixe",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500734,
              "name"=> "Amparo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500775,
              "name"=> "Aparecida",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500809,
              "name"=> "Araçagi",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2500908,
              "name"=> "Arara",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501005,
              "name"=> "Araruna",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501104,
              "name"=> "Areia",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501153,
              "name"=> "Areia de Baraúnas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501203,
              "name"=> "Areial",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501302,
              "name"=> "Aroeiras",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501351,
              "name"=> "Assunção",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501401,
              "name"=> "Baía da Traição",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501500,
              "name"=> "Bananeiras",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501534,
              "name"=> "Baraúna",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501575,
              "name"=> "Barra de Santana",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501609,
              "name"=> "Barra de Santa Rosa",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501708,
              "name"=> "Barra de São Miguel",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501807,
              "name"=> "Bayeux",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2501906,
              "name"=> "Belém",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502003,
              "name"=> "Belém do Brejo do Cruz",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502052,
              "name"=> "Bernardino Batista",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502102,
              "name"=> "Boa Ventura",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502151,
              "name"=> "Boa Vista",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502201,
              "name"=> "Bom Jesus",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502300,
              "name"=> "Bom Sucesso",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502409,
              "name"=> "Bonito de Santa Fé",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502508,
              "name"=> "Boqueirão",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502607,
              "name"=> "Igaracy",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502706,
              "name"=> "Borborema",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502805,
              "name"=> "Brejo do Cruz",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2502904,
              "name"=> "Brejo dos Santos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503001,
              "name"=> "Caaporã",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503100,
              "name"=> "Cabaceiras",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503209,
              "name"=> "Cabedelo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503308,
              "name"=> "Cachoeira dos Índios",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503407,
              "name"=> "Cacimba de Areia",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503506,
              "name"=> "Cacimba de Dentro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503555,
              "name"=> "Cacimbas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503605,
              "name"=> "Caiçara",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503704,
              "name"=> "Cajazeiras",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503753,
              "name"=> "Cajazeirinhas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503803,
              "name"=> "Caldas Brandão",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2503902,
              "name"=> "Camalaú",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504009,
              "name"=> "Campina Grande",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504033,
              "name"=> "Capim",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504074,
              "name"=> "Caraúbas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504108,
              "name"=> "Carrapateira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504157,
              "name"=> "Casserengue",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504207,
              "name"=> "Catingueira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504306,
              "name"=> "Catolé do Rocha",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504355,
              "name"=> "Caturité",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504405,
              "name"=> "Conceição",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504504,
              "name"=> "Condado",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504603,
              "name"=> "Conde",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504702,
              "name"=> "Congo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504801,
              "name"=> "Coremas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504850,
              "name"=> "Coxixola",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2504900,
              "name"=> "Cruz do Espírito Santo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505006,
              "name"=> "Cubati",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505105,
              "name"=> "Cuité",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505204,
              "name"=> "Cuitegi",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505238,
              "name"=> "Cuité de Mamanguape",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505279,
              "name"=> "Curral de Cima",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505303,
              "name"=> "Curral Velho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505352,
              "name"=> "Damião",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505402,
              "name"=> "Desterro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505501,
              "name"=> "Vista Serrana",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505600,
              "name"=> "Diamante",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505709,
              "name"=> "Dona Inês",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505808,
              "name"=> "Duas Estradas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2505907,
              "name"=> "Emas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506004,
              "name"=> "Esperança",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506103,
              "name"=> "Fagundes",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506202,
              "name"=> "Frei Martinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506251,
              "name"=> "Gado Bravo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506301,
              "name"=> "Guarabira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506400,
              "name"=> "Gurinhém",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506509,
              "name"=> "Gurjão",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506608,
              "name"=> "Ibiara",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506707,
              "name"=> "Imaculada",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506806,
              "name"=> "Ingá",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2506905,
              "name"=> "Itabaiana",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507002,
              "name"=> "Itaporanga",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507101,
              "name"=> "Itapororoca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507200,
              "name"=> "Itatuba",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507309,
              "name"=> "Jacaraú",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507408,
              "name"=> "Jericó",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507507,
              "name"=> "João Pessoa",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507606,
              "name"=> "Juarez Távora",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507705,
              "name"=> "Juazeirinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507804,
              "name"=> "Junco do Seridó",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2507903,
              "name"=> "Juripiranga",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508000,
              "name"=> "Juru",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508109,
              "name"=> "Lagoa",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508208,
              "name"=> "Lagoa de Dentro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508307,
              "name"=> "Lagoa Seca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508406,
              "name"=> "Lastro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508505,
              "name"=> "Livramento",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508554,
              "name"=> "Logradouro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508604,
              "name"=> "Lucena",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508703,
              "name"=> "Mãe d`Água",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508802,
              "name"=> "Malta",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2508901,
              "name"=> "Mamanguape",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509008,
              "name"=> "Manaíra",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509057,
              "name"=> "Marcação",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509107,
              "name"=> "Mari",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509156,
              "name"=> "Marizópolis",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509206,
              "name"=> "Massaranduba",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509305,
              "name"=> "Mataraca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509339,
              "name"=> "Matinhas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509370,
              "name"=> "Mato Grosso",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509396,
              "name"=> "Maturéia",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509404,
              "name"=> "Mogeiro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509503,
              "name"=> "Montadas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509602,
              "name"=> "Monte Horebe",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509701,
              "name"=> "Monteiro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509800,
              "name"=> "Mulungu",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2509909,
              "name"=> "Natuba",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510006,
              "name"=> "Nazarezinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510105,
              "name"=> "Nova Floresta",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510204,
              "name"=> "Nova Olinda",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510303,
              "name"=> "Nova Palmeira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510402,
              "name"=> "Olho d`Água",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510501,
              "name"=> "Olivedos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510600,
              "name"=> "Ouro Velho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510659,
              "name"=> "Parari",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510709,
              "name"=> "Passagem",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510808,
              "name"=> "Patos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2510907,
              "name"=> "Paulista",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511004,
              "name"=> "Pedra Branca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511103,
              "name"=> "Pedra Lavrada",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511202,
              "name"=> "Pedras de Fogo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511301,
              "name"=> "Piancó",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511400,
              "name"=> "Picuí",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511509,
              "name"=> "Pilar",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511608,
              "name"=> "Pilões",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511707,
              "name"=> "Pilõezinhos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511806,
              "name"=> "Pirpirituba",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2511905,
              "name"=> "Pitimbu",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512002,
              "name"=> "Pocinhos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512036,
              "name"=> "Poço Dantas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512077,
              "name"=> "Poço de José de Moura",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512101,
              "name"=> "Pombal",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512200,
              "name"=> "Prata",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512309,
              "name"=> "Princesa Isabel",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512408,
              "name"=> "Puxinanã",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512507,
              "name"=> "Queimadas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512606,
              "name"=> "Quixabá",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512705,
              "name"=> "Remígio",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512721,
              "name"=> "Pedro Régis",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512747,
              "name"=> "Riachão",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512754,
              "name"=> "Riachão do Bacamarte",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512762,
              "name"=> "Riachão do Poço",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512788,
              "name"=> "Riacho de Santo Antônio",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512804,
              "name"=> "Riacho dos Cavalos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2512903,
              "name"=> "Rio Tinto",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513000,
              "name"=> "Salgadinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513109,
              "name"=> "Salgado de São Félix",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513158,
              "name"=> "Santa Cecília",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513208,
              "name"=> "Santa Cruz",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513307,
              "name"=> "Santa Helena",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513356,
              "name"=> "Santa Inês",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513406,
              "name"=> "Santa Luzia",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513505,
              "name"=> "Santana de Mangueira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513604,
              "name"=> "Santana dos Garrotes",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513653,
              "name"=> "Joca Claudino",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513703,
              "name"=> "Santa Rita",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513802,
              "name"=> "Santa Teresinha",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513851,
              "name"=> "Santo André",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513901,
              "name"=> "São Bento",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513927,
              "name"=> "São Bentinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513943,
              "name"=> "São Domingos do Cariri",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513968,
              "name"=> "São Domingos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2513984,
              "name"=> "São Francisco",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514008,
              "name"=> "São João do Cariri",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514107,
              "name"=> "São João do Tigre",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514206,
              "name"=> "São José da Lagoa Tapada",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514305,
              "name"=> "São José de Caiana",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514404,
              "name"=> "São José de Espinharas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514453,
              "name"=> "São José dos Ramos",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514503,
              "name"=> "São José de Piranhas",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514552,
              "name"=> "São José de Princesa",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514602,
              "name"=> "São José do Bonfim",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514651,
              "name"=> "São José do Brejo do Cruz",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514701,
              "name"=> "São José do Sabugi",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514800,
              "name"=> "São José dos Cordeiros",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2514909,
              "name"=> "São Mamede",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515005,
              "name"=> "São Miguel de Taipu",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515104,
              "name"=> "São Sebastião de Lagoa de Roça",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515203,
              "name"=> "São Sebastião do Umbuzeiro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515302,
              "name"=> "Sapé",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515401,
              "name"=> "São Vicente do Seridó",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515500,
              "name"=> "Serra Branca",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515609,
              "name"=> "Serra da Raiz",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515708,
              "name"=> "Serra Grande",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515807,
              "name"=> "Serra Redonda",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515906,
              "name"=> "Serraria",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515930,
              "name"=> "Sertãozinho",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2515971,
              "name"=> "Sobrado",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516003,
              "name"=> "Solânea",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516102,
              "name"=> "Soledade",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516151,
              "name"=> "Sossêgo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516201,
              "name"=> "Sousa",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516300,
              "name"=> "Sumé",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516409,
              "name"=> "Tacima",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516508,
              "name"=> "Taperoá",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516607,
              "name"=> "Tavares",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516706,
              "name"=> "Teixeira",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516755,
              "name"=> "Tenório",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516805,
              "name"=> "Triunfo",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2516904,
              "name"=> "Uiraúna",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2517001,
              "name"=> "Umbuzeiro",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2517100,
              "name"=> "Várzea",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2517209,
              "name"=> "Vieirópolis",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2517407,
              "name"=> "Zabelê",
              "brazilstate_id"=> 25
            ],
            [
              "id"=> 2600054,
              "name"=> "Abreu e Lima",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600104,
              "name"=> "Afogados da Ingazeira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600203,
              "name"=> "Afrânio",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600302,
              "name"=> "Agrestina",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600401,
              "name"=> "Água Preta",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600500,
              "name"=> "Águas Belas",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600609,
              "name"=> "Alagoinha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600708,
              "name"=> "Aliança",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600807,
              "name"=> "Altinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2600906,
              "name"=> "Amaraji",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601003,
              "name"=> "Angelim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601052,
              "name"=> "Araçoiaba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601102,
              "name"=> "Araripina",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601201,
              "name"=> "Arcoverde",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601300,
              "name"=> "Barra de Guabiraba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601409,
              "name"=> "Barreiros",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601508,
              "name"=> "Belém de Maria",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601607,
              "name"=> "Belém de São Francisco",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601706,
              "name"=> "Belo Jardim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601805,
              "name"=> "Betânia",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2601904,
              "name"=> "Bezerros",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602001,
              "name"=> "Bodocó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602100,
              "name"=> "Bom Conselho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602209,
              "name"=> "Bom Jardim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602308,
              "name"=> "Bonito",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602407,
              "name"=> "Brejão",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602506,
              "name"=> "Brejinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602605,
              "name"=> "Brejo da Madre de Deus",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602704,
              "name"=> "Buenos Aires",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602803,
              "name"=> "Buíque",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2602902,
              "name"=> "Cabo de Santo Agostinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603009,
              "name"=> "Cabrobó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603108,
              "name"=> "Cachoeirinha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603207,
              "name"=> "Caetés",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603306,
              "name"=> "Calçado",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603405,
              "name"=> "Calumbi",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603454,
              "name"=> "Camaragibe",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603504,
              "name"=> "Camocim de São Félix",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603603,
              "name"=> "Camutanga",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603702,
              "name"=> "Canhotinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603801,
              "name"=> "Capoeiras",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603900,
              "name"=> "Carnaíba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2603926,
              "name"=> "Carnaubeira da Penha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604007,
              "name"=> "Carpina",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604106,
              "name"=> "Caruaru",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604155,
              "name"=> "Casinhas",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604205,
              "name"=> "Catende",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604304,
              "name"=> "Cedro",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604403,
              "name"=> "Chã de Alegria",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604502,
              "name"=> "Chã Grande",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604601,
              "name"=> "Condado",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604700,
              "name"=> "Correntes",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604809,
              "name"=> "Cortês",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2604908,
              "name"=> "Cumaru",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605004,
              "name"=> "Cupira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605103,
              "name"=> "Custódia",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605152,
              "name"=> "Dormentes",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605202,
              "name"=> "Escada",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605301,
              "name"=> "Exu",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605400,
              "name"=> "Feira Nova",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605459,
              "name"=> "Fernando de Noronha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605509,
              "name"=> "Ferreiros",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605608,
              "name"=> "Flores",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605707,
              "name"=> "Floresta",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605806,
              "name"=> "Frei Miguelinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2605905,
              "name"=> "Gameleira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606002,
              "name"=> "Garanhuns",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606101,
              "name"=> "Glória do Goitá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606200,
              "name"=> "Goiana",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606309,
              "name"=> "Granito",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606408,
              "name"=> "Gravatá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606507,
              "name"=> "Iati",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606606,
              "name"=> "Ibimirim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606705,
              "name"=> "Ibirajuba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606804,
              "name"=> "Igarassu",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2606903,
              "name"=> "Iguaraci",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607000,
              "name"=> "Inajá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607109,
              "name"=> "Ingazeira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607208,
              "name"=> "Ipojuca",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607307,
              "name"=> "Ipubi",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607406,
              "name"=> "Itacuruba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607505,
              "name"=> "Itaíba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607604,
              "name"=> "Ilha de Itamaracá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607653,
              "name"=> "Itambé",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607703,
              "name"=> "Itapetim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607752,
              "name"=> "Itapissuma",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607802,
              "name"=> "Itaquitinga",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607901,
              "name"=> "Jaboatão dos Guararapes",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2607950,
              "name"=> "Jaqueira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608008,
              "name"=> "Jataúba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608057,
              "name"=> "Jatobá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608107,
              "name"=> "João Alfredo",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608206,
              "name"=> "Joaquim Nabuco",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608255,
              "name"=> "Jucati",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608305,
              "name"=> "Jupi",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608404,
              "name"=> "Jurema",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608453,
              "name"=> "Lagoa do Carro",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608503,
              "name"=> "Lagoa do Itaenga",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608602,
              "name"=> "Lagoa do Ouro",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608701,
              "name"=> "Lagoa dos Gatos",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608750,
              "name"=> "Lagoa Grande",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608800,
              "name"=> "Lajedo",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2608909,
              "name"=> "Limoeiro",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609006,
              "name"=> "Macaparana",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609105,
              "name"=> "Machados",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609154,
              "name"=> "Manari",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609204,
              "name"=> "Maraial",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609303,
              "name"=> "Mirandiba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609402,
              "name"=> "Moreno",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609501,
              "name"=> "Nazaré da Mata",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609600,
              "name"=> "Olinda",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609709,
              "name"=> "Orobó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609808,
              "name"=> "Orocó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2609907,
              "name"=> "Ouricuri",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610004,
              "name"=> "Palmares",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610103,
              "name"=> "Palmeirina",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610202,
              "name"=> "Panelas",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610301,
              "name"=> "Paranatama",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610400,
              "name"=> "Parnamirim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610509,
              "name"=> "Passira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610608,
              "name"=> "Paudalho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610707,
              "name"=> "Paulista",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610806,
              "name"=> "Pedra",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2610905,
              "name"=> "Pesqueira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611002,
              "name"=> "Petrolândia",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611101,
              "name"=> "Petrolina",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611200,
              "name"=> "Poção",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611309,
              "name"=> "Pombos",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611408,
              "name"=> "Primavera",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611507,
              "name"=> "Quipapá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611533,
              "name"=> "Quixaba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611606,
              "name"=> "Recife",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611705,
              "name"=> "Riacho das Almas",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611804,
              "name"=> "Ribeirão",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2611903,
              "name"=> "Rio Formoso",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612000,
              "name"=> "Sairé",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612109,
              "name"=> "Salgadinho",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612208,
              "name"=> "Salgueiro",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612307,
              "name"=> "Saloá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612406,
              "name"=> "Sanharó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612455,
              "name"=> "Santa Cruz",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612471,
              "name"=> "Santa Cruz da Baixa Verde",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612505,
              "name"=> "Santa Cruz do Capibaribe",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612554,
              "name"=> "Santa Filomena",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612604,
              "name"=> "Santa Maria da Boa Vista",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612703,
              "name"=> "Santa Maria do Cambucá",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612802,
              "name"=> "Santa Terezinha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2612901,
              "name"=> "São Benedito do Sul",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613008,
              "name"=> "São Bento do Una",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613107,
              "name"=> "São Caitano",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613206,
              "name"=> "São João",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613305,
              "name"=> "São Joaquim do Monte",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613404,
              "name"=> "São José da Coroa Grande",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613503,
              "name"=> "São José do Belmonte",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613602,
              "name"=> "São José do Egito",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613701,
              "name"=> "São Lourenço da Mata",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613800,
              "name"=> "São Vicente Ferrer",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2613909,
              "name"=> "Serra Talhada",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614006,
              "name"=> "Serrita",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614105,
              "name"=> "Sertânia",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614204,
              "name"=> "Sirinhaém",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614303,
              "name"=> "Moreilândia",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614402,
              "name"=> "Solidão",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614501,
              "name"=> "Surubim",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614600,
              "name"=> "Tabira",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614709,
              "name"=> "Tacaimbó",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614808,
              "name"=> "Tacaratu",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2614857,
              "name"=> "Tamandaré",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615003,
              "name"=> "Taquaritinga do Norte",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615102,
              "name"=> "Terezinha",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615201,
              "name"=> "Terra Nova",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615300,
              "name"=> "Timbaúba",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615409,
              "name"=> "Toritama",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615508,
              "name"=> "Tracunhaém",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615607,
              "name"=> "Trindade",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615706,
              "name"=> "Triunfo",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615805,
              "name"=> "Tupanatinga",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2615904,
              "name"=> "Tuparetama",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616001,
              "name"=> "Venturosa",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616100,
              "name"=> "Verdejante",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616183,
              "name"=> "Vertente do Lério",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616209,
              "name"=> "Vertentes",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616308,
              "name"=> "Vicência",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616407,
              "name"=> "Vitória de Santo Antão",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2616506,
              "name"=> "Xexéu",
              "brazilstate_id"=> 26
            ],
            [
              "id"=> 2700102,
              "name"=> "Água Branca",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700201,
              "name"=> "Anadia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700300,
              "name"=> "Arapiraca",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700409,
              "name"=> "Atalaia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700508,
              "name"=> "Barra de Santo Antônio",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700607,
              "name"=> "Barra de São Miguel",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700706,
              "name"=> "Batalha",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700805,
              "name"=> "Belém",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2700904,
              "name"=> "Belo Monte",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701001,
              "name"=> "Boca da Mata",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701100,
              "name"=> "Branquinha",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701209,
              "name"=> "Cacimbinhas",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701308,
              "name"=> "Cajueiro",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701357,
              "name"=> "Campestre",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701407,
              "name"=> "Campo Alegre",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701506,
              "name"=> "Campo Grande",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701605,
              "name"=> "Canapi",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701704,
              "name"=> "Capela",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701803,
              "name"=> "Carneiros",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2701902,
              "name"=> "Chã Preta",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702009,
              "name"=> "Coité do Nóia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702108,
              "name"=> "Colônia Leopoldina",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702207,
              "name"=> "Coqueiro Seco",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702306,
              "name"=> "Coruripe",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702355,
              "name"=> "Craíbas",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702405,
              "name"=> "Delmiro Gouveia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702504,
              "name"=> "Dois Riachos",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702553,
              "name"=> "Estrela de Alagoas",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702603,
              "name"=> "Feira Grande",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702702,
              "name"=> "Feliz Deserto",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702801,
              "name"=> "Flexeiras",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2702900,
              "name"=> "Girau do Ponciano",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703007,
              "name"=> "Ibateguara",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703106,
              "name"=> "Igaci",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703205,
              "name"=> "Igreja Nova",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703304,
              "name"=> "Inhapi",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703403,
              "name"=> "Jacaré dos Homens",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703502,
              "name"=> "Jacuípe",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703601,
              "name"=> "Japaratinga",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703700,
              "name"=> "Jaramataia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703759,
              "name"=> "Jequiá da Praia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703809,
              "name"=> "Joaquim Gomes",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2703908,
              "name"=> "Jundiá",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704005,
              "name"=> "Junqueiro",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704104,
              "name"=> "Lagoa da Canoa",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704203,
              "name"=> "Limoeiro de Anadia",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704302,
              "name"=> "Maceió",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704401,
              "name"=> "Major Isidoro",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704500,
              "name"=> "Maragogi",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704609,
              "name"=> "Maravilha",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704708,
              "name"=> "Marechal Deodoro",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704807,
              "name"=> "Maribondo",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2704906,
              "name"=> "Mar Vermelho",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705002,
              "name"=> "Mata Grande",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705101,
              "name"=> "Matriz de Camaragibe",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705200,
              "name"=> "Messias",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705309,
              "name"=> "Minador do Negrão",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705408,
              "name"=> "Monteirópolis",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705507,
              "name"=> "Murici",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705606,
              "name"=> "Novo Lino",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705705,
              "name"=> "Olho d`Água das Flores",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705804,
              "name"=> "Olho d`Água do Casado",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2705903,
              "name"=> "Olho d`Água Grande",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706000,
              "name"=> "Olivença",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706109,
              "name"=> "Ouro Branco",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706208,
              "name"=> "Palestina",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706307,
              "name"=> "Palmeira dos Índios",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706406,
              "name"=> "Pão de Açúcar",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706422,
              "name"=> "Pariconha",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706448,
              "name"=> "Paripueira",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706505,
              "name"=> "Passo de Camaragibe",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706604,
              "name"=> "Paulo Jacinto",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706703,
              "name"=> "Penedo",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706802,
              "name"=> "Piaçabuçu",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2706901,
              "name"=> "Pilar",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707008,
              "name"=> "Pindoba",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707107,
              "name"=> "Piranhas",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707206,
              "name"=> "Poço das Trincheiras",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707305,
              "name"=> "Porto Calvo",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707404,
              "name"=> "Porto de Pedras",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707503,
              "name"=> "Porto Real do Colégio",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707602,
              "name"=> "Quebrangulo",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707701,
              "name"=> "Rio Largo",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707800,
              "name"=> "Roteiro",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2707909,
              "name"=> "Santa Luzia do Norte",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708006,
              "name"=> "Santana do Ipanema",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708105,
              "name"=> "Santana do Mundaú",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708204,
              "name"=> "São Brás",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708303,
              "name"=> "São José da Laje",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708402,
              "name"=> "São José da Tapera",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708501,
              "name"=> "São Luís do Quitunde",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708600,
              "name"=> "São Miguel dos Campos",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708709,
              "name"=> "São Miguel dos Milagres",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708808,
              "name"=> "São Sebastião",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708907,
              "name"=> "Satuba",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2708956,
              "name"=> "Senador Rui Palmeira",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709004,
              "name"=> "Tanque d`Arca",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709103,
              "name"=> "Taquarana",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709152,
              "name"=> "Teotônio Vilela",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709202,
              "name"=> "Traipu",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709301,
              "name"=> "União dos Palmares",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2709400,
              "name"=> "Viçosa",
              "brazilstate_id"=> 27
            ],
            [
              "id"=> 2800100,
              "name"=> "Amparo de São Francisco",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800209,
              "name"=> "Aquidabã",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800308,
              "name"=> "Aracaju",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800407,
              "name"=> "Arauá",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800506,
              "name"=> "Areia Branca",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800605,
              "name"=> "Barra dos Coqueiros",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800670,
              "name"=> "Boquim",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2800704,
              "name"=> "Brejo Grande",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801009,
              "name"=> "Campo do Brito",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801108,
              "name"=> "Canhoba",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801207,
              "name"=> "Canindé de São Francisco",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801306,
              "name"=> "Capela",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801405,
              "name"=> "Carira",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801504,
              "name"=> "Carmópolis",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801603,
              "name"=> "Cedro de São João",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801702,
              "name"=> "Cristinápolis",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2801900,
              "name"=> "Cumbe",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802007,
              "name"=> "Divina Pastora",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802106,
              "name"=> "Estância",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802205,
              "name"=> "Feira Nova",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802304,
              "name"=> "Frei Paulo",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802403,
              "name"=> "Gararu",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802502,
              "name"=> "General Maynard",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802601,
              "name"=> "Gracho Cardoso",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802700,
              "name"=> "Ilha das Flores",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802809,
              "name"=> "Indiaroba",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2802908,
              "name"=> "Itabaiana",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803005,
              "name"=> "Itabaianinha",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803104,
              "name"=> "Itabi",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803203,
              "name"=> "Itaporanga d`Ajuda",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803302,
              "name"=> "Japaratuba",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803401,
              "name"=> "Japoatã",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803500,
              "name"=> "Lagarto",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803609,
              "name"=> "Laranjeiras",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803708,
              "name"=> "Macambira",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803807,
              "name"=> "Malhada dos Bois",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2803906,
              "name"=> "Malhador",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804003,
              "name"=> "Maruim",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804102,
              "name"=> "Moita Bonita",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804201,
              "name"=> "Monte Alegre de Sergipe",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804300,
              "name"=> "Muribeca",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804409,
              "name"=> "Neópolis",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804458,
              "name"=> "Nossa Senhora Aparecida",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804508,
              "name"=> "Nossa Senhora da Glória",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804607,
              "name"=> "Nossa Senhora das Dores",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804706,
              "name"=> "Nossa Senhora de Lourdes",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804805,
              "name"=> "Nossa Senhora do Socorro",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2804904,
              "name"=> "Pacatuba",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805000,
              "name"=> "Pedra Mole",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805109,
              "name"=> "Pedrinhas",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805208,
              "name"=> "Pinhão",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805307,
              "name"=> "Pirambu",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805406,
              "name"=> "Poço Redondo",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805505,
              "name"=> "Poço Verde",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805604,
              "name"=> "Porto da Folha",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805703,
              "name"=> "Propriá",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805802,
              "name"=> "Riachão do Dantas",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2805901,
              "name"=> "Riachuelo",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806008,
              "name"=> "Ribeirópolis",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806107,
              "name"=> "Rosário do Catete",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806206,
              "name"=> "Salgado",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806305,
              "name"=> "Santa Luzia do Itanhy",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806404,
              "name"=> "Santana do São Francisco",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806503,
              "name"=> "Santa Rosa de Lima",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806602,
              "name"=> "Santo Amaro das Brotas",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806701,
              "name"=> "São Cristóvão",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806800,
              "name"=> "São Domingos",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2806909,
              "name"=> "São Francisco",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807006,
              "name"=> "São Miguel do Aleixo",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807105,
              "name"=> "Simão Dias",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807204,
              "name"=> "Siriri",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807303,
              "name"=> "Telha",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807402,
              "name"=> "Tobias Barreto",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807501,
              "name"=> "Tomar do Geru",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2807600,
              "name"=> "Umbaúba",
              "brazilstate_id"=> 28
            ],
            [
              "id"=> 2900108,
              "name"=> "Abaíra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900207,
              "name"=> "Abaré",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900306,
              "name"=> "Acajutiba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900355,
              "name"=> "Adustina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900405,
              "name"=> "Água Fria",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900504,
              "name"=> "Érico Cardoso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900603,
              "name"=> "Aiquara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900702,
              "name"=> "Alagoinhas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900801,
              "name"=> "Alcobaça",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2900900,
              "name"=> "Almadina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901007,
              "name"=> "Amargosa",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901106,
              "name"=> "Amélia Rodrigues",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901155,
              "name"=> "América Dourada",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901205,
              "name"=> "Anagé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901304,
              "name"=> "Andaraí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901353,
              "name"=> "Andorinha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901403,
              "name"=> "Angical",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901502,
              "name"=> "Anguera",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901601,
              "name"=> "Antas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901700,
              "name"=> "Antônio Cardoso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901809,
              "name"=> "Antônio Gonçalves",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901908,
              "name"=> "Aporá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2901957,
              "name"=> "Apuarema",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902005,
              "name"=> "Aracatu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902054,
              "name"=> "Araças",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902104,
              "name"=> "Araci",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902203,
              "name"=> "Aramari",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902252,
              "name"=> "Arataca",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902302,
              "name"=> "Aratuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902401,
              "name"=> "Aurelino Leal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902500,
              "name"=> "Baianópolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902609,
              "name"=> "Baixa Grande",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902658,
              "name"=> "Banzaê",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902708,
              "name"=> "Barra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902807,
              "name"=> "Barra da Estiva",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2902906,
              "name"=> "Barra do Choça",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903003,
              "name"=> "Barra do Mendes",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903102,
              "name"=> "Barra do Rocha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903201,
              "name"=> "Barreiras",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903235,
              "name"=> "Barro Alto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903276,
              "name"=> "Barrocas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903300,
              "name"=> "Barro Preto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903409,
              "name"=> "Belmonte",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903508,
              "name"=> "Belo Campo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903607,
              "name"=> "Biritinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903706,
              "name"=> "Boa Nova",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903805,
              "name"=> "Boa Vista do Tupim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903904,
              "name"=> "Bom Jesus da Lapa",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2903953,
              "name"=> "Bom Jesus da Serra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904001,
              "name"=> "Boninal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904050,
              "name"=> "Bonito",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904100,
              "name"=> "Boquira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904209,
              "name"=> "Botuporã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904308,
              "name"=> "Brejões",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904407,
              "name"=> "Brejolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904506,
              "name"=> "Brotas de Macaúbas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904605,
              "name"=> "Brumado",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904704,
              "name"=> "Buerarema",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904753,
              "name"=> "Buritirama",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904803,
              "name"=> "Caatiba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904852,
              "name"=> "Cabaceiras do Paraguaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2904902,
              "name"=> "Cachoeira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905008,
              "name"=> "Caculé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905107,
              "name"=> "Caém",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905156,
              "name"=> "Caetanos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905206,
              "name"=> "Caetité",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905305,
              "name"=> "Cafarnaum",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905404,
              "name"=> "Cairu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905503,
              "name"=> "Caldeirão Grande",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905602,
              "name"=> "Camacan",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905701,
              "name"=> "Camaçari",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905800,
              "name"=> "Camamu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2905909,
              "name"=> "Campo Alegre de Lourdes",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906006,
              "name"=> "Campo Formoso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906105,
              "name"=> "Canápolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906204,
              "name"=> "Canarana",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906303,
              "name"=> "Canavieiras",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906402,
              "name"=> "Candeal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906501,
              "name"=> "Candeias",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906600,
              "name"=> "Candiba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906709,
              "name"=> "Cândido Sales",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906808,
              "name"=> "Cansanção",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906824,
              "name"=> "Canudos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906857,
              "name"=> "Capela do Alto Alegre",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906873,
              "name"=> "Capim Grosso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906899,
              "name"=> "Caraíbas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2906907,
              "name"=> "Caravelas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907004,
              "name"=> "Cardeal da Silva",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907103,
              "name"=> "Carinhanha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907202,
              "name"=> "Casa Nova",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907301,
              "name"=> "Castro Alves",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907400,
              "name"=> "Catolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907509,
              "name"=> "Catu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907558,
              "name"=> "Caturama",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907608,
              "name"=> "Central",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907707,
              "name"=> "Chorrochó",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907806,
              "name"=> "Cícero Dantas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2907905,
              "name"=> "Cipó",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908002,
              "name"=> "Coaraci",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908101,
              "name"=> "Cocos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908200,
              "name"=> "Conceição da Feira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908309,
              "name"=> "Conceição do Almeida",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908408,
              "name"=> "Conceição do Coité",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908507,
              "name"=> "Conceição do Jacuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908606,
              "name"=> "Conde",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908705,
              "name"=> "Condeúba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908804,
              "name"=> "Contendas do Sincorá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2908903,
              "name"=> "Coração de Maria",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909000,
              "name"=> "Cordeiros",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909109,
              "name"=> "Coribe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909208,
              "name"=> "Coronel João Sá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909307,
              "name"=> "Correntina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909406,
              "name"=> "Cotegipe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909505,
              "name"=> "Cravolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909604,
              "name"=> "Crisópolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909703,
              "name"=> "Cristópolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909802,
              "name"=> "Cruz das Almas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2909901,
              "name"=> "Curaçá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910008,
              "name"=> "Dário Meira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910057,
              "name"=> "Dias d`Ávila",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910107,
              "name"=> "Dom Basílio",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910206,
              "name"=> "Dom Macedo Costa",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910305,
              "name"=> "Elísio Medrado",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910404,
              "name"=> "Encruzilhada",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910503,
              "name"=> "Entre Rios",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910602,
              "name"=> "Esplanada",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910701,
              "name"=> "Euclides da Cunha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910727,
              "name"=> "Eunápolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910750,
              "name"=> "Fátima",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910776,
              "name"=> "Feira da Mata",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910800,
              "name"=> "Feira de Santana",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910859,
              "name"=> "Filadélfia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2910909,
              "name"=> "Firmino Alves",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911006,
              "name"=> "Floresta Azul",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911105,
              "name"=> "Formosa do Rio Preto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911204,
              "name"=> "Gandu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911253,
              "name"=> "Gavião",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911303,
              "name"=> "Gentio do Ouro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911402,
              "name"=> "Glória",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911501,
              "name"=> "Gongogi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911600,
              "name"=> "Governador Mangabeira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911659,
              "name"=> "Guajeru",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911709,
              "name"=> "Guanambi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911808,
              "name"=> "Guaratinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911857,
              "name"=> "Heliópolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2911907,
              "name"=> "Iaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912004,
              "name"=> "Ibiassucê",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912103,
              "name"=> "Ibicaraí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912202,
              "name"=> "Ibicoara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912301,
              "name"=> "Ibicuí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912400,
              "name"=> "Ibipeba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912509,
              "name"=> "Ibipitanga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912608,
              "name"=> "Ibiquera",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912707,
              "name"=> "Ibirapitanga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912806,
              "name"=> "Ibirapuã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2912905,
              "name"=> "Ibirataia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913002,
              "name"=> "Ibitiara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913101,
              "name"=> "Ibititá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913200,
              "name"=> "Ibotirama",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913309,
              "name"=> "Ichu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913408,
              "name"=> "Igaporã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913457,
              "name"=> "Igrapiúna",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913507,
              "name"=> "Iguaí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913606,
              "name"=> "Ilhéus",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913705,
              "name"=> "Inhambupe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913804,
              "name"=> "Ipecaetá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2913903,
              "name"=> "Ipiaú",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914000,
              "name"=> "Ipirá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914109,
              "name"=> "Ipupiara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914208,
              "name"=> "Irajuba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914307,
              "name"=> "Iramaia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914406,
              "name"=> "Iraquara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914505,
              "name"=> "Irará",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914604,
              "name"=> "Irecê",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914653,
              "name"=> "Itabela",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914703,
              "name"=> "Itaberaba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914802,
              "name"=> "Itabuna",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2914901,
              "name"=> "Itacaré",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915007,
              "name"=> "Itaeté",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915106,
              "name"=> "Itagi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915205,
              "name"=> "Itagibá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915304,
              "name"=> "Itagimirim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915353,
              "name"=> "Itaguaçu da Bahia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915403,
              "name"=> "Itaju do Colônia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915502,
              "name"=> "Itajuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915601,
              "name"=> "Itamaraju",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915700,
              "name"=> "Itamari",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915809,
              "name"=> "Itambé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2915908,
              "name"=> "Itanagra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916005,
              "name"=> "Itanhém",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916104,
              "name"=> "Itaparica",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916203,
              "name"=> "Itapé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916302,
              "name"=> "Itapebi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916401,
              "name"=> "Itapetinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916500,
              "name"=> "Itapicuru",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916609,
              "name"=> "Itapitanga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916708,
              "name"=> "Itaquara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916807,
              "name"=> "Itarantim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916856,
              "name"=> "Itatim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2916906,
              "name"=> "Itiruçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917003,
              "name"=> "Itiúba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917102,
              "name"=> "Itororó",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917201,
              "name"=> "Ituaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917300,
              "name"=> "Ituberá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917334,
              "name"=> "Iuiú",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917359,
              "name"=> "Jaborandi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917409,
              "name"=> "Jacaraci",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917508,
              "name"=> "Jacobina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917607,
              "name"=> "Jaguaquara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917706,
              "name"=> "Jaguarari",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917805,
              "name"=> "Jaguaripe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2917904,
              "name"=> "Jandaíra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918001,
              "name"=> "Jequié",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918100,
              "name"=> "Jeremoabo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918209,
              "name"=> "Jiquiriçá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918308,
              "name"=> "Jitaúna",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918357,
              "name"=> "João Dourado",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918407,
              "name"=> "Juazeiro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918456,
              "name"=> "Jucuruçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918506,
              "name"=> "Jussara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918555,
              "name"=> "Jussari",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918605,
              "name"=> "Jussiape",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918704,
              "name"=> "Lafaiete Coutinho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918753,
              "name"=> "Lagoa Real",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918803,
              "name"=> "Laje",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2918902,
              "name"=> "Lajedão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919009,
              "name"=> "Lajedinho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919058,
              "name"=> "Lajedo do Tabocal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919108,
              "name"=> "Lamarão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919157,
              "name"=> "Lapão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919207,
              "name"=> "Lauro de Freitas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919306,
              "name"=> "Lençóis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919405,
              "name"=> "Licínio de Almeida",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919504,
              "name"=> "Livramento de Nossa Senhora",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919553,
              "name"=> "Luís Eduardo Magalhães",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919603,
              "name"=> "Macajuba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919702,
              "name"=> "Macarani",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919801,
              "name"=> "Macaúbas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919900,
              "name"=> "Macururé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919926,
              "name"=> "Madre de Deus",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2919959,
              "name"=> "Maetinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920007,
              "name"=> "Maiquinique",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920106,
              "name"=> "Mairi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920205,
              "name"=> "Malhada",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920304,
              "name"=> "Malhada de Pedras",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920403,
              "name"=> "Manoel Vitorino",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920452,
              "name"=> "Mansidão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920502,
              "name"=> "Maracás",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920601,
              "name"=> "Maragogipe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920700,
              "name"=> "Maraú",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920809,
              "name"=> "Marcionílio Souza",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2920908,
              "name"=> "Mascote",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921005,
              "name"=> "Mata de São João",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921054,
              "name"=> "Matina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921104,
              "name"=> "Medeiros Neto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921203,
              "name"=> "Miguel Calmon",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921302,
              "name"=> "Milagres",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921401,
              "name"=> "Mirangaba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921450,
              "name"=> "Mirante",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921500,
              "name"=> "Monte Santo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921609,
              "name"=> "Morpará",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921708,
              "name"=> "Morro do Chapéu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921807,
              "name"=> "Mortugaba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2921906,
              "name"=> "Mucugê",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922003,
              "name"=> "Mucuri",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922052,
              "name"=> "Mulungu do Morro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922102,
              "name"=> "Mundo Novo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922201,
              "name"=> "Muniz Ferreira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922250,
              "name"=> "Muquém de São Francisco",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922300,
              "name"=> "Muritiba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922409,
              "name"=> "Mutuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922508,
              "name"=> "Nazaré",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922607,
              "name"=> "Nilo Peçanha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922656,
              "name"=> "Nordestina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922706,
              "name"=> "Nova Canaã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922730,
              "name"=> "Nova Fátima",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922755,
              "name"=> "Nova Ibiá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922805,
              "name"=> "Nova Itarana",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922854,
              "name"=> "Nova Redenção",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2922904,
              "name"=> "Nova Soure",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923001,
              "name"=> "Nova Viçosa",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923035,
              "name"=> "Novo Horizonte",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923050,
              "name"=> "Novo Triunfo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923100,
              "name"=> "Olindina",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923209,
              "name"=> "Oliveira dos Brejinhos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923308,
              "name"=> "Ouriçangas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923357,
              "name"=> "Ourolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923407,
              "name"=> "Palmas de Monte Alto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923506,
              "name"=> "Palmeiras",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923605,
              "name"=> "Paramirim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923704,
              "name"=> "Paratinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923803,
              "name"=> "Paripiranga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2923902,
              "name"=> "Pau Brasil",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924009,
              "name"=> "Paulo Afonso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924058,
              "name"=> "Pé de Serra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924108,
              "name"=> "Pedrão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924207,
              "name"=> "Pedro Alexandre",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924306,
              "name"=> "Piatã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924405,
              "name"=> "Pilão Arcado",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924504,
              "name"=> "Pindaí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924603,
              "name"=> "Pindobaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924652,
              "name"=> "Pintadas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924678,
              "name"=> "Piraí do Norte",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924702,
              "name"=> "Piripá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924801,
              "name"=> "Piritiba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2924900,
              "name"=> "Planaltino",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925006,
              "name"=> "Planalto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925105,
              "name"=> "Poções",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925204,
              "name"=> "Pojuca",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925253,
              "name"=> "Ponto Novo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925303,
              "name"=> "Porto Seguro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925402,
              "name"=> "Potiraguá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925501,
              "name"=> "Prado",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925600,
              "name"=> "Presidente Dutra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925709,
              "name"=> "Presidente Jânio Quadros",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925758,
              "name"=> "Presidente Tancredo Neves",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925808,
              "name"=> "Queimadas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925907,
              "name"=> "Quijingue",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925931,
              "name"=> "Quixabeira",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2925956,
              "name"=> "Rafael Jambeiro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926004,
              "name"=> "Remanso",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926103,
              "name"=> "Retirolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926202,
              "name"=> "Riachão das Neves",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926301,
              "name"=> "Riachão do Jacuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926400,
              "name"=> "Riacho de Santana",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926509,
              "name"=> "Ribeira do Amparo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926608,
              "name"=> "Ribeira do Pombal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926657,
              "name"=> "Ribeirão do Largo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926707,
              "name"=> "Rio de Contas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926806,
              "name"=> "Rio do Antônio",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2926905,
              "name"=> "Rio do Pires",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927002,
              "name"=> "Rio Real",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927101,
              "name"=> "Rodelas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927200,
              "name"=> "Ruy Barbosa",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927309,
              "name"=> "Salinas da Margarida",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927408,
              "name"=> "Salvador",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927507,
              "name"=> "Santa Bárbara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927606,
              "name"=> "Santa Brígida",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927705,
              "name"=> "Santa Cruz Cabrália",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927804,
              "name"=> "Santa Cruz da Vitória",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2927903,
              "name"=> "Santa Inês",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928000,
              "name"=> "Santaluz",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928059,
              "name"=> "Santa Luzia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928109,
              "name"=> "Santa Maria da Vitória",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928208,
              "name"=> "Santana",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928307,
              "name"=> "Santanópolis",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928406,
              "name"=> "Santa Rita de Cássia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928505,
              "name"=> "Santa Teresinha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928604,
              "name"=> "Santo Amaro",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928703,
              "name"=> "Santo Antônio de Jesus",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928802,
              "name"=> "Santo Estêvão",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928901,
              "name"=> "São Desidério",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2928950,
              "name"=> "São Domingos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929008,
              "name"=> "São Félix",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929057,
              "name"=> "São Félix do Coribe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929107,
              "name"=> "São Felipe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929206,
              "name"=> "São Francisco do Conde",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929255,
              "name"=> "São Gabriel",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929305,
              "name"=> "São Gonçalo dos Campos",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929354,
              "name"=> "São José da Vitória",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929370,
              "name"=> "São José do Jacuípe",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929404,
              "name"=> "São Miguel das Matas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929503,
              "name"=> "São Sebastião do Passé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929602,
              "name"=> "Sapeaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929701,
              "name"=> "Sátiro Dias",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929750,
              "name"=> "Saubara",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929800,
              "name"=> "Saúde",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2929909,
              "name"=> "Seabra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930006,
              "name"=> "Sebastião Laranjeiras",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930105,
              "name"=> "Senhor do Bonfim",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930154,
              "name"=> "Serra do Ramalho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930204,
              "name"=> "Sento Sé",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930303,
              "name"=> "Serra Dourada",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930402,
              "name"=> "Serra Preta",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930501,
              "name"=> "Serrinha",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930600,
              "name"=> "Serrolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930709,
              "name"=> "Simões Filho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930758,
              "name"=> "Sítio do Mato",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930766,
              "name"=> "Sítio do Quinto",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930774,
              "name"=> "Sobradinho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930808,
              "name"=> "Souto Soares",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2930907,
              "name"=> "Tabocas do Brejo Velho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931004,
              "name"=> "Tanhaçu",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931053,
              "name"=> "Tanque Novo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931103,
              "name"=> "Tanquinho",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931202,
              "name"=> "Taperoá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931301,
              "name"=> "Tapiramutá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931350,
              "name"=> "Teixeira de Freitas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931400,
              "name"=> "Teodoro Sampaio",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931509,
              "name"=> "Teofilândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931608,
              "name"=> "Teolândia",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931707,
              "name"=> "Terra Nova",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931806,
              "name"=> "Tremedal",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2931905,
              "name"=> "Tucano",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932002,
              "name"=> "Uauá",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932101,
              "name"=> "Ubaíra",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932200,
              "name"=> "Ubaitaba",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932309,
              "name"=> "Ubatã",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932408,
              "name"=> "Uibaí",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932457,
              "name"=> "Umburanas",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932507,
              "name"=> "Una",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932606,
              "name"=> "Urandi",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932705,
              "name"=> "Uruçuca",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932804,
              "name"=> "Utinga",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2932903,
              "name"=> "Valença",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933000,
              "name"=> "Valente",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933059,
              "name"=> "Várzea da Roça",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933109,
              "name"=> "Várzea do Poço",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933158,
              "name"=> "Várzea Nova",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933174,
              "name"=> "Varzedo",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933208,
              "name"=> "Vera Cruz",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933257,
              "name"=> "Vereda",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933307,
              "name"=> "Vitória da Conquista",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933406,
              "name"=> "Wagner",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933455,
              "name"=> "Wanderley",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933505,
              "name"=> "Wenceslau Guimarães",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 2933604,
              "name"=> "Xique-Xique",
              "brazilstate_id"=> 29
            ],
            [
              "id"=> 3100104,
              "name"=> "Abadia dos Dourados",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100203,
              "name"=> "Abaeté",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100302,
              "name"=> "Abre Campo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100401,
              "name"=> "Acaiaca",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100500,
              "name"=> "Açucena",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100609,
              "name"=> "Água Boa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100708,
              "name"=> "Água Comprida",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100807,
              "name"=> "Aguanil",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3100906,
              "name"=> "Águas Formosas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101003,
              "name"=> "Águas Vermelhas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101102,
              "name"=> "Aimorés",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101201,
              "name"=> "Aiuruoca",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101300,
              "name"=> "Alagoa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101409,
              "name"=> "Albertina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101508,
              "name"=> "Além Paraíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101607,
              "name"=> "Alfenas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101631,
              "name"=> "Alfredo Vasconcelos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101706,
              "name"=> "Almenara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101805,
              "name"=> "Alpercata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3101904,
              "name"=> "Alpinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102001,
              "name"=> "Alterosa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102050,
              "name"=> "Alto Caparaó",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102100,
              "name"=> "Alto Rio Doce",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102209,
              "name"=> "Alvarenga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102308,
              "name"=> "Alvinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102407,
              "name"=> "Alvorada de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102506,
              "name"=> "Amparo do Serra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102605,
              "name"=> "Andradas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102704,
              "name"=> "Cachoeira de Pajeú",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102803,
              "name"=> "Andrelândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102852,
              "name"=> "Angelândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3102902,
              "name"=> "Antônio Carlos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103009,
              "name"=> "Antônio Dias",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103108,
              "name"=> "Antônio Prado de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103207,
              "name"=> "Araçaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103306,
              "name"=> "Aracitaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103405,
              "name"=> "Araçuaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103504,
              "name"=> "Araguari",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103603,
              "name"=> "Arantina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103702,
              "name"=> "Araponga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103751,
              "name"=> "Araporã",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103801,
              "name"=> "Arapuá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3103900,
              "name"=> "Araújos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104007,
              "name"=> "Araxá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104106,
              "name"=> "Arceburgo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104205,
              "name"=> "Arcos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104304,
              "name"=> "Areado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104403,
              "name"=> "Argirita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104452,
              "name"=> "Aricanduva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104502,
              "name"=> "Arinos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104601,
              "name"=> "Astolfo Dutra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104700,
              "name"=> "Ataléia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104809,
              "name"=> "Augusto de Lima",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3104908,
              "name"=> "Baependi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105004,
              "name"=> "Baldim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105103,
              "name"=> "Bambuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105202,
              "name"=> "Bandeira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105301,
              "name"=> "Bandeira do Sul",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105400,
              "name"=> "Barão de Cocais",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105509,
              "name"=> "Barão de Monte Alto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105608,
              "name"=> "Barbacena",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105707,
              "name"=> "Barra Longa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3105905,
              "name"=> "Barroso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106002,
              "name"=> "Bela Vista de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106101,
              "name"=> "Belmiro Braga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106200,
              "name"=> "Belo Horizonte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106309,
              "name"=> "Belo Oriente",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106408,
              "name"=> "Belo Vale",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106507,
              "name"=> "Berilo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106606,
              "name"=> "Bertópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106655,
              "name"=> "Berizal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106705,
              "name"=> "Betim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106804,
              "name"=> "Bias Fortes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3106903,
              "name"=> "Bicas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107000,
              "name"=> "Biquinhas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107109,
              "name"=> "Boa Esperança",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107208,
              "name"=> "Bocaina de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107307,
              "name"=> "Bocaiúva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107406,
              "name"=> "Bom Despacho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107505,
              "name"=> "Bom Jardim de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107604,
              "name"=> "Bom Jesus da Penha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107703,
              "name"=> "Bom Jesus do Amparo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107802,
              "name"=> "Bom Jesus do Galho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3107901,
              "name"=> "Bom Repouso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108008,
              "name"=> "Bom Sucesso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108107,
              "name"=> "Bonfim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108206,
              "name"=> "Bonfinópolis de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108255,
              "name"=> "Bonito de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108305,
              "name"=> "Borda da Mata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108404,
              "name"=> "Botelhos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108503,
              "name"=> "Botumirim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108552,
              "name"=> "Brasilândia de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108602,
              "name"=> "Brasília de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108701,
              "name"=> "Brás Pires",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108800,
              "name"=> "Braúnas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3108909,
              "name"=> "Brazópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109006,
              "name"=> "Brumadinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109105,
              "name"=> "Bueno Brandão",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109204,
              "name"=> "Buenópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109253,
              "name"=> "Bugre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109303,
              "name"=> "Buritis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109402,
              "name"=> "Buritizeiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109451,
              "name"=> "Cabeceira Grande",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109501,
              "name"=> "Cabo Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109600,
              "name"=> "Cachoeira da Prata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109709,
              "name"=> "Cachoeira de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109808,
              "name"=> "Cachoeira Dourada",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3109907,
              "name"=> "Caetanópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110004,
              "name"=> "Caeté",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110103,
              "name"=> "Caiana",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110202,
              "name"=> "Cajuri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110301,
              "name"=> "Caldas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110400,
              "name"=> "Camacho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110509,
              "name"=> "Camanducaia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110608,
              "name"=> "Cambuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110707,
              "name"=> "Cambuquira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110806,
              "name"=> "Campanário",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3110905,
              "name"=> "Campanha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111002,
              "name"=> "Campestre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111101,
              "name"=> "Campina Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111150,
              "name"=> "Campo Azul",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111200,
              "name"=> "Campo Belo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111309,
              "name"=> "Campo do Meio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111408,
              "name"=> "Campo Florido",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111507,
              "name"=> "Campos Altos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111606,
              "name"=> "Campos Gerais",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111705,
              "name"=> "Canaã",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111804,
              "name"=> "Canápolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3111903,
              "name"=> "Cana Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112000,
              "name"=> "Candeias",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112059,
              "name"=> "Cantagalo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112109,
              "name"=> "Caparaó",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112208,
              "name"=> "Capela Nova",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112307,
              "name"=> "Capelinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112406,
              "name"=> "Capetinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112505,
              "name"=> "Capim Branco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112604,
              "name"=> "Capinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112653,
              "name"=> "Capitão Andrade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112703,
              "name"=> "Capitão Enéas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112802,
              "name"=> "Capitólio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3112901,
              "name"=> "Caputira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113008,
              "name"=> "Caraí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113107,
              "name"=> "Caranaíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113206,
              "name"=> "Carandaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113305,
              "name"=> "Carangola",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113404,
              "name"=> "Caratinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113503,
              "name"=> "Carbonita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113602,
              "name"=> "Careaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113701,
              "name"=> "Carlos Chagas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113800,
              "name"=> "Carmésia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3113909,
              "name"=> "Carmo da Cachoeira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114006,
              "name"=> "Carmo da Mata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114105,
              "name"=> "Carmo de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114204,
              "name"=> "Carmo do Cajuru",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114303,
              "name"=> "Carmo do Paranaíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114402,
              "name"=> "Carmo do Rio Claro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114501,
              "name"=> "Carmópolis de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114550,
              "name"=> "Carneirinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114600,
              "name"=> "Carrancas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114709,
              "name"=> "Carvalhópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114808,
              "name"=> "Carvalhos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3114907,
              "name"=> "Casa Grande",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115003,
              "name"=> "Cascalho Rico",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115102,
              "name"=> "Cássia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115201,
              "name"=> "Conceição da Barra de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115300,
              "name"=> "Cataguases",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115359,
              "name"=> "Catas Altas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115409,
              "name"=> "Catas Altas da Noruega",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115458,
              "name"=> "Catuji",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115474,
              "name"=> "Catuti",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115508,
              "name"=> "Caxambu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115607,
              "name"=> "Cedro do Abaeté",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115706,
              "name"=> "Central de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115805,
              "name"=> "Centralina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3115904,
              "name"=> "Chácara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116001,
              "name"=> "Chalé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116100,
              "name"=> "Chapada do Norte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116159,
              "name"=> "Chapada Gaúcha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116209,
              "name"=> "Chiador",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116308,
              "name"=> "Cipotânea",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116407,
              "name"=> "Claraval",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116506,
              "name"=> "Claro dos Poções",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116605,
              "name"=> "Cláudio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116704,
              "name"=> "Coimbra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116803,
              "name"=> "Coluna",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3116902,
              "name"=> "Comendador Gomes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117009,
              "name"=> "Comercinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117108,
              "name"=> "Conceição da Aparecida",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117207,
              "name"=> "Conceição das Pedras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117306,
              "name"=> "Conceição das Alagoas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117405,
              "name"=> "Conceição de Ipanema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117504,
              "name"=> "Conceição do Mato Dentro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117603,
              "name"=> "Conceição do Pará",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117702,
              "name"=> "Conceição do Rio Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117801,
              "name"=> "Conceição dos Ouros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117836,
              "name"=> "Cônego Marinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117876,
              "name"=> "Confins",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3117900,
              "name"=> "Congonhal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118007,
              "name"=> "Congonhas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118106,
              "name"=> "Congonhas do Norte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118205,
              "name"=> "Conquista",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118304,
              "name"=> "Conselheiro Lafaiete",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118403,
              "name"=> "Conselheiro Pena",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118502,
              "name"=> "Consolação",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118601,
              "name"=> "Contagem",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118700,
              "name"=> "Coqueiral",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118809,
              "name"=> "Coração de Jesus",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3118908,
              "name"=> "Cordisburgo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119005,
              "name"=> "Cordislândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119104,
              "name"=> "Corinto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119203,
              "name"=> "Coroaci",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119302,
              "name"=> "Coromandel",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119401,
              "name"=> "Coronel Fabriciano",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119500,
              "name"=> "Coronel Murta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119609,
              "name"=> "Coronel Pacheco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119708,
              "name"=> "Coronel Xavier Chaves",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119807,
              "name"=> "Córrego Danta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119906,
              "name"=> "Córrego do Bom Jesus",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3119955,
              "name"=> "Córrego Fundo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120003,
              "name"=> "Córrego Novo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120102,
              "name"=> "Couto de Magalhães de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120151,
              "name"=> "Crisólita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120201,
              "name"=> "Cristais",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120300,
              "name"=> "Cristália",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120409,
              "name"=> "Cristiano Otoni",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120508,
              "name"=> "Cristina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120607,
              "name"=> "Crucilândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120706,
              "name"=> "Cruzeiro da Fortaleza",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120805,
              "name"=> "Cruzília",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120839,
              "name"=> "Cuparaque",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120870,
              "name"=> "Curral de Dentro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3120904,
              "name"=> "Curvelo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121001,
              "name"=> "Datas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121100,
              "name"=> "Delfim Moreira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121209,
              "name"=> "Delfinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121258,
              "name"=> "Delta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121308,
              "name"=> "Descoberto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121407,
              "name"=> "Desterro de Entre Rios",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121506,
              "name"=> "Desterro do Melo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121605,
              "name"=> "Diamantina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121704,
              "name"=> "Diogo de Vasconcelos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121803,
              "name"=> "Dionísio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3121902,
              "name"=> "Divinésia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122009,
              "name"=> "Divino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122108,
              "name"=> "Divino das Laranjeiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122207,
              "name"=> "Divinolândia de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122306,
              "name"=> "Divinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122355,
              "name"=> "Divisa Alegre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122405,
              "name"=> "Divisa Nova",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122454,
              "name"=> "Divisópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122470,
              "name"=> "Dom Bosco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122504,
              "name"=> "Dom Cavati",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122603,
              "name"=> "Dom Joaquim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122702,
              "name"=> "Dom Silvério",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122801,
              "name"=> "Dom Viçoso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3122900,
              "name"=> "Dona Eusébia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123007,
              "name"=> "Dores de Campos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123106,
              "name"=> "Dores de Guanhães",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123205,
              "name"=> "Dores do Indaiá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123304,
              "name"=> "Dores do Turvo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123403,
              "name"=> "Doresópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123502,
              "name"=> "Douradoquara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123528,
              "name"=> "Durandé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123601,
              "name"=> "Elói Mendes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123700,
              "name"=> "Engenheiro Caldas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123809,
              "name"=> "Engenheiro Navarro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123858,
              "name"=> "Entre Folhas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3123908,
              "name"=> "Entre Rios de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124005,
              "name"=> "Ervália",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124104,
              "name"=> "Esmeraldas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124203,
              "name"=> "Espera Feliz",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124302,
              "name"=> "Espinosa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124401,
              "name"=> "Espírito Santo do Dourado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124500,
              "name"=> "Estiva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124609,
              "name"=> "Estrela Dalva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124708,
              "name"=> "Estrela do Indaiá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124807,
              "name"=> "Estrela do Sul",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3124906,
              "name"=> "Eugenópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125002,
              "name"=> "Ewbank da Câmara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125101,
              "name"=> "Extrema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125200,
              "name"=> "Fama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125309,
              "name"=> "Faria Lemos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125408,
              "name"=> "Felício dos Santos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125507,
              "name"=> "São Gonçalo do Rio Preto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125606,
              "name"=> "Felisburgo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125705,
              "name"=> "Felixlândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125804,
              "name"=> "Fernandes Tourinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125903,
              "name"=> "Ferros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3125952,
              "name"=> "Fervedouro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126000,
              "name"=> "Florestal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126109,
              "name"=> "Formiga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126208,
              "name"=> "Formoso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126307,
              "name"=> "Fortaleza de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126406,
              "name"=> "Fortuna de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126505,
              "name"=> "Francisco Badaró",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126604,
              "name"=> "Francisco Dumont",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126703,
              "name"=> "Francisco Sá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126752,
              "name"=> "Franciscópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126802,
              "name"=> "Frei Gaspar",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126901,
              "name"=> "Frei Inocêncio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3126950,
              "name"=> "Frei Lagonegro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127008,
              "name"=> "Fronteira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127057,
              "name"=> "Fronteira dos Vales",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127073,
              "name"=> "Fruta de Leite",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127107,
              "name"=> "Frutal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127206,
              "name"=> "Funilândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127305,
              "name"=> "Galiléia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127339,
              "name"=> "Gameleiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127354,
              "name"=> "Glaucilândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127370,
              "name"=> "Goiabeira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127388,
              "name"=> "Goianá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127404,
              "name"=> "Gonçalves",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127503,
              "name"=> "Gonzaga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127602,
              "name"=> "Gouveia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127701,
              "name"=> "Governador Valadares",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127800,
              "name"=> "Grão Mogol",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3127909,
              "name"=> "Grupiara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128006,
              "name"=> "Guanhães",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128105,
              "name"=> "Guapé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128204,
              "name"=> "Guaraciaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128253,
              "name"=> "Guaraciama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128303,
              "name"=> "Guaranésia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128402,
              "name"=> "Guarani",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128501,
              "name"=> "Guarará",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128600,
              "name"=> "Guarda-Mor",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128709,
              "name"=> "Guaxupé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128808,
              "name"=> "Guidoval",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3128907,
              "name"=> "Guimarânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129004,
              "name"=> "Guiricema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129103,
              "name"=> "Gurinhatã",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129202,
              "name"=> "Heliodora",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129301,
              "name"=> "Iapu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129400,
              "name"=> "Ibertioga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129509,
              "name"=> "Ibiá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129608,
              "name"=> "Ibiaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129657,
              "name"=> "Ibiracatu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129707,
              "name"=> "Ibiraci",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129806,
              "name"=> "Ibirité",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3129905,
              "name"=> "Ibitiúra de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130002,
              "name"=> "Ibituruna",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130051,
              "name"=> "Icaraí de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130101,
              "name"=> "Igarapé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130200,
              "name"=> "Igaratinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130309,
              "name"=> "Iguatama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130408,
              "name"=> "Ijaci",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130507,
              "name"=> "Ilicínea",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130556,
              "name"=> "Imbé de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130606,
              "name"=> "Inconfidentes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130655,
              "name"=> "Indaiabira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130705,
              "name"=> "Indianópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130804,
              "name"=> "Ingaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3130903,
              "name"=> "Inhapim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131000,
              "name"=> "Inhaúma",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131109,
              "name"=> "Inimutaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131158,
              "name"=> "Ipaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131208,
              "name"=> "Ipanema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131307,
              "name"=> "Ipatinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131406,
              "name"=> "Ipiaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131505,
              "name"=> "Ipuiúna",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131604,
              "name"=> "Iraí de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131703,
              "name"=> "Itabira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131802,
              "name"=> "Itabirinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3131901,
              "name"=> "Itabirito",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132008,
              "name"=> "Itacambira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132107,
              "name"=> "Itacarambi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132206,
              "name"=> "Itaguara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132305,
              "name"=> "Itaipé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132404,
              "name"=> "Itajubá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132503,
              "name"=> "Itamarandiba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132602,
              "name"=> "Itamarati de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132701,
              "name"=> "Itambacuri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132800,
              "name"=> "Itambé do Mato Dentro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3132909,
              "name"=> "Itamogi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133006,
              "name"=> "Itamonte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133105,
              "name"=> "Itanhandu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133204,
              "name"=> "Itanhomi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133303,
              "name"=> "Itaobim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133402,
              "name"=> "Itapagipe",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133501,
              "name"=> "Itapecerica",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133600,
              "name"=> "Itapeva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133709,
              "name"=> "Itatiaiuçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133758,
              "name"=> "Itaú de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133808,
              "name"=> "Itaúna",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3133907,
              "name"=> "Itaverava",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134004,
              "name"=> "Itinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134103,
              "name"=> "Itueta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134202,
              "name"=> "Ituiutaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134301,
              "name"=> "Itumirim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134400,
              "name"=> "Iturama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134509,
              "name"=> "Itutinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134608,
              "name"=> "Jaboticatubas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134707,
              "name"=> "Jacinto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134806,
              "name"=> "Jacuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3134905,
              "name"=> "Jacutinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135001,
              "name"=> "Jaguaraçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135050,
              "name"=> "Jaíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135076,
              "name"=> "Jampruca",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135100,
              "name"=> "Janaúba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135209,
              "name"=> "Januária",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135308,
              "name"=> "Japaraíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135357,
              "name"=> "Japonvar",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135407,
              "name"=> "Jeceaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135456,
              "name"=> "Jenipapo de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135506,
              "name"=> "Jequeri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135605,
              "name"=> "Jequitaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135704,
              "name"=> "Jequitibá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135803,
              "name"=> "Jequitinhonha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3135902,
              "name"=> "Jesuânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136009,
              "name"=> "Joaíma",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136108,
              "name"=> "Joanésia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136207,
              "name"=> "João Monlevade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136306,
              "name"=> "João Pinheiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136405,
              "name"=> "Joaquim Felício",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136504,
              "name"=> "Jordânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136520,
              "name"=> "José Gonçalves de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136553,
              "name"=> "José Raydan",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136579,
              "name"=> "Josenópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136603,
              "name"=> "Nova União",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136652,
              "name"=> "Juatuba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136702,
              "name"=> "Juiz de Fora",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136801,
              "name"=> "Juramento",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136900,
              "name"=> "Juruaia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3136959,
              "name"=> "Juvenília",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137007,
              "name"=> "Ladainha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137106,
              "name"=> "Lagamar",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137205,
              "name"=> "Lagoa da Prata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137304,
              "name"=> "Lagoa dos Patos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137403,
              "name"=> "Lagoa Dourada",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137502,
              "name"=> "Lagoa Formosa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137536,
              "name"=> "Lagoa Grande",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137601,
              "name"=> "Lagoa Santa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137700,
              "name"=> "Lajinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137809,
              "name"=> "Lambari",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3137908,
              "name"=> "Lamim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138005,
              "name"=> "Laranjal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138104,
              "name"=> "Lassance",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138203,
              "name"=> "Lavras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138302,
              "name"=> "Leandro Ferreira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138351,
              "name"=> "Leme do Prado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138401,
              "name"=> "Leopoldina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138500,
              "name"=> "Liberdade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138609,
              "name"=> "Lima Duarte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138625,
              "name"=> "Limeira do Oeste",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138658,
              "name"=> "Lontra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138674,
              "name"=> "Luisburgo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138682,
              "name"=> "Luislândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138708,
              "name"=> "Luminárias",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138807,
              "name"=> "Luz",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3138906,
              "name"=> "Machacalis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139003,
              "name"=> "Machado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139102,
              "name"=> "Madre de Deus de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139201,
              "name"=> "Malacacheta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139250,
              "name"=> "Mamonas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139300,
              "name"=> "Manga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139409,
              "name"=> "Manhuaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139508,
              "name"=> "Manhumirim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139607,
              "name"=> "Mantena",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139706,
              "name"=> "Maravilhas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139805,
              "name"=> "Mar de Espanha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3139904,
              "name"=> "Maria da Fé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140001,
              "name"=> "Mariana",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140100,
              "name"=> "Marilac",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140159,
              "name"=> "Mário Campos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140209,
              "name"=> "Maripá de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140308,
              "name"=> "Marliéria",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140407,
              "name"=> "Marmelópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140506,
              "name"=> "Martinho Campos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140530,
              "name"=> "Martins Soares",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140555,
              "name"=> "Mata Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140605,
              "name"=> "Materlândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140704,
              "name"=> "Mateus Leme",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140803,
              "name"=> "Matias Barbosa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140852,
              "name"=> "Matias Cardoso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3140902,
              "name"=> "Matipó",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141009,
              "name"=> "Mato Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141108,
              "name"=> "Matozinhos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141207,
              "name"=> "Matutina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141306,
              "name"=> "Medeiros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141405,
              "name"=> "Medina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141504,
              "name"=> "Mendes Pimentel",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141603,
              "name"=> "Mercês",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141702,
              "name"=> "Mesquita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141801,
              "name"=> "Minas Novas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3141900,
              "name"=> "Minduri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142007,
              "name"=> "Mirabela",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142106,
              "name"=> "Miradouro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142205,
              "name"=> "Miraí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142254,
              "name"=> "Miravânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142304,
              "name"=> "Moeda",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142403,
              "name"=> "Moema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142502,
              "name"=> "Monjolos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142601,
              "name"=> "Monsenhor Paulo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142700,
              "name"=> "Montalvânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142809,
              "name"=> "Monte Alegre de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3142908,
              "name"=> "Monte Azul",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143005,
              "name"=> "Monte Belo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143104,
              "name"=> "Monte Carmelo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143153,
              "name"=> "Monte Formoso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143203,
              "name"=> "Monte Santo de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143302,
              "name"=> "Montes Claros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143401,
              "name"=> "Monte Sião",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143450,
              "name"=> "Montezuma",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143500,
              "name"=> "Morada Nova de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143609,
              "name"=> "Morro da Garça",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143708,
              "name"=> "Morro do Pilar",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143807,
              "name"=> "Munhoz",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3143906,
              "name"=> "Muriaé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144003,
              "name"=> "Mutum",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144102,
              "name"=> "Muzambinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144201,
              "name"=> "Nacip Raydan",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144300,
              "name"=> "Nanuque",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144359,
              "name"=> "Naque",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144375,
              "name"=> "Natalândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144409,
              "name"=> "Natércia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144508,
              "name"=> "Nazareno",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144607,
              "name"=> "Nepomuceno",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144656,
              "name"=> "Ninheira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144672,
              "name"=> "Nova Belém",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144706,
              "name"=> "Nova Era",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144805,
              "name"=> "Nova Lima",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3144904,
              "name"=> "Nova Módica",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145000,
              "name"=> "Nova Ponte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145059,
              "name"=> "Nova Porteirinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145109,
              "name"=> "Nova Resende",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145208,
              "name"=> "Nova Serrana",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145307,
              "name"=> "Novo Cruzeiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145356,
              "name"=> "Novo Oriente de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145372,
              "name"=> "Novorizonte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145406,
              "name"=> "Olaria",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145455,
              "name"=> "Olhos-d`Água",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145505,
              "name"=> "Olímpio Noronha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145604,
              "name"=> "Oliveira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145703,
              "name"=> "Oliveira Fortes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145802,
              "name"=> "Onça de Pitangui",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145851,
              "name"=> "Oratórios",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145877,
              "name"=> "Orizânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3145901,
              "name"=> "Ouro Branco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146008,
              "name"=> "Ouro Fino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146107,
              "name"=> "Ouro Preto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146206,
              "name"=> "Ouro Verde de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146255,
              "name"=> "Padre Carvalho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146305,
              "name"=> "Padre Paraíso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146404,
              "name"=> "Paineiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146503,
              "name"=> "Pains",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146552,
              "name"=> "Pai Pedro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146602,
              "name"=> "Paiva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146701,
              "name"=> "Palma",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146750,
              "name"=> "Palmópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3146909,
              "name"=> "Papagaios",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147006,
              "name"=> "Paracatu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147105,
              "name"=> "Pará de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147204,
              "name"=> "Paraguaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147303,
              "name"=> "Paraisópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147402,
              "name"=> "Paraopeba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147501,
              "name"=> "Passabém",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147600,
              "name"=> "Passa Quatro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147709,
              "name"=> "Passa Tempo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147808,
              "name"=> "Passa-Vinte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147907,
              "name"=> "Passos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3147956,
              "name"=> "Patis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148004,
              "name"=> "Patos de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148103,
              "name"=> "Patrocínio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148202,
              "name"=> "Patrocínio do Muriaé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148301,
              "name"=> "Paula Cândido",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148400,
              "name"=> "Paulistas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148509,
              "name"=> "Pavão",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148608,
              "name"=> "Peçanha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148707,
              "name"=> "Pedra Azul",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148756,
              "name"=> "Pedra Bonita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148806,
              "name"=> "Pedra do Anta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3148905,
              "name"=> "Pedra do Indaiá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149002,
              "name"=> "Pedra Dourada",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149101,
              "name"=> "Pedralva",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149150,
              "name"=> "Pedras de Maria da Cruz",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149200,
              "name"=> "Pedrinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149309,
              "name"=> "Pedro Leopoldo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149408,
              "name"=> "Pedro Teixeira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149507,
              "name"=> "Pequeri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149606,
              "name"=> "Pequi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149705,
              "name"=> "Perdigão",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149804,
              "name"=> "Perdizes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149903,
              "name"=> "Perdões",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3149952,
              "name"=> "Periquito",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150000,
              "name"=> "Pescador",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150109,
              "name"=> "Piau",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150158,
              "name"=> "Piedade de Caratinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150208,
              "name"=> "Piedade de Ponte Nova",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150307,
              "name"=> "Piedade do Rio Grande",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150406,
              "name"=> "Piedade dos Gerais",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150505,
              "name"=> "Pimenta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150539,
              "name"=> "Pingo-d`Água",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150570,
              "name"=> "Pintópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150604,
              "name"=> "Piracema",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150703,
              "name"=> "Pirajuba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150802,
              "name"=> "Piranga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3150901,
              "name"=> "Piranguçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151008,
              "name"=> "Piranguinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151107,
              "name"=> "Pirapetinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151206,
              "name"=> "Pirapora",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151305,
              "name"=> "Piraúba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151404,
              "name"=> "Pitangui",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151503,
              "name"=> "Piumhi",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151602,
              "name"=> "Planura",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151701,
              "name"=> "Poço Fundo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151800,
              "name"=> "Poços de Caldas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3151909,
              "name"=> "Pocrane",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152006,
              "name"=> "Pompéu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152105,
              "name"=> "Ponte Nova",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152131,
              "name"=> "Ponto Chique",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152170,
              "name"=> "Ponto dos Volantes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152204,
              "name"=> "Porteirinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152303,
              "name"=> "Porto Firme",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152402,
              "name"=> "Poté",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152501,
              "name"=> "Pouso Alegre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152600,
              "name"=> "Pouso Alto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152709,
              "name"=> "Prados",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152808,
              "name"=> "Prata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3152907,
              "name"=> "Pratápolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153004,
              "name"=> "Pratinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153103,
              "name"=> "Presidente Bernardes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153202,
              "name"=> "Presidente Juscelino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153301,
              "name"=> "Presidente Kubitschek",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153400,
              "name"=> "Presidente Olegário",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153509,
              "name"=> "Alto Jequitibá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153608,
              "name"=> "Prudente de Morais",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153707,
              "name"=> "Quartel Geral",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153806,
              "name"=> "Queluzito",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3153905,
              "name"=> "Raposos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154002,
              "name"=> "Raul Soares",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154101,
              "name"=> "Recreio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154150,
              "name"=> "Reduto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154200,
              "name"=> "Resende Costa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154309,
              "name"=> "Resplendor",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154408,
              "name"=> "Ressaquinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154457,
              "name"=> "Riachinho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154507,
              "name"=> "Riacho dos Machados",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154606,
              "name"=> "Ribeirão das Neves",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154705,
              "name"=> "Ribeirão Vermelho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154804,
              "name"=> "Rio Acima",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3154903,
              "name"=> "Rio Casca",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155009,
              "name"=> "Rio Doce",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155108,
              "name"=> "Rio do Prado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155207,
              "name"=> "Rio Espera",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155306,
              "name"=> "Rio Manso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155405,
              "name"=> "Rio Novo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155504,
              "name"=> "Rio Paranaíba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155603,
              "name"=> "Rio Pardo de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155702,
              "name"=> "Rio Piracicaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155801,
              "name"=> "Rio Pomba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3155900,
              "name"=> "Rio Preto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156007,
              "name"=> "Rio Vermelho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156106,
              "name"=> "Ritápolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156205,
              "name"=> "Rochedo de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156304,
              "name"=> "Rodeiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156403,
              "name"=> "Romaria",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156452,
              "name"=> "Rosário da Limeira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156502,
              "name"=> "Rubelita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156601,
              "name"=> "Rubim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156700,
              "name"=> "Sabará",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156809,
              "name"=> "Sabinópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3156908,
              "name"=> "Sacramento",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157005,
              "name"=> "Salinas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157104,
              "name"=> "Salto da Divisa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157203,
              "name"=> "Santa Bárbara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157252,
              "name"=> "Santa Bárbara do Leste",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157278,
              "name"=> "Santa Bárbara do Monte Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157302,
              "name"=> "Santa Bárbara do Tugúrio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157336,
              "name"=> "Santa Cruz de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157377,
              "name"=> "Santa Cruz de Salinas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157401,
              "name"=> "Santa Cruz do Escalvado",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157500,
              "name"=> "Santa Efigênia de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157609,
              "name"=> "Santa Fé de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157658,
              "name"=> "Santa Helena de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157708,
              "name"=> "Santa Juliana",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157807,
              "name"=> "Santa Luzia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3157906,
              "name"=> "Santa Margarida",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158003,
              "name"=> "Santa Maria de Itabira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158102,
              "name"=> "Santa Maria do Salto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158201,
              "name"=> "Santa Maria do Suaçuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158300,
              "name"=> "Santana da Vargem",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158409,
              "name"=> "Santana de Cataguases",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158508,
              "name"=> "Santana de Pirapama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158607,
              "name"=> "Santana do Deserto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158706,
              "name"=> "Santana do Garambéu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158805,
              "name"=> "Santana do Jacaré",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158904,
              "name"=> "Santana do Manhuaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3158953,
              "name"=> "Santana do Paraíso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159001,
              "name"=> "Santana do Riacho",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159100,
              "name"=> "Santana dos Montes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159209,
              "name"=> "Santa Rita de Caldas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159308,
              "name"=> "Santa Rita de Jacutinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159357,
              "name"=> "Santa Rita de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159407,
              "name"=> "Santa Rita de Ibitipoca",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159506,
              "name"=> "Santa Rita do Itueto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159605,
              "name"=> "Santa Rita do Sapucaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159704,
              "name"=> "Santa Rosa da Serra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159803,
              "name"=> "Santa Vitória",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3159902,
              "name"=> "Santo Antônio do Amparo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160009,
              "name"=> "Santo Antônio do Aventureiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160108,
              "name"=> "Santo Antônio do Grama",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160207,
              "name"=> "Santo Antônio do Itambé",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160306,
              "name"=> "Santo Antônio do Jacinto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160405,
              "name"=> "Santo Antônio do Monte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160454,
              "name"=> "Santo Antônio do Retiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160504,
              "name"=> "Santo Antônio do Rio Abaixo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160603,
              "name"=> "Santo Hipólito",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160702,
              "name"=> "Santos Dumont",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160801,
              "name"=> "São Bento Abade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160900,
              "name"=> "São Brás do Suaçuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3160959,
              "name"=> "São Domingos das Dores",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161007,
              "name"=> "São Domingos do Prata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161056,
              "name"=> "São Félix de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161106,
              "name"=> "São Francisco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161205,
              "name"=> "São Francisco de Paula",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161304,
              "name"=> "São Francisco de Sales",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161403,
              "name"=> "São Francisco do Glória",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161502,
              "name"=> "São Geraldo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161601,
              "name"=> "São Geraldo da Piedade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161650,
              "name"=> "São Geraldo do Baixio",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161700,
              "name"=> "São Gonçalo do Abaeté",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161809,
              "name"=> "São Gonçalo do Pará",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3161908,
              "name"=> "São Gonçalo do Rio Abaixo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162005,
              "name"=> "São Gonçalo do Sapucaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162104,
              "name"=> "São Gotardo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162203,
              "name"=> "São João Batista do Glória",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162252,
              "name"=> "São João da Lagoa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162302,
              "name"=> "São João da Mata",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162401,
              "name"=> "São João da Ponte",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162450,
              "name"=> "São João das Missões",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162500,
              "name"=> "São João del Rei",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162559,
              "name"=> "São João do Manhuaçu",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162575,
              "name"=> "São João do Manteninha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162609,
              "name"=> "São João do Oriente",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162658,
              "name"=> "São João do Pacuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162708,
              "name"=> "São João do Paraíso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162807,
              "name"=> "São João Evangelista",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162906,
              "name"=> "São João Nepomuceno",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162922,
              "name"=> "São Joaquim de Bicas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162948,
              "name"=> "São José da Barra",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3162955,
              "name"=> "São José da Lapa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163003,
              "name"=> "São José da Safira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163102,
              "name"=> "São José da Varginha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163201,
              "name"=> "São José do Alegre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163300,
              "name"=> "São José do Divino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163409,
              "name"=> "São José do Goiabal",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163508,
              "name"=> "São José do Jacuri",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163607,
              "name"=> "São José do Mantimento",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163706,
              "name"=> "São Lourenço",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163805,
              "name"=> "São Miguel do Anta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3163904,
              "name"=> "São Pedro da União",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164001,
              "name"=> "São Pedro dos Ferros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164100,
              "name"=> "São Pedro do Suaçuí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164209,
              "name"=> "São Romão",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164308,
              "name"=> "São Roque de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164407,
              "name"=> "São Sebastião da Bela Vista",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164431,
              "name"=> "São Sebastião da Vargem Alegre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164472,
              "name"=> "São Sebastião do Anta",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164506,
              "name"=> "São Sebastião do Maranhão",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164605,
              "name"=> "São Sebastião do Oeste",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164704,
              "name"=> "São Sebastião do Paraíso",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164803,
              "name"=> "São Sebastião do Rio Preto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3164902,
              "name"=> "São Sebastião do Rio Verde",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165008,
              "name"=> "São Tiago",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165107,
              "name"=> "São Tomás de Aquino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165206,
              "name"=> "São Thomé das Letras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165305,
              "name"=> "São Vicente de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165404,
              "name"=> "Sapucaí-Mirim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165503,
              "name"=> "Sardoá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165537,
              "name"=> "Sarzedo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165552,
              "name"=> "Setubinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165560,
              "name"=> "Sem-Peixe",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165578,
              "name"=> "Senador Amaral",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165602,
              "name"=> "Senador Cortes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165701,
              "name"=> "Senador Firmino",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165800,
              "name"=> "Senador José Bento",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3165909,
              "name"=> "Senador Modestino Gonçalves",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166006,
              "name"=> "Senhora de Oliveira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166105,
              "name"=> "Senhora do Porto",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166204,
              "name"=> "Senhora dos Remédios",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166303,
              "name"=> "Sericita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166402,
              "name"=> "Seritinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166501,
              "name"=> "Serra Azul de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166600,
              "name"=> "Serra da Saudade",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166709,
              "name"=> "Serra dos Aimorés",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166808,
              "name"=> "Serra do Salitre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166907,
              "name"=> "Serrania",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3166956,
              "name"=> "Serranópolis de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167004,
              "name"=> "Serranos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167103,
              "name"=> "Serro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167202,
              "name"=> "Sete Lagoas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167301,
              "name"=> "Silveirânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167400,
              "name"=> "Silvianópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167509,
              "name"=> "Simão Pereira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167608,
              "name"=> "Simonésia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167707,
              "name"=> "Sobrália",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167806,
              "name"=> "Soledade de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3167905,
              "name"=> "Tabuleiro",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168002,
              "name"=> "Taiobeiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168051,
              "name"=> "Taparuba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168101,
              "name"=> "Tapira",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168200,
              "name"=> "Tapiraí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168309,
              "name"=> "Taquaraçu de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168408,
              "name"=> "Tarumirim",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168507,
              "name"=> "Teixeiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168606,
              "name"=> "Teófilo Otoni",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168705,
              "name"=> "Timóteo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168804,
              "name"=> "Tiradentes",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3168903,
              "name"=> "Tiros",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169000,
              "name"=> "Tocantins",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169059,
              "name"=> "Tocos do Moji",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169109,
              "name"=> "Toledo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169208,
              "name"=> "Tombos",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169307,
              "name"=> "Três Corações",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169356,
              "name"=> "Três Marias",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169406,
              "name"=> "Três Pontas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169505,
              "name"=> "Tumiritinga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169604,
              "name"=> "Tupaciguara",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169703,
              "name"=> "Turmalina",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169802,
              "name"=> "Turvolândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3169901,
              "name"=> "Ubá",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170008,
              "name"=> "Ubaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170057,
              "name"=> "Ubaporanga",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170107,
              "name"=> "Uberaba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170206,
              "name"=> "Uberlândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170305,
              "name"=> "Umburatiba",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170404,
              "name"=> "Unaí",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170438,
              "name"=> "União de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170479,
              "name"=> "Uruana de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170503,
              "name"=> "Urucânia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170529,
              "name"=> "Urucuia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170578,
              "name"=> "Vargem Alegre",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170602,
              "name"=> "Vargem Bonita",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170651,
              "name"=> "Vargem Grande do Rio Pardo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170701,
              "name"=> "Varginha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170750,
              "name"=> "Varjão de Minas",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170800,
              "name"=> "Várzea da Palma",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3170909,
              "name"=> "Varzelândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171006,
              "name"=> "Vazante",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171030,
              "name"=> "Verdelândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171071,
              "name"=> "Veredinha",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171105,
              "name"=> "Veríssimo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171154,
              "name"=> "Vermelho Novo",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171204,
              "name"=> "Vespasiano",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171303,
              "name"=> "Viçosa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171402,
              "name"=> "Vieiras",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171501,
              "name"=> "Mathias Lobato",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171600,
              "name"=> "Virgem da Lapa",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171709,
              "name"=> "Virgínia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171808,
              "name"=> "Virginópolis",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3171907,
              "name"=> "Virgolândia",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3172004,
              "name"=> "Visconde do Rio Branco",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3172103,
              "name"=> "Volta Grande",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3172202,
              "name"=> "Wenceslau Braz",
              "brazilstate_id"=> 31
            ],
            [
              "id"=> 3200102,
              "name"=> "Afonso Cláudio",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200136,
              "name"=> "Águia Branca",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200169,
              "name"=> "Água Doce do Norte",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200201,
              "name"=> "Alegre",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200300,
              "name"=> "Alfredo Chaves",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200359,
              "name"=> "Alto Rio Novo",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200409,
              "name"=> "Anchieta",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200508,
              "name"=> "Apiacá",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200607,
              "name"=> "Aracruz",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200706,
              "name"=> "Atilio Vivacqua",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200805,
              "name"=> "Baixo Guandu",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3200904,
              "name"=> "Barra de São Francisco",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201001,
              "name"=> "Boa Esperança",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201100,
              "name"=> "Bom Jesus do Norte",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201159,
              "name"=> "Brejetuba",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201209,
              "name"=> "Cachoeiro de Itapemirim",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201308,
              "name"=> "Cariacica",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201407,
              "name"=> "Castelo",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201506,
              "name"=> "Colatina",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201605,
              "name"=> "Conceição da Barra",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201704,
              "name"=> "Conceição do Castelo",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201803,
              "name"=> "Divino de São Lourenço",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3201902,
              "name"=> "Domingos Martins",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202009,
              "name"=> "Dores do Rio Preto",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202108,
              "name"=> "Ecoporanga",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202207,
              "name"=> "Fundão",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202256,
              "name"=> "Governador Lindenberg",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202306,
              "name"=> "Guaçuí",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202405,
              "name"=> "Guarapari",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202454,
              "name"=> "Ibatiba",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202504,
              "name"=> "Ibiraçu",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202553,
              "name"=> "Ibitirama",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202603,
              "name"=> "Iconha",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202652,
              "name"=> "Irupi",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202702,
              "name"=> "Itaguaçu",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202801,
              "name"=> "Itapemirim",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3202900,
              "name"=> "Itarana",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203007,
              "name"=> "Iúna",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203056,
              "name"=> "Jaguaré",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203106,
              "name"=> "Jerônimo Monteiro",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203130,
              "name"=> "João Neiva",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203163,
              "name"=> "Laranja da Terra",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203205,
              "name"=> "Linhares",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203304,
              "name"=> "Mantenópolis",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203320,
              "name"=> "Marataízes",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203346,
              "name"=> "Marechal Floriano",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203353,
              "name"=> "Marilândia",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203403,
              "name"=> "Mimoso do Sul",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203502,
              "name"=> "Montanha",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203601,
              "name"=> "Mucurici",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203700,
              "name"=> "Muniz Freire",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203809,
              "name"=> "Muqui",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3203908,
              "name"=> "Nova Venécia",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204005,
              "name"=> "Pancas",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204054,
              "name"=> "Pedro Canário",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204104,
              "name"=> "Pinheiros",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204203,
              "name"=> "Piúma",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204252,
              "name"=> "Ponto Belo",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204302,
              "name"=> "Presidente Kennedy",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204351,
              "name"=> "Rio Bananal",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204401,
              "name"=> "Rio Novo do Sul",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204500,
              "name"=> "Santa Leopoldina",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204559,
              "name"=> "Santa Maria de Jetibá",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204609,
              "name"=> "Santa Teresa",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204658,
              "name"=> "São Domingos do Norte",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204708,
              "name"=> "São Gabriel da Palha",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204807,
              "name"=> "São José do Calçado",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204906,
              "name"=> "São Mateus",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3204955,
              "name"=> "São Roque do Canaã",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205002,
              "name"=> "Serra",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205010,
              "name"=> "Sooretama",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205036,
              "name"=> "Vargem Alta",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205069,
              "name"=> "Venda Nova do Imigrante",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205101,
              "name"=> "Viana",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205150,
              "name"=> "Vila Pavão",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205176,
              "name"=> "Vila Valério",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205200,
              "name"=> "Vila Velha",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3205309,
              "name"=> "Vitória",
              "brazilstate_id"=> 32
            ],
            [
              "id"=> 3300100,
              "name"=> "Angra dos Reis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300159,
              "name"=> "Aperibé",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300209,
              "name"=> "Araruama",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300225,
              "name"=> "Areal",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300233,
              "name"=> "Armação dos Búzios",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300258,
              "name"=> "Arraial do Cabo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300308,
              "name"=> "Barra do Piraí",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300407,
              "name"=> "Barra Mansa",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300456,
              "name"=> "Belford Roxo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300506,
              "name"=> "Bom Jardim",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300605,
              "name"=> "Bom Jesus do Itabapoana",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300704,
              "name"=> "Cabo Frio",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300803,
              "name"=> "Cachoeiras de Macacu",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300902,
              "name"=> "Cambuci",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300936,
              "name"=> "Carapebus",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3300951,
              "name"=> "Comendador Levy Gasparian",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301009,
              "name"=> "Campos dos Goytacazes",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301108,
              "name"=> "Cantagalo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301157,
              "name"=> "Cardoso Moreira",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301207,
              "name"=> "Carmo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301306,
              "name"=> "Casimiro de Abreu",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301405,
              "name"=> "Conceição de Macabu",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301504,
              "name"=> "Cordeiro",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301603,
              "name"=> "Duas Barras",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301702,
              "name"=> "Duque de Caxias",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301801,
              "name"=> "Engenheiro Paulo de Frontin",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301850,
              "name"=> "Guapimirim",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301876,
              "name"=> "Iguaba Grande",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3301900,
              "name"=> "Itaboraí",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302007,
              "name"=> "Itaguaí",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302056,
              "name"=> "Italva",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302106,
              "name"=> "Itaocara",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302205,
              "name"=> "Itaperuna",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302254,
              "name"=> "Itatiaia",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302270,
              "name"=> "Japeri",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302304,
              "name"=> "Laje do Muriaé",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302403,
              "name"=> "Macaé",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302452,
              "name"=> "Macuco",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302502,
              "name"=> "Magé",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302601,
              "name"=> "Mangaratiba",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302700,
              "name"=> "Maricá",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302809,
              "name"=> "Mendes",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302858,
              "name"=> "Mesquita",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3302908,
              "name"=> "Miguel Pereira",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303005,
              "name"=> "Miracema",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303104,
              "name"=> "Natividade",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303203,
              "name"=> "Nilópolis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303302,
              "name"=> "Niterói",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303401,
              "name"=> "Nova Friburgo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303500,
              "name"=> "Nova Iguaçu",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303609,
              "name"=> "Paracambi",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303708,
              "name"=> "Paraíba do Sul",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303807,
              "name"=> "Paraty",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303856,
              "name"=> "Paty do Alferes",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303906,
              "name"=> "Petrópolis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3303955,
              "name"=> "Pinheiral",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304003,
              "name"=> "Piraí",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304102,
              "name"=> "Porciúncula",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304110,
              "name"=> "Porto Real",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304128,
              "name"=> "Quatis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304144,
              "name"=> "Queimados",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304151,
              "name"=> "Quissamã",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304201,
              "name"=> "Resende",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304300,
              "name"=> "Rio Bonito",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304409,
              "name"=> "Rio Claro",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304508,
              "name"=> "Rio das Flores",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304524,
              "name"=> "Rio das Ostras",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304557,
              "name"=> "Rio de Janeiro",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304607,
              "name"=> "Santa Maria Madalena",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304706,
              "name"=> "Santo Antônio de Pádua",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304755,
              "name"=> "São Francisco de Itabapoana",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304805,
              "name"=> "São Fidélis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3304904,
              "name"=> "São Gonçalo",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305000,
              "name"=> "São João da Barra",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305109,
              "name"=> "São João de Meriti",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305133,
              "name"=> "São José de Ubá",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305158,
              "name"=> "São José do Vale do Rio Preto",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305208,
              "name"=> "São Pedro da Aldeia",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305307,
              "name"=> "São Sebastião do Alto",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305406,
              "name"=> "Sapucaia",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305505,
              "name"=> "Saquarema",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305554,
              "name"=> "Seropédica",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305604,
              "name"=> "Silva Jardim",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305703,
              "name"=> "Sumidouro",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305752,
              "name"=> "Tanguá",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305802,
              "name"=> "Teresópolis",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3305901,
              "name"=> "Trajano de Moraes",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3306008,
              "name"=> "Três Rios",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3306107,
              "name"=> "Valença",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3306156,
              "name"=> "Varre-Sai",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3306206,
              "name"=> "Vassouras",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3306305,
              "name"=> "Volta Redonda",
              "brazilstate_id"=> 33
            ],
            [
              "id"=> 3500105,
              "name"=> "Adamantina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500204,
              "name"=> "Adolfo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500303,
              "name"=> "Aguaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500402,
              "name"=> "Águas da Prata",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500501,
              "name"=> "Águas de Lindóia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500550,
              "name"=> "Águas de Santa Bárbara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500600,
              "name"=> "Águas de São Pedro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500709,
              "name"=> "Agudos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500758,
              "name"=> "Alambari",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500808,
              "name"=> "Alfredo Marcondes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3500907,
              "name"=> "Altair",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501004,
              "name"=> "Altinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501103,
              "name"=> "Alto Alegre",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501152,
              "name"=> "Alumínio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501202,
              "name"=> "Álvares Florence",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501301,
              "name"=> "Álvares Machado",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501400,
              "name"=> "Álvaro de Carvalho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501509,
              "name"=> "Alvinlândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501608,
              "name"=> "Americana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501707,
              "name"=> "Américo Brasiliense",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501806,
              "name"=> "Américo de Campos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3501905,
              "name"=> "Amparo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502002,
              "name"=> "Analândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502101,
              "name"=> "Andradina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502200,
              "name"=> "Angatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502309,
              "name"=> "Anhembi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502408,
              "name"=> "Anhumas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502507,
              "name"=> "Aparecida",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502606,
              "name"=> "Aparecida d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502705,
              "name"=> "Apiaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502754,
              "name"=> "Araçariguama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502804,
              "name"=> "Araçatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3502903,
              "name"=> "Araçoiaba da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503000,
              "name"=> "Aramina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503109,
              "name"=> "Arandu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503158,
              "name"=> "Arapeí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503208,
              "name"=> "Araraquara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503307,
              "name"=> "Araras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503356,
              "name"=> "Arco-Íris",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503406,
              "name"=> "Arealva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503505,
              "name"=> "Areias",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503604,
              "name"=> "Areiópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503703,
              "name"=> "Ariranha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503802,
              "name"=> "Artur Nogueira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503901,
              "name"=> "Arujá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3503950,
              "name"=> "Aspásia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504008,
              "name"=> "Assis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504107,
              "name"=> "Atibaia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504206,
              "name"=> "Auriflama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504305,
              "name"=> "Avaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504404,
              "name"=> "Avanhandava",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504503,
              "name"=> "Avaré",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504602,
              "name"=> "Bady Bassitt",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504701,
              "name"=> "Balbinos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504800,
              "name"=> "Bálsamo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3504909,
              "name"=> "Bananal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505005,
              "name"=> "Barão de Antonina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505104,
              "name"=> "Barbosa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505203,
              "name"=> "Bariri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505302,
              "name"=> "Barra Bonita",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505351,
              "name"=> "Barra do Chapéu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505401,
              "name"=> "Barra do Turvo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505500,
              "name"=> "Barretos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505609,
              "name"=> "Barrinha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505708,
              "name"=> "Barueri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505807,
              "name"=> "Bastos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3505906,
              "name"=> "Batatais",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506003,
              "name"=> "Bauru",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506102,
              "name"=> "Bebedouro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506201,
              "name"=> "Bento de Abreu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506300,
              "name"=> "Bernardino de Campos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506359,
              "name"=> "Bertioga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506409,
              "name"=> "Bilac",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506508,
              "name"=> "Birigui",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506607,
              "name"=> "Biritiba-Mirim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506706,
              "name"=> "Boa Esperança do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506805,
              "name"=> "Bocaina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3506904,
              "name"=> "Bofete",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507001,
              "name"=> "Boituva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507100,
              "name"=> "Bom Jesus dos Perdões",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507159,
              "name"=> "Bom Sucesso de Itararé",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507209,
              "name"=> "Borá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507308,
              "name"=> "Boracéia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507407,
              "name"=> "Borborema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507456,
              "name"=> "Borebi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507506,
              "name"=> "Botucatu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507605,
              "name"=> "Bragança Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507704,
              "name"=> "Braúna",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507753,
              "name"=> "Brejo Alegre",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507803,
              "name"=> "Brodowski",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3507902,
              "name"=> "Brotas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508009,
              "name"=> "Buri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508108,
              "name"=> "Buritama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508207,
              "name"=> "Buritizal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508306,
              "name"=> "Cabrália Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508405,
              "name"=> "Cabreúva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508504,
              "name"=> "Caçapava",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508603,
              "name"=> "Cachoeira Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508702,
              "name"=> "Caconde",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508801,
              "name"=> "Cafelândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3508900,
              "name"=> "Caiabu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509007,
              "name"=> "Caieiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509106,
              "name"=> "Caiuá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509205,
              "name"=> "Cajamar",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509254,
              "name"=> "Cajati",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509304,
              "name"=> "Cajobi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509403,
              "name"=> "Cajuru",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509452,
              "name"=> "Campina do Monte Alegre",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509502,
              "name"=> "Campinas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509601,
              "name"=> "Campo Limpo Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509700,
              "name"=> "Campos do Jordão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509809,
              "name"=> "Campos Novos Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509908,
              "name"=> "Cananéia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3509957,
              "name"=> "Canas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510005,
              "name"=> "Cândido Mota",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510104,
              "name"=> "Cândido Rodrigues",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510153,
              "name"=> "Canitar",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510203,
              "name"=> "Capão Bonito",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510302,
              "name"=> "Capela do Alto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510401,
              "name"=> "Capivari",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510500,
              "name"=> "Caraguatatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510609,
              "name"=> "Carapicuíba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510708,
              "name"=> "Cardoso",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510807,
              "name"=> "Casa Branca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3510906,
              "name"=> "Cássia dos Coqueiros",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511003,
              "name"=> "Castilho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511102,
              "name"=> "Catanduva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511201,
              "name"=> "Catiguá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511300,
              "name"=> "Cedral",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511409,
              "name"=> "Cerqueira César",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511508,
              "name"=> "Cerquilho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511607,
              "name"=> "Cesário Lange",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511706,
              "name"=> "Charqueada",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3511904,
              "name"=> "Clementina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512001,
              "name"=> "Colina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512100,
              "name"=> "Colômbia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512209,
              "name"=> "Conchal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512308,
              "name"=> "Conchas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512407,
              "name"=> "Cordeirópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512506,
              "name"=> "Coroados",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512605,
              "name"=> "Coronel Macedo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512704,
              "name"=> "Corumbataí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512803,
              "name"=> "Cosmópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3512902,
              "name"=> "Cosmorama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513009,
              "name"=> "Cotia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513108,
              "name"=> "Cravinhos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513207,
              "name"=> "Cristais Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513306,
              "name"=> "Cruzália",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513405,
              "name"=> "Cruzeiro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513504,
              "name"=> "Cubatão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513603,
              "name"=> "Cunha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513702,
              "name"=> "Descalvado",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513801,
              "name"=> "Diadema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513850,
              "name"=> "Dirce Reis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3513900,
              "name"=> "Divinolândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514007,
              "name"=> "Dobrada",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514106,
              "name"=> "Dois Córregos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514205,
              "name"=> "Dolcinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514304,
              "name"=> "Dourado",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514403,
              "name"=> "Dracena",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514502,
              "name"=> "Duartina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514601,
              "name"=> "Dumont",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514700,
              "name"=> "Echaporã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514809,
              "name"=> "Eldorado",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514908,
              "name"=> "Elias Fausto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514924,
              "name"=> "Elisiário",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3514957,
              "name"=> "Embaúba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515004,
              "name"=> "Embu das Artes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515103,
              "name"=> "Embu-Guaçu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515129,
              "name"=> "Emilianópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515152,
              "name"=> "Engenheiro Coelho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515186,
              "name"=> "Espírito Santo do Pinhal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515194,
              "name"=> "Espírito Santo do Turvo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515202,
              "name"=> "Estrela d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515301,
              "name"=> "Estrela do Norte",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515350,
              "name"=> "Euclides da Cunha Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515400,
              "name"=> "Fartura",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515509,
              "name"=> "Fernandópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515608,
              "name"=> "Fernando Prestes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515657,
              "name"=> "Fernão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515707,
              "name"=> "Ferraz de Vasconcelos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515806,
              "name"=> "Flora Rica",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3515905,
              "name"=> "Floreal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516002,
              "name"=> "Flórida Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516101,
              "name"=> "Florínia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516200,
              "name"=> "Franca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516309,
              "name"=> "Francisco Morato",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516408,
              "name"=> "Franco da Rocha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516507,
              "name"=> "Gabriel Monteiro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516606,
              "name"=> "Gália",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516705,
              "name"=> "Garça",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516804,
              "name"=> "Gastão Vidigal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516853,
              "name"=> "Gavião Peixoto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3516903,
              "name"=> "General Salgado",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517000,
              "name"=> "Getulina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517109,
              "name"=> "Glicério",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517208,
              "name"=> "Guaiçara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517307,
              "name"=> "Guaimbê",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517406,
              "name"=> "Guaíra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517505,
              "name"=> "Guapiaçu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517604,
              "name"=> "Guapiara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517703,
              "name"=> "Guará",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517802,
              "name"=> "Guaraçaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3517901,
              "name"=> "Guaraci",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518008,
              "name"=> "Guarani d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518107,
              "name"=> "Guarantã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518206,
              "name"=> "Guararapes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518305,
              "name"=> "Guararema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518404,
              "name"=> "Guaratinguetá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518503,
              "name"=> "Guareí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518602,
              "name"=> "Guariba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518701,
              "name"=> "Guarujá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518800,
              "name"=> "Guarulhos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518859,
              "name"=> "Guatapará",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3518909,
              "name"=> "Guzolândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519006,
              "name"=> "Herculândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519055,
              "name"=> "Holambra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519071,
              "name"=> "Hortolândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519105,
              "name"=> "Iacanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519204,
              "name"=> "Iacri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519253,
              "name"=> "Iaras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519303,
              "name"=> "Ibaté",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519402,
              "name"=> "Ibirá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519501,
              "name"=> "Ibirarema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519600,
              "name"=> "Ibitinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519709,
              "name"=> "Ibiúna",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519808,
              "name"=> "Icém",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3519907,
              "name"=> "Iepê",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520004,
              "name"=> "Igaraçu do Tietê",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520103,
              "name"=> "Igarapava",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520202,
              "name"=> "Igaratá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520301,
              "name"=> "Iguape",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520400,
              "name"=> "Ilhabela",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520426,
              "name"=> "Ilha Comprida",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520442,
              "name"=> "Ilha Solteira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520509,
              "name"=> "Indaiatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520608,
              "name"=> "Indiana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520707,
              "name"=> "Indiaporã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520806,
              "name"=> "Inúbia Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3520905,
              "name"=> "Ipaussu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521002,
              "name"=> "Iperó",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521101,
              "name"=> "Ipeúna",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521150,
              "name"=> "Ipiguá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521200,
              "name"=> "Iporanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521309,
              "name"=> "Ipuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521408,
              "name"=> "Iracemápolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521507,
              "name"=> "Irapuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521606,
              "name"=> "Irapuru",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521705,
              "name"=> "Itaberá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521804,
              "name"=> "Itaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3521903,
              "name"=> "Itajobi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522000,
              "name"=> "Itaju",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522109,
              "name"=> "Itanhaém",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522158,
              "name"=> "Itaóca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522208,
              "name"=> "Itapecerica da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522307,
              "name"=> "Itapetininga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522406,
              "name"=> "Itapeva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522505,
              "name"=> "Itapevi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522604,
              "name"=> "Itapira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522653,
              "name"=> "Itapirapuã Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522703,
              "name"=> "Itápolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522802,
              "name"=> "Itaporanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3522901,
              "name"=> "Itapuí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523008,
              "name"=> "Itapura",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523107,
              "name"=> "Itaquaquecetuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523206,
              "name"=> "Itararé",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523305,
              "name"=> "Itariri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523404,
              "name"=> "Itatiba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523503,
              "name"=> "Itatinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523602,
              "name"=> "Itirapina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523701,
              "name"=> "Itirapuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523800,
              "name"=> "Itobi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3523909,
              "name"=> "Itu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524006,
              "name"=> "Itupeva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524105,
              "name"=> "Ituverava",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524204,
              "name"=> "Jaborandi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524303,
              "name"=> "Jaboticabal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524402,
              "name"=> "Jacareí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524501,
              "name"=> "Jaci",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524600,
              "name"=> "Jacupiranga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524709,
              "name"=> "Jaguariúna",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524808,
              "name"=> "Jales",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3524907,
              "name"=> "Jambeiro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525003,
              "name"=> "Jandira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525102,
              "name"=> "Jardinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525201,
              "name"=> "Jarinu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525300,
              "name"=> "Jaú",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525409,
              "name"=> "Jeriquara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525508,
              "name"=> "Joanópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525607,
              "name"=> "João Ramalho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525706,
              "name"=> "José Bonifácio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525805,
              "name"=> "Júlio Mesquita",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525854,
              "name"=> "Jumirim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3525904,
              "name"=> "Jundiaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526001,
              "name"=> "Junqueirópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526100,
              "name"=> "Juquiá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526209,
              "name"=> "Juquitiba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526308,
              "name"=> "Lagoinha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526407,
              "name"=> "Laranjal Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526506,
              "name"=> "Lavínia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526605,
              "name"=> "Lavrinhas",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526704,
              "name"=> "Leme",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526803,
              "name"=> "Lençóis Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3526902,
              "name"=> "Limeira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527009,
              "name"=> "Lindóia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527108,
              "name"=> "Lins",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527207,
              "name"=> "Lorena",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527256,
              "name"=> "Lourdes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527306,
              "name"=> "Louveira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527405,
              "name"=> "Lucélia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527504,
              "name"=> "Lucianópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527603,
              "name"=> "Luís Antônio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527702,
              "name"=> "Luiziânia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527801,
              "name"=> "Lupércio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3527900,
              "name"=> "Lutécia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528007,
              "name"=> "Macatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528106,
              "name"=> "Macaubal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528205,
              "name"=> "Macedônia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528304,
              "name"=> "Magda",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528403,
              "name"=> "Mairinque",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528502,
              "name"=> "Mairiporã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528601,
              "name"=> "Manduri",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528700,
              "name"=> "Marabá Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528809,
              "name"=> "Maracaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528858,
              "name"=> "Marapoama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3528908,
              "name"=> "Mariápolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529005,
              "name"=> "Marília",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529104,
              "name"=> "Marinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529203,
              "name"=> "Martinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529302,
              "name"=> "Matão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529401,
              "name"=> "Mauá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529500,
              "name"=> "Mendonça",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529609,
              "name"=> "Meridiano",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529658,
              "name"=> "Mesópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529708,
              "name"=> "Miguelópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529807,
              "name"=> "Mineiros do Tietê",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3529906,
              "name"=> "Miracatu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530003,
              "name"=> "Mira Estrela",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530102,
              "name"=> "Mirandópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530201,
              "name"=> "Mirante do Paranapanema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530300,
              "name"=> "Mirassol",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530409,
              "name"=> "Mirassolândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530508,
              "name"=> "Mococa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530607,
              "name"=> "Mogi das Cruzes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530706,
              "name"=> "Mogi Guaçu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530805,
              "name"=> "Moji Mirim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3530904,
              "name"=> "Mombuca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531001,
              "name"=> "Monções",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531100,
              "name"=> "Mongaguá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531209,
              "name"=> "Monte Alegre do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531308,
              "name"=> "Monte Alto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531407,
              "name"=> "Monte Aprazível",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531506,
              "name"=> "Monte Azul Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531605,
              "name"=> "Monte Castelo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531704,
              "name"=> "Monteiro Lobato",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531803,
              "name"=> "Monte Mor",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3531902,
              "name"=> "Morro Agudo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532009,
              "name"=> "Morungaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532058,
              "name"=> "Motuca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532108,
              "name"=> "Murutinga do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532157,
              "name"=> "Nantes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532207,
              "name"=> "Narandiba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532306,
              "name"=> "Natividade da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532405,
              "name"=> "Nazaré Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532504,
              "name"=> "Neves Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532603,
              "name"=> "Nhandeara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532702,
              "name"=> "Nipoã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532801,
              "name"=> "Nova Aliança",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532827,
              "name"=> "Nova Campina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532843,
              "name"=> "Nova Canaã Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532868,
              "name"=> "Nova Castilho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3532900,
              "name"=> "Nova Europa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533007,
              "name"=> "Nova Granada",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533106,
              "name"=> "Nova Guataporanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533205,
              "name"=> "Nova Independência",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533254,
              "name"=> "Novais",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533304,
              "name"=> "Nova Luzitânia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533403,
              "name"=> "Nova Odessa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533502,
              "name"=> "Novo Horizonte",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533601,
              "name"=> "Nuporanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533700,
              "name"=> "Ocauçu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533809,
              "name"=> "Óleo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3533908,
              "name"=> "Olímpia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534005,
              "name"=> "Onda Verde",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534104,
              "name"=> "Oriente",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534203,
              "name"=> "Orindiúva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534302,
              "name"=> "Orlândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534401,
              "name"=> "Osasco",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534500,
              "name"=> "Oscar Bressane",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534609,
              "name"=> "Osvaldo Cruz",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534708,
              "name"=> "Ourinhos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534757,
              "name"=> "Ouroeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534807,
              "name"=> "Ouro Verde",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3534906,
              "name"=> "Pacaembu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535002,
              "name"=> "Palestina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535101,
              "name"=> "Palmares Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535200,
              "name"=> "Palmeira d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535309,
              "name"=> "Palmital",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535408,
              "name"=> "Panorama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535507,
              "name"=> "Paraguaçu Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535606,
              "name"=> "Paraibuna",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535705,
              "name"=> "Paraíso",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535804,
              "name"=> "Paranapanema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3535903,
              "name"=> "Paranapuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536000,
              "name"=> "Parapuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536109,
              "name"=> "Pardinho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536208,
              "name"=> "Pariquera-Açu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536257,
              "name"=> "Parisi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536307,
              "name"=> "Patrocínio Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536406,
              "name"=> "Paulicéia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536505,
              "name"=> "Paulínia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536570,
              "name"=> "Paulistânia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536604,
              "name"=> "Paulo de Faria",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536703,
              "name"=> "Pederneiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536802,
              "name"=> "Pedra Bela",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3536901,
              "name"=> "Pedranópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537008,
              "name"=> "Pedregulho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537107,
              "name"=> "Pedreira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537156,
              "name"=> "Pedrinhas Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537206,
              "name"=> "Pedro de Toledo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537305,
              "name"=> "Penápolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537404,
              "name"=> "Pereira Barreto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537503,
              "name"=> "Pereiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537602,
              "name"=> "Peruíbe",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537701,
              "name"=> "Piacatu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537800,
              "name"=> "Piedade",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3537909,
              "name"=> "Pilar do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538006,
              "name"=> "Pindamonhangaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538105,
              "name"=> "Pindorama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538204,
              "name"=> "Pinhalzinho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538303,
              "name"=> "Piquerobi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538501,
              "name"=> "Piquete",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538600,
              "name"=> "Piracaia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538709,
              "name"=> "Piracicaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538808,
              "name"=> "Piraju",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3538907,
              "name"=> "Pirajuí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539004,
              "name"=> "Pirangi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539103,
              "name"=> "Pirapora do Bom Jesus",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539202,
              "name"=> "Pirapozinho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539301,
              "name"=> "Pirassununga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539400,
              "name"=> "Piratininga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539509,
              "name"=> "Pitangueiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539608,
              "name"=> "Planalto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539707,
              "name"=> "Platina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539806,
              "name"=> "Poá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3539905,
              "name"=> "Poloni",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540002,
              "name"=> "Pompéia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540101,
              "name"=> "Pongaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540200,
              "name"=> "Pontal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540259,
              "name"=> "Pontalinda",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540309,
              "name"=> "Pontes Gestal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540408,
              "name"=> "Populina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540507,
              "name"=> "Porangaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540606,
              "name"=> "Porto Feliz",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540705,
              "name"=> "Porto Ferreira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540754,
              "name"=> "Potim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540804,
              "name"=> "Potirendaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540853,
              "name"=> "Pracinha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3540903,
              "name"=> "Pradópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541000,
              "name"=> "Praia Grande",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541059,
              "name"=> "Pratânia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541109,
              "name"=> "Presidente Alves",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541208,
              "name"=> "Presidente Bernardes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541307,
              "name"=> "Presidente Epitácio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541406,
              "name"=> "Presidente Prudente",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541505,
              "name"=> "Presidente Venceslau",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541604,
              "name"=> "Promissão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541653,
              "name"=> "Quadra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541703,
              "name"=> "Quatá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541802,
              "name"=> "Queiroz",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3541901,
              "name"=> "Queluz",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542008,
              "name"=> "Quintana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542107,
              "name"=> "Rafard",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542206,
              "name"=> "Rancharia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542305,
              "name"=> "Redenção da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542404,
              "name"=> "Regente Feijó",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542503,
              "name"=> "Reginópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542602,
              "name"=> "Registro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542701,
              "name"=> "Restinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542800,
              "name"=> "Ribeira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3542909,
              "name"=> "Ribeirão Bonito",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543006,
              "name"=> "Ribeirão Branco",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543105,
              "name"=> "Ribeirão Corrente",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543204,
              "name"=> "Ribeirão do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543238,
              "name"=> "Ribeirão dos Índios",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543253,
              "name"=> "Ribeirão Grande",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543303,
              "name"=> "Ribeirão Pires",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543402,
              "name"=> "Ribeirão Preto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543501,
              "name"=> "Riversul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543600,
              "name"=> "Rifaina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543709,
              "name"=> "Rincão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543808,
              "name"=> "Rinópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3543907,
              "name"=> "Rio Claro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544004,
              "name"=> "Rio das Pedras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544103,
              "name"=> "Rio Grande da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544202,
              "name"=> "Riolândia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544251,
              "name"=> "Rosana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544301,
              "name"=> "Roseira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544400,
              "name"=> "Rubiácea",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544509,
              "name"=> "Rubinéia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544608,
              "name"=> "Sabino",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544707,
              "name"=> "Sagres",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544806,
              "name"=> "Sales",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3544905,
              "name"=> "Sales Oliveira",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545001,
              "name"=> "Salesópolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545100,
              "name"=> "Salmourão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545159,
              "name"=> "Saltinho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545209,
              "name"=> "Salto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545308,
              "name"=> "Salto de Pirapora",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545407,
              "name"=> "Salto Grande",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545506,
              "name"=> "Sandovalina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545605,
              "name"=> "Santa Adélia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545704,
              "name"=> "Santa Albertina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3545803,
              "name"=> "Santa Bárbara d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546009,
              "name"=> "Santa Branca",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546108,
              "name"=> "Santa Clara d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546207,
              "name"=> "Santa Cruz da Conceição",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546256,
              "name"=> "Santa Cruz da Esperança",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546306,
              "name"=> "Santa Cruz das Palmeiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546405,
              "name"=> "Santa Cruz do Rio Pardo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546504,
              "name"=> "Santa Ernestina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546603,
              "name"=> "Santa Fé do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546702,
              "name"=> "Santa Gertrudes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546801,
              "name"=> "Santa Isabel",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3546900,
              "name"=> "Santa Lúcia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547007,
              "name"=> "Santa Maria da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547106,
              "name"=> "Santa Mercedes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547205,
              "name"=> "Santana da Ponte Pensa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547304,
              "name"=> "Santana de Parnaíba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547403,
              "name"=> "Santa Rita d`Oeste",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547502,
              "name"=> "Santa Rita do Passa Quatro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547601,
              "name"=> "Santa Rosa de Viterbo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547650,
              "name"=> "Santa Salete",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547700,
              "name"=> "Santo Anastácio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547809,
              "name"=> "Santo André",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3547908,
              "name"=> "Santo Antônio da Alegria",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548005,
              "name"=> "Santo Antônio de Posse",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548054,
              "name"=> "Santo Antônio do Aracanguá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548104,
              "name"=> "Santo Antônio do Jardim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548203,
              "name"=> "Santo Antônio do Pinhal",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548302,
              "name"=> "Santo Expedito",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548401,
              "name"=> "Santópolis do Aguapeí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548500,
              "name"=> "Santos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548609,
              "name"=> "São Bento do Sapucaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548708,
              "name"=> "São Bernardo do Campo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548807,
              "name"=> "São Caetano do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3548906,
              "name"=> "São Carlos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549003,
              "name"=> "São Francisco",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549102,
              "name"=> "São João da Boa Vista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549201,
              "name"=> "São João das Duas Pontes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549250,
              "name"=> "São João de Iracema",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549300,
              "name"=> "São João do Pau d`Alho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549409,
              "name"=> "São Joaquim da Barra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549508,
              "name"=> "São José da Bela Vista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549607,
              "name"=> "São José do Barreiro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549706,
              "name"=> "São José do Rio Pardo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549805,
              "name"=> "São José do Rio Preto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549904,
              "name"=> "São José dos Campos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3549953,
              "name"=> "São Lourenço da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550001,
              "name"=> "São Luís do Paraitinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550100,
              "name"=> "São Manuel",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550209,
              "name"=> "São Miguel Arcanjo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550308,
              "name"=> "São Paulo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550407,
              "name"=> "São Pedro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550506,
              "name"=> "São Pedro do Turvo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550605,
              "name"=> "São Roque",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550704,
              "name"=> "São Sebastião",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550803,
              "name"=> "São Sebastião da Grama",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3550902,
              "name"=> "São Simão",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551009,
              "name"=> "São Vicente",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551108,
              "name"=> "Sarapuí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551207,
              "name"=> "Sarutaiá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551306,
              "name"=> "Sebastianópolis do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551405,
              "name"=> "Serra Azul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551504,
              "name"=> "Serrana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551603,
              "name"=> "Serra Negra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551702,
              "name"=> "Sertãozinho",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551801,
              "name"=> "Sete Barras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3551900,
              "name"=> "Severínia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552007,
              "name"=> "Silveiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552106,
              "name"=> "Socorro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552205,
              "name"=> "Sorocaba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552304,
              "name"=> "Sud Mennucci",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552403,
              "name"=> "Sumaré",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552502,
              "name"=> "Suzano",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552551,
              "name"=> "Suzanápolis",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552601,
              "name"=> "Tabapuã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552700,
              "name"=> "Tabatinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552809,
              "name"=> "Taboão da Serra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3552908,
              "name"=> "Taciba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553005,
              "name"=> "Taguaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553104,
              "name"=> "Taiaçu",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553203,
              "name"=> "Taiúva",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553302,
              "name"=> "Tambaú",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553401,
              "name"=> "Tanabi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553500,
              "name"=> "Tapiraí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553609,
              "name"=> "Tapiratiba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553658,
              "name"=> "Taquaral",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553708,
              "name"=> "Taquaritinga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553807,
              "name"=> "Taquarituba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553856,
              "name"=> "Taquarivaí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553906,
              "name"=> "Tarabai",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3553955,
              "name"=> "Tarumã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554003,
              "name"=> "Tatuí",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554102,
              "name"=> "Taubaté",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554201,
              "name"=> "Tejupá",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554300,
              "name"=> "Teodoro Sampaio",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554409,
              "name"=> "Terra Roxa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554508,
              "name"=> "Tietê",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554607,
              "name"=> "Timburi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554656,
              "name"=> "Torre de Pedra",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554706,
              "name"=> "Torrinha",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554755,
              "name"=> "Trabiju",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554805,
              "name"=> "Tremembé",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554904,
              "name"=> "Três Fronteiras",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3554953,
              "name"=> "Tuiuti",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555000,
              "name"=> "Tupã",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555109,
              "name"=> "Tupi Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555208,
              "name"=> "Turiúba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555307,
              "name"=> "Turmalina",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555356,
              "name"=> "Ubarana",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555406,
              "name"=> "Ubatuba",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555505,
              "name"=> "Ubirajara",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555604,
              "name"=> "Uchoa",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555703,
              "name"=> "União Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555802,
              "name"=> "Urânia",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3555901,
              "name"=> "Uru",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556008,
              "name"=> "Urupês",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556107,
              "name"=> "Valentim Gentil",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556206,
              "name"=> "Valinhos",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556305,
              "name"=> "Valparaíso",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556354,
              "name"=> "Vargem",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556404,
              "name"=> "Vargem Grande do Sul",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556453,
              "name"=> "Vargem Grande Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556503,
              "name"=> "Várzea Paulista",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556602,
              "name"=> "Vera Cruz",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556701,
              "name"=> "Vinhedo",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556800,
              "name"=> "Viradouro",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556909,
              "name"=> "Vista Alegre do Alto",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3556958,
              "name"=> "Vitória Brasil",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3557006,
              "name"=> "Votorantim",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3557105,
              "name"=> "Votuporanga",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3557154,
              "name"=> "Zacarias",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3557204,
              "name"=> "Chavantes",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 3557303,
              "name"=> "Estiva Gerbi",
              "brazilstate_id"=> 35
            ],
            [
              "id"=> 4100103,
              "name"=> "Abatiá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100202,
              "name"=> "Adrianópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100301,
              "name"=> "Agudos do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100400,
              "name"=> "Almirante Tamandaré",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100459,
              "name"=> "Altamira do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100509,
              "name"=> "Altônia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100608,
              "name"=> "Alto Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100707,
              "name"=> "Alto Piquiri",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100806,
              "name"=> "Alvorada do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4100905,
              "name"=> "Amaporã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101002,
              "name"=> "Ampére",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101051,
              "name"=> "Anahy",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101101,
              "name"=> "Andirá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101150,
              "name"=> "Ângulo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101200,
              "name"=> "Antonina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101309,
              "name"=> "Antônio Olinto",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101408,
              "name"=> "Apucarana",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101507,
              "name"=> "Arapongas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101606,
              "name"=> "Arapoti",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101655,
              "name"=> "Arapuã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101705,
              "name"=> "Araruna",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101804,
              "name"=> "Araucária",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101853,
              "name"=> "Ariranha do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4101903,
              "name"=> "Assaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102000,
              "name"=> "Assis Chateaubriand",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102109,
              "name"=> "Astorga",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102208,
              "name"=> "Atalaia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102307,
              "name"=> "Balsa Nova",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102406,
              "name"=> "Bandeirantes",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102505,
              "name"=> "Barbosa Ferraz",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102604,
              "name"=> "Barracão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102703,
              "name"=> "Barra do Jacaré",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102752,
              "name"=> "Bela Vista da Caroba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102802,
              "name"=> "Bela Vista do Paraíso",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4102901,
              "name"=> "Bituruna",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103008,
              "name"=> "Boa Esperança",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103024,
              "name"=> "Boa Esperança do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103040,
              "name"=> "Boa Ventura de São Roque",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103057,
              "name"=> "Boa Vista da Aparecida",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103107,
              "name"=> "Bocaiúva do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103156,
              "name"=> "Bom Jesus do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103206,
              "name"=> "Bom Sucesso",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103222,
              "name"=> "Bom Sucesso do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103305,
              "name"=> "Borrazópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103354,
              "name"=> "Braganey",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103370,
              "name"=> "Brasilândia do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103404,
              "name"=> "Cafeara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103453,
              "name"=> "Cafelândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103479,
              "name"=> "Cafezal do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103503,
              "name"=> "Califórnia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103602,
              "name"=> "Cambará",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103701,
              "name"=> "Cambé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103800,
              "name"=> "Cambira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103909,
              "name"=> "Campina da Lagoa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4103958,
              "name"=> "Campina do Simão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104006,
              "name"=> "Campina Grande do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104055,
              "name"=> "Campo Bonito",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104105,
              "name"=> "Campo do Tenente",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104204,
              "name"=> "Campo Largo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104253,
              "name"=> "Campo Magro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104303,
              "name"=> "Campo Mourão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104402,
              "name"=> "Cândido de Abreu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104428,
              "name"=> "Candói",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104451,
              "name"=> "Cantagalo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104501,
              "name"=> "Capanema",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104600,
              "name"=> "Capitão Leônidas Marques",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104659,
              "name"=> "Carambeí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104709,
              "name"=> "Carlópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104808,
              "name"=> "Cascavel",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4104907,
              "name"=> "Castro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105003,
              "name"=> "Catanduvas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105102,
              "name"=> "Centenário do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105201,
              "name"=> "Cerro Azul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105300,
              "name"=> "Céu Azul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105409,
              "name"=> "Chopinzinho",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105508,
              "name"=> "Cianorte",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105607,
              "name"=> "Cidade Gaúcha",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105706,
              "name"=> "Clevelândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105805,
              "name"=> "Colombo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4105904,
              "name"=> "Colorado",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106001,
              "name"=> "Congonhinhas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106100,
              "name"=> "Conselheiro Mairinck",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106209,
              "name"=> "Contenda",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106308,
              "name"=> "Corbélia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106407,
              "name"=> "Cornélio Procópio",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106456,
              "name"=> "Coronel Domingos Soares",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106506,
              "name"=> "Coronel Vivida",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106555,
              "name"=> "Corumbataí do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106571,
              "name"=> "Cruzeiro do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106605,
              "name"=> "Cruzeiro do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106704,
              "name"=> "Cruzeiro do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106803,
              "name"=> "Cruz Machado",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106852,
              "name"=> "Cruzmaltina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4106902,
              "name"=> "Curitiba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107009,
              "name"=> "Curiúva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107108,
              "name"=> "Diamante do Norte",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107124,
              "name"=> "Diamante do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107157,
              "name"=> "Diamante d`Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107207,
              "name"=> "Dois Vizinhos",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107256,
              "name"=> "Douradina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107306,
              "name"=> "Doutor Camargo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107405,
              "name"=> "Enéas Marques",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107504,
              "name"=> "Engenheiro Beltrão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107520,
              "name"=> "Esperança Nova",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107538,
              "name"=> "Entre Rios do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107546,
              "name"=> "Espigão Alto do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107553,
              "name"=> "Farol",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107603,
              "name"=> "Faxinal",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107652,
              "name"=> "Fazenda Rio Grande",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107702,
              "name"=> "Fênix",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107736,
              "name"=> "Fernandes Pinheiro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107751,
              "name"=> "Figueira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107801,
              "name"=> "Floraí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107850,
              "name"=> "Flor da Serra do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4107900,
              "name"=> "Floresta",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108007,
              "name"=> "Florestópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108106,
              "name"=> "Flórida",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108205,
              "name"=> "Formosa do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108304,
              "name"=> "Foz do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108320,
              "name"=> "Francisco Alves",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108403,
              "name"=> "Francisco Beltrão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108452,
              "name"=> "Foz do Jordão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108502,
              "name"=> "General Carneiro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108551,
              "name"=> "Godoy Moreira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108601,
              "name"=> "Goioerê",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108650,
              "name"=> "Goioxim",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108700,
              "name"=> "Grandes Rios",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108809,
              "name"=> "Guaíra",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108908,
              "name"=> "Guairaçá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4108957,
              "name"=> "Guamiranga",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109005,
              "name"=> "Guapirama",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109104,
              "name"=> "Guaporema",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109203,
              "name"=> "Guaraci",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109302,
              "name"=> "Guaraniaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109401,
              "name"=> "Guarapuava",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109500,
              "name"=> "Guaraqueçaba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109609,
              "name"=> "Guaratuba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109658,
              "name"=> "Honório Serpa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109708,
              "name"=> "Ibaiti",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109757,
              "name"=> "Ibema",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109807,
              "name"=> "Ibiporã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4109906,
              "name"=> "Icaraíma",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110003,
              "name"=> "Iguaraçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110052,
              "name"=> "Iguatu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110078,
              "name"=> "Imbaú",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110102,
              "name"=> "Imbituva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110201,
              "name"=> "Inácio Martins",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110300,
              "name"=> "Inajá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110409,
              "name"=> "Indianópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110508,
              "name"=> "Ipiranga",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110607,
              "name"=> "Iporã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110656,
              "name"=> "Iracema do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110706,
              "name"=> "Irati",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110805,
              "name"=> "Iretama",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110904,
              "name"=> "Itaguajé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4110953,
              "name"=> "Itaipulândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111001,
              "name"=> "Itambaracá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111100,
              "name"=> "Itambé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111209,
              "name"=> "Itapejara d`Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111258,
              "name"=> "Itaperuçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111308,
              "name"=> "Itaúna do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111407,
              "name"=> "Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111506,
              "name"=> "Ivaiporã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111555,
              "name"=> "Ivaté",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111605,
              "name"=> "Ivatuba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111704,
              "name"=> "Jaboti",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111803,
              "name"=> "Jacarezinho",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4111902,
              "name"=> "Jaguapitã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112009,
              "name"=> "Jaguariaíva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112108,
              "name"=> "Jandaia do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112207,
              "name"=> "Janiópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112306,
              "name"=> "Japira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112405,
              "name"=> "Japurá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112504,
              "name"=> "Jardim Alegre",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112603,
              "name"=> "Jardim Olinda",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112702,
              "name"=> "Jataizinho",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112751,
              "name"=> "Jesuítas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112801,
              "name"=> "Joaquim Távora",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112900,
              "name"=> "Jundiaí do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4112959,
              "name"=> "Juranda",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113007,
              "name"=> "Jussara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113106,
              "name"=> "Kaloré",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113205,
              "name"=> "Lapa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113254,
              "name"=> "Laranjal",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113304,
              "name"=> "Laranjeiras do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113403,
              "name"=> "Leópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113429,
              "name"=> "Lidianópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113452,
              "name"=> "Lindoeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113502,
              "name"=> "Loanda",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113601,
              "name"=> "Lobato",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113700,
              "name"=> "Londrina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113734,
              "name"=> "Luiziana",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113759,
              "name"=> "Lunardelli",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113809,
              "name"=> "Lupionópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4113908,
              "name"=> "Mallet",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114005,
              "name"=> "Mamborê",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114104,
              "name"=> "Mandaguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114203,
              "name"=> "Mandaguari",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114302,
              "name"=> "Mandirituba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114351,
              "name"=> "Manfrinópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114401,
              "name"=> "Mangueirinha",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114500,
              "name"=> "Manoel Ribas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114609,
              "name"=> "Marechal Cândido Rondon",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114708,
              "name"=> "Maria Helena",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114807,
              "name"=> "Marialva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4114906,
              "name"=> "Marilândia do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115002,
              "name"=> "Marilena",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115101,
              "name"=> "Mariluz",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115200,
              "name"=> "Maringá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115309,
              "name"=> "Mariópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115358,
              "name"=> "Maripá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115408,
              "name"=> "Marmeleiro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115457,
              "name"=> "Marquinho",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115507,
              "name"=> "Marumbi",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115606,
              "name"=> "Matelândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115705,
              "name"=> "Matinhos",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115739,
              "name"=> "Mato Rico",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115754,
              "name"=> "Mauá da Serra",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115804,
              "name"=> "Medianeira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115853,
              "name"=> "Mercedes",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4115903,
              "name"=> "Mirador",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116000,
              "name"=> "Miraselva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116059,
              "name"=> "Missal",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116109,
              "name"=> "Moreira Sales",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116208,
              "name"=> "Morretes",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116307,
              "name"=> "Munhoz de Melo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116406,
              "name"=> "Nossa Senhora das Graças",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116505,
              "name"=> "Nova Aliança do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116604,
              "name"=> "Nova América da Colina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116703,
              "name"=> "Nova Aurora",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116802,
              "name"=> "Nova Cantu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116901,
              "name"=> "Nova Esperança",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4116950,
              "name"=> "Nova Esperança do Sudoeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117008,
              "name"=> "Nova Fátima",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117057,
              "name"=> "Nova Laranjeiras",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117107,
              "name"=> "Nova Londrina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117206,
              "name"=> "Nova Olímpia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117214,
              "name"=> "Nova Santa Bárbara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117222,
              "name"=> "Nova Santa Rosa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117255,
              "name"=> "Nova Prata do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117271,
              "name"=> "Nova Tebas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117297,
              "name"=> "Novo Itacolomi",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117305,
              "name"=> "Ortigueira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117404,
              "name"=> "Ourizona",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117453,
              "name"=> "Ouro Verde do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117503,
              "name"=> "Paiçandu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117602,
              "name"=> "Palmas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117701,
              "name"=> "Palmeira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117800,
              "name"=> "Palmital",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4117909,
              "name"=> "Palotina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118006,
              "name"=> "Paraíso do Norte",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118105,
              "name"=> "Paranacity",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118204,
              "name"=> "Paranaguá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118303,
              "name"=> "Paranapoema",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118402,
              "name"=> "Paranavaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118451,
              "name"=> "Pato Bragado",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118501,
              "name"=> "Pato Branco",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118600,
              "name"=> "Paula Freitas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118709,
              "name"=> "Paulo Frontin",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118808,
              "name"=> "Peabiru",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118857,
              "name"=> "Perobal",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4118907,
              "name"=> "Pérola",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119004,
              "name"=> "Pérola d`Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119103,
              "name"=> "Piên",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119152,
              "name"=> "Pinhais",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119202,
              "name"=> "Pinhalão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119251,
              "name"=> "Pinhal de São Bento",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119301,
              "name"=> "Pinhão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119400,
              "name"=> "Piraí do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119509,
              "name"=> "Piraquara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119608,
              "name"=> "Pitanga",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119657,
              "name"=> "Pitangueiras",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119707,
              "name"=> "Planaltina do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119806,
              "name"=> "Planalto",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119905,
              "name"=> "Ponta Grossa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4119954,
              "name"=> "Pontal do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120002,
              "name"=> "Porecatu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120101,
              "name"=> "Porto Amazonas",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120150,
              "name"=> "Porto Barreiro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120200,
              "name"=> "Porto Rico",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120309,
              "name"=> "Porto Vitória",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120333,
              "name"=> "Prado Ferreira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120358,
              "name"=> "Pranchita",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120408,
              "name"=> "Presidente Castelo Branco",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120507,
              "name"=> "Primeiro de Maio",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120606,
              "name"=> "Prudentópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120655,
              "name"=> "Quarto Centenário",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120705,
              "name"=> "Quatiguá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120804,
              "name"=> "Quatro Barras",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120853,
              "name"=> "Quatro Pontes",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4120903,
              "name"=> "Quedas do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121000,
              "name"=> "Querência do Norte",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121109,
              "name"=> "Quinta do Sol",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121208,
              "name"=> "Quitandinha",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121257,
              "name"=> "Ramilândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121307,
              "name"=> "Rancho Alegre",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121356,
              "name"=> "Rancho Alegre d`Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121406,
              "name"=> "Realeza",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121505,
              "name"=> "Rebouças",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121604,
              "name"=> "Renascença",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121703,
              "name"=> "Reserva",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121752,
              "name"=> "Reserva do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121802,
              "name"=> "Ribeirão Claro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4121901,
              "name"=> "Ribeirão do Pinhal",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122008,
              "name"=> "Rio Azul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122107,
              "name"=> "Rio Bom",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122156,
              "name"=> "Rio Bonito do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122172,
              "name"=> "Rio Branco do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122206,
              "name"=> "Rio Branco do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122305,
              "name"=> "Rio Negro",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122404,
              "name"=> "Rolândia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122503,
              "name"=> "Roncador",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122602,
              "name"=> "Rondon",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122651,
              "name"=> "Rosário do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122701,
              "name"=> "Sabáudia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122800,
              "name"=> "Salgado Filho",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4122909,
              "name"=> "Salto do Itararé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123006,
              "name"=> "Salto do Lontra",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123105,
              "name"=> "Santa Amélia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123204,
              "name"=> "Santa Cecília do Pavão",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123303,
              "name"=> "Santa Cruz de Monte Castelo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123402,
              "name"=> "Santa Fé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123501,
              "name"=> "Santa Helena",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123600,
              "name"=> "Santa Inês",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123709,
              "name"=> "Santa Isabel do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123808,
              "name"=> "Santa Izabel do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123824,
              "name"=> "Santa Lúcia",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123857,
              "name"=> "Santa Maria do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123907,
              "name"=> "Santa Mariana",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4123956,
              "name"=> "Santa Mônica",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124004,
              "name"=> "Santana do Itararé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124020,
              "name"=> "Santa Tereza do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124053,
              "name"=> "Santa Terezinha de Itaipu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124103,
              "name"=> "Santo Antônio da Platina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124202,
              "name"=> "Santo Antônio do Caiuá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124301,
              "name"=> "Santo Antônio do Paraíso",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124400,
              "name"=> "Santo Antônio do Sudoeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124509,
              "name"=> "Santo Inácio",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124608,
              "name"=> "São Carlos do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124707,
              "name"=> "São Jerônimo da Serra",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124806,
              "name"=> "São João",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4124905,
              "name"=> "São João do Caiuá",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125001,
              "name"=> "São João do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125100,
              "name"=> "São João do Triunfo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125209,
              "name"=> "São Jorge d`Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125308,
              "name"=> "São Jorge do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125357,
              "name"=> "São Jorge do Patrocínio",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125407,
              "name"=> "São José da Boa Vista",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125456,
              "name"=> "São José das Palmeiras",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125506,
              "name"=> "São José dos Pinhais",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125555,
              "name"=> "São Manoel do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125605,
              "name"=> "São Mateus do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125704,
              "name"=> "São Miguel do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125753,
              "name"=> "São Pedro do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125803,
              "name"=> "São Pedro do Ivaí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4125902,
              "name"=> "São Pedro do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126009,
              "name"=> "São Sebastião da Amoreira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126108,
              "name"=> "São Tomé",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126207,
              "name"=> "Sapopema",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126256,
              "name"=> "Sarandi",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126272,
              "name"=> "Saudade do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126306,
              "name"=> "Sengés",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126355,
              "name"=> "Serranópolis do Iguaçu",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126405,
              "name"=> "Sertaneja",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126504,
              "name"=> "Sertanópolis",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126603,
              "name"=> "Siqueira Campos",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126652,
              "name"=> "Sulina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126678,
              "name"=> "Tamarana",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126702,
              "name"=> "Tamboara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126801,
              "name"=> "Tapejara",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4126900,
              "name"=> "Tapira",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127007,
              "name"=> "Teixeira Soares",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127106,
              "name"=> "Telêmaco Borba",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127205,
              "name"=> "Terra Boa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127304,
              "name"=> "Terra Rica",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127403,
              "name"=> "Terra Roxa",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127502,
              "name"=> "Tibagi",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127601,
              "name"=> "Tijucas do Sul",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127700,
              "name"=> "Toledo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127809,
              "name"=> "Tomazina",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127858,
              "name"=> "Três Barras do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127882,
              "name"=> "Tunas do Paraná",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127908,
              "name"=> "Tuneiras do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127957,
              "name"=> "Tupãssi",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4127965,
              "name"=> "Turvo",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128005,
              "name"=> "Ubiratã",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128104,
              "name"=> "Umuarama",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128203,
              "name"=> "União da Vitória",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128302,
              "name"=> "Uniflor",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128401,
              "name"=> "Uraí",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128500,
              "name"=> "Wenceslau Braz",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128534,
              "name"=> "Ventania",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128559,
              "name"=> "Vera Cruz do Oeste",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128609,
              "name"=> "Verê",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128625,
              "name"=> "Alto Paraíso",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128633,
              "name"=> "Doutor Ulysses",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128658,
              "name"=> "Virmond",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128708,
              "name"=> "Vitorino",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4128807,
              "name"=> "Xambrê",
              "brazilstate_id"=> 41
            ],
            [
              "id"=> 4200051,
              "name"=> "Abdon Batista",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200101,
              "name"=> "Abelardo Luz",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200200,
              "name"=> "Agrolândia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200309,
              "name"=> "Agronômica",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200408,
              "name"=> "Água Doce",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200507,
              "name"=> "Águas de Chapecó",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200556,
              "name"=> "Águas Frias",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200606,
              "name"=> "Águas Mornas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200705,
              "name"=> "Alfredo Wagner",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200754,
              "name"=> "Alto Bela Vista",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200804,
              "name"=> "Anchieta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4200903,
              "name"=> "Angelina",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201000,
              "name"=> "Anita Garibaldi",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201109,
              "name"=> "Anitápolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201208,
              "name"=> "Antônio Carlos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201257,
              "name"=> "Apiúna",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201273,
              "name"=> "Arabutã",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201307,
              "name"=> "Araquari",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201406,
              "name"=> "Araranguá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201505,
              "name"=> "Armazém",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201604,
              "name"=> "Arroio Trinta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201653,
              "name"=> "Arvoredo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201703,
              "name"=> "Ascurra",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201802,
              "name"=> "Atalanta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201901,
              "name"=> "Aurora",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4201950,
              "name"=> "Balneário Arroio do Silva",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202008,
              "name"=> "Balneário Camboriú",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202057,
              "name"=> "Balneário Barra do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202073,
              "name"=> "Balneário Gaivota",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202081,
              "name"=> "Bandeirante",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202099,
              "name"=> "Barra Bonita",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202107,
              "name"=> "Barra Velha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202131,
              "name"=> "Bela Vista do Toldo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202156,
              "name"=> "Belmonte",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202206,
              "name"=> "Benedito Novo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202305,
              "name"=> "Biguaçu",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202404,
              "name"=> "Blumenau",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202438,
              "name"=> "Bocaina do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202453,
              "name"=> "Bombinhas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202503,
              "name"=> "Bom Jardim da Serra",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202537,
              "name"=> "Bom Jesus",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202578,
              "name"=> "Bom Jesus do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202602,
              "name"=> "Bom Retiro",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202701,
              "name"=> "Botuverá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202800,
              "name"=> "Braço do Norte",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202859,
              "name"=> "Braço do Trombudo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202875,
              "name"=> "Brunópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4202909,
              "name"=> "Brusque",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203006,
              "name"=> "Caçador",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203105,
              "name"=> "Caibi",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203154,
              "name"=> "Calmon",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203204,
              "name"=> "Camboriú",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203253,
              "name"=> "Capão Alto",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203303,
              "name"=> "Campo Alegre",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203402,
              "name"=> "Campo Belo do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203501,
              "name"=> "Campo Erê",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203600,
              "name"=> "Campos Novos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203709,
              "name"=> "Canelinha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203808,
              "name"=> "Canoinhas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203907,
              "name"=> "Capinzal",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4203956,
              "name"=> "Capivari de Baixo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204004,
              "name"=> "Catanduvas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204103,
              "name"=> "Caxambu do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204152,
              "name"=> "Celso Ramos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204178,
              "name"=> "Cerro Negro",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204194,
              "name"=> "Chapadão do Lageado",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204202,
              "name"=> "Chapecó",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204251,
              "name"=> "Cocal do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204301,
              "name"=> "Concórdia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204350,
              "name"=> "Cordilheira Alta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204400,
              "name"=> "Coronel Freitas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204459,
              "name"=> "Coronel Martins",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204509,
              "name"=> "Corupá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204558,
              "name"=> "Correia Pinto",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204608,
              "name"=> "Criciúma",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204707,
              "name"=> "Cunha Porã",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204756,
              "name"=> "Cunhataí",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204806,
              "name"=> "Curitibanos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4204905,
              "name"=> "Descanso",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205001,
              "name"=> "Dionísio Cerqueira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205100,
              "name"=> "Dona Emma",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205159,
              "name"=> "Doutor Pedrinho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205175,
              "name"=> "Entre Rios",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205191,
              "name"=> "Ermo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205209,
              "name"=> "Erval Velho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205308,
              "name"=> "Faxinal dos Guedes",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205357,
              "name"=> "Flor do Sertão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205407,
              "name"=> "Florianópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205431,
              "name"=> "Formosa do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205456,
              "name"=> "Forquilhinha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205506,
              "name"=> "Fraiburgo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205555,
              "name"=> "Frei Rogério",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205605,
              "name"=> "Galvão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205704,
              "name"=> "Garopaba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205803,
              "name"=> "Garuva",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4205902,
              "name"=> "Gaspar",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206009,
              "name"=> "Governador Celso Ramos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206108,
              "name"=> "Grão Pará",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206207,
              "name"=> "Gravatal",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206306,
              "name"=> "Guabiruba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206405,
              "name"=> "Guaraciaba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206504,
              "name"=> "Guaramirim",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206603,
              "name"=> "Guarujá do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206652,
              "name"=> "Guatambú",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206702,
              "name"=> "Herval d`Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206751,
              "name"=> "Ibiam",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206801,
              "name"=> "Ibicaré",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4206900,
              "name"=> "Ibirama",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207007,
              "name"=> "Içara",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207106,
              "name"=> "Ilhota",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207205,
              "name"=> "Imaruí",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207304,
              "name"=> "Imbituba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207403,
              "name"=> "Imbuia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207502,
              "name"=> "Indaial",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207577,
              "name"=> "Iomerê",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207601,
              "name"=> "Ipira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207650,
              "name"=> "Iporã do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207684,
              "name"=> "Ipuaçu",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207700,
              "name"=> "Ipumirim",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207759,
              "name"=> "Iraceminha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207809,
              "name"=> "Irani",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207858,
              "name"=> "Irati",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4207908,
              "name"=> "Irineópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208005,
              "name"=> "Itá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208104,
              "name"=> "Itaiópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208203,
              "name"=> "Itajaí",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208302,
              "name"=> "Itapema",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208401,
              "name"=> "Itapiranga",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208450,
              "name"=> "Itapoá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208500,
              "name"=> "Ituporanga",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208609,
              "name"=> "Jaborá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208708,
              "name"=> "Jacinto Machado",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208807,
              "name"=> "Jaguaruna",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208906,
              "name"=> "Jaraguá do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4208955,
              "name"=> "Jardinópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209003,
              "name"=> "Joaçaba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209102,
              "name"=> "Joinville",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209151,
              "name"=> "José Boiteux",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209177,
              "name"=> "Jupiá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209201,
              "name"=> "Lacerdópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209300,
              "name"=> "Lages",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209409,
              "name"=> "Laguna",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209458,
              "name"=> "Lajeado Grande",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209508,
              "name"=> "Laurentino",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209607,
              "name"=> "Lauro Muller",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209706,
              "name"=> "Lebon Régis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209805,
              "name"=> "Leoberto Leal",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209854,
              "name"=> "Lindóia do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4209904,
              "name"=> "Lontras",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210001,
              "name"=> "Luiz Alves",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210035,
              "name"=> "Luzerna",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210050,
              "name"=> "Macieira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210100,
              "name"=> "Mafra",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210209,
              "name"=> "Major Gercino",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210308,
              "name"=> "Major Vieira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210407,
              "name"=> "Maracajá",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210506,
              "name"=> "Maravilha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210555,
              "name"=> "Marema",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210605,
              "name"=> "Massaranduba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210704,
              "name"=> "Matos Costa",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210803,
              "name"=> "Meleiro",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210852,
              "name"=> "Mirim Doce",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4210902,
              "name"=> "Modelo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211009,
              "name"=> "Mondaí",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211058,
              "name"=> "Monte Carlo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211108,
              "name"=> "Monte Castelo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211207,
              "name"=> "Morro da Fumaça",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211256,
              "name"=> "Morro Grande",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211306,
              "name"=> "Navegantes",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211405,
              "name"=> "Nova Erechim",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211454,
              "name"=> "Nova Itaberaba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211504,
              "name"=> "Nova Trento",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211603,
              "name"=> "Nova Veneza",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211652,
              "name"=> "Novo Horizonte",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211702,
              "name"=> "Orleans",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211751,
              "name"=> "Otacílio Costa",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211801,
              "name"=> "Ouro",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211850,
              "name"=> "Ouro Verde",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211876,
              "name"=> "Paial",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211892,
              "name"=> "Painel",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4211900,
              "name"=> "Palhoça",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212007,
              "name"=> "Palma Sola",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212056,
              "name"=> "Palmeira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212106,
              "name"=> "Palmitos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212205,
              "name"=> "Papanduva",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212239,
              "name"=> "Paraíso",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212254,
              "name"=> "Passo de Torres",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212270,
              "name"=> "Passos Maia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212304,
              "name"=> "Paulo Lopes",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212403,
              "name"=> "Pedras Grandes",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212502,
              "name"=> "Penha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212601,
              "name"=> "Peritiba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212650,
              "name"=> "Pescaria Brava",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212700,
              "name"=> "Petrolândia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212809,
              "name"=> "Balneário Piçarras",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4212908,
              "name"=> "Pinhalzinho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213005,
              "name"=> "Pinheiro Preto",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213104,
              "name"=> "Piratuba",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213153,
              "name"=> "Planalto Alegre",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213203,
              "name"=> "Pomerode",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213302,
              "name"=> "Ponte Alta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213351,
              "name"=> "Ponte Alta do Norte",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213401,
              "name"=> "Ponte Serrada",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213500,
              "name"=> "Porto Belo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213609,
              "name"=> "Porto União",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213708,
              "name"=> "Pouso Redondo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213807,
              "name"=> "Praia Grande",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4213906,
              "name"=> "Presidente Castello Branco",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214003,
              "name"=> "Presidente Getúlio",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214102,
              "name"=> "Presidente Nereu",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214151,
              "name"=> "Princesa",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214201,
              "name"=> "Quilombo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214300,
              "name"=> "Rancho Queimado",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214409,
              "name"=> "Rio das Antas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214508,
              "name"=> "Rio do Campo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214607,
              "name"=> "Rio do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214706,
              "name"=> "Rio dos Cedros",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214805,
              "name"=> "Rio do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4214904,
              "name"=> "Rio Fortuna",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215000,
              "name"=> "Rio Negrinho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215059,
              "name"=> "Rio Rufino",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215075,
              "name"=> "Riqueza",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215109,
              "name"=> "Rodeio",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215208,
              "name"=> "Romelândia",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215307,
              "name"=> "Salete",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215356,
              "name"=> "Saltinho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215406,
              "name"=> "Salto Veloso",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215455,
              "name"=> "Sangão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215505,
              "name"=> "Santa Cecília",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215554,
              "name"=> "Santa Helena",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215604,
              "name"=> "Santa Rosa de Lima",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215653,
              "name"=> "Santa Rosa do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215679,
              "name"=> "Santa Terezinha",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215687,
              "name"=> "Santa Terezinha do Progresso",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215695,
              "name"=> "Santiago do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215703,
              "name"=> "Santo Amaro da Imperatriz",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215752,
              "name"=> "São Bernardino",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215802,
              "name"=> "São Bento do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4215901,
              "name"=> "São Bonifácio",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216008,
              "name"=> "São Carlos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216057,
              "name"=> "São Cristovão do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216107,
              "name"=> "São Domingos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216206,
              "name"=> "São Francisco do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216255,
              "name"=> "São João do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216305,
              "name"=> "São João Batista",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216354,
              "name"=> "São João do Itaperiú",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216404,
              "name"=> "São João do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216503,
              "name"=> "São Joaquim",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216602,
              "name"=> "São José",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216701,
              "name"=> "São José do Cedro",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216800,
              "name"=> "São José do Cerrito",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4216909,
              "name"=> "São Lourenço do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217006,
              "name"=> "São Ludgero",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217105,
              "name"=> "São Martinho",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217154,
              "name"=> "São Miguel da Boa Vista",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217204,
              "name"=> "São Miguel do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217253,
              "name"=> "São Pedro de Alcântara",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217303,
              "name"=> "Saudades",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217402,
              "name"=> "Schroeder",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217501,
              "name"=> "Seara",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217550,
              "name"=> "Serra Alta",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217600,
              "name"=> "Siderópolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217709,
              "name"=> "Sombrio",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217758,
              "name"=> "Sul Brasil",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217808,
              "name"=> "Taió",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217907,
              "name"=> "Tangará",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4217956,
              "name"=> "Tigrinhos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218004,
              "name"=> "Tijucas",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218103,
              "name"=> "Timbé do Sul",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218202,
              "name"=> "Timbó",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218251,
              "name"=> "Timbó Grande",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218301,
              "name"=> "Três Barras",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218350,
              "name"=> "Treviso",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218400,
              "name"=> "Treze de Maio",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218509,
              "name"=> "Treze Tílias",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218608,
              "name"=> "Trombudo Central",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218707,
              "name"=> "Tubarão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218756,
              "name"=> "Tunápolis",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218806,
              "name"=> "Turvo",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218855,
              "name"=> "União do Oeste",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218905,
              "name"=> "Urubici",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4218954,
              "name"=> "Urupema",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219002,
              "name"=> "Urussanga",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219101,
              "name"=> "Vargeão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219150,
              "name"=> "Vargem",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219176,
              "name"=> "Vargem Bonita",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219200,
              "name"=> "Vidal Ramos",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219309,
              "name"=> "Videira",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219358,
              "name"=> "Vitor Meireles",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219408,
              "name"=> "Witmarsum",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219507,
              "name"=> "Xanxerê",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219606,
              "name"=> "Xavantina",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219705,
              "name"=> "Xaxim",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4219853,
              "name"=> "Zortéa",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4220000,
              "name"=> "Balneário Rincão",
              "brazilstate_id"=> 42
            ],
            [
              "id"=> 4300034,
              "name"=> "Aceguá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300059,
              "name"=> "Água Santa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300109,
              "name"=> "Agudo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300208,
              "name"=> "Ajuricaba",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300307,
              "name"=> "Alecrim",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300406,
              "name"=> "Alegrete",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300455,
              "name"=> "Alegria",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300471,
              "name"=> "Almirante Tamandaré do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300505,
              "name"=> "Alpestre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300554,
              "name"=> "Alto Alegre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300570,
              "name"=> "Alto Feliz",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300604,
              "name"=> "Alvorada",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300638,
              "name"=> "Amaral Ferrador",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300646,
              "name"=> "Ametista do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300661,
              "name"=> "André da Rocha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300703,
              "name"=> "Anta Gorda",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300802,
              "name"=> "Antônio Prado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300851,
              "name"=> "Arambaré",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300877,
              "name"=> "Araricá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4300901,
              "name"=> "Aratiba",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301008,
              "name"=> "Arroio do Meio",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301057,
              "name"=> "Arroio do Sal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301073,
              "name"=> "Arroio do Padre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301107,
              "name"=> "Arroio dos Ratos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301206,
              "name"=> "Arroio do Tigre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301305,
              "name"=> "Arroio Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301404,
              "name"=> "Arvorezinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301503,
              "name"=> "Augusto Pestana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301552,
              "name"=> "Áurea",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301602,
              "name"=> "Bagé",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301636,
              "name"=> "Balneário Pinhal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301651,
              "name"=> "Barão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301701,
              "name"=> "Barão de Cotegipe",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301750,
              "name"=> "Barão do Triunfo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301800,
              "name"=> "Barracão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301859,
              "name"=> "Barra do Guarita",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301875,
              "name"=> "Barra do Quaraí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301909,
              "name"=> "Barra do Ribeiro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301925,
              "name"=> "Barra do Rio Azul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4301958,
              "name"=> "Barra Funda",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302006,
              "name"=> "Barros Cassal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302055,
              "name"=> "Benjamin Constant do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302105,
              "name"=> "Bento Gonçalves",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302154,
              "name"=> "Boa Vista das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302204,
              "name"=> "Boa Vista do Buricá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302220,
              "name"=> "Boa Vista do Cadeado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302238,
              "name"=> "Boa Vista do Incra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302253,
              "name"=> "Boa Vista do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302303,
              "name"=> "Bom Jesus",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302352,
              "name"=> "Bom Princípio",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302378,
              "name"=> "Bom Progresso",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302402,
              "name"=> "Bom Retiro do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302451,
              "name"=> "Boqueirão do Leão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302501,
              "name"=> "Bossoroca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302584,
              "name"=> "Bozano",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302600,
              "name"=> "Braga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302659,
              "name"=> "Brochier",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302709,
              "name"=> "Butiá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302808,
              "name"=> "Caçapava do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4302907,
              "name"=> "Cacequi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303004,
              "name"=> "Cachoeira do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303103,
              "name"=> "Cachoeirinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303202,
              "name"=> "Cacique Doble",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303301,
              "name"=> "Caibaté",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303400,
              "name"=> "Caiçara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303509,
              "name"=> "Camaquã",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303558,
              "name"=> "Camargo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303608,
              "name"=> "Cambará do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303673,
              "name"=> "Campestre da Serra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303707,
              "name"=> "Campina das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303806,
              "name"=> "Campinas do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4303905,
              "name"=> "Campo Bom",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304002,
              "name"=> "Campo Novo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304101,
              "name"=> "Campos Borges",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304200,
              "name"=> "Candelária",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304309,
              "name"=> "Cândido Godói",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304358,
              "name"=> "Candiota",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304408,
              "name"=> "Canela",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304507,
              "name"=> "Canguçu",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304606,
              "name"=> "Canoas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304614,
              "name"=> "Canudos do Vale",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304622,
              "name"=> "Capão Bonito do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304630,
              "name"=> "Capão da Canoa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304655,
              "name"=> "Capão do Cipó",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304663,
              "name"=> "Capão do Leão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304671,
              "name"=> "Capivari do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304689,
              "name"=> "Capela de Santana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304697,
              "name"=> "Capitão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304705,
              "name"=> "Carazinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304713,
              "name"=> "Caraá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304804,
              "name"=> "Carlos Barbosa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304853,
              "name"=> "Carlos Gomes",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304903,
              "name"=> "Casca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4304952,
              "name"=> "Caseiros",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305009,
              "name"=> "Catuípe",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305108,
              "name"=> "Caxias do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305116,
              "name"=> "Centenário",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305124,
              "name"=> "Cerrito",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305132,
              "name"=> "Cerro Branco",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305157,
              "name"=> "Cerro Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305173,
              "name"=> "Cerro Grande do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305207,
              "name"=> "Cerro Largo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305306,
              "name"=> "Chapada",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305355,
              "name"=> "Charqueadas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305371,
              "name"=> "Charrua",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305405,
              "name"=> "Chiapetta",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305439,
              "name"=> "Chuí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305447,
              "name"=> "Chuvisca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305454,
              "name"=> "Cidreira",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305504,
              "name"=> "Ciríaco",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305587,
              "name"=> "Colinas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305603,
              "name"=> "Colorado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305702,
              "name"=> "Condor",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305801,
              "name"=> "Constantina",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305835,
              "name"=> "Coqueiro Baixo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305850,
              "name"=> "Coqueiros do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305871,
              "name"=> "Coronel Barros",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305900,
              "name"=> "Coronel Bicaco",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305934,
              "name"=> "Coronel Pilar",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305959,
              "name"=> "Cotiporã",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4305975,
              "name"=> "Coxilha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306007,
              "name"=> "Crissiumal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306056,
              "name"=> "Cristal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306072,
              "name"=> "Cristal do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306106,
              "name"=> "Cruz Alta",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306130,
              "name"=> "Cruzaltense",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306205,
              "name"=> "Cruzeiro do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306304,
              "name"=> "David Canabarro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306320,
              "name"=> "Derrubadas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306353,
              "name"=> "Dezesseis de Novembro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306379,
              "name"=> "Dilermando de Aguiar",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306403,
              "name"=> "Dois Irmãos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306429,
              "name"=> "Dois Irmãos das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306452,
              "name"=> "Dois Lajeados",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306502,
              "name"=> "Dom Feliciano",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306551,
              "name"=> "Dom Pedro de Alcântara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306601,
              "name"=> "Dom Pedrito",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306700,
              "name"=> "Dona Francisca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306734,
              "name"=> "Doutor Maurício Cardoso",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306759,
              "name"=> "Doutor Ricardo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306767,
              "name"=> "Eldorado do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306809,
              "name"=> "Encantado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306908,
              "name"=> "Encruzilhada do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306924,
              "name"=> "Engenho Velho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306932,
              "name"=> "Entre-Ijuís",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306957,
              "name"=> "Entre Rios do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4306973,
              "name"=> "Erebango",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307005,
              "name"=> "Erechim",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307054,
              "name"=> "Ernestina",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307104,
              "name"=> "Herval",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307203,
              "name"=> "Erval Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307302,
              "name"=> "Erval Seco",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307401,
              "name"=> "Esmeralda",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307450,
              "name"=> "Esperança do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307500,
              "name"=> "Espumoso",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307559,
              "name"=> "Estação",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307609,
              "name"=> "Estância Velha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307708,
              "name"=> "Esteio",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307807,
              "name"=> "Estrela",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307815,
              "name"=> "Estrela Velha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307831,
              "name"=> "Eugênio de Castro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307864,
              "name"=> "Fagundes Varela",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4307906,
              "name"=> "Farroupilha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308003,
              "name"=> "Faxinal do Soturno",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308052,
              "name"=> "Faxinalzinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308078,
              "name"=> "Fazenda Vilanova",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308102,
              "name"=> "Feliz",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308201,
              "name"=> "Flores da Cunha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308250,
              "name"=> "Floriano Peixoto",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308300,
              "name"=> "Fontoura Xavier",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308409,
              "name"=> "Formigueiro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308433,
              "name"=> "Forquetinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308458,
              "name"=> "Fortaleza dos Valos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308508,
              "name"=> "Frederico Westphalen",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308607,
              "name"=> "Garibaldi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308656,
              "name"=> "Garruchos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308706,
              "name"=> "Gaurama",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308805,
              "name"=> "General Câmara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308854,
              "name"=> "Gentil",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4308904,
              "name"=> "Getúlio Vargas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309001,
              "name"=> "Giruá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309050,
              "name"=> "Glorinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309100,
              "name"=> "Gramado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309126,
              "name"=> "Gramado dos Loureiros",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309159,
              "name"=> "Gramado Xavier",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309209,
              "name"=> "Gravataí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309258,
              "name"=> "Guabiju",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309308,
              "name"=> "Guaíba",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309407,
              "name"=> "Guaporé",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309506,
              "name"=> "Guarani das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309555,
              "name"=> "Harmonia",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309571,
              "name"=> "Herveiras",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309605,
              "name"=> "Horizontina",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309654,
              "name"=> "Hulha Negra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309704,
              "name"=> "Humaitá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309753,
              "name"=> "Ibarama",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309803,
              "name"=> "Ibiaçá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309902,
              "name"=> "Ibiraiaras",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4309951,
              "name"=> "Ibirapuitã",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310009,
              "name"=> "Ibirubá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310108,
              "name"=> "Igrejinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310207,
              "name"=> "Ijuí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310306,
              "name"=> "Ilópolis",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310330,
              "name"=> "Imbé",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310363,
              "name"=> "Imigrante",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310405,
              "name"=> "Independência",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310413,
              "name"=> "Inhacorá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310439,
              "name"=> "Ipê",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310462,
              "name"=> "Ipiranga do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310504,
              "name"=> "Iraí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310538,
              "name"=> "Itaara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310553,
              "name"=> "Itacurubi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310579,
              "name"=> "Itapuca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310603,
              "name"=> "Itaqui",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310652,
              "name"=> "Itati",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310702,
              "name"=> "Itatiba do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310751,
              "name"=> "Ivorá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310801,
              "name"=> "Ivoti",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310850,
              "name"=> "Jaboticaba",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310876,
              "name"=> "Jacuizinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4310900,
              "name"=> "Jacutinga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311007,
              "name"=> "Jaguarão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311106,
              "name"=> "Jaguari",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311122,
              "name"=> "Jaquirana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311130,
              "name"=> "Jari",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311155,
              "name"=> "Jóia",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311205,
              "name"=> "Júlio de Castilhos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311239,
              "name"=> "Lagoa Bonita do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311254,
              "name"=> "Lagoão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311270,
              "name"=> "Lagoa dos Três Cantos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311304,
              "name"=> "Lagoa Vermelha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311403,
              "name"=> "Lajeado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311429,
              "name"=> "Lajeado do Bugre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311502,
              "name"=> "Lavras do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311601,
              "name"=> "Liberato Salzano",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311627,
              "name"=> "Lindolfo Collor",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311643,
              "name"=> "Linha Nova",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311700,
              "name"=> "Machadinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311718,
              "name"=> "Maçambara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311734,
              "name"=> "Mampituba",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311759,
              "name"=> "Manoel Viana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311775,
              "name"=> "Maquiné",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311791,
              "name"=> "Maratá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311809,
              "name"=> "Marau",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311908,
              "name"=> "Marcelino Ramos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4311981,
              "name"=> "Mariana Pimentel",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312005,
              "name"=> "Mariano Moro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312054,
              "name"=> "Marques de Souza",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312104,
              "name"=> "Mata",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312138,
              "name"=> "Mato Castelhano",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312153,
              "name"=> "Mato Leitão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312179,
              "name"=> "Mato Queimado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312203,
              "name"=> "Maximiliano de Almeida",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312252,
              "name"=> "Minas do Leão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312302,
              "name"=> "Miraguaí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312351,
              "name"=> "Montauri",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312377,
              "name"=> "Monte Alegre dos Campos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312385,
              "name"=> "Monte Belo do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312401,
              "name"=> "Montenegro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312427,
              "name"=> "Mormaço",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312443,
              "name"=> "Morrinhos do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312450,
              "name"=> "Morro Redondo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312476,
              "name"=> "Morro Reuter",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312500,
              "name"=> "Mostardas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312609,
              "name"=> "Muçum",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312617,
              "name"=> "Muitos Capões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312625,
              "name"=> "Muliterno",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312658,
              "name"=> "Não-Me-Toque",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312674,
              "name"=> "Nicolau Vergueiro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312708,
              "name"=> "Nonoai",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312757,
              "name"=> "Nova Alvorada",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312807,
              "name"=> "Nova Araçá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312906,
              "name"=> "Nova Bassano",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4312955,
              "name"=> "Nova Boa Vista",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313003,
              "name"=> "Nova Bréscia",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313011,
              "name"=> "Nova Candelária",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313037,
              "name"=> "Nova Esperança do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313060,
              "name"=> "Nova Hartz",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313086,
              "name"=> "Nova Pádua",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313102,
              "name"=> "Nova Palma",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313201,
              "name"=> "Nova Petrópolis",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313300,
              "name"=> "Nova Prata",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313334,
              "name"=> "Nova Ramada",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313359,
              "name"=> "Nova Roma do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313375,
              "name"=> "Nova Santa Rita",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313391,
              "name"=> "Novo Cabrais",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313409,
              "name"=> "Novo Hamburgo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313425,
              "name"=> "Novo Machado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313441,
              "name"=> "Novo Tiradentes",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313466,
              "name"=> "Novo Xingu",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313490,
              "name"=> "Novo Barreiro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313508,
              "name"=> "Osório",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313607,
              "name"=> "Paim Filho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313656,
              "name"=> "Palmares do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313706,
              "name"=> "Palmeira das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313805,
              "name"=> "Palmitinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313904,
              "name"=> "Panambi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4313953,
              "name"=> "Pantano Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314001,
              "name"=> "Paraí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314027,
              "name"=> "Paraíso do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314035,
              "name"=> "Pareci Novo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314050,
              "name"=> "Parobé",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314068,
              "name"=> "Passa Sete",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314076,
              "name"=> "Passo do Sobrado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314100,
              "name"=> "Passo Fundo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314134,
              "name"=> "Paulo Bento",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314159,
              "name"=> "Paverama",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314175,
              "name"=> "Pedras Altas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314209,
              "name"=> "Pedro Osório",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314308,
              "name"=> "Pejuçara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314407,
              "name"=> "Pelotas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314423,
              "name"=> "Picada Café",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314456,
              "name"=> "Pinhal",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314464,
              "name"=> "Pinhal da Serra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314472,
              "name"=> "Pinhal Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314498,
              "name"=> "Pinheirinho do Vale",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314506,
              "name"=> "Pinheiro Machado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314548,
              "name"=> "Pinto Bandeira",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314555,
              "name"=> "Pirapó",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314605,
              "name"=> "Piratini",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314704,
              "name"=> "Planalto",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314753,
              "name"=> "Poço das Antas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314779,
              "name"=> "Pontão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314787,
              "name"=> "Ponte Preta",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314803,
              "name"=> "Portão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4314902,
              "name"=> "Porto Alegre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315008,
              "name"=> "Porto Lucena",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315057,
              "name"=> "Porto Mauá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315073,
              "name"=> "Porto Vera Cruz",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315107,
              "name"=> "Porto Xavier",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315131,
              "name"=> "Pouso Novo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315149,
              "name"=> "Presidente Lucena",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315156,
              "name"=> "Progresso",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315172,
              "name"=> "Protásio Alves",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315206,
              "name"=> "Putinga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315305,
              "name"=> "Quaraí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315313,
              "name"=> "Quatro Irmãos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315321,
              "name"=> "Quevedos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315354,
              "name"=> "Quinze de Novembro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315404,
              "name"=> "Redentora",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315453,
              "name"=> "Relvado",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315503,
              "name"=> "Restinga Seca",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315552,
              "name"=> "Rio dos Índios",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315602,
              "name"=> "Rio Grande",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315701,
              "name"=> "Rio Pardo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315750,
              "name"=> "Riozinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315800,
              "name"=> "Roca Sales",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315909,
              "name"=> "Rodeio Bonito",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4315958,
              "name"=> "Rolador",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316006,
              "name"=> "Rolante",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316105,
              "name"=> "Ronda Alta",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316204,
              "name"=> "Rondinha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316303,
              "name"=> "Roque Gonzales",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316402,
              "name"=> "Rosário do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316428,
              "name"=> "Sagrada Família",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316436,
              "name"=> "Saldanha Marinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316451,
              "name"=> "Salto do Jacuí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316477,
              "name"=> "Salvador das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316501,
              "name"=> "Salvador do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316600,
              "name"=> "Sananduva",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316709,
              "name"=> "Santa Bárbara do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316733,
              "name"=> "Santa Cecília do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316758,
              "name"=> "Santa Clara do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316808,
              "name"=> "Santa Cruz do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316907,
              "name"=> "Santa Maria",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316956,
              "name"=> "Santa Maria do Herval",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4316972,
              "name"=> "Santa Margarida do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317004,
              "name"=> "Santana da Boa Vista",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317103,
              "name"=> "Santana do Livramento",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317202,
              "name"=> "Santa Rosa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317251,
              "name"=> "Santa Tereza",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317301,
              "name"=> "Santa Vitória do Palmar",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317400,
              "name"=> "Santiago",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317509,
              "name"=> "Santo Ângelo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317558,
              "name"=> "Santo Antônio do Palma",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317608,
              "name"=> "Santo Antônio da Patrulha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317707,
              "name"=> "Santo Antônio das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317756,
              "name"=> "Santo Antônio do Planalto",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317806,
              "name"=> "Santo Augusto",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317905,
              "name"=> "Santo Cristo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4317954,
              "name"=> "Santo Expedito do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318002,
              "name"=> "São Borja",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318051,
              "name"=> "São Domingos do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318101,
              "name"=> "São Francisco de Assis",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318200,
              "name"=> "São Francisco de Paula",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318309,
              "name"=> "São Gabriel",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318408,
              "name"=> "São Jerônimo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318424,
              "name"=> "São João da Urtiga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318432,
              "name"=> "São João do Polêsine",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318440,
              "name"=> "São Jorge",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318457,
              "name"=> "São José das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318465,
              "name"=> "São José do Herval",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318481,
              "name"=> "São José do Hortêncio",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318499,
              "name"=> "São José do Inhacorá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318507,
              "name"=> "São José do Norte",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318606,
              "name"=> "São José do Ouro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318614,
              "name"=> "São José do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318622,
              "name"=> "São José dos Ausentes",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318705,
              "name"=> "São Leopoldo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318804,
              "name"=> "São Lourenço do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4318903,
              "name"=> "São Luiz Gonzaga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319000,
              "name"=> "São Marcos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319109,
              "name"=> "São Martinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319125,
              "name"=> "São Martinho da Serra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319158,
              "name"=> "São Miguel das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319208,
              "name"=> "São Nicolau",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319307,
              "name"=> "São Paulo das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319356,
              "name"=> "São Pedro da Serra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319364,
              "name"=> "São Pedro das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319372,
              "name"=> "São Pedro do Butiá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319406,
              "name"=> "São Pedro do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319505,
              "name"=> "São Sebastião do Caí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319604,
              "name"=> "São Sepé",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319703,
              "name"=> "São Valentim",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319711,
              "name"=> "São Valentim do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319737,
              "name"=> "São Valério do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319752,
              "name"=> "São Vendelino",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319802,
              "name"=> "São Vicente do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4319901,
              "name"=> "Sapiranga",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320008,
              "name"=> "Sapucaia do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320107,
              "name"=> "Sarandi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320206,
              "name"=> "Seberi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320230,
              "name"=> "Sede Nova",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320263,
              "name"=> "Segredo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320305,
              "name"=> "Selbach",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320321,
              "name"=> "Senador Salgado Filho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320354,
              "name"=> "Sentinela do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320404,
              "name"=> "Serafina Corrêa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320453,
              "name"=> "Sério",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320503,
              "name"=> "Sertão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320552,
              "name"=> "Sertão Santana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320578,
              "name"=> "Sete de Setembro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320602,
              "name"=> "Severiano de Almeida",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320651,
              "name"=> "Silveira Martins",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320677,
              "name"=> "Sinimbu",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320701,
              "name"=> "Sobradinho",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320800,
              "name"=> "Soledade",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320859,
              "name"=> "Tabaí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4320909,
              "name"=> "Tapejara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321006,
              "name"=> "Tapera",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321105,
              "name"=> "Tapes",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321204,
              "name"=> "Taquara",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321303,
              "name"=> "Taquari",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321329,
              "name"=> "Taquaruçu do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321352,
              "name"=> "Tavares",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321402,
              "name"=> "Tenente Portela",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321436,
              "name"=> "Terra de Areia",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321451,
              "name"=> "Teutônia",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321469,
              "name"=> "Tio Hugo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321477,
              "name"=> "Tiradentes do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321493,
              "name"=> "Toropi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321501,
              "name"=> "Torres",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321600,
              "name"=> "Tramandaí",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321626,
              "name"=> "Travesseiro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321634,
              "name"=> "Três Arroios",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321667,
              "name"=> "Três Cachoeiras",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321709,
              "name"=> "Três Coroas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321808,
              "name"=> "Três de Maio",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321832,
              "name"=> "Três Forquilhas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321857,
              "name"=> "Três Palmeiras",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321907,
              "name"=> "Três Passos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4321956,
              "name"=> "Trindade do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322004,
              "name"=> "Triunfo",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322103,
              "name"=> "Tucunduva",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322152,
              "name"=> "Tunas",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322186,
              "name"=> "Tupanci do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322202,
              "name"=> "Tupanciretã",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322251,
              "name"=> "Tupandi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322301,
              "name"=> "Tuparendi",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322327,
              "name"=> "Turuçu",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322343,
              "name"=> "Ubiretama",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322350,
              "name"=> "União da Serra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322376,
              "name"=> "Unistalda",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322400,
              "name"=> "Uruguaiana",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322509,
              "name"=> "Vacaria",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322525,
              "name"=> "Vale Verde",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322533,
              "name"=> "Vale do Sol",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322541,
              "name"=> "Vale Real",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322558,
              "name"=> "Vanini",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322608,
              "name"=> "Venâncio Aires",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322707,
              "name"=> "Vera Cruz",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322806,
              "name"=> "Veranópolis",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322855,
              "name"=> "Vespasiano Correa",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4322905,
              "name"=> "Viadutos",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323002,
              "name"=> "Viamão",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323101,
              "name"=> "Vicente Dutra",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323200,
              "name"=> "Victor Graeff",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323309,
              "name"=> "Vila Flores",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323358,
              "name"=> "Vila Lângaro",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323408,
              "name"=> "Vila Maria",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323457,
              "name"=> "Vila Nova do Sul",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323507,
              "name"=> "Vista Alegre",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323606,
              "name"=> "Vista Alegre do Prata",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323705,
              "name"=> "Vista Gaúcha",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323754,
              "name"=> "Vitória das Missões",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323770,
              "name"=> "Westfália",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 4323804,
              "name"=> "Xangri-lá",
              "brazilstate_id"=> 43
            ],
            [
              "id"=> 5000203,
              "name"=> "Água Clara",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000252,
              "name"=> "Alcinópolis",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000609,
              "name"=> "Amambai",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000708,
              "name"=> "Anastácio",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000807,
              "name"=> "Anaurilândia",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000856,
              "name"=> "Angélica",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5000906,
              "name"=> "Antônio João",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5001003,
              "name"=> "Aparecida do Taboado",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5001102,
              "name"=> "Aquidauana",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5001243,
              "name"=> "Aral Moreira",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5001508,
              "name"=> "Bandeirantes",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5001904,
              "name"=> "Bataguassu",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002001,
              "name"=> "Batayporã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002100,
              "name"=> "Bela Vista",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002159,
              "name"=> "Bodoquena",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002209,
              "name"=> "Bonito",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002308,
              "name"=> "Brasilândia",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002407,
              "name"=> "Caarapó",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002605,
              "name"=> "Camapuã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002704,
              "name"=> "Campo Grande",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002803,
              "name"=> "Caracol",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002902,
              "name"=> "Cassilândia",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5002951,
              "name"=> "Chapadão do Sul",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003108,
              "name"=> "Corguinho",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003157,
              "name"=> "Coronel Sapucaia",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003207,
              "name"=> "Corumbá",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003256,
              "name"=> "Costa Rica",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003306,
              "name"=> "Coxim",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003454,
              "name"=> "Deodápolis",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003488,
              "name"=> "Dois Irmãos do Buriti",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003504,
              "name"=> "Douradina",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003702,
              "name"=> "Dourados",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003751,
              "name"=> "Eldorado",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003801,
              "name"=> "Fátima do Sul",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5003900,
              "name"=> "Figueirão",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004007,
              "name"=> "Glória de Dourados",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004106,
              "name"=> "Guia Lopes da Laguna",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004304,
              "name"=> "Iguatemi",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004403,
              "name"=> "Inocência",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004502,
              "name"=> "Itaporã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004601,
              "name"=> "Itaquiraí",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004700,
              "name"=> "Ivinhema",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004809,
              "name"=> "Japorã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5004908,
              "name"=> "Jaraguari",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005004,
              "name"=> "Jardim",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005103,
              "name"=> "Jateí",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005152,
              "name"=> "Juti",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005202,
              "name"=> "Ladário",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005251,
              "name"=> "Laguna Carapã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005400,
              "name"=> "Maracaju",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005608,
              "name"=> "Miranda",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005681,
              "name"=> "Mundo Novo",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005707,
              "name"=> "Naviraí",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5005806,
              "name"=> "Nioaque",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006002,
              "name"=> "Nova Alvorada do Sul",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006200,
              "name"=> "Nova Andradina",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006259,
              "name"=> "Novo Horizonte do Sul",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006275,
              "name"=> "Paraíso das Águas",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006309,
              "name"=> "Paranaíba",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006358,
              "name"=> "Paranhos",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006408,
              "name"=> "Pedro Gomes",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006606,
              "name"=> "Ponta Porã",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5006903,
              "name"=> "Porto Murtinho",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007109,
              "name"=> "Ribas do Rio Pardo",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007208,
              "name"=> "Rio Brilhante",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007307,
              "name"=> "Rio Negro",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007406,
              "name"=> "Rio Verde de Mato Grosso",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007505,
              "name"=> "Rochedo",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007554,
              "name"=> "Santa Rita do Pardo",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007695,
              "name"=> "São Gabriel do Oeste",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007703,
              "name"=> "Sete Quedas",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007802,
              "name"=> "Selvíria",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007901,
              "name"=> "Sidrolândia",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007935,
              "name"=> "Sonora",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007950,
              "name"=> "Tacuru",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5007976,
              "name"=> "Taquarussu",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5008008,
              "name"=> "Terenos",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5008305,
              "name"=> "Três Lagoas",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5008404,
              "name"=> "Vicentina",
              "brazilstate_id"=> 50
            ],
            [
              "id"=> 5100102,
              "name"=> "Acorizal",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100201,
              "name"=> "Água Boa",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100250,
              "name"=> "Alta Floresta",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100300,
              "name"=> "Alto Araguaia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100359,
              "name"=> "Alto Boa Vista",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100409,
              "name"=> "Alto Garças",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100508,
              "name"=> "Alto Paraguai",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100607,
              "name"=> "Alto Taquari",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5100805,
              "name"=> "Apiacás",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101001,
              "name"=> "Araguaiana",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101209,
              "name"=> "Araguainha",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101258,
              "name"=> "Araputanga",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101308,
              "name"=> "Arenápolis",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101407,
              "name"=> "Aripuanã",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101605,
              "name"=> "Barão de Melgaço",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101704,
              "name"=> "Barra do Bugres",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101803,
              "name"=> "Barra do Garças",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101852,
              "name"=> "Bom Jesus do Araguaia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5101902,
              "name"=> "Brasnorte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102504,
              "name"=> "Cáceres",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102603,
              "name"=> "Campinápolis",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102637,
              "name"=> "Campo Novo do Parecis",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102678,
              "name"=> "Campo Verde",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102686,
              "name"=> "Campos de Júlio",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102694,
              "name"=> "Canabrava do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102702,
              "name"=> "Canarana",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102793,
              "name"=> "Carlinda",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5102850,
              "name"=> "Castanheira",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103007,
              "name"=> "Chapada dos Guimarães",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103056,
              "name"=> "Cláudia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103106,
              "name"=> "Cocalinho",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103205,
              "name"=> "Colíder",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103254,
              "name"=> "Colniza",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103304,
              "name"=> "Comodoro",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103353,
              "name"=> "Confresa",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103361,
              "name"=> "Conquista d`Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103379,
              "name"=> "Cotriguaçu",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103403,
              "name"=> "Cuiabá",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103437,
              "name"=> "Curvelândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103452,
              "name"=> "Denise",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103502,
              "name"=> "Diamantino",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103601,
              "name"=> "Dom Aquino",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103700,
              "name"=> "Feliz Natal",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103809,
              "name"=> "Figueirópolis d`Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103858,
              "name"=> "Gaúcha do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103908,
              "name"=> "General Carneiro",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5103957,
              "name"=> "Glória d`Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104104,
              "name"=> "Guarantã do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104203,
              "name"=> "Guiratinga",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104500,
              "name"=> "Indiavaí",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104526,
              "name"=> "Ipiranga do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104542,
              "name"=> "Itanhangá",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104559,
              "name"=> "Itaúba",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104609,
              "name"=> "Itiquira",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104807,
              "name"=> "Jaciara",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5104906,
              "name"=> "Jangada",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105002,
              "name"=> "Jauru",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105101,
              "name"=> "Juara",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105150,
              "name"=> "Juína",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105176,
              "name"=> "Juruena",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105200,
              "name"=> "Juscimeira",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105234,
              "name"=> "Lambari d`Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105259,
              "name"=> "Lucas do Rio Verde",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105309,
              "name"=> "Luciára",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105507,
              "name"=> "Vila Bela da Santíssima Trindade",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105580,
              "name"=> "Marcelândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105606,
              "name"=> "Matupá",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105622,
              "name"=> "Mirassol d`Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5105903,
              "name"=> "Nobres",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106000,
              "name"=> "Nortelândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106109,
              "name"=> "Nossa Senhora do Livramento",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106158,
              "name"=> "Nova Bandeirantes",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106174,
              "name"=> "Nova Nazaré",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106182,
              "name"=> "Nova Lacerda",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106190,
              "name"=> "Nova Santa Helena",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106208,
              "name"=> "Nova Brasilândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106216,
              "name"=> "Nova Canaã do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106224,
              "name"=> "Nova Mutum",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106232,
              "name"=> "Nova Olímpia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106240,
              "name"=> "Nova Ubiratã",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106257,
              "name"=> "Nova Xavantina",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106265,
              "name"=> "Novo Mundo",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106273,
              "name"=> "Novo Horizonte do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106281,
              "name"=> "Novo São Joaquim",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106299,
              "name"=> "Paranaíta",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106307,
              "name"=> "Paranatinga",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106315,
              "name"=> "Novo Santo Antônio",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106372,
              "name"=> "Pedra Preta",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106422,
              "name"=> "Peixoto de Azevedo",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106455,
              "name"=> "Planalto da Serra",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106505,
              "name"=> "Poconé",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106653,
              "name"=> "Pontal do Araguaia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106703,
              "name"=> "Ponte Branca",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106752,
              "name"=> "Pontes e Lacerda",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106778,
              "name"=> "Porto Alegre do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106802,
              "name"=> "Porto dos Gaúchos",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106828,
              "name"=> "Porto Esperidião",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5106851,
              "name"=> "Porto Estrela",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107008,
              "name"=> "Poxoréo",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107040,
              "name"=> "Primavera do Leste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107065,
              "name"=> "Querência",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107107,
              "name"=> "São José dos Quatro Marcos",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107156,
              "name"=> "Reserva do Cabaçal",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107180,
              "name"=> "Ribeirão Cascalheira",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107198,
              "name"=> "Ribeirãozinho",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107206,
              "name"=> "Rio Branco",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107248,
              "name"=> "Santa Carmem",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107263,
              "name"=> "Santo Afonso",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107297,
              "name"=> "São José do Povo",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107305,
              "name"=> "São José do Rio Claro",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107354,
              "name"=> "São José do Xingu",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107404,
              "name"=> "São Pedro da Cipa",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107578,
              "name"=> "Rondolândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107602,
              "name"=> "Rondonópolis",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107701,
              "name"=> "Rosário Oeste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107743,
              "name"=> "Santa Cruz do Xingu",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107750,
              "name"=> "Salto do Céu",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107768,
              "name"=> "Santa Rita do Trivelato",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107776,
              "name"=> "Santa Terezinha",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107792,
              "name"=> "Santo Antônio do Leste",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107800,
              "name"=> "Santo Antônio do Leverger",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107859,
              "name"=> "São Félix do Araguaia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107875,
              "name"=> "Sapezal",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107883,
              "name"=> "Serra Nova Dourada",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107909,
              "name"=> "Sinop",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107925,
              "name"=> "Sorriso",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107941,
              "name"=> "Tabaporã",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5107958,
              "name"=> "Tangará da Serra",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108006,
              "name"=> "Tapurah",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108055,
              "name"=> "Terra Nova do Norte",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108105,
              "name"=> "Tesouro",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108204,
              "name"=> "Torixoréu",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108303,
              "name"=> "União do Sul",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108352,
              "name"=> "Vale de São Domingos",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108402,
              "name"=> "Várzea Grande",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108501,
              "name"=> "Vera",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108600,
              "name"=> "Vila Rica",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108808,
              "name"=> "Nova Guarita",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108857,
              "name"=> "Nova Marilândia",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108907,
              "name"=> "Nova Maringá",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5108956,
              "name"=> "Nova Monte verde",
              "brazilstate_id"=> 51
            ],
            [
              "id"=> 5200050,
              "name"=> "Abadia de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200100,
              "name"=> "Abadiânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200134,
              "name"=> "Acreúna",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200159,
              "name"=> "Adelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200175,
              "name"=> "Água Fria de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200209,
              "name"=> "Água Limpa",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200258,
              "name"=> "Águas Lindas de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200308,
              "name"=> "Alexânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200506,
              "name"=> "Aloândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200555,
              "name"=> "Alto Horizonte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200605,
              "name"=> "Alto Paraíso de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200803,
              "name"=> "Alvorada do Norte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200829,
              "name"=> "Amaralina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200852,
              "name"=> "Americano do Brasil",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5200902,
              "name"=> "Amorinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201108,
              "name"=> "Anápolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201207,
              "name"=> "Anhanguera",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201306,
              "name"=> "Anicuns",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201405,
              "name"=> "Aparecida de Goiânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201454,
              "name"=> "Aparecida do Rio Doce",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201504,
              "name"=> "Aporé",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201603,
              "name"=> "Araçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201702,
              "name"=> "Aragarças",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5201801,
              "name"=> "Aragoiânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5202155,
              "name"=> "Araguapaz",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5202353,
              "name"=> "Arenópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5202502,
              "name"=> "Aruanã",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5202601,
              "name"=> "Aurilândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5202809,
              "name"=> "Avelinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203104,
              "name"=> "Baliza",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203203,
              "name"=> "Barro Alto",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203302,
              "name"=> "Bela Vista de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203401,
              "name"=> "Bom Jardim de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203500,
              "name"=> "Bom Jesus de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203559,
              "name"=> "Bonfinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203575,
              "name"=> "Bonópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203609,
              "name"=> "Brazabrantes",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203807,
              "name"=> "Britânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203906,
              "name"=> "Buriti Alegre",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203939,
              "name"=> "Buriti de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5203962,
              "name"=> "Buritinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204003,
              "name"=> "Cabeceiras",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204102,
              "name"=> "Cachoeira Alta",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204201,
              "name"=> "Cachoeira de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204250,
              "name"=> "Cachoeira Dourada",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204300,
              "name"=> "Caçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204409,
              "name"=> "Caiapônia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204508,
              "name"=> "Caldas Novas",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204557,
              "name"=> "Caldazinha",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204607,
              "name"=> "Campestre de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204656,
              "name"=> "Campinaçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204706,
              "name"=> "Campinorte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204805,
              "name"=> "Campo Alegre de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204854,
              "name"=> "Campo Limpo de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204904,
              "name"=> "Campos Belos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5204953,
              "name"=> "Campos Verdes",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205000,
              "name"=> "Carmo do Rio Verde",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205059,
              "name"=> "Castelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205109,
              "name"=> "Catalão",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205208,
              "name"=> "Caturaí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205307,
              "name"=> "Cavalcante",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205406,
              "name"=> "Ceres",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205455,
              "name"=> "Cezarina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205471,
              "name"=> "Chapadão do Céu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205497,
              "name"=> "Cidade Ocidental",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205513,
              "name"=> "Cocalzinho de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205521,
              "name"=> "Colinas do Sul",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205703,
              "name"=> "Córrego do Ouro",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205802,
              "name"=> "Corumbá de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5205901,
              "name"=> "Corumbaíba",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206206,
              "name"=> "Cristalina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206305,
              "name"=> "Cristianópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206404,
              "name"=> "Crixás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206503,
              "name"=> "Cromínia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206602,
              "name"=> "Cumari",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206701,
              "name"=> "Damianópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206800,
              "name"=> "Damolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5206909,
              "name"=> "Davinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207105,
              "name"=> "Diorama",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207253,
              "name"=> "Doverlândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207352,
              "name"=> "Edealina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207402,
              "name"=> "Edéia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207501,
              "name"=> "Estrela do Norte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207535,
              "name"=> "Faina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207600,
              "name"=> "Fazenda Nova",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207808,
              "name"=> "Firminópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5207907,
              "name"=> "Flores de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208004,
              "name"=> "Formosa",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208103,
              "name"=> "Formoso",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208152,
              "name"=> "Gameleira de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208301,
              "name"=> "Divinópolis de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208400,
              "name"=> "Goianápolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208509,
              "name"=> "Goiandira",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208608,
              "name"=> "Goianésia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208707,
              "name"=> "Goiânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208806,
              "name"=> "Goianira",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5208905,
              "name"=> "Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209101,
              "name"=> "Goiatuba",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209150,
              "name"=> "Gouvelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209200,
              "name"=> "Guapó",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209291,
              "name"=> "Guaraíta",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209408,
              "name"=> "Guarani de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209457,
              "name"=> "Guarinos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209606,
              "name"=> "Heitoraí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209705,
              "name"=> "Hidrolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209804,
              "name"=> "Hidrolina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209903,
              "name"=> "Iaciara",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209937,
              "name"=> "Inaciolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5209952,
              "name"=> "Indiara",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210000,
              "name"=> "Inhumas",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210109,
              "name"=> "Ipameri",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210158,
              "name"=> "Ipiranga de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210208,
              "name"=> "Iporá",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210307,
              "name"=> "Israelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210406,
              "name"=> "Itaberaí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210562,
              "name"=> "Itaguari",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210604,
              "name"=> "Itaguaru",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210802,
              "name"=> "Itajá",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5210901,
              "name"=> "Itapaci",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211008,
              "name"=> "Itapirapuã",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211206,
              "name"=> "Itapuranga",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211305,
              "name"=> "Itarumã",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211404,
              "name"=> "Itauçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211503,
              "name"=> "Itumbiara",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211602,
              "name"=> "Ivolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211701,
              "name"=> "Jandaia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211800,
              "name"=> "Jaraguá",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5211909,
              "name"=> "Jataí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212006,
              "name"=> "Jaupaci",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212055,
              "name"=> "Jesúpolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212105,
              "name"=> "Joviânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212204,
              "name"=> "Jussara",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212253,
              "name"=> "Lagoa Santa",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212303,
              "name"=> "Leopoldo de Bulhões",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212501,
              "name"=> "Luziânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212600,
              "name"=> "Mairipotaba",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212709,
              "name"=> "Mambaí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212808,
              "name"=> "Mara Rosa",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212907,
              "name"=> "Marzagão",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5212956,
              "name"=> "Matrinchã",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213004,
              "name"=> "Maurilândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213053,
              "name"=> "Mimoso de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213087,
              "name"=> "Minaçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213103,
              "name"=> "Mineiros",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213400,
              "name"=> "Moiporá",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213509,
              "name"=> "Monte Alegre de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213707,
              "name"=> "Montes Claros de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213756,
              "name"=> "Montividiu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213772,
              "name"=> "Montividiu do Norte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213806,
              "name"=> "Morrinhos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213855,
              "name"=> "Morro Agudo de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5213905,
              "name"=> "Mossâmedes",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214002,
              "name"=> "Mozarlândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214051,
              "name"=> "Mundo Novo",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214101,
              "name"=> "Mutunópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214408,
              "name"=> "Nazário",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214507,
              "name"=> "Nerópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214606,
              "name"=> "Niquelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214705,
              "name"=> "Nova América",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214804,
              "name"=> "Nova Aurora",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214838,
              "name"=> "Nova Crixás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214861,
              "name"=> "Nova Glória",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214879,
              "name"=> "Nova Iguaçu de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5214903,
              "name"=> "Nova Roma",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215009,
              "name"=> "Nova Veneza",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215207,
              "name"=> "Novo Brasil",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215231,
              "name"=> "Novo Gama",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215256,
              "name"=> "Novo Planalto",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215306,
              "name"=> "Orizona",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215405,
              "name"=> "Ouro Verde de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215504,
              "name"=> "Ouvidor",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215603,
              "name"=> "Padre Bernardo",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215652,
              "name"=> "Palestina de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215702,
              "name"=> "Palmeiras de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215801,
              "name"=> "Palmelo",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5215900,
              "name"=> "Palminópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216007,
              "name"=> "Panamá",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216304,
              "name"=> "Paranaiguara",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216403,
              "name"=> "Paraúna",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216452,
              "name"=> "Perolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216809,
              "name"=> "Petrolina de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5216908,
              "name"=> "Pilar de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217104,
              "name"=> "Piracanjuba",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217203,
              "name"=> "Piranhas",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217302,
              "name"=> "Pirenópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217401,
              "name"=> "Pires do Rio",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217609,
              "name"=> "Planaltina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5217708,
              "name"=> "Pontalina",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218003,
              "name"=> "Porangatu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218052,
              "name"=> "Porteirão",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218102,
              "name"=> "Portelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218300,
              "name"=> "Posse",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218391,
              "name"=> "Professor Jamil",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218508,
              "name"=> "Quirinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218607,
              "name"=> "Rialma",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218706,
              "name"=> "Rianápolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218789,
              "name"=> "Rio Quente",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218805,
              "name"=> "Rio Verde",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5218904,
              "name"=> "Rubiataba",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219001,
              "name"=> "Sanclerlândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219100,
              "name"=> "Santa Bárbara de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219209,
              "name"=> "Santa Cruz de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219258,
              "name"=> "Santa Fé de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219308,
              "name"=> "Santa Helena de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219357,
              "name"=> "Santa Isabel",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219407,
              "name"=> "Santa Rita do Araguaia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219456,
              "name"=> "Santa Rita do Novo Destino",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219506,
              "name"=> "Santa Rosa de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219605,
              "name"=> "Santa Tereza de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219704,
              "name"=> "Santa Terezinha de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219712,
              "name"=> "Santo Antônio da Barra",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219738,
              "name"=> "Santo Antônio de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219753,
              "name"=> "Santo Antônio do Descoberto",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219803,
              "name"=> "São Domingos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5219902,
              "name"=> "São Francisco de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220009,
              "name"=> "São João d`Aliança",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220058,
              "name"=> "São João da Paraúna",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220108,
              "name"=> "São Luís de Montes Belos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220157,
              "name"=> "São Luíz do Norte",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220207,
              "name"=> "São Miguel do Araguaia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220264,
              "name"=> "São Miguel do Passa Quatro",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220280,
              "name"=> "São Patrício",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220405,
              "name"=> "São Simão",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220454,
              "name"=> "Senador Canedo",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220504,
              "name"=> "Serranópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220603,
              "name"=> "Silvânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220686,
              "name"=> "Simolândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5220702,
              "name"=> "Sítio d`Abadia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221007,
              "name"=> "Taquaral de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221080,
              "name"=> "Teresina de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221197,
              "name"=> "Terezópolis de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221304,
              "name"=> "Três Ranchos",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221403,
              "name"=> "Trindade",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221452,
              "name"=> "Trombas",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221502,
              "name"=> "Turvânia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221551,
              "name"=> "Turvelândia",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221577,
              "name"=> "Uirapuru",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221601,
              "name"=> "Uruaçu",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221700,
              "name"=> "Uruana",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221809,
              "name"=> "Urutaí",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221858,
              "name"=> "Valparaíso de Goiás",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5221908,
              "name"=> "Varjão",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5222005,
              "name"=> "Vianópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5222054,
              "name"=> "Vicentinópolis",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5222203,
              "name"=> "Vila Boa",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5222302,
              "name"=> "Vila Propício",
              "brazilstate_id"=> 52
            ],
            [
              "id"=> 5300108,
              "name"=> "Brasília",
              "brazilstate_id"=> 53
            ]
        ];


        foreach($cities as $city){
            BrazilCity::create($city);
        }
    }
}

