# security2ding
Deze mini applicatie is voor de laatste opdracht voor security 2. Enkel de encryptie is naar gekeken, verder niet veel tijd aan besteed.

Voor het encrypten van de data naar de database is AES gebruikt, door middel van de phpseclib library. Deze kiest automatisch de beste backend die op het gebruikte platform beschikbaar is.

Het bericht wordt op basis van de naam opgeslagen en encrypted d.m.v. AES met als key het wachtwoord. Wanneer het bericht wordt leeggelaten wordt het bericht opgehaald en ontsleuteld met het wachtwoord.

## Installatie
Zoals elke php site, draaien in een hosting d.m.v. apache of nginx met php-fhm. Verder heeft het project een dependency naar phpseclib. Deze kun je makkelijk installeren door in de hoofdmap van dit project ```composer install``` uit te voeren. Er vanuitgaande dat composer globaal is geïnstalleerd. En als je geen composer hebt dan kan Google je verder helpen.