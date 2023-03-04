1.In .env file declare database,root & password.
2.Create a view file & create a submit form, with method = post.
3.Create a model file.
4.Create a controller file  with a function & import value fields of form from view file using return view('viewfile'); .
5. create another function in controller file with Request as parameters. 
a. in this function write code for validation of inputs.
b. in this function connect to DB and insert inputs into table.

6. in the view file declare a error message when input fields are not filled. [e.g: <span>@error ('email') {{$message}} @enderror</span>]
7. in the web.php file declare routes for view file and controller file with its methods.
