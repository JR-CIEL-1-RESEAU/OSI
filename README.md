
# Modele OSI 
<p align="center">
<img src="osi.png" alt="Photo de démonstration" width="300">
</p>


## PREREQUIS 
- Logiciels installés sur la machine hôte:
    - [Docker](https://docs.docker.com/install/) 
    - [Docker Compose](https://docs.docker.com/compose/install/)

## APPLICATION 
### Lancement de l'application
- **Cloner** le repos à l'aide *git clone @repos*
- **Se placer** au niveau d'arborescence du fichier *docker-compose up*

### Services fournis (fichier docker-compose.yml )

- **nginx** : Serveur HTTP exposé sur le port `8080`, utilisant une configuration personnalisée et les fichiers de `./code`.
- **php** : Exécute le code PHP des fichiers de `./code`.
- **mysql** : Base de données MySQL, persistante via le volume dbdata, exposée sur le port `3306` et accessible notament via `mySQLWorkbench`.
- **phpmyadmin** : Interface web pour MySQL, accessible sur le port `8081`.
- **ftp** : Serveur FTP avec l'utilisateur `bob` et pass `12345`, partageant `./code` et exposant les ports `21` et `30000-30009`.

`Cette configuration est modifiable, il faudra modifier le fichier docker-compose.yml si besoin`.

 ## TRAVAIL DEMANDE
 ### Modele OSI
 - **Visualiser** [Vidéo C'est quoi le TCP_IP _.mp4](https://drive.google.com/file/d/1YvrVi-OUch4QSDTG2ucONhIHlGuUWi6_/view?usp=sharing)

 ### Wireshark prise en main
 - **Consulter** [Interface](https://www.it-connect.fr/decouverte-de-linterface-de-wireshark/)
 - **Consulter** [Vidéo de prise en main](https://drive.google.com/file/d/13Q2XU9oKv6Eza9brkqgTODV2PSDz-XRr/view?usp=sharing)

 ### TRAVAIL A REALISER 
  - **Réaliser** [TD 1](https://github.com/JR-CIEL-1-RESEAU/OSI/archive/refs/tags/avec_zip.zip)
  - **Réaliser** [TD 2](https://github.com/user-attachments/files/18267633/TD_Sortie_reseau.zip)
    #### Activité : Test de la fragmentation

    - Lancez une capture puis la commande « ping –l 2000 172.16.15.254 » et arrêtez la capture lorsque l'invite de commande réapparaît à la console.

    - Analysez la partie fragmentation des deux premières trames et donnez le fragment d'offset et les bit MF (More fragments) et DF (Don't fragment) pour chacune ainsi que la longueur.

    - Justifiez les résultats de la fragmentation en particulier les valeurs des bits, les offsets et les longueurs totales dans les deux trames.

    - Exécutez la commande suivante : « ping -f –l 2000 172.16.15.254 » et justifiez le message d'erreur affiché.et Activité : Analyse de trames ICMP

    - L'objectif de cette activité est d'analyser différentes trames ICMP :Lancez une capture puis exécutez la commande « ping 172.16.0.1. » et enfin arrêtez la capture. par ping 172.16.100.1

 - ####  **CAPTURE DES IDENTIFIANTS DE CONNEXIONS D'UN COMPTE [PURE-FTP](https://github.com/stilliard/docker-pure-ftpd/blob/master/README.md#example-usage-once-inside)**
    - **Verifier** la présence du service FTP et son état `up` via `docker-compose ps`,
    - **Lancer** une capture Wireshark sur l'interface réseau.
    - **Supprimer** 
    - **Consulter** ([Wireshark - View FTP usernames and passwords ](https://www.freekb.net/Article?id=133)),
    - **Se connecter**  au service FTP à l'aide des identifiants fournis et les capturer avec Wireshark.







