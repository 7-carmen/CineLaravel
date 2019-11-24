# encoding=utf8
import sys
import time
import os

import urllib.request, re
from bs4 import BeautifulSoup

# Método que pinta una barra de progreso
def printProgress (iteration, total, prefix = '', suffix = '', decimals = 1, barLength = 100):
    """
    Call in a loop to create terminal progress bar
    @params:
        iteration   - Required  : current iteration (Int)
        total       - Required  : total iterations (Int)
        prefix      - Optional  : prefix string (Str)
        suffix      - Optional  : suffix string (Str)
        decimals    - Optional  : positive number of decimals in percent complete (Int)
        barLength   - Optional  : character length of bar (Int)
    """
    formatStr = "{0:." + str(decimals) + "f}"
    percent = formatStr.format(100 * (iteration / float(total)))
    filledLength = int(round(barLength * iteration / float(total)))
    bar = '█' * filledLength + '-' * (barLength - filledLength)
    sys.stdout.write('\r%s |%s| %s%s %s' % (prefix, bar, percent, '%', suffix)),
    if iteration == total:
        sys.stdout.write('\n')
    sys.stdout.flush()

# Método que extrae el contenido de un fichero de lista de películas
def extraer_lista(file):
    f = open(file, "r", encoding="utf8")
    l = f.read()
    f.close()
    return l

# Método que extrae las películas de la página de búsquedas de FilmAffinity
def extraer_peliculas(titulo, director, anyo):

    def abrir_url(url, file):
        try:
            f = urllib.request.urlretrieve(url, filename=file)
            return file
        except Exception:
            print("Error al conectarse a la página de búsqueda de películas")
            traceback.print_exc()
            return None

    fichero = "scraping/pelicula"
    link = "http://www.filmaffinity.com/es/advsearch.php?stext="+titulo+"&stype[]=title&fromyear="+anyo+"&toyear="+anyo

    if abrir_url(link, fichero):
        l = extraer_lista(fichero)
    if l:
        soup = BeautifulSoup(l, 'html.parser')
        peliculas = soup.findAll("div", "movie-card movie-card-1")
        directorPelicula = ""
        for p in peliculas:
            for g in p.find("div", "mc-director").div.findAll("span","nb"):
                if director!="":
                    directorPelicula = directorPelicula+", "+g.a.get('title')
                else:
                    directorPelicula = g.a.get('title')
            if director in directorPelicula:
                titulo = p.find("div", "mc-title").a.string
                link = p.find("div", "mc-title").a.get('href')
                poster = p.find("div","mc-poster").img.get('src')
                rating = p.find("div", "mr-rating").find("div","avgrat-box").string
                info_peliculas = extraer_info_peliculas(titulo, link, poster, rating)
                break

    return info_peliculas

# Método que extrae los datos de la película de la página de FilmAffinity
def extraer_info_peliculas(titulo, link, poster, rating):

    def abrir_url(url, file):
        try:
            f = urllib.request.urlretrieve(url, filename=file)
            return file
        except Exception:
            print("Error al conectarse a la página de información de la película")
            traceback.print_exc()
            return None

    fichero = "scraping/info_pelicula"
    link = link

    if abrir_url(link, fichero):
        l = extraer_lista(fichero)
    if l:
        soup = BeautifulSoup(l, 'html.parser')
        info_pelicula = soup.find("div", "z-movie").find("div", {"id": "left-column"}).find("dl", "movie-info")
        actores = ""
        director = ""
        fecha = info_pelicula.find("dd", {"itemprop": "datePublished"}).string
        try:
            duracion = info_pelicula.find("dd", {"itemprop": "duration"}).string
        except:
            duracion = ""
        for d in info_pelicula.find("dd", "directors").findAll("a"):
            director = director + d.get('title') + ", "
        director = director[0:len(director) - 2]
        for a in info_pelicula.findAll("span", {"itemprop": "name"}):
            actores = actores+a.string+", "
        actores = actores[len(director)+2:len(actores)-2]
        genero = info_pelicula.find("span", {"itemprop": "genre"}).a.string
        try:
            sipnosis = info_pelicula.find("dd", {"itemprop": "description"}).string
        except:
            sipnosis = ""
    return [titulo, poster, rating, fecha, duracion, director, actores, genero, sipnosis]

# Generador Seeder de Movies
def moviesSeeder(peliculasArray):
    moviesSeederFile = open("database/seeds/MoviesTableSeeder.php", "w", encoding="utf8")         

    lineasFichero = "<?php\n\n"\
                    "use App\movie;\n"\
                    "use Illuminate\Database\Seeder;\n\n"\
                    "class MoviesTableSeeder extends Seeder\n"\
                    "{\n"\
                    "    /**\n"\
                    "     * Run the database seeds.\n"\
                    "     *\n"\
                    "     * @return void\n"\
                    "     */\n"\
                    "    public function run()\n"\
                    "    {\n"\
                    "        movie::truncate();\n"

    moviesSeederFile.write(lineasFichero)                    

    for pelicula in peliculasArray:
        lineasFichero = "        DB::table('movies')->insert([\n"\
                        "            'cartel'=>'"+pelicula[1]+"',\n"\
                        "            'nombre'=>'"+pelicula[0]+"',\n"\
                        "            'duracion'=>'"+pelicula[4]+"',\n"\
                        "            'anyo'=>'"+pelicula[3]+"',\n"\
                        "            'sinopsis'=>'"+pelicula[8].replace("'","\\'")+"',\n"\
                        "            'rating'=>'"+pelicula[2]+"'\n"\
                        "        ]);\n"
        moviesSeederFile.write(lineasFichero)

    lineasFichero = "    }\n}"
    moviesSeederFile.write(lineasFichero)

    moviesSeederFile.close()

