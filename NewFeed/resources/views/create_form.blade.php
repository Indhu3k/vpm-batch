
    


   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
    <div class="container ">

        <div class="row">
           <div class="col-md-4 card">
         
           <div class="card-header bg-primary" >
               <h4>ADD Feed DETAIls</h4>
           </div>
         
           <form action="getFeedData" method="post" >
            @csrf
           <div class="card-body row ">
               
                   <div class="col-md-2"> 
                       <label>NAME:</label>
                   </div>
                   <div class="col-md-10"> 
                       <div class="form-group">
                           <input type ="text"  name="name" class="form-control"><br>
                        </div>
                   </div>
                 
                   <div class="col-md-2"> 
                       <label>Email:</label>
                   </div>
                   <div class="col-md-10"> 
                       <div class="form-group">
                           <input type ="email"   name="email" class="form-control"><br>
                        </div>
                   </div>
    
                   <div class="col-md-2"> 
                       <label>Phone:</label>
                   </div>
                   <div class="col-md-10"> 
                       <div class="form-group">
                           <input type ="number" name="phone" class="form-control"><br>
                        </div>
                   </div>
                   <div class="col-md-2"> 
                    <label>Suggesion:</label>
                </div>
                <div class="col-md-10"> 
                    <div class="form-group">
                        <input type ="text" name="suggession" class="form-control"><br>
                     </div>
                </div>
                <div class="col-md-2"> 
                    <label>IP Address:</label>
                </div>
                <div class="col-md-10"> 
                    <div class="form-group">
                        <input type ="text" name="ip" class="form-control"><br>
                     </div>
                </div>
                   <div class="col-md-12"> 
                       <div class="form-group">
                       <input class="btn-success" type="submit" name="submit" value="submit">
                        </div>
                   </div>
                   
           </div>
       </form>
</body>
</html>




    
