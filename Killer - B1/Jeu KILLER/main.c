#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <windows.h>
#include <conio.h>
#include <ctype.h>



HANDLE win;

CONSOLE_SCREEN_BUFFER_INFO coninfo;
int tab_des[1];
int ResultData = 0;
int nbJ, k,f,choix;
int nb_attaque = 0;
int nb_choix = 0 ;

int NewVal ;




struct Player
    {   int id ;
        char name[20];
        int pdv;
        int attaque;  };

void SetPosition(int X, int Y);
void afficher_des_xyPos( int nbDansFacette, int x, int y);
void ShowDrawResults(int yposi);
void ShowDrawResults2(int yposi,struct Player * ,int f);
void obtatt(struct Player *);
void conditions (struct Player * ,int val,int f );
void gpdv(struct Player *);
void regpdv(int yposi,struct Player *, int k);
void faireatt(struct Player *, int f);
int valueinarray(int val, int  arr[]);
struct Player *TAB_JOUEURS();




int main()

{

srand(time(0));
int ThrowLimit = 1;
int yposi = 2;
int tab_Lancer[5], facette, nbDes;

char s[0];
char testvar;
const int MIN = 1, MAX = 6 ;
struct Player *J =TAB_JOUEURS();


    gpdv(J);
    obtatt( J);
    //regpdv(yposi+4,J,k);
    return 0;

}




void afficher_des_xyPos( int nbDansFacette, int x, int y)

{   int points[1];

    SetPosition(x, y);     printf("+---------+\n");

    switch(nbDansFacette)

    {

        case 1:

            SetPosition(x, y+1);  printf("|         |\n");
            SetPosition(x, y+2);  printf("|    o    |\n");
            SetPosition(x, y+3);  printf("|         |\n");
            points[0]+=1;
            break;

        case 2:

            SetPosition(x, y+1); printf("| o       |\n");
            SetPosition(x, y+2); printf("|         |\n");
            SetPosition(x, y+3); printf("|       o |\n");
            points[0] +=2;
            break;

        case 3:

            SetPosition(x, y+1); printf("| o       |\n");
            SetPosition(x, y+2); printf("|    o    |\n");
            SetPosition(x, y+3); printf("|       o |\n");
            points[0]+=3;
            break;

        case 4:

            SetPosition(x, y+1); printf("| o     o |\n");
            SetPosition(x, y+2); printf("|         |\n");
            SetPosition(x, y+3); printf("| o     o |\n");
            points[0]+=4;
            break;

        case 5:

            SetPosition(x, y+1); printf("| o     o |\n");
            SetPosition(x, y+2); printf("|    o    |\n");
            SetPosition(x, y+3); printf("| o     o |\n");
            points[0]+=5;
            break;

        case 6:

            SetPosition(x, y+1); printf("| o     o |\n");
            SetPosition(x, y+2); printf("| o     o |\n");
            SetPosition(x, y+3); printf("| o     o |\n");
            points[0]+=6;
            break;
    }

    SetPosition(x, y+4);printf("+---------+\n");

    ResultData = points[0];

}


void SetPosition(int X, int Y)

{
    HANDLE Screen;

    Screen = GetStdHandle(STD_OUTPUT_HANDLE);

    COORD Position={X, Y};

    SetConsoleCursorPosition(Screen, Position);

}



void ShowDrawResults(int yposi)

{
    srand(time(0));
    int ThrowLimit = 1;
    int tab_Lancer[5], facette, nbDes;
    char testvar;
    char s[0];
    const int MIN = 1, MAX = 6 ;

    do

    {

        fflush(stdin);

        printf("Donner nombre de des a lancer: ");

        scanf("%c", &s[0]);

        nbDes = atoi(s);

    }

    while(!isdigit(s[0]) || nbDes < 1 || nbDes > 5);

    for(int i = 0; i< nbDes; i++)

    {
       facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

       tab_Lancer[i]= facette;
    }


    for(int i = 0; i< nbDes; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, yposi+3);

    printf("+++++++++++++++++++++++GENERATION PDV++++++++++++++++++++++ \n");

    printf("Les points de vie de ce lancer sont : %d", ResultData);
    printf("\n");


}









