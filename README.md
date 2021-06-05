# Table of Contents 
- [Project-Specification](#Project-Specification) 
- [Pre-requisites](#Pre-requisites) 
- [How-to-use-it](#How-to-use-it) 
- [Some-Screenshots](#Some-Screenshots) 

# Project-Specification
![Project Specification](docs/formulaire-page-001.jpg)

# Pre-requisites
HTML5 and PHP7

# How-to-use-it
- From root repo, lanch your PHP server:<br>
```shell
php -S localhost:8000
```
- and using your browser goto: localhost:8000
- Or clone this repo in "www" repo of your WampServer and go to this path using your localhost path

# Some-Screenshots
- Form: all fields will be checked when you enter values in fields, all fields must filled.  
  * "Nom" has to be a string
  * "Prénom" has to be a string
  * "Numéro de téléphone (10 Chiffres)" has to be a phone number containing only integers and 10 numbers  
  * "Date de l'achat" has to be a date format, you have possibility to select the date using the calendar on the right of the field  
  * "L'agent a-t-il été agréable ?" you have to choose one the 3 proposed possibilities, value by default is "Sans Avis"  
  * "L'agent a-t-il compris votre problème ?" you have to choose one the 3 proposed possibilities, value by default is "Sans Avis"  
  * "L'agent a-t-il résolu votre problème ?" you have to chose "Oui" or "Non", depending of your choice you will have possibility to be recalled by customer support, if you choose "Non" and you check "Cochez-cette case si vous acceptez d'être rappelé." you will be recalled.  
  * "Dites-nous en plus :" you can comments if you want, this not a mandatory field, you can leave it empty.
![image](https://user-images.githubusercontent.com/61125395/120894918-10034b00-c61b-11eb-89dc-0573b83faa71.png)

- If you choosed "Oui" at last question you will have only the notation pages  
![image](https://user-images.githubusercontent.com/61125395/120895255-6ae97200-c61c-11eb-8df0-d413bef0a533.png)

- If you choosed "Non" and you checked "Cochez-cette case si vous acceptez d'être rappelé.", you will have the message indicating you will be recalled  
![image](https://user-images.githubusercontent.com/61125395/120895332-b865df00-c61c-11eb-8b1f-84c7bb625ba1.png)


