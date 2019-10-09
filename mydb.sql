create database if not exists project;
use project;

create table if not exists doctors
(
id int auto_increment not null primary key ,
name1 varchar (100) NOT NULL,
major varchar(50)  NOT NULL,
degree varchar (50),
clinic varchar (100) NOT NULL,
phone int (11)not null ,
price int (3) not null,
rate int (2),
lat float(10,8) not null,
lang  float(10,8) not null
);

create table if not exists users
(
u_id INT auto_increment NOT NULL PRIMARY KEY,
u_name VARCHAR(100),
u_age INT(100) NOT NULL,
U_date varchar(30) not null,
U_time varchar(30) not null,
u_phone INT(30) not null
);
 
create table if not exists taxi_center
(
t_id INT auto_increment NOT NULL PRIMARY KEY,
t_name VARCHAR(100),
t_level VARCHAR(30),
t_phone int(11),
t_lat float(10,8) not null,
t_lang  float(10,8) not null
); 

insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values ('سنتر1 يسرى راغب','عالى',088232121,27.189769, 31.177692);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values ('سنتر2 يسرى راغب','عالى',088232122,27.180679, 31.187477);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر 1 23يوليو','منخفض',088232123,27.175097, 31.176315);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 23يوليو','متوسط',088232124,27.176051, 31.176733);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 26يوليو','متوسط',088232125,27.176108, 31.176757);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 26يوليو','عالى',088232126,27.182874, 31.185032);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 الجمهورية','متوسط',088232127,27.184376, 31.185841);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 الجمهورية','منخفض',088232128,27.194153, 31.185878);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 النميس','متوسط',088232129,27.183407, 31.185708);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 النميس','متوسط',088232120,27.188256, 31.192187);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 الوليدية','عالى',088232111,27.200454, 31.180392);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 الوليدية','متوسط',088232112,27.200726, 31.180435);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 المحافظة','عالى',088232113,27.186427, 31.189068);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 المحافظة','عالى',088232114,27.191711, 31.189795);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 رياض','منخفض',088232115,27.179569, 31.190170);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 رياض','متوسط',088232116,27.182974, 31.194792);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 المحطة','عالى',088232117,27.1801564,31.18789852);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 المحطة','متوسط',088232118,27.18002278,31.18806481);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 شركة قلتة','متوسط',088232119,27.181432, 31.188220);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 شركة قلتة','متوسط',088232110,27.181184, 31.188724);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 الهلالى','عالى',088232131,27.180289, 31.189394);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 الهلالى','عالى',088232132,27.150058, 31.187684);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 ثابت','عالى',088232133,27.184269, 31.194673);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 ثابت','متوسط',088232134,27.178998, 31.185229);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 فريال','متوسط',088232135,27.184094, 31.184724);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 فريال','متوسط',088232136,27.185228, 31.184207);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 شيكوريل','منخفض',088232137,27.187945, 31.180583);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 شيكوريل','متوسط',088232138,27.187725, 31.180680);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 محمد على مكارم','متوسط',088232139,27.180751, 31.182223);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 محمد على مكاررم','عالى',088232130,27.183136, 31.180335);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 شارع سيتى','عالى',088232141,27.138150, 31.031180);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 شارع سيتى','متوسط',088232142,27.138064, 31.031298);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 الجلاء','متوسط',088232143,27.187719, 31.180446);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 الجلاء','متوسط',088232144,27.183164, 31.185386);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 السادات','عالى',088232145,27.175677, 31.194429);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 السادات','عالى',088232146,27.176622, 31.194053);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 المجذوب','عالى',088232147,27.177328, 31.182626);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 المجذوب','متوسط',088232148,27.179313, 31.181274);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر1 المعلمين','متوسط',088232149,27.156437, 30.808204);
insert into taxi_center (t_name,t_level,t_phone,t_lat,t_lang) values  ('سنتر2 المعلمين','منخفض',088232140,27.154230, 30.808569);
drop table taxi_center;

delete from taxi_center where t_name like 'سنتر1 الهلالى';
delete from taxi_center where t_name like 'سنتر2 الهلالى';

create table if not exists users_profile
(
p_id INT auto_increment NOT NULL PRIMARY KEY,
p_name VARCHAR(100),
p_password varchar(20),
p_birth_day date,
p_gender varchar(20),
p_photo varchar(255),
p_email varchar(20)
);

create table if not exists hospitals
(
h_id int auto_increment not null PRIMARY KEY,
h_name varchar (100) not null,
h_address varchar (100) not null,
h_major varchar(50) not null,
h_phone int (11) not null,
h_lat float(10,8) not null,
h_lang  float(10,8) not null 
);

