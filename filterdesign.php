<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">  <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<style>
    .p_btn{
     
        display:inline;
    }
    #filt{
     border:solid 1px;
        border-color:cadetblue;
        height:40px;
        width:85%;
        margin-left:15%;
        padding:5px;
    }
    h1 {
margin: 0 0 0.5em 0;
color:azure;
font-weight: normal;
font-family: 'Ultra', sans-serif;
font-size: 36px;
line-height: 42px;
text-transform: uppercase;
text-shadow: 0 2px white, 0 3px #777;
}
h2 {
margin: 1em 0 0.3em 0;
color:beige;
font-weight: normal;
font-size: 30px;
line-height: 40px;
font-family: 'Orienta', sans-serif;
}
 
#employees {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 12px;
background-color:azure;
margin: 15px 25px 15px 100px;
border-collapse: collapse;
text-align: center;
float: left;
width: 700px;
}
 
#employees th {
font-size: 14px;
font-weight: normal;
color: #039;
padding: 10px 8px;
border-bottom: 2px solid #6678b1;
   
}
 
#employees td {
border-bottom: 1px solid #ccc;
color: #669;
padding: 8px 10px;
    
}
 

 

   
    

header, footer {
    padding: 1em;
    color: white;
    background-color:darkgray;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
    color:beige;
}


   

    body{
        background-color: antiquewhite;
    }


</style>
</head>
<body>
<div class="container">

<header>
   <h1>Filteration</h1>
</header>
  <br>
<nav class="navbar navbar-inverse">
<ul class="nav navbar-nav">
    
    <div id="filter">
<h2>Filter options</h2>
<li><a href="#demo" class="btn btn-info" data-toggle="collapse">Has own car</a>
  <div id="demo" class="collapse">
        <div>
        <input type="checkbox" id="car" name="hasCar0">
        <label for="car">none</label>
        </div>
      
        <div>
        <input type="checkbox" id="car1" name="hasCar1">
        <label for="car">only 1</label>
        </div>
    
        <div>
        <input type="checkbox" id="car2" name="hasCar2">
        <label for="car">more than 2</label>
        </div>
    
    
        <div>
        <input type="checkbox" id="car3" name="hasCar3">
        <label for="car">more than 3</label>
        </div>
    
    
        <div>
        <input type="checkbox" id="car4" name="hasCar4">
        <label for="car">more than 4</label>
        </div>
   
   <hr>
  </div>
   
    </li>

        
    <li>
         <a href="#demo1" class="btn btn-info" data-toggle="collapse">languages</a>
           <div id="demo1" class="collapse">
               <div>
               <input type="checkbox" id="language1" name="speaksForeignLanguage">
               <label for="language">1 language</label>
             </div>
            <div>
             <input type="checkbox" id="language2" name="speaksForeignLanguage2">
                <label for="language">2 languages</label>
            </div>
          <div>
            <input type="checkbox" id="language3" name="speaksForeignLanguage3">
            <label for="language">3 languages</label>
            </div>
     <hr>
    </div>
     </li>
     
        <li>
         <a href="#demo2" class="btn btn-info" data-toggle="collapse">other options</a>
           <div id="demo2" class="collapse">
               <div>
                   <input type="checkbox" id="nights" name="canWorkNights">
                   <label for="nights">Can work nights</label>
            </div>
        
        
               <div>
                   <input type="checkbox" id="student" name="isStudent">
                   <label for="student">Is a student</label>
            </div>
               <hr>
            </div>
      
        </li>
    </div>
    </ul>
    
  
</nav>
    
   
     <!--output data of each row
-->   <div id="filt" >
    <p class=" applied-filt p_btn" >has car none
    <button type="button"class=" applied-filt  "  id="cancel">&times;</button></p>
    <p class=" applied-filt1 p_btn">only 1
    <button type="button"class=" applied-filt1  "  id="cancel">&times;</button></p>
    <p class=" applied-filt2 p_btn">more than 2
    <button type="button"class=" applied-filt2  "  id="cancel">&times;</button></p>
     <p class=" applied-filt3 p_btn">more than 3
    <button type="button"class=" applied-filt3  "  id="cancel">&times;</button></p>
    <p class=" applied-filt4 p_btn">more than 4
    <button type="button"class=" applied-filt4  "  id="cancel">&times;</button></p>
    <p class=" applied-filt5 p_btn">one language
    <button type="button"class=" applied-filt5  "  id="cancel">&times;</button></p>
     <p class=" applied-filt6 p_btn">2 languages
    <button type="button"class=" applied-filt6  "  id="cancel">&times;</button></p>
    <p class=" applied-filt7 p_btn">3 languages
    <button type="button"class=" applied-filt7"  id="cancel">&times;</button></p>
    <p class=" applied-filt8 p_btn">work at nights
    <button type="button"class=" applied-filt8"  id="cancel">&times;</button></p>
     <p class=" applied-filt9 p_btn">students
    <button type="button"class=" applied-filt9"  id="cancel">&times;</button></p>
    
    </div>
 
<table id="employees">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Car</th>
<th>Language</th>
<th>Nights</th>
<th>Student</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
 
<!-- -->
 
<script src="jquery-latest.js"></script>
<script>
function makeTable(data){
var tbl_body = "";
$.each(data, function() {
var tbl_row = "";
$.each(this, function(k , v) {
tbl_row += "<td>"+v+"</td>";
})
tbl_body += "<tr>"+tbl_row+"</tr>";
})
 
return tbl_body;
}
 
