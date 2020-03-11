	<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		div{
			background-color: rgb(64, 212, 212);
		}
		ul{
			display: flex;
			justify-content: center;
			
		}
		li{
			padding: 20px 20px;
			list-style-type: none;
			text-decoration: underline;	

		}
		li:hover{
			background-color: red;
			transition: 0.2s all;
		}
		
		@media (max-width: 786px){
			ul{
				text-align: center;
				flex-direction: column;
				height: 300px;
			}
		}
	</style>
</head>
<body>
<div>
	<ul>
		<li>home</li>
		<li>register</li>
		<li>log in</li>
		<li>gallery</li>
		<li>profile</li>
	</ul>
</div>
</body>
</html>