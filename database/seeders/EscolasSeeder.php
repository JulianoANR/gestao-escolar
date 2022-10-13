<?php

namespace Database\Seeders;

use App\Models\Escola;
use App\Enums\RegioesEnum;
use App\Enums\SegmentosEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscolasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escola::create([
            'id' => 1,
            'nome' => 'ADOLFINA LEONOR SOARES DOS SANTOS PROFA CIEFI',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 402862,
            'email' => 'emefadolfinacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3881-2521',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11661-400',
            'endereco' => 'AVENIDA SIQUEIRA CAMPOS',
            'numero' => '1257',
            'bairro' => 'SUMARE',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6170997619629',
            'longitude' => '-45,3986015319824',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 2,
            'nome' => 'CEI/EMEI ADI ADRIANA APARECIDA CASSIANO',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 5420,
            'email' => 'cei.adrianacassiano@gmail.com',
            'telefone_1' => '(12)3887-1449',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-315',
            'endereco' => 'RUA SAO ROQUE',
            'numero' => '410',
            'bairro' => 'PEREQUE MIRIM',
            'complemento' => 'RUA',
            'latitude' => '-23,7133598327637',
            'longitude' => '-45,4362716674805',
            'observacao' => ''
        ]);
        
        Escola::create([
            'id' => 3,
            'nome' => 'EMEI EMEF PROFA AIDA DE ALMEIDA CASTRO GRAZIOLI',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 225940,
            'email' => 'emefgraziolicaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-2610',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11675-690',
            'endereco' => 'RUA FRANCISCO RIBEIRO',
            'numero' => '80',
            'bairro' => 'VILA NOSSA SENHORA APARECIDA',
            'complemento' => 'RUA',
            'latitude' => '-23,6128005981445',
            'longitude' => '-45,4231986999512',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 4,
            'nome' => 'EMEI EMEF PROF ALAOR XAVIER JUNQUEIRA',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 223098,
            'email' => 'emefjunqueiracaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-2612',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-050',
            'endereco' => 'RUA JOSE FERREIRA DOS SANTOS',
            'numero' => '381',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'RUA',
            'latitude' => '-23,6979503631592',
            'longitude' => '-45,4443092346191',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 5,
            'nome' => 'ANTONIA ANTUNES AROUCA PROFA EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => null,
            'email' => 'emefaroucacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3884-3900',
            'telefone_2' => '',
            'regiao' => RegioesEnum::NORTE->value,
            'cep' => '11677-457',
            'endereco' => 'RUA ITALIA BASI MAGNIS',
            'numero' => '581',
            'bairro' => 'MASSAGUACU',
            'complemento' => 'RUA',
            'latitude' => '-23,5808906555176',
            'longitude' => '-45,3330383300781',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 6,
            'nome' => 'ANTONIA RIBEIRO DA SILVA PROFA CIEFI',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => null,
            'email' => 'ciefiribeiro@gmail.com',
            'telefone_1' => '(12)3882-2286',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11660-497',
            'endereco' => 'RUA ALCIDES ALVES PEREIRA',
            'numero' => '140',
            'bairro' => 'JARDIM CALIFORNIA',
            'complemento' => 'RUA',
            'latitude' => '-23,6252002716064',
            'longitude' => '-45,4176406860352',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 7,
            'nome' => 'ANTONIO DE FREITAS AVELAR PROF EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 447785,
            'email' => 'emefavelarcaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-2493',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11660-600',
            'endereco' => 'RUA JOAO MARCELO',
            'numero' => '302',
            'bairro' => 'CAPUTERA',
            'complemento' => 'RUA',
            'latitude' => '-23,6207008361816',
            'longitude' => '-45,4203987121582',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 8,
            'nome' => 'CEI EMEI PROFA APARECIDA MARIA PIRES DE MENESES',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 2033,
            'email' => 'crecheolaria@gmail.com',
            'telefone_1' => '(12)3883-8988',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11663-380',
            'endereco' => 'TRAVESSA IPIRANGA',
            'numero' => '17',
            'bairro' => 'JARDIM OLARIA',
            'complemento' => 'TRAVESSA',
            'latitude' => '-23,6073303222656',
            'longitude' => '-45,3729209899902',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 9,
            'nome' => 'EMEI EMEF BENEDITO INACIO SOARES',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 208334,
            'email' => 'emefsoarescaraguatatuba@gmail.com',
            'telefone_1' => '(12)3884-2450',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11677-340',
            'endereco' => 'AVENIDA REGINA MARGARETH PASSOS',
            'numero' => '400',
            'bairro' => 'MASSAGUACU',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,5831728694558',
            'longitude' => '-45,3297607063294',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 10,
            'nome' => 'BERNARDO FERREIRA LOUZADA EMEI',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 208346,
            'email' => 'emeflouzadacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-2221',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11675-730',
            'endereco' => 'RUA HORTO FLORESTAL',
            'numero' => 'SN',
            'bairro' => 'RIO DO OURO',
            'complemento' => 'RUA',
            'latitude' => '-23,5969295501709',
            'longitude' => '-45,4300193786621',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 11,
            'nome' => 'EMEI EMEF CARLOS ALTERO ORTEGA',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 225952,
            'email' => 'emefortegacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-3021',
            'telefone_2' => '',
            'regiao' => RegioesEnum::SUL->value,
            'cep' => '11671-020',
            'endereco' => 'RUA SETE',
            'numero' => '15',
            'bairro' => 'MORRO DO ALGODAO',
            'complemento' => 'RUA',
            'latitude' => '-23,68432554272',
            'longitude' => '-45,453681439209',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 12,
            'nome' => 'CARLOS DE ALMEIDA RODRIGUES DR EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 215077,
            'email' => 'emefrodriguescaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-4679',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11665-070',
            'endereco' => 'AVENIDA PERNAMBUCO',
            'numero' => '1101',
            'bairro' => 'INDAIA',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6315002441406',
            'longitude' => '-45,4240989685059',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 13,
            'nome' => 'BAIRRO POIARES DO CENTRO DE EDUCACAO INFANTIL',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 422423,
            'email' => 'cepoiares@gmail.com',
            'telefone_1' => '(12)3887-6315',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11673-000',
            'endereco' => 'AVENIDA FLORIANO PEIXOTO MARECHAL',
            'numero' => 'SN',
            'bairro' => 'POIARES',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6389999389648',
            'longitude' => '-45,4365005493164',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 14,
            'nome' => 'CEI EMEI PROFA CELIA ROCHA LOBO',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 279626,
            'email' => 'cei.celialobo@caraguatatuba.sp.org.br',
            'telefone_1' => '(12)3888-3311',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-100',
            'endereco' => 'RUA BENEDITO JACINTO DO PRADO',
            'numero' => '99',
            'bairro' => 'JARAGUA',
            'complemento' => 'RUA',
            'latitude' => '-23,7140998840332',
            'longitude' => '-45,4425010681152',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 15,
            'nome' => 'CRECHE SANTO ANTONIO',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 807679,
            'email' => 'criancaa@uol.com.br',
            'telefone_1' => '(12)3887-3304',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-670',
            'endereco' => 'RUA ELVIRA PEUPETA',
            'numero' => '75',
            'bairro' => 'TINGA',
            'complemento' => 'RUA',
            'latitude' => '-23,6345386505127',
            'longitude' => '-45,4347457885742',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 16,
            'nome' => 'EDNA MARIA NOGUEIRA FERRAZ PROFA CENTRO INT ED FUND INF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 300603,
            'email' => 'emefednaferrazcaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-3014',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-005',
            'endereco' => 'RUA BENEDITO FORTUNATO',
            'numero' => 'SN',
            'bairro' => 'JARAGUA',
            'complemento' => 'RUA',
            'latitude' => '-23,7082290649414',
            'longitude' => '-45,4427795410156',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 17,
            'nome' => 'CEI PROF.ª ELISA BUTSCHKAU',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 6288,
            'email' => 'ceielisabutschkau@gmail.com',
            'telefone_1' => '(12)3887-1016',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11670-010',
            'endereco' => 'RUA MANOEL SEVERINO DE CASTRO',
            'numero' => '720',
            'bairro' => 'BARRANCO ALTO',
            'complemento' => 'RUA',
            'latitude' => '-23,6875305175781',
            'longitude' => '-45,4489288330078',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 18,
            'nome' => 'ESTER NUNES DE SOUZA PROFA CEI',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 273314,
            'email' => 'ceinunescaraguatatuba@gmail.com',
            'telefone_1' => '(12)3884-1655',
            'telefone_2' => '',
            'regiao' => RegioesEnum::NORTE->value,
            'cep' => '11677-180',
            'endereco' => 'RUA MANOEL FRANCISCO RICARDO',
            'numero' => '360',
            'bairro' => 'SERTAO DOS TOURINHO',
            'complemento' => 'RUA',
            'latitude' => '-23,580099105835',
            'longitude' => '-45,3373985290527',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 19,
            'nome' => 'EUCLYDES FERREIRA PROF EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 499559,
            'email' => 'emefeuclydesferreira@gmail.com',
            'telefone_1' => '(12)3885-1802',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-470',
            'endereco' => 'RUA JOSE GERALDO FERNANDES DA SILVA FILHO',
            'numero' => '165',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'RUA',
            'latitude' => '-23,7046394348145',
            'longitude' => '-45,445728302002',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 20,
            'nome' => 'FRANCISCO ASSIS DE CARVALHO PROF CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 499560,
            'email' => 'ceifranciscoassisdecarvalho@gmail.com',
            'telefone_1' => '(12)3885-1801',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-470',
            'endereco' => 'RUA JOSE GERALDO FERNANDES DA SILVA FILHO',
            'numero' => '85',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'RUA',
            'latitude' => '-23,7045402526855',
            'longitude' => '-45,4454307556152',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 21,
            'nome' => 'GERALDO DE LIMA PROF EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 225988,
            'email' => 'emeflimacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-4322',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-015',
            'endereco' => 'AVENIDA PEDRO GONCALVES LEITE',
            'numero' => '685',
            'bairro' => 'PEREQUE MIRIM',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,7087993621826',
            'longitude' => '-45,4422988891602',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 22,
            'nome' => 'HONORINA PACHECO CORREA PROFA CEI',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 273302,
            'email' => 'cei.riodoouro@gmail.com',
            'telefone_1' => '(12)3883-5577',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11675-670',
            'endereco' => 'AVENIDA AMERICO TIMOTEO DO ROSARIO',
            'numero' => '255',
            'bairro' => 'RIO DO OURO',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6072998046875',
            'longitude' => '-45,4258995056152',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 23,
            'nome' => 'ESCOLA MUNICIPAL DE ENSINO FUNDAMENTAL PROFESSORA JANE URBANO FOCESI',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 5336,
            'email' => 'emefjanefocesi@gmail.com',
            'telefone_1' => '(12)3887-1514',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-315',
            'endereco' => 'RUA SAO ROQUE',
            'numero' => '450',
            'bairro' => 'PEREQUE MIRIM',
            'complemento' => 'RUA',
            'latitude' => '-23,7138690948486',
            'longitude' => '-45,4361190795898',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 24,
            'nome' => 'EMEI EMEF PROF JOAO BAPTISTA GARDELIN',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 215089,
            'email' => 'emefgardelincaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-3101',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11673-250',
            'endereco' => 'RUA JOAQUIM JOSE DA SILVA XAVIER',
            'numero' => '180',
            'bairro' => 'POIARES',
            'complemento' => 'RUA',
            'latitude' => '-23,6399002075195',
            'longitude' => '-45,4366989135742',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 25,
            'nome' => 'EMEI EMEF PROF JOAO BENEDITO MARCONDES',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 200359,
            'email' => 'emefmarcondescaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-4291',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11670-150',
            'endereco' => 'RUA BENEDITO SEVERINO CASTRO',
            'numero' => '248',
            'bairro' => 'BARRANCO ALTO',
            'complemento' => 'RUA',
            'latitude' => '-23,6884002685547',
            'longitude' => '-45,4499015808105',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 26,
            'nome' => 'JOAO LINO DA CRUZ CENTRO DE EDUCACAO INFANTIL',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 383636,
            'email' => 'cei.joaocruz@gmail.com',
            'telefone_1' => '(12)3888-2865',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11670-015',
            'endereco' => 'RUA LUIZ JACINTO DA SILVA',
            'numero' => '205',
            'bairro' => 'BARRANCO ALTO',
            'complemento' => 'RUA',
            'latitude' => '-23,6880397796631',
            'longitude' => '-45,447811126709',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 27,
            'nome' => 'EMEI EMEF JOAO THIMOTEO DO ROSARIO',
            'segmento' => SegmentosEnum::CEI_EMEI_EMEF->value,
            'sed_cod_escola' => 208358,
            'email' => 'emefrosariocaraguatatuba@gmail.com',
            'telefone_1' => '(12)3889-0278',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11661-395',
            'endereco' => 'AVENIDA ANTONIO FRANCISCO PASCHOAL PELICIARI',
            'numero' => 'SN',
            'bairro' => 'SUMARE',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6002998352051',
            'longitude' => '-45,3959693908691',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 28,
            'nome' => 'JORGE PASSOS PROF EMEF',
            'segmento' => SegmentosEnum::EMEI->value,
            'sed_cod_escola' => 225997,
            'email' => 'emefpassoscaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-4395',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11675-300',
            'endereco' => 'RUA OSIEL EGIDIO DE FARIA',
            'numero' => 'SN',
            'bairro' => 'JARAGUAZINHO',
            'complemento' => 'RUA',
            'latitude' => '-23,6132698059082',
            'longitude' => '-45,4315795898438',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 29,
            'nome' => 'LEONOR MENDES DE BARROS CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 22226,
            'email' => 'ceileonor.travessao@gmail.com',
            'telefone_1' => '(12)3887-6108',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-301',
            'endereco' => 'RUA JOAO CARLOS BALIO',
            'numero' => '240',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'RUA',
            'latitude' => '-23,6993999481201',
            'longitude' => '-45,4490013122559',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 30,
            'nome' => 'EMEI EMEF PROF LUCIO JACINTO DOS SANTOS',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 222324,
            'email' => 'emefsantoscaraguatatuba@gmail.com',
            'telefone_1' => '(12)3883-4533',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-470',
            'endereco' => 'RUA DENILZA SEBASTIANA SANTOS',
            'numero' => '75',
            'bairro' => 'TINGA',
            'complemento' => 'RUA',
            'latitude' => '-23,6282997131348',
            'longitude' => '-45,4361000061035',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 31,
            'nome' => 'LUIZ RIBEIRO MUNIZ PROF EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 243450,
            'email' => 'emefmunizcaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-5698',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11662-320',
            'endereco' => 'RUA ANALANDIA',
            'numero' => '355',
            'bairro' => 'MARTIM DE SA',
            'complemento' => 'RUA',
            'latitude' => '-23,6175994873047',
            'longitude' => '-45,3899993896484',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 32,
            'nome' => 'LUIZ SILVAR DO PRADO PROFESSOR EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 565817,
            'email' => 'emef.luizsilvar@caraguatatuba.sp.gov.br',
            'telefone_1' => '(12)3886-9931',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11663-660',
            'endereco' => 'RUA JOSE PEDRO DE OLIVEIRA BARBOSA',
            'numero' => '805',
            'bairro' => 'JARDIM OLARIA',
            'complemento' => 'RUA',
            'latitude' => '-23,6087',
            'longitude' => '45,3811',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 33,
            'nome' => 'MARIA APARECIDA DE CARVALHO PROFA EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 495037,
            'email' => 'emefmariacarvalhocaraguatatuba@gmail.com',
            'telefone_1' => '(12)3886-2050',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-410',
            'endereco' => 'AVENIDA DEODORO DA FONSECA MARECHAL',
            'numero' => '1115',
            'bairro' => 'TINGA',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6288795471191',
            'longitude' => '-45,436897277832',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 34,
            'nome' => 'MARIA APARECIDA UJIO PROFA EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 225903,
            'email' => 'ujiomariaaparecida@yahoo.com.br',
            'telefone_1' => '(12)3887-3836',
            'telefone_2' => '',
            'regiao' => RegioesEnum::SUL->value,
            'cep' => '11667-810',
            'endereco' => 'AVENIDA EZEQUIEL DA SILVA BARRETO',
            'numero' => '285',
            'bairro' => 'PORTO NOVO',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,691780090332',
            'longitude' => '-45,4358215332031',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 35,
            'nome' => 'MARIA CARLITA S GUEDES CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 22299,
            'email' => 'cei.mariacarlita@gmail.com',
            'telefone_1' => '(12)3888-3223',
            'telefone_2' => '',
            'regiao' => RegioesEnum::SUL->value,
            'cep' => '11671-206',
            'endereco' => 'TRAVESSA CINCO',
            'numero' => '75',
            'bairro' => 'MORRO DO ALGODAO',
            'complemento' => 'TRAVESSA',
            'latitude' => '-23,6827602386475',
            'longitude' => '-45,4519309997559',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 36,
            'nome' => 'EMEI MARIA DE LOURDES LUCARELLI PEREZ',
            'segmento' => SegmentosEnum::EMEI->value,
            'sed_cod_escola' => 201777,
            'email' => 'emeiperezcaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-7822',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11665-280',
            'endereco' => 'AVENIDA CATARINA SANTA',
            'numero' => '455',
            'bairro' => 'INDAIA',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6359004974365',
            'longitude' => '-45,4253005981445',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 37,
            'nome' => 'MARIA ELMA MANSANO PROFA CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 495025,
            'email' => 'ceimansano@gmail.com',
            'telefone_1' => '(12)3886-2054',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-410',
            'endereco' => 'AVENIDA DEODORO DA FONSECA MARECHAL',
            'numero' => '1109',
            'bairro' => 'TINGA',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6280994415283',
            'longitude' => '-45,437198638916',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 38,
            'nome' => 'MARIA EUGENIA ARANHA CHODOUNSKY PROFA CEI E EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 565748,
            'email' => 'ceiemeimariaeugenia@gmail.com',
            'telefone_1' => '(12)3886-9932',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11663-660',
            'endereco' => 'RUA JOSE PEDRO DE OLIVEIRA BARBOSA',
            'numero' => 'SN',
            'bairro' => 'JARDIM OLARIA',
            'complemento' => 'RUA',
            'latitude' => '-23,608699798584',
            'longitude' => '-45,3811988830566',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 39,
            'nome' => 'MARIA MORAES DE OLIVEIRA PROFA EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 435879,
            'email' => 'emefgaivotascaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-7462',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11673-480',
            'endereco' => 'RUA PICA-PAU',
            'numero' => '495',
            'bairro' => 'JARDIM DAS GAIVOTAS',
            'complemento' => 'RUA',
            'latitude' => '-23,6343002319336',
            'longitude' => '-45,4402008056641',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 40,
            'nome' => 'MARIA ONICIE DIAS PEREIRA PROFA CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 569537,
            'email' => 'cei.mariaonicie@gmail.com',
            'telefone_1' => '(12)3887-8087',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11675-420',
            'endereco' => 'RUA JOSE NEDER',
            'numero' => '100',
            'bairro' => 'JARAGUAZINHO',
            'complemento' => 'RUA',
            'latitude' => '-23,615909576416',
            'longitude' => '-45,433910369873',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 41,
            'nome' => 'MARIA THEREZA DE SOUZA CASTRO PROFA EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 225976,
            'email' => 'emefcastrocaraguatatuba@gmail.com',
            'telefone_1' => '(12)3884-2921',
            'telefone_2' => '',
            'regiao' => RegioesEnum::NORTE->value,
            'cep' => '11676-403',
            'endereco' => 'RUA SEISHI YOSHIMOTO',
            'numero' => '120',
            'bairro' => 'JETUBA',
            'complemento' => 'RUA',
            'latitude' => '-23,6019992828369',
            'longitude' => '-45,3499984741211',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 42,
            'nome' => 'EMEI EMEF MASAKO SONE',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 208361,
            'email' => 'emefsonecaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-2444',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11667-826',
            'endereco' => 'RUA ABRA DE DENTRO',
            'numero' => 'SN',
            'bairro' => 'PEGORELLI',
            'complemento' => 'RUA',
            'latitude' => '-23,711669921875',
            'longitude' => '-45,4646911621094',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 43,
            'nome' => 'CRECHE MEIMEI',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 810642,
            'email' => 'cmeimei250@gmail.com',
            'telefone_1' => '(12)3883-4648',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-588',
            'endereco' => 'RUA ODETE MACHADO PINTO',
            'numero' => '85',
            'bairro' => 'JARDIM MARISTELA',
            'complemento' => 'RUA',
            'latitude' => '-23,6335906982422',
            'longitude' => '-45,4313583374023',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 44,
            'nome' => 'CEI EMEI MESSIAS MENDES DE SOUZA',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 273351,
            'email' => 'ceiemeimessiasipiranga@gmail.com',
            'telefone_1' => '(12)3883-9788',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11661-200',
            'endereco' => 'AVENIDA BRASIL',
            'numero' => '1350',
            'bairro' => 'SUMARE',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,620398103948',
            'longitude' => '-45,4016271614075',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 45,
            'nome' => 'OSWALDO FERREIRA PROF EMEF',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 225964,
            'email' => 'emefferreiracaraguatatuba@gmail.com',
            'telefone_1' => '(12)3882-1067',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_NORTE->value,
            'cep' => '11663-660',
            'endereco' => 'RUA JOSE PEDRO DE OLIVEIRA BARBOSA',
            'numero' => '190',
            'bairro' => 'JARDIM OLARIA',
            'complemento' => 'RUA',
            'latitude' => '-23,6086',
            'longitude' => '-45,3807',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 46,
            'nome' => 'EMEI EMEF PEDRO JOAO DE OLIVEIRA',
            'segmento' => SegmentosEnum::EMEI_EMEF->value,
            'sed_cod_escola' => 226002,
            'email' => 'emefoliveiracaraguatatuba@gmail.com',
            'telefone_1' => '(12)3884-2091',
            'telefone_2' => '',
            'regiao' => RegioesEnum::NORTE->value,
            'cep' => '11679-150',
            'endereco' => 'RUA BENEDITO SERRADO',
            'numero' => '130',
            'bairro' => 'TABATINGA',
            'complemento' => 'RUA',
            'latitude' => '-23,5762',
            'longitude' => '-45,2748',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 47,
            'nome' => 'REGINA CELIA SANTOS CHAPIRA BLAUSTEIN PROFA CEI',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 78086,
            'email' => 'ceiregina.travessao@gmail.com',
            'telefone_1' => '(12)3887-6422',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-100',
            'endereco' => 'RUA JACUPIRANGA',
            'numero' => '155',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'RUA',
            'latitude' => '-23,6963005065918',
            'longitude' => '-45,443000793457',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 48,
            'nome' => 'RICARDO LUQUES SAMMARCO SERRA PROF EMEFEBS',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 375172,
            'email' => 'emefserracaraguatatuba@gmail.com',
            'telefone_1' => '(12)3888-4186',
            'telefone_2' => '',
            'regiao' => RegioesEnum::SUL->value,
            'cep' => '11666-530',
            'endereco' => 'RUA ALDO MARCUCCI',
            'numero' => '300',
            'bairro' => 'PRAIA DAS PALMEIRAS',
            'complemento' => 'RUA',
            'latitude' => '-23,6748695373535',
            'longitude' => '-45,4363288879395',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 49,
            'nome' => 'SANTINA NARDI MARQUES CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 78074,
            'email' => 'ceisantinanardicaraguatatuba@gmail.com',
            'telefone_1' => '(12)3883-3477',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11660-450',
            'endereco' => 'RUA ANTONIO NARDI',
            'numero' => '200',
            'bairro' => 'CAPUTERA',
            'complemento' => 'RUA',
            'latitude' => '-23,6198997497559',
            'longitude' => '-45,4183006286621',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 50,
            'nome' => 'SEVERINO VITORIANO DOS SANTOS CEI/EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 435983,
            'email' => 'ceigaivotas@gmail.com',
            'telefone_1' => '(12)3887-3047',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11673-460',
            'endereco' => 'AVENIDA CARDEAL',
            'numero' => '574',
            'bairro' => 'JARDIM DAS GAIVOTAS',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6371002197266',
            'longitude' => '-45,440299987793',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 51,
            'nome' => 'CEI PROFA TELMA DO AMARANTE VEIGA SANTOS',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 442628,
            'email' => 'cei.telmaveiga@caraguatatuba.sp.gov.br',
            'telefone_1' => '(12)3882-6090',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO_SUL->value,
            'cep' => '11674-480',
            'endereco' => 'RUA ANTONIO DOS SANTOS',
            'numero' => '70',
            'bairro' => 'TINGA',
            'complemento' => 'RUA',
            'latitude' => '-23,6270999908447',
            'longitude' => '-45,4355010986328',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 52,
            'nome' => 'THEREZA YANESSE SCHIMIDT CARDOZO PROFA CEI EMEI',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 451861,
            'email' => 'ceiportonovo.caragua@gmail.com',
            'telefone_1' => '(12)3887-1565',
            'telefone_2' => '',
            'regiao' => RegioesEnum::SUL->value,
            'cep' => '11667-810',
            'endereco' => 'AVENIDA EZEQUIEL DA SILVA BARRETO',
            'numero' => '200',
            'bairro' => 'JARDIM PORTO NOVO',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6921520233154',
            'longitude' => '-45,4355850219727',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 53,
            'nome' => 'CEI/EMEI PROFA VERA DA SILVA SANTOS',
            'segmento' => SegmentosEnum::CEI->value,
            'sed_cod_escola' => 5780,
            'email' => 'cemeifazendinha@hotmail.com',
            'telefone_1' => '(12)3889-3535',
            'telefone_2' => '',
            'regiao' => RegioesEnum::NORTE->value,
            'cep' => '11676-250',
            'endereco' => 'RUA DAS AZALEIAS',
            'numero' => '418',
            'bairro' => 'PORTAL DA FAZENDINHA',
            'complemento' => 'RUA',
            'latitude' => '-23,5969295501709',
            'longitude' => '-45,3592681884766',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 54,
            'nome' => 'YASUTADA NASU EMEI',
            'segmento' => SegmentosEnum::EMEI->value,
            'sed_cod_escola' => 212489,
            'email' => 'emeiyasutadacaraguatatuba@gmail.com',
            'telefone_1' => '(12)3887-4322',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11668-015',
            'endereco' => 'AVENIDA PEDRO GONCALVES LEITE',
            'numero' => '685',
            'bairro' => 'PEREQUE MIRIM',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,7088',
            'longitude' => '-45,4422',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 55,
            'nome' => 'SECRETARIA MUNICIPAL DE EDUCACAO - CARAGUATATUBA',
            'segmento' => null,
            'sed_cod_escola' => 1,
            'email' => 'informatica.educativa@caraguatatuba.sp.gov.br',
            'telefone_1' => '(12)3897-7027',
            'telefone_2' => '',
            'regiao' => RegioesEnum::CENTRO->value,
            'cep' => '11665-050',
            'endereco' => 'AVENIDA RIO DE JANEIRO',
            'numero' => '860',
            'bairro' => 'INDAIA',
            'complemento' => 'AVENIDA',
            'latitude' => '-23.62936296921738',
            'longitude' => '-45.42146664973637',
            'observacao' => ''

            
        ]);

        Escola::create([
            'id' => 56,
            'nome' => 'CEI/EMEI STELA DA SILVA',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 9028,
            'email' => 'cei.stelasilva@caraguatatuba.sp.gov.br',
            'telefone_1' => '(12)3897-7000',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-301',
            'endereco' => 'AVENIDA JOAO CARLOS BALIO',
            'numero' => '355',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,6992797851563',
            'longitude' => '-45,4487991333008',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 57,
            'nome' => 'CEI/EMEI INSPETORA WALDETE FERREIRA DE SOUZA',
            'segmento' => SegmentosEnum::CEI_EMEI->value,
            'sed_cod_escola' => 9034,
            'email' => 'cei.waldete.souza@educacaocaraguatatuba.com.br',
            'telefone_1' => '(12)3897-7000',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11667-839',
            'endereco' => 'RUA CIRCULAR',
            'numero' => '10',
            'bairro' => 'PEGORELLI',
            'complemento' => 'RUA',
            'latitude' => '-23,7168807983398',
            'longitude' => '-45,4562492370605',
            'observacao' => ''
        ]);

        Escola::create([
            'id' => 58,
            'nome' => 'EMEF PROFª DÉBORA VALLE DA SILVA PILON',
            'segmento' => SegmentosEnum::EMEF->value,
            'sed_cod_escola' => 8982,
            'email' => 'emef.debora.pilon@educacaocaraguatatuba.com.br',
            'telefone_1' => '(12)3897-7000',
            'telefone_2' => '',
            'regiao' => RegioesEnum::EXTREMO_SUL->value,
            'cep' => '11669-000',
            'endereco' => 'AVENIDA JOSE DA COSTA PINHEIRO JUNIOR',
            'numero' => '422',
            'bairro' => 'TRAVESSAO',
            'complemento' => 'AVENIDA',
            'latitude' => '-23,7091102600098',
            'longitude' => '-45,4429512023926',
            'observacao' => ''
        ]);

    }

}