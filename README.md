# Cookie Law Info
######A Cookie Law Info Script with Laravel


* Use this Cookie _ Law _ Script on your own risk. Ask a lawyer for more informations.


### Install the ACL

* Composer
    ```php
    composer require cyrixbiz/cookie dev-master
    ```
    

* Edit config\app and add the following lines
    
    ```php
  'providers' => [
    // ...
    cyrixbiz\cookie\CookieServiceProvider::class,
    // ...
  ];

* Edit App\Http\Kernel and add the following lines

    ```php
    protected $middleware = [
      //
    \cyrixbiz\cookie\Http\Middleware\Cookie::class,

    ```  
    
### Config - File

*  Enable / Disable the Cookie Info
    
        ###### 'enable' => true | false
        
* Choose your mechanism - without or with Javascript

        ###### 'mechainism' => Redirect | Ajax
        
* Cookie Name
        
        //Default - cyrixbiz_set_law_cookie
        ###### 'name' => 'cyrixbiz_set_law_cookie',
        
* View _ Layout 

        // Default - Layoutname
        ###### 'layout' => 'CookieView::layout.message',
        
* life_time for the Cookie

        ###### 'life_time' => 60,
        
* Tag for the View - On the Fly Creating

        ###### tag => '</body>'
        
* Extern jQuery
        
        //You can choose between extern script and manually installed jQuery
        ###### 'extern_jQuery' => true,
        
* Extern bootstrap

        //You can choose between extern script and manually installed bootstrap
        ###### 'extern_bootstrap' => true,
        
