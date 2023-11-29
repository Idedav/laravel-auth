Come visto in mattinata ripuschate nella repo di ieri (rifatta) la struttura admin che abbiao fatto stamattina e da lì continuate:
riprendete le migration e i seeder fatti ieri e lanciateli
ricopiate anche i controller e sistemate le nuove rotte
innestate le view di ieri nella struttura iniziata oggi
Arrivate almeno fino alla visualizzazione della lista dei progetti nelle rotte admin.
Se per esercizio volete rifare tutto daccapo i passaggi sono i seguenti
creare un nuovo progetto Laravel 10 (composer create-project laravel/laravel mio-progetto)
entrare nella cartella del progetto creato (cd mio-progetto)
lanciare da terminale i seguenti comandi:
composer require laravel/breeze --dev
php artisan breeze:install
composer require pacificdev/laravel_9_preset
php artisan preset:ui bootstrap --auth
rinominare vite.config.js in vite.config.cjs
npm i && npm run dev
ecc :occhiolino:
