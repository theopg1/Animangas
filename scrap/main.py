import argparse
from scraping import Scraping
import pandas
import time
import pymysql

Scrap = Scraping()

parser = argparse.ArgumentParser(description='Obtenir les informations d\'un anime ou d\'un manga')
parser.add_argument('-i', '--id', type=int, required=True, help='id de l\'anime ou du manga de départ')
parser.add_argument('-e', '--end', type=int, required=True, help='id de l\'anime ou du manga de fin')

group = parser.add_mutually_exclusive_group()
group.add_argument('-m', '--manga', action='store_true', help='Choix d\'un manga')
group.add_argument('-a', '--anime', action='store_true', help='Choix d\'un anime')

args = parser.parse_args()

if __name__ == '__main__':

    conn = pymysql.connect(host="localhost", port=3306,
                           user="symfony", passwd="symfony", database="projet_master")
    cursor = conn.cursor()

    idValue = args.id

    if args.anime:

        try:
            while True:

                id = str(idValue)

                cursor.execute("SELECT * FROM anime_scrap WHERE ID =" + id)

                if cursor.fetchone() is None :
                    Scrap.animeScraping(id)

                df = pandas.read_sql_query("SELECT * FROM anime_scrap WHERE ID =" + id, conn)

                print(df.head())

                idValue += 1

                if idValue == args.end :
                    break

                time.sleep(3)
        
        except KeyboardInterrupt:
            pass

    elif args.manga:

        try:
            while True:

                id = str(idValue)

                cursor.execute("SELECT * FROM manga_scrap WHERE ID =" + id)

                if cursor.fetchone() is None :
                    Scrap.mangaScraping(id)

                df = pandas.read_sql_query("SELECT * FROM manga_scrap WHERE ID =" + id, conn)

                print(df.head())

                idValue += 1

                if idValue == args.end :
                    break

                time.sleep(3)

        except KeyboardInterrupt:
            pass

    else:

        print("choisissez -a ou -m  en argument pour spécifier le type de contenu voulus")

conn.close()