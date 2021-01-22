<!DOCTYPE html>
<html>
<head>
	<title>COG-ALBUM</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/luck.css')}}">
</head>
<body>
<div class="fullalbum">
	<table>
	<tr>
     	<th>Number</th>
     	<th>Item Name</th>
     	<th>Date Released</th>
     	<th>Youtube Link</th>

     </tr>
	@foreach($allsongs as $song)
     <tr>
     	<td>{{$song['id']}}</td>
     	<td>{{$song['album_name']}}</td>
     	<td>{{$song['date_released']}}</td>
     	<td><a href="{{$song['youtube_link']}}">{{$song['youtube_link']}}</a></td>
     </tr>
	@endforeach
</table>
     <a href="{{url('Home')}}"><button type="submit">Home</button></a>
</div>

<nav class="home-nav" style="background-color: black; color:white; margin-top: 10px">
     <div class="nav_div">
          <ul>
               <li><h3>MY CONTACTS</h3></li>
               <li>Phone Number: 0728421933</li>
               <li>Hook me up on FB</li>
               <li>Get me on Twitter:</li>
               <li>Whatsapp me via:0728421933</li>
               <li><a href="mailto: kimatizyler@gmail.com">Email Me</a></li>
          </ul>
     </div>

     <div class="nav_div">
          <ul>
               <li><h3>SELL ON THIS WEBSITE</h3></li>
               <li>Market Your business/Organization</li>
               <li>Market Your product</li>
               <li>Market Your talent</li>   
          </ul>

     </div>

     <div class="nav_div">
          <ul>
               <li><h3>LOCATION</h3></li>
               <li>Kitale, Tranzoia County</li>
               <li>P.O. BOX 0000</li>
               <li>Tranzoia</li>
          </ul>
     </div>
               <footer>
     <p style="padding-top: 2px; text-align:center; color:aqua"><small><i>Copyright &copy; 2021 yourartist-COG</i></small></p>
</footer>
</nav>

</body>
</html>