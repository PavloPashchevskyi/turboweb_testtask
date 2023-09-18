This program is test task for TurboWeb company.

To use this program the following programs must be installed on your PC.

 - PHP7.1 (PHP7.1-cli)
 - composer 1.10
 - PHPUnit 7.5 (if you use program in development mode (from "develop"
   branch)).

This application uses command line interface (CLI). Before using this
application, please, do the following.

1. Clone the repository via "git clone" or download archive and unzip it.
2. In the directory of project (where "composer.json" file is located)
   do the


    composer install

3. From the directory of project run php interpreter and transfer
   path to the "dogowner.php" file to it (it is also in the project`s
   root). Transfer to the dogowner.php file the name of dog breed and
   action dog should do (sound or hunt). Like the following.


    php dogowner.php pug sound

4. The result of this command execution is


    Ruff!

NOTES!
 1. Names of dog breed and action are case-insensitive.
 2. If you try to input breed, that does not exist,
    ClassNotFoundException will be thrown.
 3. If you try to input action, that does not exist,
    ClassMethodNotFoundException will be thrown.

5. Enjoy.