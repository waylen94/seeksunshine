<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animation</title>
	<style>
		html{height: 100%}
		body{padding:0px;margin:0px;background-color: #F6F6F6;height: 100%;overflow-x: hidden;overflow: hidden;}
		#cas{position: absolute;top:0px;left: 0px;}
		.contain{
			position: absolute;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
		}
	</style>
	<script src="logic.js"></script>
</head>
<body>
	<div class="contain">
		<canvas id="cas">抱歉，您的浏览器不支持canvas</canvas>
	</div>

	<script>
		var canvas = document.getElementById("cas"),
			ctx = canvas.getContext("2d");
		canvas.width = window.innerWidth;
		canvas.height = window.innerHeight;
		var RAF =  (function(){
			return requestAnimationFrame || webkitRequestAnimationFrame || mozRequestAnimationFrame || oRequestAnimationFrame || msRequestAnimationFrame || function (callback) {setTimeout(callback, 1000 / 60); };
		})();
		var stage = {
			init:function(){
				animate.init();
			},
			loop:function(){
				var _this = this;
				ctx.clearRect(0,0,canvas.width,canvas.height);
				animate.update(16);
				RAF(function(){
					_this.loop();
				})
			}
		};
		stage.init();
		stage.loop();
	</script>
</body>
</html>