struct Player *TAB_JOUEURS()

{
   int i;
   char s[0];
   struct Player *ptr;

   /*printf("Enter the number of players: ");
   scanf("%d", &nbJ);*/

   do

    {

        fflush(stdin);

        printf("Veuillez saisir le nombre de joueurs (Min 2): ");

        scanf("%c", &s[0]);

        nbJ = atoi(s);

    }

    while(!isdigit(s[0]) || nbJ < 2);

   ptr = (struct Player*) malloc(nbJ * sizeof(struct Player));

   for(i = 0; i < nbJ; i++)
   {
       printf("\n Saisissez le nom du Joueur  %d : ", i+1);

        //printf("Nom : ");

        scanf("%s", (ptr+i)->name);

        /*printf("ID :");

        scanf("%d",&(ptr+i)->id);*/
        (ptr+i)->id = i+1;
    }

   printf("Affichage des infos des Joueurs:\n\n");

   printf("\tNom\tID \tpdv \tattaque   \n");

   for(i = 0; i < nbJ; ++i)

       printf("\t%s\t%d \t%d \t%d  \n",(ptr+i)->name,(ptr+i)->id,(ptr+i)->pdv,(ptr+i)->attaque);

return ptr;

};

void gpdv (struct Player *J){

   srand(time(0));
    int ThrowLimit = 1;
    int yposi = 2;
    int tab_Lancer[5], facette, nbDes;

    char s[0];
    char testvar;

    const int MIN = 1, MAX = 6 ;


    system("cls");

    printf("Displaying players Information:\n\n");

    printf("\tName\tID \tpdv \tattaque   \n");

    for(int i = 0; i < nbJ; ++i)

        printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);

    printf("-------------------------(1) GENERATION PDV (1)--------------------------------");

    do

    {   printf("\nJoueur %d va commencer \n",k+1);

        fflush(stdin);

        printf("Donner nombre de des a lancer: ");

        scanf("%c", &s[0]);

        nbDes = atoi(s);

    }

    while(!isdigit(s[0]) || nbDes < 1 || nbDes > 5);

    for(int i = 0; i< nbDes; i++)

    { facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

      tab_Lancer[i]= facette;
    }

    for(int i = 0; i< nbDes; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, 8);
 printf("+++++++++++++++++++++++GENERATION PDV++++++++++++++++++++++ \n");

    printf("Les points de vie de ce lancer sont : %d", ResultData);

    printf("\n");

    do  {

    if(ThrowLimit <= 4)

    {
        printf("\nVous voulez rejouer [O/N]: ");

        scanf("%s", &testvar);

        if(testvar == 'o' || testvar == 'O')

        {
            yposi = yposi + 12;

            printf("\nAutre essai\n");

            ShowDrawResults(yposi+4);

            ThrowLimit = ThrowLimit + 1;

        }

        else

        {
            (J+k)-> pdv=ResultData;

            printf("\tName\tID \tpdv \tattaque   \n");

            printf("\t%s\t%d \t%d \t%d  \n",(J+k)->name,(J+k)->id,(J+k)->pdv,(J+k)->attaque);

            k++;

            ThrowLimit = 1;

            if(k<nbJ)
                {
                   yposi = yposi + 12;

                   printf("\nJoueur %d va commencer \n",k+1);

                   ShowDrawResults(yposi+4);

                }
                else
                {
                   if(k<nbJ)
                   {

                   (J+k)-> pdv=ResultData;

                   printf("\tName\tID \tpdv \tattaque   \n");

                   printf("\t%s\t%d \t%d \t%d  \n",(J+k)->name,(J+k)->id,(J+k)->pdv,(J+k)->attaque);

                   }
                }
            }
        }

    else

    {

      (J+k)-> pdv=ResultData;

       printf("\tName\tID \tpdv \tattaque   \n");

       printf("\t%s\t%d \t%d \t%d  \n",(J+k)->name,(J+k)->id,(J+k)->pdv,(J+k)->attaque);

       k++;

       ThrowLimit = 1;

       if(k<nbJ)
        {
           yposi = yposi + 12;

           printf("\nJoueur %d va commencer \n",k+1);

           ShowDrawResults(yposi+4);

       }

       else
       {
           if(k<nbJ)
            {
               (J+k)-> pdv=ResultData;

               printf("\tName\tID \tpdv \tattaque   \n");

               printf("\t%s\t%d \t%d \t%d  \n",(J+k)->name,(J+k)->id,(J+k)->pdv,(J+k)->attaque);
           }
       }
    }
}

    while(k<nbJ);

    system("cls");
    printf("\tName\tID \tpdv \tattaque   \n");

    for(int i = 0; i < nbJ; ++i)

        printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
        }

