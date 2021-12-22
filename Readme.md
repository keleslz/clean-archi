#domain/src
La couche portable de notre application

###Data
- `Entity`: Des interfaces représentants nos entités que l'on va greffer aux entités de notre framework disponible dans `/src/Entity` représentent aussi
les Entités de notre couche metier, User, Message .. etc 

- `Repository`: Des interfaces représentants nos Repository que l'on va greffer à des services de notre framework disponible dans `/src/Service`, ainsi on peut changer le moyen utilisé pour récuperer nos données

###Presenter
- Contient des classes concrètes et interfaces qui seront implémenté par notre code métier et destiné à présenter un objet `Reponse` à notre Controlleur

###Request
- Contient des classes, simple DTO et interfaces destinés à représenter une `Requete` reçu dans nos Controlleurs tout en sachant que chaque requête est différente il faudra en créer une si besoin

###Response
- Contient des classes, simple DTO et interfaces destinés à représenter une `Reponse` retourné dans nos Controlleurs tout en sachant que les réponses peuvent $etre différente , si beasoin il faudra en créer de nouveaux

###Service
- Ensemble de compte permettant d'effectuer des actions ainsi on y retrouve des dossiers avec à l'interieur nos Classes et Interfaces. Par exemeple `Service\Paginator\PaginatorInterface`(de notre Domain) sera implémenté par `App\Service\PaginatorService` (de notre framework)
  car la pagination est un bundle externe que nous n'incluerons pas à notre Domain permettant d'implémenter une autre pagination si jamais le besoin de changement est ressenti

###UseCase
- Action individuel disponible representant chaque action de notre `logique métier`, GetMessageUseCase, CreateMessageUseCase ... etc


## <u>Le project finale est un sytème de messagerie avec notification</u>
