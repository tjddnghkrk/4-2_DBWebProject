<?php
session_start();
$con = mysqli_connect('localhost','shop','7941','shop'); //DB연결

		$query="SELECT * FROM product";
	   $hey= mysqli_query($con , $query);


			while($result=mysqli_fetch_array($hey)){


			$no=$result['no'];
			$name=$result['name'];
			$price=$result['price'];
			$comment=$result['comment'];
			$img=$result['img'];

			echo "

					<h3>$name</h3>
					<img src='img/$img' height='180' width='180'>
					<h4>Price: $price</h4>
					<br><a>$comment</a>";?>

					<body>
					<br>
					<form class="" action="basket.php" method="post">
					<select class="" name="count">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<input type="hidden" name="name" value="<?=$name?>">
					<input type="hidden" name="no" value="<?=$no?>">
					<input type="hidden" name="price" value="<?=$price?>">
					<input type="submit" name="submit" value="Add to cart">

				</form>

			</body>
<?php
				;}?>
