<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="rangpur.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="rangpur.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Rangpur</h1>
            <h3>Rangpur Division is one of the Divisions in Bangladesh. It was formed on 25 January 2010, as Bangladesh's 7th division. Before that, it was under Rajshahi Division. The Rangpur division consists of eight districts. There are 58 Upazilas or subdistricts under these eight districts. Rangpur is the northernmost division of Bangladesh and has a population of 17,610,956 in the 2022 Census.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

            
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                 

                    <li><a href="rmango.php">Largest mango tree in the world (Thakurgaon)</a></li>
                    <li><a href="rtea.php">Tea Garden (Panchagarh)</a></li>
                    <li><a href="rswapna.php">Swapnapuri Amusement Park (Dinajpur)</a></li>
                    <li><a href="rsagar.php">Ramsagar National Park (Dinajpur)</a></li>
                    <li><a href="rdina.php">Dinajpur Rajbari</a></li>
                    <li><a href="rsingra.php">Singra National Park (Dinajpur)</a></li>
                    <li><a href="rsurah.php">Surah Mosque (Dinajpur)</a></li>
                        
                       
                 </div>
    
    <script >
        const hi = ()  => {
    
            let filter = document.getElementById('search-bar').value.toUpperCase();
    
            let div = document.getElementById('autocom-box');
    
            let li = div. getElementsByTagName ('li');
    
            for (var i=0; i<li.length;  i++){
    
                let a = li[i].getElementsByTagName('a')[0];
    
                let textValue = a.textContent  || a.innerHTML;
    
                if( textValue.toUpperCase().indexOf(filter) > -1){
    
                    li[i].style.display ='';
                }
                else{
                  
                    li[i].style.display ='none';
    
                }
    
            }
    
        }
    </script>
               
                <div class="icon"><i class="fa-solid fa-magnifying-glass-location"></i></div>
            </div>
        </div>




        </div>
     </div>
    </div>

     
    <div class="blank">
        <p>Top Tourist Places</p>
     </div>


     <div class="city">


        <div class="box1 box">
            <div class="lalbag child" ></div>
            <div class="h2a">
            <h2>Largest mango tree in the world (Thakurgaon)</h2>
            <a href="rmango.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Tea Garden (Panchagarh)</h2>
            <a href="rtea.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Swapnapuri Amusement Park (Dinajpur)</h2>
           <a href="rswapna.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Ramsagar National Park (Dinajpur)</h2>
            <a href="rsagar.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Dinajpur Rajbari</h2>
            <a href="rdina.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Singra National Park (Dinajpur)</h2>
            <a href="rsingra.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Surah Mosque (Dinajpur)</h2>
            <a href="rsurah.php">Explore Your Tour</a>
        </div>
        </div>


        
     </div>


</body>
</html>