<?php

namespace Database\Seeders;

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nationalities')->delete();
        $Nationalities =[
            [
                'Name_en'=> 'Afghan',
                'Name'=> 'أفغانستاني'
            ],
            [

                'Name_en'=> 'Albanian',
                'Name'=> 'ألباني'
            ],
            [

                'Name_en'=> 'Aland Islander',
                'Name'=> 'آلاندي'
            ],
            [

                'Name_en'=> 'Algerian',
                'Name'=> 'جزائري'
            ],
            [

                'Name_en'=> 'American Samoan',
                'Name'=> 'أمريكي سامواني'
            ],
            [

                'Name_en'=> 'Andorran',
                'Name'=> 'أندوري'
            ],
            [

                'Name_en'=> 'Angolan',
                'Name'=> 'أنقولي'
            ],
            [

                'Name_en'=> 'Anguillan',
                'Name'=> 'أنغويلي'
            ],
            [

                'Name_en'=> 'Antarctican',
                'Name'=> 'أنتاركتيكي'
            ],
            [

                'Name_en'=> 'Antiguan',
                'Name'=> 'بربودي'
            ],
            [

                'Name_en'=> 'Argentinian',
                'Name'=> 'أرجنتيني'
            ],
            [

                'Name_en'=> 'Armenian',
                'Name'=> 'أرميني'
            ],
            [

                'Name_en'=> 'Aruban',
                'Name'=> 'أوروبهيني'
            ],
            [

                'Name_en'=> 'Australian',
                'Name'=> 'أسترالي'
            ],
            [

                'Name_en'=> 'Austrian',
                'Name'=> 'نمساوي'
            ],
            [

                'Name_en'=> 'Azerbaijani',
                'Name'=> 'أذربيجاني'
            ],
            [

                'Name_en'=> 'Bahamian',
                'Name'=> 'باهاميسي'
            ],
            [

                'Name_en'=> 'Bahraini',
                'Name'=> 'بحريني'
            ],
            [

                'Name_en'=> 'Bangladeshi',
                'Name'=> 'بنغلاديشي'
            ],
            [

                'Name_en'=> 'Barbadian',
                'Name'=> 'بربادوسي'
            ],
            [

                'Name_en'=> 'Belarusian',
                'Name'=> 'روسي'
            ],
            [

                'Name_en'=> 'Belgian',
                'Name'=> 'بلجيكي'
            ],
            [

                'Name_en'=> 'Belizean',
                'Name'=> 'بيليزي'
            ],
            [

                'Name_en'=> 'Beninese',
                'Name'=> 'بنيني'
            ],
            [

                'Name_en'=> 'Saint Barthelmian',
                'Name'=> 'سان بارتيلمي'
            ],
            [

                'Name_en'=> 'Bermudan',
                'Name'=> 'برمودي'
            ],
            [

                'Name_en'=> 'Bhutanese',
                'Name'=> 'بوتاني'
            ],
            [

                'Name_en'=> 'Bolivian',
                'Name'=> 'بوليفي'
            ],
            [

                'Name_en'=> 'Bosnian / Herzegovinian',
                'Name'=> 'بوسني/هرسكي'
            ],
            [

                'Name_en'=> 'Botswanan',
                'Name'=> 'بوتسواني'
            ],
            [

                'Name_en'=> 'Bouvetian',
                'Name'=> 'بوفيهي'
            ],
            [

                'Name_en'=> 'Brazilian',
                'Name'=> 'برازيلي'
            ],
            [

                'Name_en'=> 'British Indian Ocean Territory',
                'Name'=> 'إقليم المحيط الهندي البريطاني'
            ],
            [

                'Name_en'=> 'Bruneian',
                'Name'=> 'بروني'
            ],
            [

                'Name_en'=> 'Bulgarian',
                'Name'=> 'بلغاري'
            ],
            [

                'Name_en'=> 'Burkinabe',
                'Name'=> 'بوركيني'
            ],
            [

                'Name_en'=> 'Burundian',
                'Name'=> 'بورونيدي'
            ],
            [

                'Name_en'=> 'Cambodian',
                'Name'=> 'كمبودي'
            ],
            [

                'Name_en'=> 'Cameroonian',
                'Name'=> 'كاميروني'
            ],
            [

                'Name_en'=> 'Canadian',
                'Name'=> 'كندي'
            ],
            [

                'Name_en'=> 'Cape Verdean',
                'Name'=> 'الرأس الأخضر'
            ],
            [

                'Name_en'=> 'Caymanian',
                'Name'=> 'كايماني'
            ],
            [

                'Name_en'=> 'Central African',
                'Name'=> 'أفريقي'
            ],
            [

                'Name_en'=> 'Chadian',
                'Name'=> 'تشادي'
            ],
            [

                'Name_en'=> 'Chilean',
                'Name'=> 'شيلي'
            ],
            [

                'Name_en'=> 'Chinese',
                'Name'=> 'صيني'
            ],
            [

                'Name_en'=> 'Christmas Islander',
                'Name'=> 'جزيرة عيد الميلاد'
            ],
            [

                'Name_en'=> 'Cocos Islander',
                'Name'=> 'جزر كوكوس'
            ],
            [

                'Name_en'=> 'Colombian',
                'Name'=> 'كولومبي'
            ],
            [

                'Name_en'=> 'Comorian',
                'Name'=> 'جزر القمر'
            ],
            [

                'Name_en'=> 'Congolese',
                'Name'=> 'كونغي'
            ],
            [

                'Name_en'=> 'Cook Islander',
                'Name'=> 'جزر كوك'
            ],
            [

                'Name_en'=> 'Costa Rican',
                'Name'=> 'كوستاريكي'
            ],
            [

                'Name_en'=> 'Croatian',
                'Name'=> 'كوراتي'
            ],
            [

                'Name_en'=> 'Cuban',
                'Name'=> 'كوبي'
            ],
            [

                'Name_en'=> 'Cypriot',
                'Name'=> 'قبرصي'
            ],
            [

                'Name_en'=> 'Curacian',
                'Name'=> 'كوراساوي'
            ],
            [

                'Name_en'=> 'Czech',
                'Name'=> 'تشيكي'
            ],
            [

                'Name_en'=> 'Danish',
                'Name'=> 'دنماركي'
            ],
            [

                'Name_en'=> 'Djiboutian',
                'Name'=> 'جيبوتي'
            ],
            [

                'Name_en'=> 'Dominican',
                'Name'=> 'دومينيكي'
            ],
            [

                'Name_en'=> 'Dominican',
                'Name'=> 'دومينيكي'
            ],
            [

                'Name_en'=> 'Ecuadorian',
                'Name'=> 'إكوادوري'
            ],
            [

                'Name_en'=> 'Egyptian',
                'Name'=> 'مصري'
            ],
            [

                'Name_en'=> 'Salvadoran',
                'Name'=> 'سلفادوري'
            ],
            [

                'Name_en'=> 'Equatorial Guinean',
                'Name'=> 'غيني'
            ],
            [

                'Name_en'=> 'Eritrean',
                'Name'=> 'إريتيري'
            ],
            [

                'Name_en'=> 'Estonian',
                'Name'=> 'استوني'
            ],
            [

                'Name_en'=> 'Ethiopian',
                'Name'=> 'أثيوبي'
            ],
            [

                'Name_en'=> 'Falkland Islander',
                'Name'=> 'فوكلاندي'
            ],
            [

                'Name_en'=> 'Faroese',
                'Name'=> 'جزر فارو'
            ],
            [

                'Name_en'=> 'Fijian',
                'Name'=> 'فيجي'
            ],
            [

                'Name_en'=> 'Finnish',
                'Name'=> 'فنلندي'
            ],
            [

                'Name_en'=> 'French',
                'Name'=> 'فرنسي'
            ],
            [

                'Name_en'=> 'French Guianese',
                'Name'=> 'غويانا الفرنسية'
            ],
            [

                'Name_en'=> 'French Polynesian',
                'Name'=> 'بولينيزيي'
            ],
            [

                'Name_en'=> 'French',
                'Name'=> 'أراض فرنسية جنوبية وأنتارتيكية'
            ],
            [

                'Name_en'=> 'Gabonese',
                'Name'=> 'غابوني'
            ],
            [

                'Name_en'=> 'Gambian',
                'Name'=> 'غامبي'
            ],
            [

                'Name_en'=> 'Georgian',
                'Name'=> 'جيورجي'
            ],
            [

                'Name_en'=> 'German',
                'Name'=> 'ألماني'
            ],
            [

                'Name_en'=> 'Ghanaian',
                'Name'=> 'غاني'
            ],
            [

                'Name_en'=> 'Gibraltar',
                'Name'=> 'جبل طارق'
            ],
            [

                'Name_en'=> 'Guernsian',
                'Name'=> 'غيرنزي'
            ],
            [

                'Name_en'=> 'Greek',
                'Name'=> 'يوناني'
            ],
            [

                'Name_en'=> 'Greenlandic',
                'Name'=> 'جرينلاندي'
            ],
            [

                'Name_en'=> 'Grenadian',
                'Name'=> 'غرينادي'
            ],
            [

                'Name_en'=> 'Guadeloupe',
                'Name'=> 'جزر جوادلوب'
            ],
            [

                'Name_en'=> 'Guamanian',
                'Name'=> 'جوامي'
            ],
            [

                'Name_en'=> 'Guatemalan',
                'Name'=> 'غواتيمالي'
            ],
            [

                'Name_en'=> 'Guinean',
                'Name'=> 'غيني'
            ],
            [

                'Name_en'=> 'Guinea-Bissauan',
                'Name'=> 'غيني'
            ],
            [

                'Name_en'=> 'Guyanese',
                'Name'=> 'غياني'
            ],
            [

                'Name_en'=> 'Haitian',
                'Name'=> 'هايتي'
            ],
            [

                'Name_en'=> 'Heard and Mc Donald Islanders',
                'Name'=> 'جزيرة هيرد وجزر ماكدونالد'
            ],
            [

                'Name_en'=> 'Honduran',
                'Name'=> 'هندوراسي'
            ],
            [

                'Name_en'=> 'Hongkongese',
                'Name'=> 'هونغ كونغي'
            ],
            [

                'Name_en'=> 'Hungarian',
                'Name'=> 'مجري'
            ],
            [

                'Name_en'=> 'Icelandic',
                'Name'=> 'آيسلندي'
            ],
            [

                'Name_en'=> 'Indian',
                'Name'=> 'هندي'
            ],
            [

                'Name_en'=> 'Manx',
                'Name'=> 'ماني'
            ],
            [

                'Name_en'=> 'Indonesian',
                'Name'=> 'أندونيسيي'
            ],
            [

                'Name_en'=> 'Iranian',
                'Name'=> 'إيراني'
            ],
            [

                'Name_en'=> 'Iraqi',
                'Name'=> 'عراقي'
            ],
            [

                'Name_en'=> 'Irish',
                'Name'=> 'إيرلندي'
            ],
            [

                'Name_en'=> 'Italian',
                'Name'=> 'إيطالي'
            ],
            [

                'Name_en'=> 'Ivory Coastian',
                'Name'=> 'ساحل العاج'
            ],
            [

                'Name_en'=> 'Jersian',
                'Name'=> 'جيرزي'
            ],
            [

                'Name_en'=> 'Jamaican',
                'Name'=> 'جمايكي'
            ],
            [

                'Name_en'=> 'Japanese',
                'Name'=> 'ياباني'
            ],
            [

                'Name_en'=> 'Jordanian',
                'Name'=> 'أردني'
            ],
            [

                'Name_en'=> 'Kazakh',
                'Name'=> 'كازاخستاني'
            ],
            [

                'Name_en'=> 'Kenyan',
                'Name'=> 'كيني'
            ],
            [

                'Name_en'=> 'I-Kiribati',
                'Name'=> 'كيريباتي'
            ],
            [

                'Name_en'=> 'North Korean',
                'Name'=> 'كوري'
            ],
            [

                'Name_en'=> 'South Korean',
                'Name'=> 'كوري'
            ],
            [

                'Name_en'=> 'Kosovar',
                'Name'=> 'كوسيفي'
            ],
            [

                'Name_en'=> 'Kuwaiti',
                'Name'=> 'كويتي'
            ],
            [

                'Name_en'=> 'Kyrgyzstani',
                'Name'=> 'قيرغيزستاني'
            ],
            [

                'Name_en'=> 'Laotian',
                'Name'=> 'لاوسي'
            ],
            [

                'Name_en'=> 'Latvian',
                'Name'=> 'لاتيفي'
            ],
            [

                'Name_en'=> 'Lebanese',
                'Name'=> 'لبناني'
            ],
            [

                'Name_en'=> 'Basotho',
                'Name'=> 'ليوسيتي'
            ],
            [

                'Name_en'=> 'Liberian',
                'Name'=> 'ليبيري'
            ],
            [

                'Name_en'=> 'Libyan',
                'Name'=> 'ليبي'
            ],
            [

                'Name_en'=> 'Liechtenstein',
                'Name'=> 'ليختنشتيني'
            ],
            [

                'Name_en'=> 'Lithuanian',
                'Name'=> 'لتوانيي'
            ],
            [

                'Name_en'=> 'Luxembourger',
                'Name'=> 'لوكسمبورغي'
            ],
            [

                'Name_en'=> 'Sri Lankian',
                'Name'=> 'سريلانكي'
            ],
            [

                'Name_en'=> 'Macanese',
                'Name'=> 'ماكاوي'
            ],
            [

                'Name_en'=> 'Macedonian',
                'Name'=> 'مقدوني'
            ],
            [

                'Name_en'=> 'Malagasy',
                'Name'=> 'مدغشقري'
            ],
            [

                'Name_en'=> 'Malawian',
                'Name'=> 'مالاوي'
            ],
            [

                'Name_en'=> 'Malaysian',
                'Name'=> 'ماليزي'
            ],
            [

                'Name_en'=> 'Maldivian',
                'Name'=> 'مالديفي'
            ],
            [

                'Name_en'=> 'Malian',
                'Name'=> 'مالي'
            ],
            [

                'Name_en'=> 'Maltese',
                'Name'=> 'مالطي'
            ],
            [

                'Name_en'=> 'Marshallese',
                'Name'=> 'مارشالي'
            ],
            [

                'Name_en'=> 'Martiniquais',
                'Name'=> 'مارتينيكي'
            ],
            [

                'Name_en'=> 'Mauritanian',
                'Name'=> 'موريتانيي'
            ],
            [

                'Name_en'=> 'Mauritian',
                'Name'=> 'موريشيوسي'
            ],
            [

                'Name_en'=> 'Mahoran',
                'Name'=> 'مايوتي'
            ],
            [

                'Name_en'=> 'Mexican',
                'Name'=> 'مكسيكي'
            ],
            [

                'Name_en'=> 'Micronesian',
                'Name'=> 'مايكرونيزيي'
            ],
            [

                'Name_en'=> 'Moldovan',
                'Name'=> 'مولديفي'
            ],
            [

                'Name_en'=> 'Monacan',
                'Name'=> 'مونيكي'
            ],
            [

                'Name_en'=> 'Mongolian',
                'Name'=> 'منغولي'
            ],
            [

                'Name_en'=> 'Montenegrin',
                'Name'=> 'الجبل الأسود'
            ],
            [

                'Name_en'=> 'Montserratian',
                'Name'=> 'مونتسيراتي'
            ],
            [

                'Name_en'=> 'Moroccan',
                'Name'=> 'مغربي'
            ],
            [

                'Name_en'=> 'Mozambican',
                'Name'=> 'موزمبيقي'
            ],
            [

                'Name_en'=> 'Myanmarian',
                'Name'=> 'ميانماري'
            ],
            [

                'Name_en'=> 'Namibian',
                'Name'=> 'ناميبي'
            ],
            [

                'Name_en'=> 'Nauruan',
                'Name'=> 'نوري'
            ],
            [

                'Name_en'=> 'Nepalese',
                'Name'=> 'نيبالي'
            ],
            [

                'Name_en'=> 'Dutch',
                'Name'=> 'هولندي'
            ],
            [

                'Name_en'=> 'Dutch Antilier',
                'Name'=> 'هولندي'
            ],
            [

                'Name_en'=> 'New Caledonian',
                'Name'=> 'كاليدوني'
            ],
            [

                'Name_en'=> 'New Zealander',
                'Name'=> 'نيوزيلندي'
            ],
            [

                'Name_en'=> 'Nicaraguan',
                'Name'=> 'نيكاراجوي'
            ],
            [

                'Name_en'=> 'Nigerien',
                'Name'=> 'نيجيري'
            ],
            [

                'Name_en'=> 'Nigerian',
                'Name'=> 'نيجيري'
            ],
            [

                'Name_en'=> 'Niuean',
                'Name'=> 'ني'
            ],
            [

                'Name_en'=> 'Norfolk Islander',
                'Name'=> 'نورفوليكي'
            ],
            [

                'Name_en'=> 'Northern Marianan',
                'Name'=> 'ماريني'
            ],
            [

                'Name_en'=> 'Norwegian',
                'Name'=> 'نرويجي'
            ],
            [

                'Name_en'=> 'Omani',
                'Name'=> 'عماني'
            ],
            [

                'Name_en'=> 'Pakistani',
                'Name'=> 'باكستاني'
            ],
            [

                'Name_en'=> 'Palauan',
                'Name'=> 'بالاوي'
            ],
            [

                'Name_en'=> 'Palestinian',
                'Name'=> 'فلسطيني'
            ],
            [

                'Name_en'=> 'Panamanian',
                'Name'=> 'بنمي'
            ],
            [

                'Name_en'=> 'Papua New Guinean',
                'Name'=> 'بابوي'
            ],
            [

                'Name_en'=> 'Paraguayan',
                'Name'=> 'بارغاوي'
            ],
            [

                'Name_en'=> 'Peruvian',
                'Name'=> 'بيري'
            ],
            [

                'Name_en'=> 'Filipino',
                'Name'=> 'فلبيني'
            ],
            [

                'Name_en'=> 'Pitcairn Islander',
                'Name'=> 'بيتكيرني'
            ],
            [

                'Name_en'=> 'Polish',
                'Name'=> 'بوليني'
            ],
            [

                'Name_en'=> 'Portuguese',
                'Name'=> 'برتغالي'
            ],
            [

                'Name_en'=> 'Puerto Rican',
                'Name'=> 'بورتي'
            ],
            [

                'Name_en'=> 'Qatari',
                'Name'=> 'قطري'
            ],
            [

                'Name_en'=> 'Reunionese',
                'Name'=> 'ريونيوني'
            ],
            [

                'Name_en'=> 'Romanian',
                'Name'=> 'روماني'
            ],
            [

                'Name_en'=> 'Russian',
                'Name'=> 'روسي'
            ],
            [

                'Name_en'=> 'Rwandan',
                'Name'=> 'رواندا'
            ],
            [

                'Name_en'=> '',
                'Name'=> 'Kittitian/Nevisian'
            ],
            [

                'Name_en'=> 'St. Martian(French)',
                'Name'=> 'ساينت مارتني فرنسي'
            ],
            [

                'Name_en'=> 'St. Martian(Dutch)',
                'Name'=> 'ساينت مارتني هولندي'
            ],
            [

                'Name_en'=> 'St. Pierre and Miquelon',
                'Name'=> 'سان بيير وميكلوني'
            ],
            [

                'Name_en'=> 'Saint Vincent and the Grenadines',
                'Name'=> 'سانت فنسنت وجزر غرينادين'
            ],
            [

                'Name_en'=> 'Samoan',
                'Name'=> 'ساموي'
            ],
            [

                'Name_en'=> 'Sammarinese',
                'Name'=> 'ماريني'
            ],
            [

                'Name_en'=> 'Sao Tomean',
                'Name'=> 'ساو تومي وبرينسيبي'
            ],
            [

                'Name_en'=> 'Saudi Arabian',
                'Name'=> 'سعودي'
            ],
            [

                'Name_en'=> 'Senegalese',
                'Name'=> 'سنغالي'
            ],
            [

                'Name_en'=> 'Serbian',
                'Name'=> 'صربي'
            ],
            [

                'Name_en'=> 'Seychellois',
                'Name'=> 'سيشيلي'
            ],
            [

                'Name_en'=> 'Sierra Leonean',
                'Name'=> 'سيراليوني'
            ],
            [

                'Name_en'=> 'Singaporean',
                'Name'=> 'سنغافوري'
            ],
            [

                'Name_en'=> 'Slovak',
                'Name'=> 'سولفاكي'
            ],
            [

                'Name_en'=> 'Slovenian',
                'Name'=> 'سولفيني'
            ],
            [

                'Name_en'=> 'Solomon Island',
                'Name'=> 'جزر سليمان'
            ],
            [

                'Name_en'=> 'Somali',
                'Name'=> 'صومالي'
            ],
            [

                'Name_en'=> 'South African',
                'Name'=> 'أفريقي'
            ],
            [

                'Name_en'=> 'South Georgia and the South Sandwich',
                'Name'=> 'لمنطقة القطبية الجنوبية'
            ],
            [

                'Name_en'=> 'South Sudanese',
                'Name'=> 'سوادني جنوبي'
            ],
            [

                'Name_en'=> 'Spanish',
                'Name'=> 'إسباني'
            ],
            [

                'Name_en'=> 'St. Helenian',
                'Name'=> 'هيلاني'
            ],
            [

                'Name_en'=> 'Sudanese',
                'Name'=> 'سوداني'
            ],
            [

                'Name_en'=> 'Surinamese',
                'Name'=> 'سورينامي'
            ],
            [

                'Name_en'=> 'Svalbardian/Jan Mayenian',
                'Name'=> 'سفالبارد ويان ماين'
            ],
            [

                'Name_en'=> 'Swazi',
                'Name'=> 'سوازيلندي'
            ],
            [

                'Name_en'=> 'Swedish',
                'Name'=> 'سويدي'
            ],
            [

                'Name_en'=> 'Swiss',
                'Name'=> 'سويسري'
            ],
            [

                'Name_en'=> 'Syrian',
                'Name'=> 'سوري'
            ],
            [

                'Name_en'=> 'Taiwanese',
                'Name'=> 'تايواني'
            ],
            [

                'Name_en'=> 'Tajikistani',
                'Name'=> 'طاجيكستاني'
            ],
            [

                'Name_en'=> 'Tanzanian',
                'Name'=> 'تنزانيي'
            ],
            [

                'Name_en'=> 'Thai',
                'Name'=> 'تايلندي'
            ],
            [

                'Name_en'=> 'Timor-Lestian',
                'Name'=> 'تيموري'
            ],
            [

                'Name_en'=> 'Togolese',
                'Name'=> 'توغي'
            ],
            [

                'Name_en'=> 'Tokelaian',
                'Name'=> 'توكيلاوي'
            ],
            [

                'Name_en'=> 'Tongan',
                'Name'=> 'تونغي'
            ],
            [

                'Name_en'=> 'Trinidadian/Tobagonian',
                'Name'=> 'ترينيداد وتوباغو'
            ],
            [

                'Name_en'=> 'Tunisian',
                'Name'=> 'تونسي'
            ],
            [

                'Name_en'=> 'Turkish',
                'Name'=> 'تركي'
            ],
            [

                'Name_en'=> 'Turkmen',
                'Name'=> 'تركمانستاني'
            ],
            [

                'Name_en'=> 'Turks and Caicos Islands',
                'Name'=> 'جزر توركس وكايكوس'
            ],
            [

                'Name_en'=> 'Tuvaluan',
                'Name'=> 'توفالي'
            ],
            [

                'Name_en'=> 'Ugandan',
                'Name'=> 'أوغندي'
            ],
            [

                'Name_en'=> 'Ukrainian',
                'Name'=> 'أوكراني'
            ],
            [

                'Name_en'=> 'Emirati',
                'Name'=> 'إماراتي'
            ],
            [

                'Name_en'=> 'British',
                'Name'=> 'بريطاني'
            ],
            [

                'Name_en'=> 'American',
                'Name'=> 'أمريكي'
            ],
            [

                'Name_en'=> 'US Minor Outlying Islander',
                'Name'=> 'أمريكي'
            ],
            [

                'Name_en'=> 'Uruguayan',
                'Name'=> 'أورغواي'
            ],
            [

                'Name_en'=> 'Uzbek',
                'Name'=> 'أوزباكستاني'
            ],
            [

                'Name_en'=> 'Vanuatuan',
                'Name'=> 'فانواتي'
            ],
            [

                'Name_en'=> 'Venezuelan',
                'Name'=> 'فنزويلي'
            ],
            [

                'Name_en'=> 'Vietnamese',
                'Name'=> 'فيتنامي'
            ],
            [

                'Name_en'=> 'American Virgin Islander',
                'Name'=> 'أمريكي'
            ],
            [

                'Name_en'=> 'Vatican',
                'Name'=> 'فاتيكاني'
            ],
            [

                'Name_en'=> 'Wallisian/Futunan',
                'Name'=> 'فوتوني'
            ],
            [

                'Name_en'=> 'Sahrawian',
                'Name'=> 'صحراوي'
            ],
            [

                'Name_en'=> 'Yemeni',
                'Name'=> 'يمني'
            ],
            [

                'Name_en'=> 'Zambian',
                'Name'=> 'زامبياني'
            ],
            [

                'Name_en'=> 'Zimbabwean',
                'Name'=> 'زمبابوي'
            ]
        
            ];  
    foreach ($Nationalities as $Nationalitie) {
        Nationalitie::create($Nationalitie);
    }
    }
}