create table if not exists amb
 (
 amb_id int auto_increment not null primary key ,
 amb_address varchar (100)not null,
 amb_lat float(10,8) not null,
 amb_lang float(10,8) not null
 );
 create table if not exists pharmacy (
	id int auto_increment not null primary key,
    phone int(12),
    Ph_name varchar(100),
    address varchar(100),
	lat float(10,8) not null,
	lang float(10,8) not null
);
drop table pharmacy;
drop database if exists project;


insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('الحسن محمد على','اطفال','استاذ','شارع يسرى راغب',0882349133,120,3,27.184761,31.181637);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ايهاب بطرس','اطفال','اخصائى','شارع ستى',01007086876,100,4,27.184030,31.181139);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ثروت الحريري','اطفال','اخصائى','شارع يسرى راغب',0882334763,100,5,27.186702,31.180087);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('جمال ثابت حنا','اطفال','اخصائى','شركة فريال',0882328835,120,4,27.188341,31.181324);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حمدي الغزالي','اطفال','استاذ','شارع رياض',0882310405,120,3,27.181280,31.192474);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('دلال فوزي عياد','اطفال','استشارى','شارع 26 يوليو',0882333786,300,7,27.179098,31.180834);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('صلاح الدين عمري','اطفال','استاذ مساعد','شارع 23 يوليو',0882344298,100,3,27.178399,31.184753);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('صبري صموئيل عوض','اطفال','اخصائى','شارع يسرى راغب',0882347566,100,4,27.183366,31.182715);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عبد اللطيف عبد المعز','اطفال','استاذ','شارع المحطه',0882332318,120,3,27.179989,31.187885);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('فردوس عبد العال','اطفال','استاذ','شارع المحافظه',0882327776,150,4,27.187433,31.189189);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('قطب عباس متولى','اطفال','استاذ مساعد','شارع المحافظه',0109040694,150,3,27.186670,31.189109);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مصطفي السعيد','اطفال','استاذ','شارع 26 يوليو',0882320633,75,5,27.1811967,31.18349433);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماجد نعيم','اطفال','اخصائى','شركة قلته',0882331241,100,4,27.18780573,31.1791116);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماهر مختار احمد','اطفال','اخصائى','شارع يسرى راغب',0882350044,80,5,27.183692,31.184328);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماري ميخائيل','اطفال','اخصائى','شارع ثابت',0882338558,80,5,27.1797898,31.1843578);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مجدي منير سلطان','اطفال ','اخصائى','شارع 26 يوليو',0882301991,100,3,27.18100582,31.18338168);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد امير فتحي','اطفال','اخصائى','شارع 26 يوليو',0882353533,130,5,27.18053816,31.18300617);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مجدي رزق نخله','اطفال','اخصائى','شارع جوده الاسدى',0882317538,120,2,27.18920702,31.1820817);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد ياسر النسر','اطفال','استاذ','شارع يسرى راغب',0882341735,75,6,27.183878,31.184138);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('نادر قليني واصف','اطفال','استشارى','شارع الجمهوريه',0882332058,300,7,27.18568707,31.18611753);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('هناء واصف شاكر','اطفال','اخصائى','شارع رشيدى',0882327480,70,5,27.1867331,31.1870602);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('باسم فتحي','امراض القلب','اخصائى','شارع محمد فريد',0882339534,200,6,27.18014049,31.17537618);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('البدري ابو نور','امراض القلب','استاذ','شارع محمد توفيق خشبه',0882339093,250,6,27.18083403,31.1842078);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حاتم عبد الرحمن','امراض القلب','مدرس','شارع يسرى راغب',0105212162,300,4,27.183959,31.184025);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حمدي شمس الدين','امراض القلب','استاذ مساعد','شارع المحطه',0882351990,250,5,27.18008959,31.18797362);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('سلوي رشدي دمتري','امراض القلب','استاذ','شارع 26 يوليو',0882333067,200,8,27.18024229,31.18256092);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('سمير سيد عبد القادر','امراض القلب','استاذ','شارع ثابت',0882332533,199,6,27.1804809,31.18346751);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ممدوح ذكري فيلبس','امراض القلب','استشارى','شارع محمد توفيق خشبه',0882344311,300,7,27.18108217,31.18449211);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمود عبد الرحمن','امراض القلب','استاذ','شارع المحطه',0882345565,300,3,27.1801564,31.18789852);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('نبيل نصيف مرقص','امراض القلب','استشارى','شارع يسرى راغب',0882334920,250,8,27.183954,31.184044);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('نور الدين عبد العظيم ','امراض القلب','اخصائى','شارع المحطه',0882334632,200,4,27.18002278,31.18806481);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('وجيه طياب عبد الملك','امراض القلب','اخصائى','شارع النميس',0882318574,200,3,27.1839358,31.18631601);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('وفاء راضي','امراض القلب','اخصائى','شارع يسرى راغب',0882347566,250,5,27.184040,31.183937);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('يحي طه كشك','امراض القلب','استاذ','شارع يسرى راغب',0882335120,350,6,27.184081,31.183889);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('اشرف عثمان','باطنه','مدرس','شارع 26 يوليو',0882342608,150,6,27.17993211,31.18206203);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('الفت مصطفي الشناوي','باطنه','استاذ','شارع رياض',0882326610,175,4,27.1813443,31.1925838);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('اشرف الشاذلى','باطنه','استاذ مساعد','شارع الهلالى',0882316869,100,5,27.18086266,31.19028032);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('تواضرس بشري تواضرس','باطنه','استشارى','شارع الجيش',0882336015,150,4,27.18204134,31.17749691);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حمدي محفوظ مصطفي','باطنه','استاذ','شارع المحطه',0882341825,150,5,27.18029479,31.18785024);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('رافت طلعت السكري','باطنه','مدرس','شارع المحطه',0882333099,100,6,27.17995597,31.18805408);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('سيد احمد سيد','باطنه','اخصائى','شركة فريال',0882314100,200,6,27.18976053,31.18083715);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('شريف كامل','باطنه','مدرس','شارع يسرى راغب',0882363339,200,2,27.184153,31.183792);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('صفاء متار وافي','باطنه','مدرس','شارع يسرى راغب',0882365171,100,3,27.184268,31.183698);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('طلعت شوقي','باطنه','استشارى','شارع محمد توفيق خشبه',0882338717,200,8,27.18201271,31.18548453);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('طارق محفوظ','باطنه','استاذ','شارع يسرى راغب',0882331544,100,7,27.184375,31.183593);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عبد الغني سليمان','باطنه','استاذ','شارع 26 يوليو',0882347280,200,4,27.1797126,31.18176699);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عصام البيه','باطنه','استاذ مساعد','شارع يسرى راغب',0882348851,150,5,27.184580,31.183370);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماهر عبد الجابر','باطنه','استاذ','شارع ثابت',0882330226,250,4,27.18000369,31.18408978);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مجدي امين شحاته','باطنه','استشارى','شارع 26 يوليو',0882334566,300,10,27.17957898,31.18152559);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مدحت ادوارد اسكندر','باطنه','استشارى','شارع المحطه',0882332712,250,9,27.17945968,31.18798971);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماهر عشم ابراهيم','باطنه','استاذ','شارع المطرانيه',0882334051,100,5,27.04330572,31.31812513);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد عدوي نافع','باطنه','استاذ','شارع ثابت',0882332566,150,3,27.17966487,31.18445992);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد الطاهر عبد الرحمن','باطنه','مدرس','شارع يسرى راغب',0882324676,120,3,27.185219,31.182659);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('نيازي عياد الضبع','باطنه','استشارى','شارع 26 يوليو',0882343200,300,8,27.17947876,31.18138611);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('احمد عبد العليم عبد الوهاب','انف واذن','استاذ','شارع ثابت',0882330759,70,5,27.17900155,31.18522167);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('احمد عبد الحي الحسيني','انف واذن','استاذ','شارع المحطه',0882337443,150,5,27.18008482,31.18779659);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('اكرم حبيب الياس','انف واذن','اخصائى','شارع محمد توفيق خشبه',0882333190,200,2,27.18187909,31.18533432);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('رافت فرج حنا','انف واذن','استشارى','شيكوريل',0882334133,250,7,27.18158323,31.18370891);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ريمون صديق سلامه','انف واذن','اخصائى','شارع النميس',0882318574,150,5,27.18416485,31.18657887);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('على رجائي عبد الحكيم ','انف واذن','استاذ','شارع المحطه',0882331699,100,2,27.18044749,31.18760347);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مصطفى عثمان رمضان','انف واذن','استاذ','شارع المحطه',0882332049,100,6,27.18019935,31.18754447);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد محمد كمال الدين','انف واذن','استاذ','شارع المحطه',088234884,130,3,27.17920198,31.18766785);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد عزام عبد الرازق','انف واذن','استاذ','شارع يسرى راغب',0882348370,75,4,27.185283,31.182584);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمود راغب الشريف','انف واذن','استاذ','شارع المحطه',0882339744,70,4,27.17916381,31.1876893);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مجدي اديب غالي','انف واذن','اخصائى','شارع ثابت',0882338364,300,5,27.17926402,31.18496418);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('احمد ابو غدير','عيون','استاذ','شارع المحطه',0882336133,100,6,27.17981281,31.18732452);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('اسماعيل احمد وصفي','عيون','استاذ','شارع المحطه',0882332663,200,5,27.17978895,31.18727088);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('توماس طلعت عبد الشهيد','عيون','استشارى','شارع يسرى راغب',01119728615,500,9,27.18257421,31.1855042);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حلمي صومئيل','عيون','استشارى','شارع 26 يوليو',0882333797,300,7,27.17852434,31.18004501);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('سلوي عبد الفضيل حسن','عيون','استشارى','شارع الهلالى',0882321396,300,9,27.181009,31.19052529);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('شريف حلمي خليل','عيون','استشارى','شارع ثابت',0882336184,250,7,27.17954557,31.18462086);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عمر محمد علي','عيون','استاذ','شارع المحطه',0882330437,150,3,27.179746,31.18720114);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('علي احمد فتحي','عيون','استاذ','شارع يسرى راغب',0882330599,100,2,27.18374015,31.18243754);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عبد الناصر عوض محمد','عيون','استاذ مساعد','شارع المحطه',0882338420,75,4,27.17916381,31.1876893);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('كامل عبد الناصر','عيون','استاذ','شارع يسرى راغب',0882330815,100,3,27.18225131,31.18588686);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('لورانس لبيب','عيون','استشارى','شارع 26 يوليو',0882333498,250,8,27.17843367,31.17992163);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد طارق عبد المنعم','عيون','استاذ','شارع المحطه',0882341408,500,6,27.18026615,31.18754447);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد احمد شريت','عيون','اخصائى','شارع رياض',0882311133,100,3,27.18201271,31.19347751);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد عباس الشلح','عيون','اخصائى','شارع يسرى راغب',0882331445,80,5,27.18346338,31.18458867);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ميخائيل امين خله ','عيون','اخصائى','شارع الجيش',0882337042,250,3,27.18175979,31.17762029);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('الهام داوود صموئيل','جلديه','اخصائى','شارع المحطه',01003135165,50,3,27.18015162,31.18752837);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ايمان رياض حنفي','جلديه','مدرس','شارع المحطه',0882349191,80,6,27.18021843,31.18754983);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('اسامه سليمان','جلديه','مدرس','شارع 23 يوليو ',0882341919,90,6,27.17890134,31.18583322);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('حاتم زيدان','جلديه','مدرس','شارع يسرى راغب',0882342100,100,6,27.18215587,31.18597269);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('علاء الدين مباشر','جلديه','استاذ','شارع المحطه',0882338807,100,4,27.18019935,31.18753374);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('جمال عبد الحافظ','جلديه','استاذ','شارع يسرى راغب',0882330535,90,7,27.18167867,31.18645549);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ماجد ايميل حنا','جلديه','اخصائى','شارع الجيش',0882336920,85,5,27.18154983,31.17772222);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ناجي سليم قلاده','جلديه','اخصائى','شارع 26 يوليو',0882325494,100,5,27.17812826,31.17947638);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('نجوي عيسي عبد العظيم','جلديه','استاذ','شارع المحطه',0882332216,110,1,27.18017549,31.18752837);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ناهد حلمي جندي','جلديه','اخصائى','شارع الهلالى',0882325478,73,6,27.18254558,31.19261742);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('باسم حكيم','مسالك','اخصائى','شارع يسرى راغب',0882338346,80,6,27.18187909,31.18625164);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('سعيد شوقي عوض','مسالك','اخصائى','شارع 26 يوليو',0882343528,90,6,27.17759378,31.17860734);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('شيرين ابراهيم','مسالك','استاذ','شارع محمد فريد',0882339534,120,4,27.17990348,31.1755228);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ضياء الدين عبد الحميد','مسالك','استشارى','شركة فريال',01001229936,150,8,27.19129858,31.17878437);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('ظريف فايز','مسالك','اخصائى','شارع الجلاء',0882321295,110,3,27.18688001,31.18121982);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عاطف عبد العزيز','مسالك','استاذ','شارع ثابت',0882331795,100,3,27.1797898,31.1843578);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('علاء عزت عبد المنعم ','مسالك','مدرس','شارع المجذوب',0882339396,150,4,27.17740766,31.18321002);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('عاطف على جعفر','مسالك','مدرس','شارع المحطه',0882357005,140,4,27.18011822,31.18751764);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مجدي عباس العقاد','مسالك','استاذ','شارع الجلاء',0882326010,130,4,27.18735719,31.18073165);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('محمد احمد شلبي','مسالك','استاذ','شارع الجلاء',0882326023,110,5,27.1875576,31.18053317);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('مدحت حكيم','مسالك','مدرس','شارع النميس',0882318642,100,6,27.18494743,31.18744791);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('احمد الطيب','جراحه','استاذ','شارع المحافظه', 0882325776,80,5,27.187066,31.189136);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('بهجت عبد الحميد','جراحه','استاذ','شارع ثابت', 0882339570,100,4,27.17998938,31.18406832);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values ('جميل سامى','جراحه','استشارى','شارع المجذوب', 0883233031,110,10,27.17751742,31.18289888);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' حسن بكر البدوي','جراحه','استاذ','شارع يسرى راغب', 0882331325,100,5,27.1814019,31.18677735);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' رأفت روسكوف','جراحه','اخصائى','شارع يسرى راغب', 0882330340,90,5,27.18585885,31.18192792);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' سليم نسيم','جراحه','استشارى','شارع محمد توفيق خشبه', 0882334950,80,6,27.18058111,31.18394494);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' ساهر توفيق','جراحه','استشارى','شارع السادات', 0882331900,100,7,27.1762498,31.1942792);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عبد الرازق حسن','جراحه','استاذ','شارع الجيش', 0882336262,90,7,27.18127782,31.17792606);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' علاء عبد العزيز','جراحه','استاذ','شارع ثابت', 0882336694,80,3,27.18023275,31.18380547);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عاصم حسن كامل','جراحه','استاذ','شارع المحطه', 0882341053,70,5,27.18029956,31.18754447);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عماد كمال','جراحه','استاذ','شارع محمد فريد', 0882334081,100,4,27.17997824,31.17550492);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' محمود راغب الشريف','جراحه','استاذ','شارع المحطه',0882313665,90,6,27.18044272,31.18751764);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' ماهر نسيم','جراحه','اخصائى','شارع يسرى راغب', 0882343463,350,4,27.18607835,31.18169725);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' يوسف فؤاد يواقيم','جراحه','اخصائى','شارع الجمهوريه', 0882318842,150,2,27.1863074,31.18619263);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' أحمد تاج الدين','أمراض النساء','استاذ','شارع المحطه'  , 0882338550 ,90,7,27.17990348,31.18748009);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' أحمد فايق أمين','أمراض النساء','استاذ','شارع المحطه'  , 0882333516  ,250,5,27.1794549,31.18812382);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' أماني قطب مراد','أمراض النساء','اخصائى','شارع ستى'  , 0882335523 ,120,3,27.1828144,31.17969632);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' إميل نعيم طياب','أمراض النساء','اخصائى','شارع الجمهوريه'  , 0882321524  ,135,5,27.18527192,31.18604243);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' أسامة أبو حطب','أمراض النساء','اخصائى','شارع ابوبكر الصديق'  , 0882316487  ,270,5,27.18835925,31.18299007);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' تريز منصور','أمراض النساء','اخصائى','شارع الجيش'  , 0882331363 ,320,3,27.18142576,31.17780268);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' حسن صلاح عبد الناصر','أمراض النساء','استاذ','شارع الهلالى'  , 0882303855  ,200,5,27.18271737,31.19292855);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' حازم سعد الدين','أمراض النساء ','مدرس','شارع يسرى راغب'  , 0882358603  ,170,7,27.18411713,31.1821264);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' سعد الدين محمد','أمراض النساء','استشارى','شارع 26 يوليو'  , 0882336140 ,250,7,27.17713565,31.1778456);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' صفوت عبد الراضي محمد','أمراض النساء','مدرس','شارع يسرى راغب'  , 0882345388 ,280,5,27.18600678,31.18062437);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' ضياء الدين محمد عبد العال','أمراض النساء','استاذ مساعد','شارع ثابت'  , 0882348809  ,170,5,27.18031865,31.18369818);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عاطف درويش','أمراض النساء','استاذ مساعد','شارع المحطه', 0882340565  ,320,5,27.17940241,31.1881882);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' كمال زهران ','أمراض النساء','مدرس','شارع المحطه', 0882360341  ,100,2,27.17927356,31.18831158);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' ممدوح شعبان','أمراض النساء','استاذ','شارع الجيش', 0882337512 ,150,6,27.18160709,31.17770612);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' مؤمن كامل','أمراض النساء','استاذ مساعد','شارع يسرى راغب', 0882343970  ,170,8,27.18563935,31.18092477);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' محمود زكريا','أمراض النساء','مدرس','شارع المجذوب', 0882342626 ,80,3,27.17760332,31.18270576);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' محمد عوض حسن','أمراض النساء ','استاذ','شارع ثابت', 0882340666 ,60,7,27.1804809,31.1834836);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' نشأت سليمان بشاي','أمراض النساء','استشارى','شارع ثابت',  0882338860,90,6,27.18062406,31.18328512);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' وجدي موريس مريد','أمراض النساء','اخصائى','شارع 26 يوليو', 0882336062 ,70,3,27.17788488,31.17910087);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' وحيد محمد حسن','أمراض النساء','اخصائى','شارع سعد زغلول', 0882338292,110,5,27.17370917,31.18287206);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' جلال الدين زكي','عظام','استاذ','شارع ثابت', 0882334943 ,100,5,27.1808722,31.18302226);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' روماني ولسن','عظام','اخصائى','شارع يسرى راغب'  , 0882351692  ,120,8,27.18382604,31.18237317);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' سامح وديع ناروز','عظام','اخصائى','شارع الجمهوريه'  , 0882317847  ,90,4,27.18450365,31.18591368);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' شريف أنور مشرقي','عظام','استشارى','شارع النميس'  , 0882316000 ,110,9,27.18456091,31.18732452);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عصام الشريف','عظام','استاذ','شارع يسرى راغب'  , 0882330882,100,8,27.18315798,31.18290961);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عاطف وليم نخلة','عظام','استاذ','شارع يسرى راغب'  , 0882331158  ,120,4,27.18226085,31.18362308);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' عمرو السيد علي','عظام','مدرس','شارع المحطه'  , 0882332261 ,170,5,27.17955512,31.18803263);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' فيصل فهمي آدم','عظام','استاذ','شارع يسرى راغب'  , 0882340530 ,150,8,27.18251854,31.18343532);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' كرم الله رمضان','عظام','استاذ','شارع المحطه'  , 0882327442 ,150,6,27.17965533,31.18702948);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' ماهر عبد السلام العسال','عظام','استاذ','شارع 26 يوليو'  , 0882336878 ,140,5,27.17990348,31.18202448);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' موريس سوريال يوسف','عظام','استاذ','شارع الجيش'  , 0882332455  ,160,5,27.1817653,31.1776494);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' مصطفي حسني النجار','عظام','استشارى','شارع الهلالى'  , 0882328957  ,200,8,27.18083721,31.19033217);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' هشام القاضى','عظام','استاذ','محمد على مكارم'  , 0882339079  ,180,6,27.18306731,31.18028104);
insert into doctors (name1,major,degree,clinic,phone,price,rate,lat,lang) values (' يوسف المصرى','عظام','استشارى','شارع 26 يوليو'  , 0882337167 ,170,8,27.1808388,31.18329585);

