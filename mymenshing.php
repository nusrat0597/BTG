<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-Your">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

		<link rel="stylesheet" type="text/css" href="mymenshing2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpdYouryknf1YoNbCzqRKc4qyorYourgaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>

<div class="f1">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="mymenshing.php">Tour</a></li>
        <li><a href="googlemap.php">Map</a></li>
        <li><a href="guide.php">Tour Guide</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
</div>

    <div class="dhaka">

        <div class="name">
            <h1>Mymenshing</h1>
            <h3>Mymensingh Division is one of the eight administrative divisions of Bangladesh. It has an area of 10,485 square kilometres (4,048 sq mi) and a population of 12,225,498 as of the 2022 census. It was formed in 2015 from districts previously composing the northern part of Dhaka Division. Its headquarters are in Mymensingh city in Mymensingh District.</h3>
        </div>


         <div class="bar">

            
        	<div class="search-cty">
                <p>Search Places<p>
            </div>

        <div class="search">

        <div class="search-bar">    
        <input type="text" id="search-bar" placeholder="Search your destination....." name="search-bar" onkeyup="hi()">

                 <div class="autocom-box" id="autocom-box">
                        
                 

                    <li><a href="mmadhu.php">Madhutila Ecopark (Sherpur)</a></li>
                    <li><a href="mbiri.php">Bhirishiri (Netrokona)</a></li>
                    <li><a href="mmukta.php">Muktagacha Rajbari (Mymensingh)</a></li>
                    <li><a href="mgaro.php">Garo Pahar (Gopalpur)</a></li>
                    <li><a href="mkadi.php">Kadighor National Park (Mymensingh)</a></li>
                        
                       
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
            
            <h2>Madhutila Ecopark (Sherpur)</h2>
            <a href="mmadhu.php">Explore Your Tour</a>
        </div>
            
         </div>


        <div class="box2 box">
            <div class="ahsan child">
           </div>
           <div class="h2a">
            <h2>Bhirishiri (Netrokona)</h2>
            <a href="mbiri.php">Explore Your Tour</a>
        </div>
        </div>
    
    
        <div class="box3 box">
            <div class="sohid child"></div>
            <div class="h2a">
            <h2>Muktagacha Rajbari (Mymensingh)</h2>
           <a href="mmukta.php">Explore Your Tour</a>
        </div>
        </div>

        <div class="box4 box">
            <div class="hatirjheel child">
           </div>
           <div class="h2a">
            <h2>Garo Pahar (Gopalpur)</h2>
            <a href="mgaro.php">Explore Your Tour</a>
        </div>
        </div>


        <div class="box5 box">
            <div class="panam child"></div>
            <div class="h2a">
            <h2>Kadighor National Park (Mymensingh)</h2>
            <a href="mkadi.php">Explore Your Tour</a>
            </div>
        </div>
    </div>
    </div>

        
     </div>


</body>
</html>