void regpdv(int yposi,struct Player *J, int k)

{
    srand(time(0));
    int tab_Lancer[5], facette;
    char s[0];
    const int MIN = 1, MAX = 6 ;
    int add_pdv ;



    for(int i = 0; i< 1; i++)

    {
       facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

       tab_Lancer[i]= facette;
       add_pdv = facette;
    }


    for(int i = 0; i< 1; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, yposi);

    printf("+++++++++++++++++++++++REGENERATION PDV++++++++++++++++++++++ \n");

    printf("Les points de vie ajoutes pour le joueur %d sont : %d", k+1, add_pdv);
    printf("\n");
    (J+k)-> pdv+=add_pdv;
    printf("\tName\tID \tpdv \tattaque   \n");
    printf("\t%s\t%d \t%d \t%d  \n",(J+k)->name,(J+k)->id,(J+k)->pdv,(J+k)->attaque);


}


void obtatt(struct Player *J){
    srand(time(0));
int ThrowLimit = 1;
int yposi = 2;
int tab_Lancer[5], facette, nbDes;


char s[0];
char testvar;

const int MIN = 1, MAX = 6 ;

    printf("-------------------------(2) OBTENIR UNE ATTAQUE (2)--------------------------------\n");
  for (int k =0 ; k< nbJ; k++)


    {
        int val = 0;
            do

            {   printf("\nJoueur %d va essayer d'obtenir une attaque : \n",k+1);

                fflush(stdin);

                printf("Donner nombre de des a lancer: ");

                scanf("%c", &s[0]);

                nbDes = atoi(s);

            }
            while(!isdigit(s[0]) || nbDes < 1 || nbDes > 5);

            for(int i = 0; i< nbDes; i++)

            { facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

              tab_Lancer[i]= facette;
            }

            for(int i = 0; i< nbDes; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, 8);



            printf("+++++++++++++++++++++++ OBTENIR UNE ATTAQUE ++++++++++++++++++++++ \n");
            printf(" Vos des ont comme valeurs :  ");

            for (int i=0;i<nbDes;i++)printf(" %d ",tab_Lancer[i]);

            printf("\n");

            do
            {
                printf(" Combien de dés voulez vous choisir ? ");
                scanf ("%d",&choix);
                printf("\n");
            }
            while (choix > nbDes);

            if (choix == 5)
            {
                system("cls");
                for (int i = 0 ; i < 5; i++)val += tab_Lancer[i];
                printf (" La valeur d'attaque obtenue est : %d \n",val);
                conditions(J,val,k);
                //k++;
             }


            else if (choix < 5)
            {

                 nb_choix += choix;

                for (int i=0;i<choix;i++)
               {
                    int a = 0;
                    do
                    {
                        printf(" La valeur -%d- : ",i+1);
                        scanf ("%d",&val);
                        for (int j=0; j < nbDes; j++)
                        {
                            if(val == tab_Lancer[j] && val != 0)
                            {
                                nb_attaque += val;
                                tab_Lancer[j] = 0;
                                a = 1;
                                break;
                            }
                        }
                    }
                    while(a != 1);

               }


                while (nb_choix < 5)

                {
                    system("cls");
                    printf("Il vous reste encore %d choix a faire. \n", 5-nb_choix);
                    printf("+++++++++++++++++++++++ OBTENIR UNE ATTAQUE ++++++++++++++++++++++ \n");

                    do

                    {   printf("\nJoueur %d va reessayer d'obtenir une attaque : \n",k+1);

                        fflush(stdin);

                        printf("Donner nombre de des a lancer: ");

                        scanf("%c", &s[0]);

                        nbDes = atoi(s);

                    }
                    while(!isdigit(s[0]) || nbDes < 1 || nbDes > 5);

                    for(int i = 0; i< nbDes; i++)

                    { facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

                      tab_Lancer[i]= facette;
                    }

                    for(int i = 0; i< nbDes; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, 8);



                    printf("+++++++++++++++++++++++ OBTENIR UNE ATTAQUE ++++++++++++++++++++++ \n");
                    printf(" Vos des ont comme valeurs :  ");

                    for (int i=0;i<nbDes;i++)
                    {
                        printf(" %d ",tab_Lancer[i]);
                    }
                    printf("\n");

                    do
                    {
                        printf(" Combien de des voulez vous choisir ? ");
                        scanf ("%d",&choix);
                        printf("\n");
                    }
                    while (choix > nbDes || choix > 5-nb_choix);

                    nb_choix += choix;

                       for (int i=0;i<choix;i++)
                       {
                            int a = 0;
                            do
                            {
                                printf(" La valeur -%d- : ",i+1);
                                scanf ("%d",&val);
                                for (int j=0; j < nbDes; j++)
                                {
                                    if(val == tab_Lancer[j] && val != 0)
                                    {
                                        nb_attaque += val;
                                        tab_Lancer[j] = 0;
                                        a = 1;
                                        break;
                                    }
                            //printf("test");
                                }
                            }
                            while(a != 1);

                        }


                    /*if (nb_choix <5 && nb_choix+choix> 5 || nbDes > 5-choix)
                    {
                        printf(" Votre nombre de choix est' %d ' Veuillez ne pas dépassez 5 dés à garder !", nb_choix );
                        scanf ("%d",&choix);
                        printf("\n");
                        nb_choix += choix;

                        for (int i=0;i<choix;i++)
                       {
                            printf(" La valeur -%d- : ",i+1);
                            scanf ("%d",&val);
                            printf("\n");
                            nb_attaque += val ; //if ( val in tab_Lancer)
                       }
                    }*/
                    system("cls");
                }
            printf (" La valeur d'attaque obtenue est : %d \n",nb_attaque);
            conditions(J,nb_attaque,k);
            //k++;
            }
            printf("\n");


            }

        nb_choix=0;
        system("cls");
        printf("\tName\tID \tpdv \tattaque   \n");

        for(int i = 0; i < nbJ; ++i)

        printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
  }

