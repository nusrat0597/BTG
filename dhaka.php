<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="dhaka2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>

<div class="f1">
    <ul> 
        <li><a href="home.php">Home</a></li>
        <li><a href="dhaka.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="rating.php">Rate Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

       <div class="name">
            <h1>Dhaka</h1>
            <h3>Dhaka is the capital and largest city of Bangladesh. With its colorful history and rich cultural traditions, Dhaka is known the world over as the city of mosques and muslin. Its fame attracted travelers from far and near throughout the ages. Today it has grown into a mega city of about Your.5 million people, with an area of about Your53 sq. km. becoming the hub of the nation's industrial, commercial, cultural, educational and political activities.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">
        <div class="search-bar">
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

        

                 <div class="autocom-box" id="autocom-box">
                        <li><a href="lalbag.php">Lalbagh Fort</a></li>
                        <li><a href="ahsan.php">Ahsan Manzil</a></li>
                        <li><a href="sohid.php">National Memorial</a></li>
                        <li><a href="hatirjheel.php">Hatirjheel</a></li>
                        <li><a href="panam.php">Panam Nagar</a></li>
                        <li><a href="botanic.php">Botanical Garden</a></li>
                        <li><a href="zoo.php">National Zoo</a></li>
                        <li><a href="safari.php">Bangabandhu Sheikh Mujib Safari Park</a></li>
                        <li><a href="mesuem.php">National Museum</a></li>
                        <li><a href="bhawal.php">Bhawal National Park</a></li>
                        <li><a href="taj.php">Taj Mahal Bangladesh</a></li>
                        <li><a href="nobo.php"> Novotheater</a></li>
                        <li><a href="suhrawardy.php">Suhrawardy Udyan </a></li>
                        <li><a href="chandrima.php"> Chandrima Udyan</a></li>
                        <li><a href="ramana.php">Ramana Park </a></li>
                        <li><a href="air.php">Bangladesh Air Force Museum </a></li>
                        <li><a href="mahera.php">Mahera zamindar house </a></li>
                        <li><a href="jamuna.php">Jamuna Resort</a></li>
                        <li><a href="temple.php">Dhakeswari Temple</a></li>
                        <li><a href="zinda.php">Zinda Park</a></li>
                        <li><a href="karzon.php">Karzon Hall</a></li>
                        <li><a href="nandan.php">Nandan Park</a></li>
                        
                       
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
            <h2>Lalbagh Fort</h2>
            <a href="lalbag.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Ahsan Manzil</h2>
            <a href="ahsan.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>National Memorial</h2>
           <a href="sohid.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Hatirjheel</h2>
            <a href="hatirjheel.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Panam Nagar</h2>
            <a href="panam.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Botanical Garden</h2>
            <a href="botanic.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>National Zoo</h2>
            <a href="zoo.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box8 box">
            <div class="safari child"></div>
            <div class="h2a">
            <h2>Bangabandhu Sheikh Mujib Safari Park</h2>
            <a href="safari.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box9 box">
            <div class="meseum child"></div>
            <div class="h2a">
            <h2>National Museum</h2>
            <a href="mesuem.php">Explore Your Tour</a>
    </div>
        </div>


        <div class="box10 box">
            <div class="bhawal child"></div>
            <div class="h2a">
            <h2>Bhawal National Park</h2>
            <a href="bhawal.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box11 box">
            <div class="taj child"></div>
            <div class="h2a">
            <h2>Taj Mahal Bangladesh</h2>
           <a href="taj.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box12 box">
            <div class="nobo child"></div>
            <div class="h2a">
            <h2>Novotheater</h2>
            <a href="nobo.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box13 box">
            <div class="suhrawardy child"></div>
            <div class="h2a">
            <h2>Suhrawardy Udyan</h2>
            <a href="suhrawardy.php">Explore Your Tour</a>
    </div>
        </div>


        <div class="box14 box">
            <div class="chandrima child"></div>
            <div class="h2a">
            <h2>Chandrima Udyan</h2>
            <a href="chandrima.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box15 box">
            <div class="ramna child"></div>
            <div class="h2a">
            <h2>Ramana Park </h2>
            <a href="ramana.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box16 box">
            <div class="air child"></div>
            <div class="h2a">
            <h2>Bangladesh Air Force Museum</h2>
            <a href="air.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box17 box">
            <div class="mahera child"></div>
            <div class="h2a">
            <h2>Mahera Zamindar House</h2>
            <a href="mahera.php">Explore Your Tour</a>
    </div>
        </div>


        <div class="box18 box">
            <div class="jamuna child"></div>
            <div class="h2a">
            <h2>Jamuna Resort</h2>
            <a href="jamuna.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box19 box">
            <div class="dhakeswari child"></div>
            <div class="h2a">
            <h2>Dhakeswari Temple</h2>
           <a href="temple.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box20 box">
            <div class="zinda child"></div>
            <div class="h2a">
            <h2>Zinda Park</h2>
            <a href="zinda.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box21 box">
            <div class="karzon child"></div>
            <div class="h2a">
            <h2>Karzon Hall</h2>
            <a href="karzon.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box22 box">
            <div class="nandan child"></div>
            <div class="h2a">
            <h2>Nandan Park</h2>
            <a href="nandan.php">Explore Your Tour</a>
        </div>
        </div>
     </div>
     </div>
    </div>
    

</body>
</html>