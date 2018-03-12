# A Simple MVC Application

This practical looks at making a simple object oriented MVC application. It is based on the 'MVC using functions' example we have looked at previously. Make sure you have completed the previous weeks practical work before attempting this. 

First, find the file *DbConnect.php* and make changes to the connection settings so that it matches your database. Put all the files on a web server and check that you can view films. The other actions - add film, delete etc. won't work yet.

The website has been re-factored to use an object oriented MVC pattern. Take some time to look at the files in the web site.

* It use a basic front controller pattern, see *index.php*, just like we looked at previously. 
* Instead of having flat files for each controller- *list.php*, *details.php* etc. there is now a *FilmController* class, this will feature methods for each action - *list*, *details* etc. 
* The functions for working with a database (*getAllFilms*, *getFilmById* etc.) will be re-factored into a *FilmModel* class. 
* There is a separate *DbConnect* class for dealing with the connection to the database.

Consider the 'list all films' action. 

* In *index.php* the following conditional statement will be triggered. 

```php
if ($action==="list") {
    $filmController->list();
}
```

* The *list* method of *$filmController* will be called

```php
//FilmController.php
public function list()
{
    $films=$this->filmModel->getAllFilms();
    $this->loadView("list-view", ["films"=>$films,"pageTitle"=>"List all films"]);
}
```

* The *list* method calls the  *getAllFilms* method from the *FilmModel* class.
* The FilmController then calls it's own *loadView* method...

```php
//FilmController.php
private function loadView($view,$data)
{
    extract($data);
    require("views/".$view.".php");
}

```

* The *loadView* method includes a *list-view.php* that displays the list of films. 

> One bit of PHP code you probably haven't seen before is the extract() function. This function creates a variable for each key in an array e.g. 
> ```
> $arr=["msg"=>"hello","active"=>true];
> extract($arr);
> echo $msg; //outputs hello
> ```
> It is useful to us here as it allows us to unpack data in *loadView* and make it easily accessible to the code in a view. 
>
## On your own
* Try and get the 'create' and 'delete' actions to work as well. You should only have to make changes to *index.php*, *FilmController.php* and *FilmModel.php*. 
