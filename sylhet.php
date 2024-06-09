<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="sylhet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="sylhet.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Sylhet</h1>
            <h3>Sylhet Division is the northeastern division of Bangladesh. It is bordered by the Indian states of Meghalaya, Assam and Tripura to the north, east and south respectively, and by the Bangladeshi divisions of Chittagong to the southwest and Dhaka and Mymensingh to the west.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">   
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                 
                    <li><a href="sbisna.php">Bishanakandi (Sylhet)</a></li>
                    <li><a href="sjaf.php">Jaflong (Sylhet)</a></li>
                    <li><a href="sratar.php">Ratargul Joloban (Sylhet)</a></li>
                    <li><a href="sham.php">Hamham Waterfall (Moulovibazar)</a></li>
                    <li><a href="span.php">Panthumai Jharna (Sylhet)</a></li>
                    <li><a href="skunda.php">Madhavakunda waterfall (Moulovibazar)</a></li>
                    <li><a href="sjadu.php">Jadukata Nothi (Sunamganj)</a></li>
                    <li><a href="stanguar.php">Tanguar Haor (Sunamganj)</a></li>
                    <li><a href="shaka.php">Hakaluki Haor (Moulovibazar)</a></li>
                    <li><a href="slau.php">Lauachara National Park (Srimangal)</a></li>
                    <li><a href="shazrat.php">Hazrat Shahjalal (Rh) Mazar (Sylhet)</a></li>
                    <li><a href="spark.php">Satchari National Park (Habiganj)</a></li>
                    <li><a href="skhadim.php">Khadimnagar National Park (Sylhet)</a></li>
                        
                       
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
               
                
            </div>
        </div>




        </div>
     </div>
    </div>
    </header>
     
    <div class="body_n">
    <div class="blank">
        <p>Top Tourist Places</p>
     </div>

     <div class="city_back"> 
     <div class="city">


        <div class="box1 box">
            <div class="lalbag child" ></div>
            <div class="h2a">
            <a href="x"></a>
            <h2>Bishanakandi (Sylhet)</h2>
            <a href="sbisna.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Jaflong (Sylhet)</h2>
            <a href="sjaf.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Ratargul Joloban (Sylhet)</h2>
           <a href="sratar.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Hamham Waterfall (Moulovibazar)</h2>
            <a href="sham.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Panthumai Jharna (Sylhet)</h2>
            <a href="span.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Madhavakunda waterfall (Moulovibazar)</h2>
            <a href="skunda.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Jadukata Nothi (Sunamganj)</h2>
            <a href="sjadu.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box8 box">
            <div class="safari child"></div>
            <div class="h2a">
            <h2>Tanguar Haor (Sunamganj)</h2>
            <a href="stanguar.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box9 box">
            <div class="meseum child"></div>
            <div class="h2a">
            <h2>Hakaluki Haor (Moulovibazar)</h2>
            <a href="shaka.php">eXPLORE </a>
        </div>
        </div>


        <div class="box10 box">
            <div class="bhawal child"></div>
            <div class="h2a">
            <h2>Lauachara National Park (Srimangal)</h2>
            <a href="slau.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box11 box">
            <div class="taj child"></div>
            <div class="h2a">
            <h2>Hazrat Shahjalal (Rh) Mazar (Sylhet)</h2>
           <a href="shazrat.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box12 box">
            <div class="nobo child"></div>
            <div class="h2a">
            <h2>Satchari National Park (Habiganj)</h2>
            <a href="spark.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box13 box">
            <div class="suhrawardy child"></div>
            <div class="h2a">
            <h2>Khadimnagar National Park (Sylhet)</h2>
            <a href="skhadim.php">Explore Your Tour</a>
    </div>
        </div>


        
     </div>
    </div>
    </div>


</body>
</html>