void conditions (struct Player *J ,int val, int f )
{ int yposi =2;

    if(val == 11 || val == 24)
        {
          printf(" !!! Regeneration de points de vie par un de !!!!");
          regpdv(yposi+4,J,f);
          /*for(int i = 0; i < nbJ; ++i){
                    printf("\tNom\tID \tpdv \tattaque   \n");
                    printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
                     }*/
        }


    else if( 11 < val && val < 17)

        {   printf(" !!! Vous avez rate l'attaque  !!!! \n");

            NewVal = (val-11);
            (J+f)-> pdv -= NewVal;
            (J+f) ->attaque = NewVal;
            printf(" \n");
            for(int i = 0; i < nbJ; ++i){
                    printf("\tNom\tID \tpdv \tattaque   \n");
                    printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
                     }
        }

    else if( 17 <= val && val < 24)

        {
             NewVal = (24-val);
            (J+f)->pdv -= NewVal;
            (J+f) ->attaque = NewVal;
            printf(" \n");
            for(int i = 0; i < nbJ; ++i)
                {   printf("\tNom\tID \tpdv \tattaque   \n");
                    printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
                     }
        }



     else if( val < 11 || val > 24)
    {
        printf(" !!! Vous avez obtenu une attaque  !!!! \n");


        if (val < 11)
        {
            NewVal = (11-val);
            (J+f)->attaque=NewVal;
            printf("\n");

            for(int i = 0; i < nbJ; ++i){
                    printf("\tNom\tID \tpdv \tattaque   \n");
                    printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
                     }
            faireatt(J,f);

        }


        else if (val > 24)
        {
            NewVal = (val-24);
            (J+f)->attaque= NewVal;
            printf("\n");
            for(int i = 0; i < nbJ; ++i){
                    printf("\tNom\tID \tpdv \tattaque   \n");
                    printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
                     }
            faireatt(J,f);

        }
    }

}

