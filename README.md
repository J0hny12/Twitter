# Twitter
Tato jednoducha applikacia umoznuje registraciu, login uzivatela s moznostou pridavania prispevkou na vlastnu nastenku/dashboard spolu s moznostou pridavania komentarov na nastenky ostatnych zaregistrovanych pouzivatelov.  

## Requirements
Aplikacia vyuziva Laravel verziu 5.5.20, takze je potrebne mat nasledovne:
- Composer
- MySQL
- PHP >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
  
## Postup instalacie  
1) Skopirovanie projektu do vlastneho priecinku (cez git clone/ stiahnutie .zip)
2) Cez terminal sa dostat do daneho priecinku so stiahnutym projektom
3) V terminaly pouzit prikaz ```composer install```
4) V mysql je potrebne vytvorit novu databazu pre aplikaciu.
5) Premenovat .env.example to .env a nasledne zeditovat riadky DB_DATABASE, DB_USERNAME, DB_PASSWORD s udajmi k pristupu k vami vytvorenej databaze
6) Zadat do terminalu prikaz ```php artisan key:generate```
7) Zadat do terminalu prikaz ```php artisan config:cache```
8) Pre vytvorenie pozadovanych tabuliek do databazy je potrebne zadat prikaz ```php artisan migrate```
9) aplikaciu mozete spustit cez localhost alebo cez prikaz ```php artisan serve```
