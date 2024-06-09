<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="rajshah.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="rajshahi.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Rajshahi</h1>
            <h3>Rajshahi Division is one of the eight first-level administrative divisions of Bangladesh. It has an area of 18,174.4 square kilometres (7,017.2 sq mi)^3 and a population at the 2022 Census of 20,353,119.^4 Rajshahi Division consists of 8 districts, 70 Upazilas (the next lower administrative tier) and 1,092 Unions (the lowest administrative tier).</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">  
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                 


                    <li><a href="rjmahasthan.php">Mahasthangarh</a></li>
                    <li><a href="rjputhia.php">Puthia Rajbari</a></li>
                    <li><a href="rjbridge.php">Hardinge Bridge</a></li>
                    <li><a href="rjnatore.php">Natore palace</a></li>
                    <li><a href="rjpaharpur.php">Paharpur Buddhist Monastery</a></li>
                    <li><a href="rjbasor.php">Behular Bashor Ghor</a></li>
                    <li><a href="rjchota.php">Chota Sona Mosque (Chapainawabganj)</a></li>
                    <li><a href="rjbagha.php">Bagha Mosque (Rajshahi)</a></li>
                    <li><a href="rjkherua.php">Kherua Mosque (Bogra)</a></li>
                    <li><a href="rjgono.php">Uttara Ganabhavan (Natore)</a></li>
                    <li><a href="rjeco.php">Jamuna Ecopark (Sirajganj)</a></li>
                    <li><a href="rjpakshi.php">Pakshi Resort (Ishwardi)</a></li>
                    <li><a href="rjrabin.php">Rabindra Kachari House (Sirajganj)</a></li>
                        
                       
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
            <h2>Mahasthangarh</h2>
            <a href="rjmahasthan.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Puthia Rajbari</h2>
            <a href="rjputhia.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Hardinge Bridge</h2>
           <a href="rjbridge.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Natore palace</h2>
            <a href="rjnatore.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Paharpur Buddhist Monastery</h2>
            <a href="rjpaharpur.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Behular Bashor Ghor</h2>
            <a href="rjbasor.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Chota Sona Mosque (Chapainawabganj)</h2>
            <a href="rjchota.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box8 box">
            <div class="safari child"></div>
            <div class="h2a">
            <h2>Bagha Mosque (Rajshahi)</h2>
            <a href="rjbagha.php">Explore Your Tour</a>
        </div>
        </div>

        
        <div class="box9 box">
            <div class="meseum child"></div>
            <div class="h2a">
            <h2>Kherua Mosque (Bogra)</h2>
            <a href="rjkherua.php">Explore Your Tour </a>
    </div>
        </div>


        <div class="box10 box">
            <div class="bhawal child"></div>
            <div class="h2a">
            <h2>Uttara Ganabhavan (Natore)</h2>
            <a href="rjgono.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box11 box">
            <div class="taj child"></div>
            <div class="h2a">
            <h2>Jamuna Ecopark (Sirajganj)</h2>
           <a href="rjeco.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box12 box">
            <div class="nobo child"></div>
            <div class="h2a">
            <h2>Pakshi Resort (Ishwardi)</h2>
            <a href="rjpakshi.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box13 box">
            <div class="suhrawardy child"></div>
            <div class="h2a">
            <h2>Rabindra Kachari House (Sirajganj)</h2>
            <a href="rjrabin.php">Explore Your Tour</a>
    </div>
        </div>

    </div>
        
     </div>

    </div>
</body>
</html>