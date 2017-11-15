# Twitter
Tato jednoducha applikacia umoznuje registraciu, login uzivatela s moznostou pridavania prispevkou na vlastnu nastenku/dashboard spolu s moznostou pridavania komentarov na nastenky ostatnych zaregistrovanych pouzivatelov.  

## Requirements
Aplikacia vyuziva Laravel verziu 5.5.20, takze je potrebne mat nainstalovane:  
- PHP >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
  
## Postup instalacie  
1) Skopirovanie projektu do priecinku
2) V terminaly pouzit prikaz ```composer install```
3) premenovat .env.example to .env a editovat pre pridanie novej databazy
4) php artisan key:generate