select * from doctors;

insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى دار السلام','ش 23 يوليو','نسا و عظام',0882334690,27.180121,31.187531);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى جراحة العظام','ش رياض','جراحة عظام',0883220522,27.181440,31.192584);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الغزل','ش طراد النيل بالحمراء','عامه',0882324152,27.175932,31.191107);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى العقاد','ش الجلاء','مسالك بوليه',0882321229,27.186707,31.181430);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى العسيلى','ش 23 يوليو','جراحة عامه',0883265452,27.180196,31.187545);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الطماوى د ثناء كمال','ش الجلاء','عامه',0882328709,27.183021,31.185206);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الطماوى','ش الخلفاء','عامه',0882328709,27.185965,31.184677);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى فاروق احمد مراد','ش المحطه','جراحة عامه',0882347095,27.179668,31.187837);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الطيب','ش الشاميه','جراحة عامه',0883277762,27.186234,31.189082);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الفيروزمحمود رافت','الوليديه','نفسية وعصبيه',0882321059,27.196338,31.176776);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى القلب التخصصى','ش المحطه','عامة',0882321059,27.180207,31.187542);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى المروه','ش المحطه','جراحة عيون',0882342666,27.179849,31.187333);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الندى','ش الهلالى','نسا وتوليد',0882303855,27.182035,31.191871);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى النسيم','ش الجيش','نسا و عظام',0882331363,27.183598,31.184342);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الهلال','ش المحطه','مسالك بوليه',0883346472,27.180353,31.187539);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى الامين','ش الفتح','نسا و توليد',0884771983,27.174445,31.194099);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى رئيس الملائكه','ش النميس','عامه',0882316000,27.184056,31.186374);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى سانت ماريا','ش الحاكمدار','عامه',0882316000,27.191752,31.182392);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى عصام الشريف','ش ثابت','جراحة عظام',0882324829,27.206126,31.104776);
insert into hospitals (h_name,h_address,h_major,h_phone,h_lat,h_lang) values ('مستشفى محمد منير شهوان','ش 23 يوليو','جراحه عامه و عظام',0883373582,27.175358,31.176400);



