
<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
 
  <link href="{{asset('bt/css/bootstrap.min.css')}}" rel="stylesheet">
  
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3>Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
   
   <div class="form-group">
    <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Enter Country Name" />
    <div id="countryList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('bt/js/bootstrap.min.js')}}"></script>


  
<script>
    $(document).ready(function(){
    
     $('#country_name').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ route('autocomplete.fetch') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#countryList').fadeIn();  
               $('#countryList').html(data);
               console.log(document.querySelector('#countryList'))
              }
             });
            }
        });
        $(document).on('click', 'li', function(){  
            $('#country_name').val($(this).text());  
            $('#countryList').fadeOut();  
        });  
    
    });
    </script>

 </body>

</html>
