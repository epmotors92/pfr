document.getElementById("PFRnav").innerHTML =	
	'<nav class="navbar navbar-default">'+
        '<div class="container-fluid">'+
          '<div class="navbar-header">'+
            '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">'+
              '<span class="sr-only">Toggle navigation</span>'+
              '<span class="icon-bar"></span>'+
              '<span class="icon-bar"></span>'+
              '<span class="icon-bar"></span>'+
            '</button>'+
            '<a class="navbar-brand" href="https://pittsfamilyracing.000webhostapp.com/">PFR</a>'+
          '</div>'+
          '<div class="navbar-collapse collapse">'+
            '<ul class="nav navbar-nav">'+
              '<li class="active"><a href="https://pittsfamilyracing.000webhostapp.com/">Home</a></li>'+
              '<li><a href="contact.html">Contact</a></li>'+
	      '<li class="dropdown">'+
                '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cup Series <span class="caret"></span></a>'+
                '<ul class="dropdown-menu">'+
                  '<li><a href="CupPlayoffs.html">Playoff Standings</a></li>'+
                  '<li><a href="#">Race Results</a></li>'+
                  '<li><a href="CupPicksForm.html">Picks Form</a></li>'+
                '</ul>'+
              '</li>'+
              '<li class="dropdown">'+
                '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xfinity Series <span class="caret"></span></a>'+
                '<ul class="dropdown-menu">'+
                   '<li><a href="XfinityPlayoffs.html">Playoff Standings</a></li>'+
                   '<li><a href="#">Race Results</a></li>'+
		   '<li><a href="XfinityPicksForm.html">Picks Form</a></li>'+
                '</ul>'+
              '</li>'+
              '<li class="dropdown">'+
                '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Truck Series <span class="caret"></span></a>'+
                '<ul class="dropdown-menu">'+
                   '<li><a href="TruckPlayoffs.html">Playoff Standings</a></li>'+
                   '<li><a href="#">Race Results</a></li>'+
		   '<li><a href="TruckPicksForm.html">Picks Form</a></li>'+
                '</ul>'+
              '</li>'+
            '</ul>'+
          '</div><!--/.nav-collapse -->'+
        '</div>'+
      '</nav>'