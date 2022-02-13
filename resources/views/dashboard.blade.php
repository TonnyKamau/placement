<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>KHSSSPB | Student Portal</title>
    <link rel="stylesheet" href="collapse.css">
    <!--j-qerry for dropdown -->
    <script src='jquery-3.2.1.min.js' type='text/javascript'></script>
    <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
    <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Student Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/dashboard">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/user/profile">Profile </a>
            <a class="nav-item nav-link" href="/logout">LogOut </a>

          </div>
        </div>
      </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Always aim <span>HIGHER</span> <br>the <span>Sky</span> is the Limit</h1>
        <a href="#" class="btn btn-info btn-lg tombol">Truelly Kenyan</a>
      </div>
    </div>



    <!-- container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="img/employee.png" alt="Employee" class="img-fluid float-left">
              <h4>Choosen</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="img/hires.png" alt="HiRes" class="img-fluid float-left">
              <h4>School</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg">
              <img src="img/security.png" alt="Security" class="img-fluid float-left">
              <h4>Category</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </div>



      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-4">
          <img src="img/workingspace.svg" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-8">
          <h2><span>Messaging!</span></span></h2>
          <p>Send message to KUCCPS or Your head teacher.</p>
          <form method="POST" class="row g-3"  action="{{ route('sendMessage') }}">
            @csrf
            <br>
            <div class="col-md-4">
          <select class="form-control" name="target">
            <option>Choose</option>
            <option>HeadTeacher</option>
            <option>KUCCPS</option>
          </select></div>
          <div class="col-md-8">
            <input type="text" class="form-control" name="name" placeholder="Enter School ID ONLY if sending to Head teacher " >
          </div>
          <br><br>
          <div class="col-md-12">
            <textarea  class="form-control" name="txt" placeholder="Type in your message " required >
            </textarea>
          </div>
          <br><br>
          <div class="col-md-12">
          <input type="submit" class="btn btn-success" value="Send SMS" >
          </div>
          </form>
        </div>
      </div>
      <div class="selectSchool">
        <h3>List of schools will be here </h3>
      </div>

      <button class="collapsible">Choose Your Dream School!</button>
      <div class="content">
<form method="POST" class="row g-3"  action="/schoolselection">
          @csrf
          <br>
    <div class="col-md-12">
      <label>National Schools</label> </div>
      <div class="col-md-6">
        <select id='selUser' name="national1" style='width: 100%;'>
          <option >-- Select 1st National --</option>
          @foreach($national as $n)
          <option value='{{$n->secondary_code}}'>{{$n->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>
      <div class="col-md-6">
        <select id='selUser' name="national2"style='width: 100%;'>
          <option>-- Select 2nd National --</option>
          @foreach($national as $n)
          <option value='{{$n->secondary_code}}'>{{$n->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>
      <div class="col-md-6">
        <select id='selUser' name="national3" style='width: 100%;'>
          <option>-- Select 3rd National --</option>
          @foreach($national as $n)
          <option value='{{$n->secondary_code}}'>{{$n->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>
      <div class="col-md-6">
        <select id='selUser' name="national4" style='width: 100%;'>
          <option>-- Select 4th National --</option>
          @foreach($national as $n)
          <option value='{{$n->secondary_code}}'>{{$n->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>

         <!--Extra county-->
          <div class="col-md-12">
          <label>Extra County</label> </div>
          <div class="col-md-6">
            <select id='selUser' name="exCounty1" style='width: 100%;'>
              <option>-- Select 1st Extra-County --</option>
              @foreach($exCounty as $exC)
              <option value='{{$exC->secondary_code}}'>{{$exC->secondary_name}}</option>
               @endforeach
          </select> </div>
          <br><br>
          <div class="col-md-6">
            <select id='selUser' name="exCounty2" style='width: 100%;'>
              <option>-- Select 2nd Extra-County --</option>
              @foreach($exCounty as $exC)
              <option value='{{$exC->secondary_code}}'>{{$exC->secondary_name}}</option>
               @endforeach
          </select> </div>
          <br><br>
    <div class="col-md-12">
    <label>County Schools</label> </div>
    <div class="col-md-6">
      <select id='selUser' name="county1" style='width: 100%;'>
        <option> Select 1st County School</option>
        @foreach($county as $c)
        <option value='{{$c->secondary_code}}'>{{$c->secondary_name}}</option>
         @endforeach
    </select> </div>
    <br><br>
    <div class="col-md-6">
      <select id='selUser' name="county2" style='width: 100%;'>
        <option>Select 2nd County School</option>
        @foreach($county as $c)
        <option value='{{$c->secondary_code}}'>{{$c->secondary_name}}</option>
         @endforeach
    </select> </div>
    <br><br>
    <div class="col-md-12">
      <label>District Schools</label> </div>
      <div class="col-md-6">
        <select id='selUser' name="district1" style='width: 100%;'>
          <option>-- Select 1st District --</option>
          @foreach($district as $d)
          <option value='{{$d->secondary_code}}'>{{$d->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>
      <div class="col-md-6">
        <select id='selUser' name="district2" style='width: 100%;'>
          <option>-- Select 2nd District --</option>
          @foreach($district as $d)
          <option value='{{$d->secondary_code}}'>{{$d->secondary_name}}</option>
           @endforeach
      </select> </div>
      <br><br>

        <div class="col-md-12">
        <input type="submit" class="btn btn-success" value="Register Schools" >
        </div><br><br>
  </form>
      </div>

      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">

          </div>
        </div>

        <div class="row justify-content-center info-text">

        </div>
      </section>



    </div>





    <script>


          // Initialize select2
          $("#selUser").select2();


      </script>
    <!--Collapse js-->
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight){
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }
      </script>

      <!--End of Collapse js-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
