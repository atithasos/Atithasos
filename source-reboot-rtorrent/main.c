#include "Bib.h"

/* Mise en place des droits d'accès root: 
chown root:root nom_du_fichier
chmod +s nom_du_fichier
*/


int main (int argc, char* argv[])
{
    ///Declarations
    char nickname[50]; //Chaine recevant le pseudo de l'utilisateur

    // setuid pour les droits root
    setuid(0);
    perror("setuid");

    //Récupération du pseudo de l'utilisateur
    strcpy (nickname, argv[1]); //On récupère le pseudo

    //Stop rtorrent
    rtorrent_kill(nickname);
    
    //Stop screen
    screen_kill(nickname);

    //Suppression rtorrent.lock
    supprLock (nickname);

    //Appel de la fonction pour reboot rtorrent
    reboot (nickname);

    return 0;
}
