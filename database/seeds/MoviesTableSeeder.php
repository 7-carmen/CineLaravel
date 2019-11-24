<?php

use App\movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        movie::truncate();
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/frozen_ii-725228283-msmall.jpg',
            'nombre'=>'Frozen II ',
            'duracion'=>'103 min.',
            'anyo'=>'2019 ',
            'sinopsis'=>'¿Por qué nació Elsa con poderes mágicos? La respuesta le está llamando y amenaza su reino. Junto con Anna, Kristoff, Olaf y Sven emprenderá un viaje peligroso e inolvidable. En \'Frozen\', Elsa temía que sus poderes fueran demasiado para el mundo. En \'Frozen 2\', deseará que sean suficientes. Secuela de "Frozen. El reino del hielo" (2013), el film de animación más taquillero de la historia del cine, ganador del Oscar a la mejor película animada. Reunirá al mismo equipo artístico y técnico de la original. (FILMAFFINITY)',
            'rating'=>'6,6'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/joker-790658206-msmall.jpg',
            'nombre'=>'Joker ',
            'duracion'=>'121 min.',
            'anyo'=>'2019 ',
            'sinopsis'=>'Arthur Fleck (Phoenix) vive en Gotham con su madre, y su única motivación en la vida es hacer reír a la gente. Actúa haciendo de payaso en pequeños trabajos, pero tiene problemas mentales que hacen que la gente le vea como un bicho raro. Su gran sueño es actuar como cómico delante del público, pero una serie de trágicos acontecimientos le hará ir incrementando su ira contra una sociedad que le ignora. (FILMAFFINITY)',
            'rating'=>'8,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/coco-155051069-msmall.jpg',
            'nombre'=>'Coco ',
            'duracion'=>'109 min.',
            'anyo'=>'2017 ',
            'sinopsis'=>'Miguel es un joven con el sueño de convertirse en leyenda de la música a pesar de la prohibición de su familia. Su pasión le llevará a adentrarse en la "Tierra de los Muertos" para conocer su verdadero legado familiar. (FILMAFFINITY)',
            'rating'=>'8,0'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/the_bone_collector-109538205-msmall.jpg',
            'nombre'=>'El coleccionista de huesos ',
            'duracion'=>'115 min.',
            'anyo'=>'1999 ',
            'sinopsis'=>'El detective Lincoln Rhyme (Denzel Washington) sufrió un terrible accidente durante una investigación que le dejo tetrapléjico. Sin embargo sigue siendo uno de los mejores policías de Nueva York, capaz de seguir el rastro de sus pesquisas desde la cama en la que está postrado. Sólo necesita un poco de ayuda, la de una agente que sea capaz de conectar con su intuición y llevar a la acción sus conclusiones. Junto a la oficial novata Amelia (Angelina Jolie), Rhyme hará todo lo posible por encontrar al brutal asesino que está llenando de cadáveres la ciudad: un psicópata que además está jugando al gato y al ratón con la policía, dejando pistas que Lincoln intenta descifrar. (FILMAFFINITY)',
            'rating'=>'6,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/up-672315222-msmall.jpg',
            'nombre'=>'Up ',
            'duracion'=>'96 min.',
            'anyo'=>'2009 ',
            'sinopsis'=>'Carl Fredricksen es un viudo vendedor de globos de 78 años que, finalmente, consigue llevar a cabo el sueño de su vida: enganchar miles de globos a su casa y salir volando rumbo a América del Sur. Pero ya estando en el aire y sin posibilidad de retornar Carl descubre que viaja acompañado de Russell, un explorador que tiene ocho años y un optimismo a prueba de bomba. (FILMAFFINITY)',
            'rating'=>'7,9'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/american_history_x-201185607-msmall.jpg',
            'nombre'=>'American History X ',
            'duracion'=>'119 min.',
            'anyo'=>'1998 ',
            'sinopsis'=>'Derek (Edward Norton), un joven "skin head" californiano de ideología neonazi, es encarcelado por asesinar a un negro que pretendía robarle su furgoneta. Cuando sale de prisión y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeño (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a él lo condujo a la cárcel. (FILMAFFINITY)',
            'rating'=>'8,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/the_lion_king-356972018-msmall.jpg',
            'nombre'=>'El rey león ',
            'duracion'=>'118 min.',
            'anyo'=>'2019 ',
            'sinopsis'=>'Tras el asesinato de su padre, un joven león abandona su reino para descubrir el auténtico significado de la responsabilidad y de la valentía. Remake de "El Rey León", dirigido y producido por Jon Favreau, responsable de la puesta al día, con el mismo formato, de "El libro de la selva" (2016). (FILMAFFINITY)',
            'rating'=>'6,6'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/diecisiete-595989831-msmall.jpg',
            'nombre'=>'Diecisiete ',
            'duracion'=>'100 min.',
            'anyo'=>'2019 ',
            'sinopsis'=>'Héctor es un chico de 17 años que lleva dos interno en un centro de menores. Insociable y poco comunicativo, apenas se relaciona con nadie hasta que se anima a participar en una terapia de reinserción con perros. En ella establece un vínculo indisoluble con un perro, al que llama Oveja. Pero un día el perro es adoptado y Héctor se muestra incapaz de aceptarlo. A pesar de que le quedan menos de dos meses para cumplir su internamiento, decide escaparse para ir a buscarlo.',
            'rating'=>'6,9'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/100_metros-170169519-msmall.jpg',
            'nombre'=>'100 metros ',
            'duracion'=>'108 min.',
            'anyo'=>'2016 ',
            'sinopsis'=>'Ramón, padre de familia treintañero, vive para el trabajo hasta que su cuerpo empieza a fallar. Diagnosticado de esclerosis múltiple, todos los pronósticos parecen indicar que en un año no será capaz de caminar ni cien metros. Ramón decide entonces plantarle cara a la vida participando en la prueba deportiva más dura del planeta. Con la ayuda de su mujer y el gruñón de su suegro, Ramón inicia un peculiar entrenamiento en el que luchará contra sus limitaciones, demostrándole al mundo que rendirse nunca es una opción... Inspirada en la historia de Ramón Arroyo, un joven diagnosticado de esclerosis al que le dijeron que no sería capaz de caminar ni cien metros. (FILMAFFINITY)',
            'rating'=>'6,6'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/me_before_you-594538815-msmall.jpg',
            'nombre'=>'Antes de ti ',
            'duracion'=>'110 min.',
            'anyo'=>'2016 ',
            'sinopsis'=>'Louisa “Lou” Clark (Emilia Clarke), una chica inestable y creativa, reside en un pequeño pueblo de la campiña inglesa. Vive sin rumbo y va de un trabajo a otro para ayudar a su familia a llegar a fin de mes. Sin embargo, un nuevo trabajo pondrá  a prueba su habitual alegría. En el castillo local, se ocupa de cuidar y acompañar a Will Traynor (Sam Claflin), un joven y rico banquero que se quedó paralítico tras un accidente. (FILMAFFINITY)',
            'rating'=>'6,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/the_notebook-565006977-msmall.jpg',
            'nombre'=>'El diario de Noa ',
            'duracion'=>'124 min.',
            'anyo'=>'2004 ',
            'sinopsis'=>'En una residencia de ancianos, un hombre (James Garner) lee a una mujer (Gena Rowlands) una historia de amor escrita en su viejo cuaderno de notas. Es la historia de Noah Calhoun (Ryan Gosling) y Allie Hamilton (Rachel McAdams), dos jóvenes adolescentes de Carolina del Norte que, a pesar de vivir en dos ambientes sociales muy diferentes, se enamoraron profundamente y pasaron juntos un verano inolvidable, antes de ser separados, primero por sus padres, y más tarde por la guerra. (FILMAFFINITY)',
            'rating'=>'7,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/jeux_d_enfants-854462488-msmall.jpg',
            'nombre'=>'Quiéreme si te atreves ',
            'duracion'=>'93 min.',
            'anyo'=>'2003 ',
            'sinopsis'=>'Lo que comenzó como un juego de infancia entre Sophie y Julien, un juego de atrevidos retos, con el tiempo se ha convertido en una forma de vida. Sophie y Julien llevan ese juego hasta el límite, se burlan de todo y de todos y se hacen daño deliberadamente. Moderno cuento de hadas que relata una grotesca y hermosa relación de amor-odio. (FILMAFFINITY)',
            'rating'=>'7,3'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/la_vita_e_bella-646167341-msmall.jpg',
            'nombre'=>'La vida es bella ',
            'duracion'=>'117 min.',
            'anyo'=>'1997 ',
            'sinopsis'=>'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo, en la Toscana, con la intención de abrir una librería. Allí conoce a la encantadora Dora y, a pesar de que es la prometida del fascista Rodolfo, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido hará lo imposible para hacer creer a su hijo que la terrible situación que están padeciendo es tan sólo un juego. (FILMAFFINITY)',
            'rating'=>'8,5'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/8_mile-229373133-msmall.jpg',
            'nombre'=>'8 millas ',
            'duracion'=>'112 min.',
            'anyo'=>'2002 ',
            'sinopsis'=>'Jimmy Smith, alias "Rabbit", vive en un barrio pobre de Detroit donde predomina la población negra. Él es un chico blanco apasionado por el hip-hop. Tiene problemas con su novia, pasa apuros económicos y sus relaciones con su madre no son muy armoniosas. Su única válvula de escape es la música. Su vida es muy similar a la de Eminem, pues se trata de un joven rapero que descarga su rabia a través de la música.  (FILMAFFINITY)',
            'rating'=>'5,8'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/the_curious_case_of_benjamin_button-553974725-msmall.jpg',
            'nombre'=>'El curioso caso de Benjamin Button ',
            'duracion'=>'167 min.',
            'anyo'=>'2008 ',
            'sinopsis'=>'Un hombre (Brad Pitt) nace con ochenta años y va rejuveneciendo a medida que pasa el tiempo; es decir, en lugar de cumplir años los descumple. Esta es la historia de un hombre extraordinario, de la gente que va conociendo, de sus amores y amistades, pero sobre todo de su relación con Daisy (Cate Blanchett), la mujer de su vida. (FILMAFFINITY)',
            'rating'=>'7,2'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/now_you_see_me-137911516-msmall.jpg',
            'nombre'=>'Ahora me ves... ',
            'duracion'=>'124 min.',
            'anyo'=>'2013 ',
            'sinopsis'=>'Un equipo del FBI debe enfrentarse a una banda de criminales expertos en magia que se dedican a atracar bancos. Son "los cuatro jinetes”, un grupo formado por los mejores ilusionistas del mundo. Durante los atracos, siempre contra hombres de negocios corruptos, hacen llover el dinero robado sobre los espectadores, ante la atónita mirada de un equipo de élite del FBI que les sigue la pista. (FILMAFFINITY)',
            'rating'=>'6,0'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/p_s_i_love_you-191794084-msmall.jpg',
            'nombre'=>'Posdata: Te quiero ',
            'duracion'=>'126 min.',
            'anyo'=>'2007 ',
            'sinopsis'=>'Holly Kennedy (Hilary Swank) es una joven viuda que trata de encauzar nuevamente su vida tras la muerte de su querido marido Gerry (Gerard Butler), al que amaba sobre todas las cosas. Pero un día, con motivo de su 30 cumpleaños, descubre que éste le ha dejado varias cartas, todas con la misma postdata: PD: Te quiero. Obsesionada con las misivas y su contenido, la madre de Holly (Kathy Bates) y sus mejores amigas Sharon (Gina Gershon) y Denise (Lisa Kudrow) comienzan a pensar que se está aferrando demasiado a un pasado que nunca volverá. (FILMAFFINITY)',
            'rating'=>'6,4'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/le_fabuleux_destin_d_amelie_poulain-848337470-msmall.jpg',
            'nombre'=>'Amelie ',
            'duracion'=>'120 min.',
            'anyo'=>'2001 ',
            'sinopsis'=>'Amelie no es una chica como las demás. Ha visto a su pez de colores deslizarse hacia las alcantarillas municipales, a su madre morir en la plaza de Nôtre-Dame y a su padre dedicar todo su afecto a un gnomo de jardín. De repente, a los veintidós años, descubre su objetivo en la vida: arreglar la vida de los demás. A partir de entonces, inventa toda clase de estrategias para intervenir en los asuntos de los demás: su portera, que se pasa los días bebiendo vino de Oporto; Georgette, una estanquera hipocondríaca, o "el hombre de cristal", un vecino que sólo ve el mundo a través de la reproducción de un cuadro de Renoir. (FILMAFFINITY)',
            'rating'=>'7,8'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/seven_pounds-470111904-msmall.jpg',
            'nombre'=>'Siete almas ',
            'duracion'=>'118 min.',
            'anyo'=>'2008 ',
            'sinopsis'=>'Ben Thomas (Will Smith), un inspector de Hacienda de Los Ángeles, se pone en contacto con algunas personas para ayudarlas, pero las razones que lo mueven a actuar así son un misterio. Sin embargo, cuando conoce a Emily Posa (Rosario Dawson), una joven enferma investigada por hacienda y empieza a sentirse atraído por ella, sus inconfesables planes se tambalean. (FILMAFFINITY)',
            'rating'=>'7,1'
        ]);
        DB::table('movies')->insert([
            'cartel'=>'https://pics.filmaffinity.com/the_pursuit_of_happyness-660040804-msmall.jpg',
            'nombre'=>'En busca de la felicidad ',
            'duracion'=>'116 min.',
            'anyo'=>'2006 ',
            'sinopsis'=>'Chris Gardner (Will Smith) es un vendedor brillante y con talento, pero su empleo no le permite cubrir sus necesidades más básicas. Tanto es así que acaban echándolo, junto a su hijo de cinco años (Jaden Smith), de su piso de San Francisco, y ambos no tienen ningún lugar al que ir. Cuando Gardner consigue hacer unas prácticas en una prestigiosa correduría de bolsa, los dos protagonistas tendrán que afrontar muchas adversidades para hacer realidad su sueño de una vida mejor. (FILMAFFINITY)',
            'rating'=>'7,5'
        ]);
    }
}