int valueinarray(int val, int arr[])
{
    int i;
    for(i = 0; i < sizeof(arr) ; i++)
    {
        if(arr[i] == val)
            return 1;
    }
    return 0;
}

void faireatt(struct Player *J , int f)

{ //char adv[20] ;
  int adv, id;
  int att,val;
  srand(time(0));
  int yposi = 2;
  int tab_Lancer[5], facette, nbDes;

  char s[0];
  char testvar;

  const int MIN = 1, MAX = 6 ;


  att = (J+f)->attaque ;
  printf("+++++++++++++++++++++++ FAIRE UNE ATTAQUE ++++++++++++++++++++++ \n");


  /*for(int i = 0; i < nbJ; ++i)
  {     printf("\tNom \n");
        printf("\t%s  \n",(J+i)->name);
  }*/
  printf(" Quel est l'id du joueur que vous voulez attaquer ? \n");
  scanf ( "%d",&adv);

  for(int i = 0; i < nbJ; ++i)
  {
      id = (J+i)->id;
      if (id == adv)
      {
        int verif;
        int limite_lancer = 0;
        int limiteDes = nbDes-limite_lancer;
        do

            {
            do

            {   printf("\nJoueur %d va essayer d'obtenir une attaque : \n",k-1);


                do
                {
                    fflush(stdin);
                    printf("Donner nombre de des a lancer: ");
                    scanf("%c", &s[0]);
                    nbDes = atoi(s);
                }
                while(nbDes > limiteDes);

            }
            while(!isdigit(s[0]) || nbDes < 1 || nbDes > 5);

            for(int i = 0; i< nbDes; i++)

            { facette = (MIN + rand() % (MAX - MIN)); // MIN <= nombre <= MAX

              tab_Lancer[i]= facette;
            }

            for(int i = 0; i< nbDes; i++)afficher_des_xyPos(tab_Lancer[i], 11*i, 16);


            printf(" Vos des ont comme valeurs :  ");
            verif = nbDes;

            for (int i=0;i<nbDes;i++)
            { printf(" %d ",tab_Lancer[i]);
              if(att == tab_Lancer[i])
              {
                 val++;
                 limite_lancer++;
              }
              else
              {
                  verif--;
              }

            }

            limiteDes = nbDes-limite_lancer;
            printf("\n");
            system("cls");
            printf("La valeur de l'attaque existe sur ce lancer ! Il vous reste %d de(s) a lancer !", limiteDes);
            }
            while(verif!=0);

            system("cls");
            int minus = val*att;
            (J+i)->pdv -= minus;

            for(int i = 0; i < nbJ; ++i)
              {
                printf("\tNom\tID \tpdv \tattaque   \n");
                printf("\t%s\t%d \t%d \t%d  \n",(J+i)->name,(J+i)->id,(J+i)->pdv,(J+i)->attaque);
              }



      }

    }
}
