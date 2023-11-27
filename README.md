# Wonderful Travel

Wonderful Travel és un projecte dedicat al mòdul de Projecte, amb l'objectiu de proporcionar als usuaris una plataforma per explorar i reservar destinacions de viatge.

## Estructura del Projecte
El projecte es divideix en diverses carpetes:

- `Diagrames`: Conté els diagrames del projecte.
- `Wonderful_Travel`: Conté el codi font del projecte.
- `assets/dist/css`: Conté els arxius CSS.

## Autors

Aquest projecte ha estat desenvolupat per:

- [@EliasEJ](https://www.github.com/EliasEJ)
- [@atarensi](https://www.github.com/atarensi)

## Informe del Projecte

### Introducció 

El nostre projecte consisteix en una plataforma web per a la reserva de viatges. Els usuaris podran explorar diferents destinacions i reservar-les. Cada usuari podrà registrar-se i iniciar sessió per a poder reservar els viatges. Els usuaris registrats podran veure els viatges reservats i cancel·lar-los. 

### Requeriments funcionals

- *Els usuaris podran registrar-se i iniciar sessió.*
- Els usuaris podran explorar les diferents destinacions.
- Els usuaris podran reservar viatges.
- Els usuaris podran cancel·lar les reserves.
- Els usuaris podran veure les reserves realitzades.

### Requeriments tècnics

#### Frontend

En el nostre projecte hem utilitzat les següents tecnologies:

- HTML5
- CSS3
- JavaScript
- Bootstrap

Per crear el nostre projecte hem utilitzat el framework Bootstrap, que ens ha permès crear una interfície web responsive i amb un disseny atractiu. També hem utilitzat CSS per afegir estils personalitzats a la nostra pàgina web. Per últim, hem utilitzat JavaScript per a crear la lògica de la nostra pàgina web.

#### Backend

En el nostre projecte hem utilitzat les següents tecnologies:

- PHP
- MySQL

Per crear el nostre projecte hem utilitzat PHP per a crear la lògica de la nostra pàgina web. També hem utilitzat MySQL per a crear la base de dades del nostre projecte.

### Diagrama de casos d'ús

La següent imatge mostra el diagrama de casos d'ús del nostre projecte:

![Diagrama de casos d'ús](/Diagrames/casos_us.jpg)

Podem veure que els usuaris anònims poden registrar-se i iniciar sessió. Un cop iniciada la sessió, els usuaris poden explorar les destinacions, reservar viatges, cancel·lar les reserves i veure les reserves realitzades.

### Diagrama de classes

La següent imatge mostra el diagrama de classes del nostre projecte:

![Diagrama de classes](/Diagrames/Main.jpg)

Podem veure que el nostre projecte està dividit en diferents classes. La classe `usuari` conté les funcions per a registrar-se, iniciar sessió i tancar sessió. La classe `destiViatge` conté les funcions per canviar el preu del viatge, canviar la imatge del desti, canviar desplegable dels destins. La classe `reserva` conté les funcions per a reservar viatges, cancel·lar reserves i veure les reserves realitzades.

### Diagrama d'activitats

La següent imatge mostra el diagrama d'activitats del nostre projecte:

![Diagrama d'activitats](/Diagrames/activitats.jpg)

Podem veure que el nostre projecte està dividit en tres apartats.

- **Usuari**: Aquest es l'apartat on l'usuari interactua amb la pàgina web. L'usuari pot registrar-se, iniciar sessió, explorar les destinacions, reservar viatges, cancel·lar les reserves i veure les reserves realitzades.

- **Web**: Aquest es l'apartat de la vista de la pàgina web. La pàgina web mostra els diferents camps pel registre, inici de sessió, explorar les destinacions, reservar viatges, cancel·lar les reserves.

- **Base de dades**: Aquest es l'apartat de la base de dades. La base de dades conté les taules amb les dades dels usuaris, destinacions i reserves.


### Disseny Interfícies

Per a la creació de les interfícies hem utilitzat el framework Bootstrap. A continuació es mostren les interfícies de la nostra pàgina web.

#### Vista Anònim

La següent imatge mostra la vista de la pàgina web per a un usuari anònim:

![Vista Anònim](/Wonderful_Travel/img/readme/sinLogin.png)
![Vista Anònim](/Wonderful_Travel/img/readme/sinLogin2.png)

Podem veure que l'usuari anònim pot registrar-se i iniciar sessió. També pot explorar les destinacions, però no pot reservar viatges.

#### Vista User

La següent imatge mostra la vista de la pàgina web per a un usuari registrat:

![Vista User](/Wonderful_Travel/img/readme/conLogin.png)
![Vista User](/Wonderful_Travel/img/readme/conLogin2.png)

Podem veure que l'usuari registrat pot tancar sessió, explorar les destinacions, reservar viatges, cancel·lar les reserves i veure les reserves realitzades.

#### Vista Administrador

En el nostre projecte no hi ha cap vista per a l'administrador. Ja que l'administrador no pot fer res que no pugui fer un usuari registrat.

### Diagrama de BDD

La següent imatge mostra el diagrama de la base de dades del nostre projecte:

![Diagrama de BDD](/Diagrames/bdd.jpg)

Podem veure que la base de dades està dividida en tres taules.

- **usuaris**: Aquesta taula conté les dades dels usuaris registrats. Les dades que conté són: `id`, `username`, `email`, `password`, `token` i `token_time`.
    - `id`: Identificador de l'usuari.
    - `username`: Nom d'usuari de l'usuari.
    - `email`: Correu electrònic de l'usuari.
    - `password`: Contrasenya de l'usuari encriptada.
    - `token`: Token de l'usuari per si vol canviar la contrasenya.
    - `token_time`: Data de creació del token per si vol canviar la contrasenya.

- **destiViatges**: Aquesta taula conté les dades de les destinacions. Les dades que conté són: `id`, `destiContinent`, `destiPais`,  `preu`, `imatge` i `dataDisponible`.
    - `id`: Identificador de la destinació.
    - `destiContinent`: Nom del continent de la destinació.
    - `destiPais`: Nom del país de la destinació.
    - `preu`: Preu de la destinació.
    - `imatge`: Ruta relativa de la imatge de la destinació.
    - `dataDisponible`: Data de disponibilitat de la destinació.

- **reserves**: Aquesta taula conté les dades de les reserves. Les dades que conté són: `id`, `usuari`, `desti`, `preu`, `nom`, `telf`, `numPersones` i `img`.
    - `id`: Identificador de la reserva.
    - `usuari`: Identificador de l'usuari que ha realitzat la reserva.
    - `desti`: Identificador de la destinació reservada.
    - `preu`: Preu de la reserva.
    - `nom`: Nom de la persona que ha realitzat la reserva.
    - `telf`: Telèfon de la persona que ha realitzat la reserva.
    - `numPersones`: Número de persones que han realitzat la reserva.
    - `img`: Ruta relativa de la imatge de la destinació reservada.

### Implementació

#### Proves unitàries

No hem realitzat proves unitàries en el nostre projecte.

### Desplegament del projecte

#### Llenguatges

Com ja hem comentat anteriorment, el nostre projecte està desenvolupat en `PHP`, `HTML`, `CSS` i `JavaScript`. Per a poder executar el nostre projecte, necessitarem un servidor web amb suport per a PHP i MySQL, per exemple, Apache.

#### Enllaços del projecte

Dins de la carpeta `Wonderful_Travel` hi ha el codi font del projecte. Aquesta carpeta ha de ser copiada a la carpeta `htdocs` del servidor web. Per a poder accedir al nostre projecte, hem de navegar a la següent URL: `http://localhost/Wonderful_Travel/`.

- [Repositori GitHub](https://github.com/EliasEJ/Wonderful-Travel)


### Propostes de millora

- Afegir un apartat per a l'administrador.
- Afegir un apartat per l'usuari per poder modificar les dades del seu compte.
- Afegir login amb Google i GitHub.


### Conclusions

En el nostre cas aquest projecte ha estat una bona experiència, ja que hem pogut posar en pràctica els coneixements adquirits durant el curs. Hem pogut veure com es desenvolupa un projecte real, des de la creació dels diagrames fins a la implementació del projecte. També hem pogut veure com es treballa en equip, ja que hem hagut de dividir les tasques entre els dos membres del grup. En general, ha estat una bona experiència i hem après molt.


### Webgrafia

#### Documentació i ajuda

- [Bootstrap](https://getbootstrap.com/)
- [W3Schools](https://www.w3schools.com/)
- [Stack Overflow](https://stackoverflow.com/)
- [PHP](https://www.php.net/)

#### Eines

- [Visual Studio Code](https://code.visualstudio.com/)
- [GitHub](https://github.com/)
- [XAMPP](https://www.apachefriends.org/es/index.html)
- [MySQL Workbench](https://www.mysql.com/products/workbench/)

#### Recursos

- [Pixabay](https://pixabay.com/es/)

