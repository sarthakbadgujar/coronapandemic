<style type="text/css">


html{
	scroll-behavior: smooth;
}


*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Oswald', sans-serif;}

.row{ margin-left: 0!important; margin-right: 0!important; }

.nav_style{
	background-color: #a29bfe !important;
}

.nav_style a{
	color: white;
}

.thead{
	background: red;
}

.sticky th{
	position: sticky;
	top: 0;
}


/***************main header *******************
*/

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.corona_rotate img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0);}

	100% { transform: rotate(360deg); }
}


/*****************corona update****************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }

/*****************about section****************/

.sub_section{
	background-color: #fbfafd;
}

.footer_style{
	background-color: #7D586D !important ;
}

.footer_style p{
	margin-bottom: 0 !important;
}

#myBtn{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: red;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 40px;
}

#myBtn:hover {
  background-color: #7D586D;
}


@media(max-width: 768px)
{
	.main_header{
		height: 600px;
		text-align: center;
	}

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 35px;
	}

	.count_style{
		display: inline !important;
		text-align: center;
		margin-top: 20px;
	}

	.about_res{
		margin-left: 0 !important;
	}



}

</style>
