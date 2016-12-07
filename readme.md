#Le Triste Moutton
###Journal Blog
## Conventions
- Tab Size:4 dans sublime texte
- On travail avec la syntaxe en lower_underscore
- Jamais de majuscule dans la base de donnée (même les id)
- Les titres des tables se termine par un 's'

## Procedure pour travailler et push

Tout d'abord: ne jamais travailler sur la branche master !

Developpement et push:
```bash
#on créé une branche feature en local
git checkout -b feature_exemple

# Une fois nos modifications accomplies sur cette branche, il faut merger celle-ci sur la branche master

#on repasse donc sur notre branche master
git checkout master

#on récupére les derniers commit
git pull --all

#et on merge notre feature dans master
git merge feature_exemple

# S'il y a des conflits: les résoudre
# Il ne reste plus qu'à pusher notre travail sur le repo

#on push sur la branche master du repo
git push -u origin master

# Notre branche feature_exemple n'est plus utile

#on la supprime
git branch -d feature_exemple

#et on en créé une nouvelle dirrectement (pour ne pas se retrouver à éditer sur master)
#si on ne sait pas encore sur quoi travailler, on créé une feature_test
git checkout -b feature_test
```
##Autoload
Si une fonction d'un controller n'est pas connu, il est possible qu'il faille regénérer les autoloads via la commande suivante
```bash
composer dumpautoload
```
##Base de données
Si une mise à jour concernant la base de donnée à été pull; ne pas oublier d'executer le `mig.sql` se trouvant dans le doc databases
```bash
#se connecter à mysql
MySql -u username -p password

#execution du mig.sql
source C:/mypath/mig.sql
```