<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="chittagonj.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="chittagonj.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Chittagong</h1>
            <h3>Chittagong,officially Chattogram romanized: Coṭṭogram, is the second-largest city in Bangladesh after Dhaka and third largest city in Bengal region. It is the administrative seat of the eponymous division and district. It hosts the busiest seaport on the Bay of Bengal.The city is located on the banks of the Karnaphuli River between the Chittagong Hill Tracts and the Bay of Bengal. The Greater Chittagong Area had a population of more than 5.2 million in 2022.In 2020, the city area had a population of more than 3.9 million.Even amidst heightened global uncertainty, Bangladesh has consistently demonstrated a robust history of growth and advancement.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">    
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                    <li><a href="ccox.php">Cox's Bazar Seabeach</a></li>
                    <li><a href="csaint.php">Saint Martin Island</a></li>
                    <li><a href="csajek.php">Sajek Valley (Rangamati)</a></li>
                    <li><a href="cnilgiri.php">Nilgiri and Nilachal (Bandorban)</a></li>
                    <li><a href="ccaptai.php">Kaptai Lake (Rangamati)</a></li>
                    <li><a href="cnafa.php">Nafakhum waterfall (Bandarban)</a></li>
                    <li><a href="cboga.php">Boga lake (Bandarban)</a></li>
                    <li><a href="cpatenga.php">Patenga Beach (Chittagong)</a></li>
                    <li><a href="cinani.php">Inani Beach (Cox's Bazar)</a></li>
                    <li><a href="cfaiz.php">Faiz Lake (Chittagong)</a></li>
                    <li><a href="chim.php">Himchari (Cox's Bazar)</a></li>
                    <li><a href="cnaval.php">Naval Beach</a></li>
                    <li><a href="cmarine.php">Marine Drive (Cox's Bazar)</a></li>
                    <li><a href="ckeo.php">Keokradong (Bandorban)</a></li>
                    <li><a href="cchand.php">Chandranath Temple (Sitakunda)</a></li>
                    <li><a href="cnijhum.php">Nijhum Island (Noakhali)</a></li>
                    <li><a href="cgul.php">Gulyakhali Beach (Sitakunda)</a></li>
                    <li><a href="chang.php">Hanging Bridge (Rangamati)</a></li>
                    <li><a href="cgold.php">Golden Temple (Bandarban)</a></li>
                    <li><a href="cdula.php">Dulahazara Safari Park (Cox's Bazar)</a></li>
                    <li><a href="cshal.php">Shalban Buddhist Monastery (Comilla)</a></li>
                    <li><a href="cpahar.php">Chimbuk Pahar (Bandarban)</a></li>
                        
                       
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
           
            <h2>Cox's Bazar Seabeach</h2>
            <a href="ccox.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Saint Martin Island</h2>
            <a href="csaint.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Sajek Valley (Rangamati)</h2>
           <a href="csajek.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Nilgiri and Nilachal (Bandorban)</h2>
            <a href="cnilgiri.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Kaptai Lake (Rangamati)</h2>
            <a href="ccaptai.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Nafakhum waterfall (Bandarban)</h2>
            <a href="cnafa.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Boga lake (Bandarban)</h2>
            <a href="cboga.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box8 box">
            <div class="safari child"></div>
            <div class="h2a">
            <h2>Patenga Beach (Chittagong)</h2>
            <a href="cpatenga.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box9 box">
            <div class="meseum child"></div>
            <div class="h2a">
            <h2>Inani Beach (Cox's Bazar)</h2>
            <a href="xinani.php">Explore Your Tour </a>
    </div>
        </div>


        <div class="box10 box">
            <div class="bhawal child"></div>
            <div class="h2a">
            <h2>Faiz Lake (Chittagong)</h2>
            <a href="cfaiz.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box11 box">
            <div class="taj child"></div>
            <div class="h2a">
            <h2>Himchari (Cox's Bazar)</h2>
           <a href="chim.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box12 box">
            <div class="nobo child"></div>
            <div class="h2a">
            <h2>Naval Beach</h2>
            <a href="cnaval.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box13 box">
            <div class="suhrawardy child"></div>
            <div class="h2a">
            <h2>Marine Drive (Cox's Bazar)</h2>
            <a href="cmarine.php">Explore Your Tour</a>
    </div>
        </div>


        <div class="box14 box">
            <div class="chandrima child"></div>
            <div class="h2a">
            <h2>Keokradong (Bandorban)</h2>
            <a href="ckeo.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box15 box">
            <div class="ramna child"></div>
            <div class="h2a">
            <h2>Chandranath Temple (Sitakunda)</h2>
            <a href="cchand.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box16 box">
            <div class="air child"></div>
            <div class="h2a">
            <h2>Nijhum Island (Noakhali)</h2>
            <a href="cnijhum.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box17 box">
            <div class="mahera child"></div>
            <div class="h2a">
            <h2>Gulyakhali Beach (Sitakunda)</h2>
            <a href="cgul.php">Explore Your Tour</a>
    </div>
        </div>


        <div class="box18 box">
            <div class="jamuna child"></div>
            <div class="h2a">
            <h2>Hanging Bridge (Rangamati)</h2>
            <a href="chang.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box19 box">
            <div class="dhakeswari child"></div>
            <div class="h2a">
            <h2>Golden Temple (Bandarban)</h2>
           <a href="cgold.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box20 box">
            <div class="zinda child"></div>
            <div class="h2a">
            <h2>Dulahazara Safari Park (Cox's Bazar)</h2>
            <a href="cdula.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box21 box">
            <div class="karzon child"></div>
            <div class="h2a">
            <h2>Shalban Buddhist Monastery (Comilla)</h2>
            <a href="cshal.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box22 box">
            <div class="nandan child"></div>
            <div class="h2a">
            <h2>Sonadia Island (Cox's Bazar)</h2>
            <a href="csona.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box23 box">
            <div class="pahar child"></div>
            <div class="h2a">
            <h2>Chimbuk Pahar (Bandarban)</h2>
            <a href="cpahar.php">Explore Your Tour</a>
        </div>
        </div>
    </div>
    </div>
        

     </div>


</body>
</html>