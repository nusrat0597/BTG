<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="khulna.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>


<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="khulna.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Khulna</h1>
            <h3>The Khulna Division is the second largest of the eight divisions of Bangladesh. It has an area of 22,285 km2 (8,604 sq mi) and a population of 17,416,645 at the 2022 Bangladesh census (preliminary returns). Its headquarters and largest city is Khulna city in Khulna District.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">    
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                    
                 
                    <li><a href="ksundar.php"> Sundarban</a></li>
                    <li><a href="kshath.php">Shath Gombuj Mosque (Bagerhat)</a></li>
                    <li><a href="kfakir.php">Fakir Lalon Shah Mazar (Kushtia)</a></li>
                    <li><a href="krabin.php">Rabindranath Tagore's Shilaida Kuthirbari (Kushtia)</a></li>
                    <li><a href="kmujib.php">Mujibnagar Memorial (Meherpur)</a></li>
                    <li><a href="knine.php">Nine Dome Mosque (Bagerhat)</a></li>
                    <li><a href="kport.php">Mangla Port (Khulna)</a></li>
                        
                       
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
           
            <h2> Sundarban</h2>
            <a href="ksundar.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Shath Gombuj Mosque (Bagerhat)</h2>
            <a href="kshath.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Fakir Lalon Shah Mazar (Kushtia)</h2>
           <a href="kfakir.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Rabindranath Tagore's Shilaida Kuthirbari (Kushtia)</h2>
            <a href="krabin.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Mujibnagar Memorial (Meherpur)</h2>
            <a href="kmujib.php">Explore Your Tour</a>
            </div>
        </div>


        <div class="box6 box">
            <div class="botanical child"></div>
            <div class="h2a">
            <h2>Nine Dome Mosque (Bagerhat)</h2>
            <a href="knine.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box7 box">
            <div class="zoo child"></div>
            <div class="h2a">
            <h2>Mangla Port (Khulna)</h2>
            <a href="kport.php">Explore Your Tour</a>
        </div>
        </div>


        
     </div>
    </div>
    </div>



</body>
</html>
