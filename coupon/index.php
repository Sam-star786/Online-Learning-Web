<?php
require_once('../backend/conn.php');
session_start();
if(!isset($_SESSION['id'])){
  header("location:../login/index.php");
}
$sql = "SELECT * FROM coupon WHERE user_key = {$_SESSION['id']}";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               $coupon = $row['coupon'];
              }
            } else {
              echo "Error";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gift</title>
</head>
<body>
<div class="container">
	<div class="image">
		<h1>Here is your coupon code: <?php echo $coupon?></h1>
        <p>This gift is from admin for you</p>
	</div>
</div>
<div class="present">	
	<div class="rotate-container">
		<div class="bottom"></div>
		<div class="front"></div>
		<div class="left"></div>
		<div class="back"></div>
		<div class="right"></div>
		
		<div class="lid">
			<div class="lid-top"></div>
			<div class="lid-front"></div>
			<div class="lid-left"></div>
			<div class="lid-back"></div>
			<div class="lid-right"></div>
		</div>
	</div>
	
	<div class="instruction">
		Click to open!
	</div>
</div>
<script>
    const present = document.querySelector('.present');
const image = document.querySelector('.image');
const container = document.querySelector('.container');

//Setup canvas, drawing functions   

const colors = ['#D8589F', '#EE4523', '#FBE75D', '#4FC5DF'];
const bubbles = 80;

const explode = (x, y) => {

  let particles = [];
  let ratio = window.devicePixelRatio;
  let c = document.createElement('canvas');
  let ctx = c.getContext('2d');

  c.style.position = 'absolute';
  c.style.left = x - 100 + 'px';
  c.style.top = y - 50 + 'px';
  c.style.pointerEvents = 'none';
  c.style.width = 500 + 'px';
  c.style.height = 500 + 'px';
  c.style.zIndex = 9999;
  c.width = 500 * ratio;
  c.height = 500 * ratio;
  document.body.appendChild(c);

  for (var i = 0; i < bubbles; i++) {
    particles.push({
      x: c.width / 2,
      y: c.height / r(2, 4),
      radius: r(3, 8),
      color: colors[Math.floor(Math.random() * colors.length)],
      rotation: r(230, 310, true),
      speed: r(3, 7),
      friction: .99,
      fade: .03,
      opacity: r(150, 150, true),
      yVel: 0,
      gravity: 0.06 });

  }

  render(particles, ctx, c.width, c.height);
  setTimeout(() => document.body.removeChild(c), 5000);
};

const render = (particles, ctx, width, height) => {
  requestAnimationFrame(() => render(particles, ctx, width, height));
  ctx.clearRect(0, 0, width, height);

  particles.forEach((p, i) => {
    p.x += p.speed * Math.cos(p.rotation * Math.PI / 180);
    p.y += p.speed * Math.sin(p.rotation * Math.PI / 180);

    p.opacity -= 0.005;
    p.speed *= p.friction;
    p.radius -= p.fade;
    p.yVel += p.gravity;
    p.y += p.yVel;

    if (p.opacity < 0 || p.radius < 0) return;

    ctx.beginPath();
    ctx.globalAlpha = p.opacity;
    ctx.fillStyle = p.color;
    ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, false);
    ctx.fill();
  });

  return ctx;
};

const r = (a, b, c) => parseFloat((Math.random() * ((a ? a : 1) - (b ? b : 0)) + (b ? b : 0)).toFixed(c ? c : 0));



image.addEventListener('mouseover', e => {
  x = image.offsetLeft + 800;
  y = image.offsetTop - 120;
  explode(x, y);
});

const onClickExplode = () => {
  const x = image.offsetLeft + 800;
  const y = image.offsetTop - 120;
  explode(x, y);
};

container.onClick = () => {
  container.classList.toggle('image-zoomed');
};

present.onclick = () => {
  present.classList.toggle('open');
  container.classList.toggle('container-open');
  onClickExplode();
};
</script>
</body>
</html>