function getEmployeeFilterOptions(){
var opts = [];
$checkboxes.each(function(){
if(this.checked){
opts.push(this.name);
}
});
console.log(opts); 
return opts;
}
 
function updateEmployees(opts){
$.ajax({
type: "POST",
url: "search.php",
dataType : 'json',
cache: false,
data: {filterOpts: opts},
success: function(records){
$('#employees tbody').html(makeTable(records));
}
});
}
 
var $checkboxes = $("input:checkbox");
$checkboxes.on("change", function(){
var opts = getEmployeeFilterOptions();
updateEmployees(opts);
});
 
updateEmployees();
    
    
    
     $(document).ready(function(){
            var count=0;
                 $('#car').prop('checked', false )
                 $(".applied-filt").hide();
                 $("#car").click(function()
                            {
                   if (count===0){
                     $(".applied-filt").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt").hide();
                         count=0;
                     }
            });
            $(".applied-filt").click(function(){
                $('#car').prop('checked', false);
                $(".applied-filt").hide();
                count=0;
                updateEmployees();
            });
        });
     $(document).ready(function(){
            var count=0;
                 $('#car1').prop('checked', false )
                 $(".applied-filt1").hide();
                 $("#car1").click(function()
                            {
                   if (count===0){
                     $(".applied-filt1").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt1").hide();
                         count=0;
                     }
            });
            $(".applied-filt1").click(function(){
                $('#car1').prop('checked', false);
                $(".applied-filt1").hide();
                count=0;
                updateEmployees();
            });
        });
     $(document).ready(function(){
            var count=0;
                 $('#car2').prop('checked', false )
                 $(".applied-filt2").hide();
                 $("#car2").click(function()
                            {
                   if (count===0){
                     $(".applied-filt2").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt2").hide();
                         count=0;
                     }
            });
            $(".applied-filt2").click(function(){
                $('#car2').prop('checked', false);
                $(".applied-filt2").hide();
                count=0;
                updateEmployees();
            });
        });
     $(document).ready(function(){
            var count=0;
                 $('#car3').prop('checked', false )
                 $(".applied-filt3").hide();
                 $("#car3").click(function()
                            {
                   if (count===0){
                     $(".applied-filt3").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt3").hide();
                         count=0;
                     }
            });
            $(".applied-filt3").click(function(){
                $('#car3').prop('checked', false);
                $(".applied-filt3").hide();
                count=0;
                updateEmployees();
            });
        });
    $(document).ready(function(){
            var count=0;
                 $('#car4').prop('checked', false )
                 $(".applied-filt4").hide();
                 $("#car4").click(function()
                            {
                   if (count===0){
                     $(".applied-filt4").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt4").hide();
                         count=0;
                     }
            });
            $(".applied-filt4").click(function(){
                $('#car4').prop('checked', false);
                $(".applied-filt4").hide();
                count=0;
                updateEmployees();
            });
        });
      $(document).ready(function(){
            var count=0;
                 $('#language1').prop('checked', false )
                 $(".applied-filt5").hide();
                 $("#language1").click(function()
                            {
                   if (count===0){
                     $(".applied-filt5").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt5").hide();
                         count=0;
                     }
            });
            $(".applied-filt5").click(function(){
                $('#language1').prop('checked', false);
                $(".applied-filt5").hide();
                count=0;
                updateEmployees();
            });
        });
    $(document).ready(function(){
            var count=0;
                 $('#language2').prop('checked', false )
                 $(".applied-filt6").hide();
                 $("#language2").click(function()
                            {
                   if (count===0){
                     $(".applied-filt6").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt6").hide();
                         count=0;
                     }
            });
            $(".applied-filt6").click(function(){
                $('#language2').prop('checked', false);
                $(".applied-filt6").hide();
                count=0;
                updateEmployees();
            });
        });
    $(document).ready(function(){
            var count=0;
                 $('#language3').prop('checked', false )
                 $(".applied-filt7").hide();
                 $("#language3").click(function()
                            {
                   if (count===0){
                     $(".applied-filt7").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt7").hide();
                         count=0;
                     }
            });
            $(".applied-filt7").click(function(){
                $('#language3').prop('checked', false);
                $(".applied-filt7").hide();
                count=0;
                updateEmployees();
            });
        });
    $(document).ready(function(){
            var count=0;
                 $('#nights').prop('checked', false )
                 $(".applied-filt8").hide();
                 $("#nights").click(function()
                            {
                   if (count===0){
                     $(".applied-filt8").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt8").hide();
                         count=0;
                     }
            });
            $(".applied-filt8").click(function(){
                $('#nights').prop('checked', false);
                $(".applied-filt8").hide();
                count=0;
                updateEmployees();
            });
        });
     $(document).ready(function(){
            var count=0;
                 $('#student').prop('checked', false )
                 $(".applied-filt9").hide();
                 $("#student").click(function()
                            {
                   if (count===0){
                     $(".applied-filt9").show();
                      count=1;  
                      
                }
                     else if(count===1){
                       
                         $(".applied-filt9").hide();
                         count=0;
                     }
            });
            $(".applied-filt9").click(function(){
                $('#student').prop('checked', false);
                $(".applied-filt9").hide();
                count=0;
                updateEmployees();
            });
        });
</script>
    
    
    


<footer>Copyright &copy; Abhinav Shah</footer>

</div>

    
</body>
</html>