# Generador Seeder de Generos
def generosSeeder(peliculasArray):
    generosSeederFile = open("database/seeds/GenerosTableSeeder.php", "w", encoding="utf8")                    

    lineasFichero = "<?php\n\n"\
                        "use App\genero;\n"\
                        "use Illuminate\Database\Seeder;\n\n"\
                        "class GenerosTableSeeder extends Seeder\n"\
                        "{\n"\
                        "    /**\n"\
                        "     * Run the database seeds.\n"\
                        "     *\n"\
                        "     * @return void\n"\
                        "     */\n"\
                        "    public function run()\n"\
                        "    {\n"\
                        "        genero::truncate();\n"

    generosSeederFile.write(lineasFichero)                    

    generos_ya_incluidos = []

    for pelicula in peliculasArray:
        #time.sleep(5)
        if pelicula[7] not in generos_ya_incluidos:
            lineasFichero = "        DB::table('generos')->insert([\n"\
                            "            'nombre'=>'"+pelicula[7]+"'\n"\
                            "        ]);\n"
            generos_ya_incluidos.append(pelicula[7])
            generosSeederFile.write(lineasFichero)

    lineasFichero = "    }\n}"
    generosSeederFile.write(lineasFichero)

    generosSeederFile.close()

# Generador Seeder de People
def peopleSeeder(peliculasArray):
    peopleSeederFile = open("database/seeds/PeopleTableSeeder.php", "w", encoding="utf8")                    

    lineasFichero = "<?php\n\n"\
                        "use App\people;\n"\
                        "use Illuminate\Database\Seeder;\n\n"\
                        "class PeopleTableSeeder extends Seeder\n"\
                        "{\n"\
                        "    /**\n"\
                        "     * Run the database seeds.\n"\
                        "     *\n"\
                        "     * @return void\n"\
                        "     */\n"\
                        "    public function run()\n"\
                        "    {\n"\
                        "        people::truncate();\n"

    peopleSeederFile.write(lineasFichero)                    

    personas_ya_incluidas = []

    for pelicula in peliculasArray:
        directores = pelicula[5].split(", ")
        actores = pelicula[6].split(", ")
        
        # Incluimos los directores de cada pelicula
        for director in directores:
            if director not in personas_ya_incluidas:
                lineasFichero = "        DB::table('people')->insert([\n"\
                                "            'name'=>'"+director.replace("'","\\'")+"',\n"\
                                "            'imagen'=>''\n"\
                                "        ]);\n"
                personas_ya_incluidas.append(director)
                peopleSeederFile.write(lineasFichero)
        
        # Incluimos los actores de cada pelicula
        for actor in actores:
            if actor not in personas_ya_incluidas:
                lineasFichero = "        DB::table('people')->insert([\n"\
                            "            'name'=>'"+actor.replace("'","\\'")+"',\n"\
                            "            'imagen'=>''\n"\
                            "        ]);\n"
                personas_ya_incluidas.append(actor)
                peopleSeederFile.write(lineasFichero)
        

    lineasFichero = "    }\n}"
    peopleSeederFile.write(lineasFichero)

    peopleSeederFile.close()

# Código a ejecutar para realizar el scraping

peliculas = extraer_lista("scraping/peliculas.txt")
i = 0
printProgress(i, 19, prefix='Progress:', suffix='Complete', barLength=50)
num_errores = 0
f = open("scraping/peliculas_extraidas.txt", "w", encoding="utf8")
peliculasArray = peliculas.splitlines()
resultado_extraccion = []

for pelicula in peliculasArray:
    #time.sleep(5)
    titulo = eval(pelicula)[0].replace(" ","%20")
    anyo = eval(pelicula)[1]
    director = eval(pelicula)[2]
    try:
        extraccion = extraer_peliculas(titulo, director, anyo)
        resultado_extraccion.append(extraccion)
        f.write(str(extraccion))
        f.write("\n")
    except UnboundLocalError:
        num_errores = num_errores + 1
    printProgress(i, 19, prefix='Progress:', suffix='Complete', barLength=50)
    i = i + 1

f.close()
print("\nNúmero de errores: "+str(num_errores))

# Escribimos los ficheros Seeder

moviesSeeder(resultado_extraccion)
generosSeeder(resultado_extraccion)
peopleSeeder(resultado_extraccion)

# Eliminamos los ficheros auxiliares

os.remove("scraping/info_pelicula")
os.remove("scraping/pelicula")