insert into amb ( amb_address,amb_lat,amb_lang) values ('جامعه اسيوط',27.186184, 31.174987);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع القصر العينى',27.185269, 31.166400);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع 23 يوليو',27.177624, 31.183609);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع 23 يوليو',27.177681, 31.183920);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع سعد زغلول',27.178235, 31.185727);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع مدينه مبارك',27.167259, 31.184734);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع المجذوب',27.177533, 31.183786);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع جسر السلطان',27.174879, 31.188174);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع مديريه الزراعه',27.188837, 31.179436);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع المامون',27.187547, 31.181544);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع المامون',27.187304, 31.181441);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع الجلاء',27.186985, 31.181552);
insert into amb ( amb_address,amb_lat,amb_lang) values ('احمد على الابه',27.193351, 31.187858);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع بلال ابن رباح',27.199412, 31.177071);
insert into amb ( amb_address,amb_lat,amb_lang) values ('طريق  البيسرى',27.187029, 31.162202);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع ثابت',27.179432, 31.184590);
insert into amb ( amb_address,amb_lat,amb_lang) values ('شارع النميس',27.184127, 31.186278);

insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882318714,'صيدلية نادر نبيل فهمى','شارع الامام على',27.177869,31.194509);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882372022,'صيدلية نادية حسين مازن ','شارع يسرى راغب',27.184597,31.181745);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882404714,'صيدلية ناهد','منطقة الفتح',27.189020,31.168368);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882330841,'صيدلية نبيل صادق','شارع محمد فريد',27.180585, 31.175189);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882397016,'صيدلية نجوى محمد','شارع المحافظة',27.189906, 31.189629);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882323450,'صيدلية ناصر شكرى','شارع النميس',27.183896, 31.186228);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882322044,'صيدلية نبيل','شارع الجمهورية',27.193642,31.186091);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882327309,'نصيدلية بيلة محمد','بجوار مستشفى الزهراء',27.189155,31.181153);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882366360,'صيدلية نسرين محمد','شارع 23يوليو',27.176118,31.176138);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882404385,'صيدلية سامح رجاء','منطقة الفتح',27.1893789,31.168990);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882331235,'صيدلية سان جورج','شلرع محمد على مكرم',27.189069, 31.180241);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882288404,'سحر حلمى','شارع الحكمدار',27.191113, 31.185514);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882310243,'صيدلية سرى بشرى','منطقة الوليدية',27.201441,31.179920);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882329105,'صيدلية سمير رياض','شارع النصر',27.176181,31.190990);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882316351,'صيدلية سامية سامى وهبه','شارع 7جمال الدين ثابت منطقة فريال',27.184332,31.184816);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882332882,'صيدلية سحر برتى','شارع التحرير',27.181404,31.185184);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882403905,'صيدلية سحر سعد الدين','شارع المحافظة',27.190297, 31.189683);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882334805,'صيدلية سعد هنرى','شارع يسرى راغب',27.184589,31.181390);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882320835,'صيدلية سمير فوزى','شارع الجلاء',27.186019, 31.182215);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882344510,'صيدلية عادل لويز','شارع الجيش',27.181470,31.177803);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882331226,'صيدلية الكرمة','شارع يسرى راغب',27.182855, 31.185278);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882308275,'صيدلية بدرت وليم منصور','شارع الجمهورية',27.188714, 31.186343);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882312353,'صيدلة ام النور','شارع المحافظة',27.190803, 31.189844);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882322389,'صيدلية الهدى','منطقة الوليدية',27.201365, 31.179791);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882326509,'صيدلية امال فتحى','شارع النميس',27.183687, 31.186029);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882327932,'صيدلية الملاك','شارع النميس',27.184603, 31.187102);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882334366,'صيدلية المعصراتى','شارع 26 يوليو',27.177959, 31.179146);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882315651,'صيدلية الفاروق','شارع الجلاء',27.186773, 31.181378);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882323086,'صيدلية الجلاء','شارع الجلاء',27.185723, 31.182612);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882367808,'صيدلية امانى عبد القادر','شارع الجيش',27.18127782,31.17792606);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882314736,'صيدلية ابراهيم عزمى حنين','شارع الجمهورية',27.191424, 31.186322);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882344700,'صيدلية ايمان حليم سلامة','شارع يسرى راغب',27.181681, 31.186490);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882327956,'صيدلية اشرف','شارع المحافظة',27.190574, 31.189801);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882322499,'صيدلية تادرس اسحق تادرس','شارع الجلاء',27.184960, 31.183395);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882311704,'صيدلية جى جى','شارع الجلاء',27.185724, 31.182494);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882327572,'صيدلية زين العابدين','شارع النميس',27.184002, 31.186383);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882502158,'صيدلية سهير عمر على شحاته','شارع  النميس',27.184556, 31.187037);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882321561,'صيدلية صبحى','شارع الجلاء',27.186497, 31.181657);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882328236,'صيدلية صوفيا','شارع الجمهورية',27.193037, 31.186107);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882320146,'صيدلية عادل حكيم خلة','شارع النميس',27.184461, 31.186876);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882322621,'عصام الدين لميس عبد العظيم','شارع الجمهورية',27.192588, 31.186204);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882313126,'صيدلية عفاف بشاى مهنى','شارع الجلاء',27.187175, 31.180981);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882332731,'صيدلية فاروق لبيب الميرى','شارع 26 يوليو',7.177425, 31.178202);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882336827,'صيدلية فرج وديع فلتس','شارع يسرى راغب',27.185126, 31.182821);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882323576,'صيدلية كوكب عزيز','شارع 26 يوليو',27.176671, 31.177151);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882333737,'صيدلية لويز فايق تادرس','شارع 26 يوليو',27.178828, 31.180391);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882353694,' صيدلية ماجد كمال حكيم','شارع يسرى راغب',27.186023, 31.181780);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882333231,'صيدلية مارى جرجس','شارع يسرى راغب',27.185899, 31.181844);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882355766,'صيدلية محسن ولسن عزب','شارع يسرى راغب',27.185069, 31.182874);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882325268,'صيدلية محمد سليمان عطية سيد','شارع الهلالى',27.182649, 31.192579);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882332826,'صيدلية مهران','شارع يسرى راغب',27.186310, 31.181480);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882304114,'صيدلية ميرفت عبد المسيح','شارع الجمهورية',27.189052, 31.186368);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882337240,'صيدلية ميشيل عطالله','شارع يسرى راغب',27.185995, 31.181823);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882502879,'صيدلية نشأت وجيه بشرى','شارع الجمهورية',27.186246, 31.185992);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882271023,'صيدلية هانى عبد العزيز مرقس','شارع الجيش',27.183664, 31.184435);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882327207,'صيدلية وجيه فلتس عازر','شارع الجمهورية',27.184423, 31.185767);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882326688,'صيدلية وسام','شارع النميس',27.184375, 31.186758);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882503313,'صيدلية الاسراء','شارع الجمهورية',27.186828, 31.186196);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882320344,'صيدلية يوسف اسحق ملك','شارع الجمهورية',27.189958, 31.186335);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882322626,'صيدلية المحطة','شارع الهلالى',27.181599, 31.191141);
insert into pharmacy (phone,Ph_name,address,lat,lang) values(0882500075,'صيدلية المدينة المنورة','شارع الجمهورية',27.193231, 31.186088);
/*delete from pharmacy where address like 'شارع الجيش';*/

 create table if not exists sur_doctors (
    id int(12) not null primary key ,
    dist float(20) not null
);


 create table if not exists sur_hospitals (
    id int(12) not null primary key ,
    dist float(20) not null
);

 create table if not exists sur_pharmacy (
    id int(12) not null primary key ,
    dist float(20) not null
);

 create table if not exists sur_amb (
    id int(12) not null primary key ,
    dist float(20) not null
);

 create table if not exists sur_taxi (
    id int(12) not null primary key ,
    dist float(20) not null
);








select * from doctors;
select * from hospitals;
select distinct h_address from hospitals;
select distinct clinic from doctors;
select distinct major from doctors;
select distinct degree from doctors;
select * from doctors where rate > 7 order by rate desc ;

select * from amb;
select * from pharmacy;












