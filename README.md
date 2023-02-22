# Project n°1 Wild Code School - team Simpsons :family_man_woman_girl_boy:

## Project requirements :clipboard:

- Three pages minimum:
    - Team presentation
    - Contact form
    - Form redirection page

## Repo and database use specifications :outbox_tray: :card_file_box:

### Clone this repo:

In the folder in which you want to have your repo copy:

For SSH: git clone git@github.com:Djosiane/Simpson.git (recommended if you've already linked SSH)

For HTTPS: git clone https://github.com/Djosiane/Simpson.git

## Database infos

### General infos
For this site we used a database linked to our site
A dump file could be provided on demand but here's our database infos (but you can have your own structure and content!):

- database name: simpsons
- table name: simpsons_family
- table columns and properties: 

    - id => INT NOT NULL AUTO_CREMENT (PRIMARY KEY)
    - name => VARCHAR(25) NOT NULL
    - bio  => TEXT NULL
    - image  => VARCHAR(500) NOT NULL

### Connect database to project:
Once you have your database and it's content you need to 

    - create a "_connec.php" file and insert you database infos in it inside php section:

        define('DSN', 'mysql:host=localhost;dbname=simpsons;charset=utf8');
        define('USER', 'YOURUSERNAME');
        define('PASS',  'YOURPASSWORD');

    - create a ".gitignore" file and insert the path to your _connec.php

The import and display are made on the "card.php" in the case of our project.


## Languages used for this project:
php, html, css






















